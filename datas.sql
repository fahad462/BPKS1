
/// ngo
insert into ngo
(Govt_id,NGO_Name,NGO_type,No_of_sub_office,Establishment)
values
('001','BPKS','govt','20','12-10-1998');

// relation_office_ngo
insert into NGO_Office (Govt_id,Office_reg) values ('001','01');
insert into NGO_Office (Govt_id,Office_reg) values ('001','03');


/// office
insert into office
(Office_reg,No_of_employee,Office_address,Office_type)
values
('01','101','chapai','district-office')

insert into office
(Office_reg,No_of_employee,Office_address,Office_type)
values
('02','13','fulpur','upozila-office')

insert into office
(Office_reg,No_of_employee,Office_address,Office_type)
values
('03','344','dhaka','sub-office')

insert into office
(Office_reg,No_of_employee,property,Office_address,Office_type)
values
('03','54','3 farms','barishal','regional-office')

///person employee disable_people
insert into person(voter_id,birth_cer,name,sex,religion,marital_status,city,road,post_office,house_no)
values ('123','456','nur asif','male','islam','unmarried','chapai','12','chapai','99');

insert into disable_people (disability_id,disabilities,damaged_organ,birth_cer)
values ('5723','blind','eye','456');

insert into person(voter_id,birth_cer,name,sex,religion,marital_status,city,road,post_office,house_no)
values ('124','457','imtiaz','male','islam','unmarried','shatkhira','124','shatkhira','89');

insert into disable_people (disability_id,disabilities,damaged_organ,birth_cer)
values ('5723','lame','leg','457');

insert into person(voter_id,birth_cer,name,sex,religion,marital_status,city,road,post_office,house_no)
values ('125','458','maj arafat','male','islam','married','bbaria','1246','bbaria','896');

insert into disable_people (disability_id,disabilities,damaged_organ,birth_cer)
values ('5723','handless','hand','458');

insert into person(voter_id,birth_cer,name,sex,religion,marital_status,city,road,post_office,house_no)
values ('126','459','shanto','male','islam','unmarried','mymensingh','12446','mymensingh','06');

insert into disable_people (disability_id,disabilities,damaged_organ,birth_cer)
values ('5723','autism','brain','459');

insert into employee (employee_id,salaryy,joining_date,bank_acc_no,birth_cer)
values ('4564','200000',to_date('12-12-2018','dd-mm-yyyy'),'8474','459');

insert into person(voter_id,birth_cer,name,sex,religion,marital_status,city,road,post_office,house_no)
values ('127','460','shafin','female','islam','unmarried','gazipur','124446','gazipur','34');

insert into disable_people (disability_id,disabilities,damaged_organ,birth_cer)
values ('5723','deaf','ear','460');

insert into employee (employee_id,salaryy,joining_date,bank_acc_no,birth_cer)
values ('45664','200500',to_date('12-2-2018','dd-mm-yyyy'),'84754','460');

///family
insert into family (family_id, active_earning_person, father, mother, brothers_no, sisters_no, spouse)
values
('511','3','Md. Habib','Abida sultana','1','2','No');

insert into family (family_id, active_earning_person, father, mother, brothers_no, sisters_no, spouse)
values
('513','2','Md. abul','Ab Khatun','0','0','1');

insert into family (family_id, active_earning_person, father, mother, brothers_no, sisters_no, spouse)
values
('515','0','Khalil Khan','Umme Kulsum','3','2','2');

insert into family (family_id, active_earning_person, father, mother, brothers_no, sisters_no, spouse)
values
('517','4','Umair Abdullah','Umme Khanam','2','1','1');

///Person_family
insert into Person_family (birth_cer,family_id)
values
('4564', '511');
insert into Person_family (birth_cer,family_id)
values
('45664', '513');
insert into Person_family (birth_cer,family_id)
values
('5723', '515');

//Profession


///co-organization
insert into co_organization(Org_reg_no,Org_Name,Org_type,Org_address,Duration,Validty,Relation)
values
('011','Banglades bank','Govt bank','Gazipur','1 years','2 years','Financial');
insert into co_organization(Org_reg_no,Org_Name,Org_type,Org_address,Duration,Validty,Relation)
values
('012','ABC madical center','Comercial','Faridpur','2 years','1 years','Medical');
insert into co_organization(Org_reg_no,Org_Name,Org_type,Org_address,Duration,Validty,Relation)
values
('013','Alor school','Non-govt','Khulna','3 years','2 years','Education');

///relation office_org

insert into Office_Org(Office_reg,Org_reg_no) values ('01','011');
insert into Office_Org(Office_reg,Org_reg_no) values ('02','013');




