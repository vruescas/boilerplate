#
# Table structure for table 'tt_content'
#
CREATE TABLE tt_content (
    irre_team tinytext
);

CREATE TABLE tx_boilerplate_domain_model_ce_team (
    name varchar(255) DEFAULT '' NOT NULL,
    members varchar(255) DEFAULT '' NOT NULL,

    t3ver_label varchar(255) DEFAULT '' NOT NULL,

    tablename varchar(255) DEFAULT '' NOT NULL,
    foreign_uid int(11) DEFAULT 0 NOT NULL,
    fieldname varchar(255) DEFAULT '' NOT NULL,
);

CREATE TABLE tx_boilerplate_domain_model_ce_teammember (
    member_name varchar(255) DEFAULT '' NOT NULL,
    member_short_info TEXT,
    member_description TEXT,
    member_image INT(11) DEFAULT 0 NOT NULL,

    t3ver_label varchar(255) DEFAULT '' NOT NULL,

    tablename varchar(255) DEFAULT '' NOT NULL,
    foreign_uid int(11) DEFAULT 0 NOT NULL,
    fieldname varchar(255) DEFAULT '' NOT NULL,
);
