DEFINER=`root`@`localhost`

DROP PROCEDURE `executebilldet`;

CREATE PROCEDURE `executebilldet`(IN entityid MEDIUMINT, IN BSD VARCHAR(10), IN BED VARCHAR(10), IN VRNO MEDIUMINT)
BEGIN
	DECLARE instid MEDIUMINT;
	DECLARE prodinstid MEDIUMINT;
	DECLARE billgenid MEDIUMINT;
	DECLARE psd DATE;
	DECLARE ped DATE;	
	DECLARE bildate DATE;	
	DECLARE txndate DATE;		
	DECLARE txnamt DECIMAL(4,2);
	DECLARE taxamt DECIMAL(4,2);
	DECLARE txnbaseamt DECIMAL(4,2);
	DECLARE txper DECIMAL(4,2);
	DECLARE txnqty DECIMAL(4,2);	
	DECLARE exit_loop BOOLEAN;
	DECLARE tdesc VARCHAR(30) DEFAULT "";
		
	DECLARE billrun_data CURSOR for
	select e.ent_inst_id  , p.ent_prod_inst_id, b.bill_gen_id genid, 	
	greatest(p.ent_inst_st_dt,STR_TO_DATE(BSD,'%Y-%m-%d')) psd,
	least(p.ent_inst_ed_dt,STR_TO_DATE(BED,'%Y-%m-%d')) ped,
	STR_TO_DATE(BSD,'%Y-%m-%d') bildate,	
	pt.ent_prod_name tdesc,
	r.ent_amt,r.ent_tx_per	
	from ent_inst_tr e, ent_inst_prod_tr p, address_history_tr a, entity_prod_rule r,
	entity_prod pt, bill_gen b
	where e.ent_inst_id = p.ent_inst_id
	and e.entity_id = entityid
	and e.address_id = a.address_id
	and e.ent_ins_sts = '3'
	and p.ent_prod_ins_sts = '3'
	and e.ent_inst_st_dt <= STR_TO_DATE(BED,'%Y-%m-%d')
	and e.ent_inst_ed_dt >= STR_TO_DATE(BSD,'%Y-%m-%d')
	and p.ent_inst_st_dt <= STR_TO_DATE(BED,'%Y-%m-%d')
	and p.ent_inst_ed_dt >= STR_TO_DATE(BSD,'%Y-%m-%d')
	and p.ent_prod_id = r.ent_prod_id
	and e.entity_id = r.entity_id
	and p.ent_prod_id = pt.ent_prod_id
	and b.ent_inst_id = e.ent_inst_id
	and b.bill_dt = STR_TO_DATE(BSD,'%Y-%m-%d')
	and b.ent_vr_nr = VRNO;

	DECLARE CONTINUE HANDLER FOR NOT FOUND SET exit_loop = TRUE;	
	OPEN billrun_data;

	billrun_loop: LOOP
		FETCH billrun_data INTO instid,prodinstid,billgenid,psd,ped,bildate,tdesc,txnbaseamt,txper;
		
		INSERT INTO bill_gen_det (txn_id,ent_inst_id,ent_prod_inst_id, bill_gen_id,period_st_dt, period_ed_dt,
		txn_dt,tnx_desc,txn_amt,tax_amt,txn_base_amt,txn_qty)
		VALUES (NULL, instid,prodinstid, billgenid, bildate, psd,ped, tdesc, NULL, NULL, txnbaseamt, NULL); 

		IF exit_loop THEN
			CLOSE billrun_data;
			LEAVE billrun_loop;
		END IF;

	END LOOP billrun_loop;
	
END$$
