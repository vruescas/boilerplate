#
# Table structure for table 'tt_content'
#
CREATE TABLE tt_content (
  irre_team tinytext
);

#
# Table structure for table 'tx_boilerplate_domain_model_person'
#
CREATE TABLE tx_boilerplate_domain_model_person (
  name varchar(255) DEFAULT '' NOT NULL,

  tablename varchar(255) DEFAULT '' NOT NULL,
  foreign_uid int(11) DEFAULT 0 NOT NULL,
);
