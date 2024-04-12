CREATE TABLE tt_content
(
    link                    varchar(1024) DEFAULT '' NOT NULL,
    link_text               varchar(255)  DEFAULT '' NOT NULL,

    header_style            varchar(255)  DEFAULT '' NOT NULL,

    skills                  int(11) unsigned DEFAULT '0' NOT NULL,
    show_progress_level     smallint(5) unsigned DEFAULT '0' NOT NULL,

    resume_items            int(11) unsigned DEFAULT '0' NOT NULL,
    additional_header       varchar(255)  DEFAULT '' NOT NULL,
    additional_resume_items int(11) unsigned DEFAULT '0' NOT NULL,
);

CREATE TABLE tx_portfolio_skill
(
    uid              int(11) NOT NULL auto_increment,
    pid              int(11) DEFAULT '0' NOT NULL,
    tstamp           int(11) DEFAULT '0' NOT NULL,
    crdate           int(11) DEFAULT '0' NOT NULL,
    cruser_id        int(11) DEFAULT '0' NOT NULL,
    sys_language_uid int(11) DEFAULT '0' NOT NULL,
    l10n_parent      int(11) DEFAULT '0' NOT NULL,
    l10n_diffsource  mediumtext,
    l10n_source      int(11) DEFAULT '0' NOT NULL,
    sorting          int(10) DEFAULT '0' NOT NULL,
    deleted          tinyint(4) DEFAULT '0' NOT NULL,
    hidden           tinyint(4) DEFAULT '0' NOT NULL,
    parent           int(11) DEFAULT '0' NOT NULL,

    name             varchar(255) DEFAULT ''  NOT NULL,
    progress_level   INT          DEFAULT '0' NOT NULL,

    PRIMARY KEY (uid),
    KEY              parent (pid),
    KEY language (l10n_parent,sys_language_uid)
);

CREATE TABLE tx_portfolio_resume_item
(
    uid                int(11) NOT NULL auto_increment,
    pid                int(11) DEFAULT '0' NOT NULL,
    tstamp             int(11) DEFAULT '0' NOT NULL,
    crdate             int(11) DEFAULT '0' NOT NULL,
    cruser_id          int(11) DEFAULT '0' NOT NULL,
    sys_language_uid   int(11) DEFAULT '0' NOT NULL,
    l10n_parent        int(11) DEFAULT '0' NOT NULL,
    l10n_diffsource    mediumtext,
    l10n_source        int(11) DEFAULT '0' NOT NULL,
    sorting            int(10) DEFAULT '0' NOT NULL,
    deleted            tinyint(4) DEFAULT '0' NOT NULL,
    hidden             tinyint(4) DEFAULT '0' NOT NULL,
    parent             int(11) DEFAULT '0' NOT NULL,

    position           varchar(255) DEFAULT '' NOT NULL,
    description        text,
    time_period        varchar(255) DEFAULT '' NOT NULL,
    institution        varchar(255) DEFAULT '' NOT NULL,
    location           varchar(255) DEFAULT '' NOT NULL,
    is_additional_item smallint(5) unsigned DEFAULT '0' NOT NULL,

    PRIMARY KEY (uid),
    KEY                parent (pid),
    KEY language (l10n_parent,sys_language_uid)
);

CREATE TABLE tx_portfolio_service
(
    uid              int(11) NOT NULL auto_increment,
    pid              int(11) DEFAULT '0' NOT NULL,
    tstamp           int(11) DEFAULT '0' NOT NULL,
    crdate           int(11) DEFAULT '0' NOT NULL,
    cruser_id        int(11) DEFAULT '0' NOT NULL,
    sys_language_uid int(11) DEFAULT '0' NOT NULL,
    l10n_parent      int(11) DEFAULT '0' NOT NULL,
    l10n_diffsource  mediumtext,
    l10n_source      int(11) DEFAULT '0' NOT NULL,
    sorting          int(10) DEFAULT '0' NOT NULL,
    deleted          tinyint(4) DEFAULT '0' NOT NULL,
    hidden           tinyint(4) DEFAULT '0' NOT NULL,
    parent           int(11) DEFAULT '0' NOT NULL,

    name             varchar(255) DEFAULT '' NOT NULL,
    description      text,

    PRIMARY KEY (uid),
    KEY              parent (pid),
    KEY language (l10n_parent,sys_language_uid)
);

CREATE TABLE tx_portfolio_client_logo
(
    uid              int(11) NOT NULL auto_increment,
    pid              int(11) DEFAULT '0' NOT NULL,
    tstamp           int(11) DEFAULT '0' NOT NULL,
    crdate           int(11) DEFAULT '0' NOT NULL,
    cruser_id        int(11) DEFAULT '0' NOT NULL,
    sys_language_uid int(11) DEFAULT '0' NOT NULL,
    l10n_parent      int(11) DEFAULT '0' NOT NULL,
    l10n_diffsource  mediumtext,
    l10n_source      int(11) DEFAULT '0' NOT NULL,
    sorting          int(10) DEFAULT '0' NOT NULL,
    deleted          tinyint(4) DEFAULT '0' NOT NULL,
    hidden           tinyint(4) DEFAULT '0' NOT NULL,
    parent           int(11) DEFAULT '0' NOT NULL,

    name             varchar(255) DEFAULT '' NOT NULL,
    image            INT(11) UNSIGNED DEFAULT '0' NOT NULL,

    PRIMARY KEY (uid),
    KEY              parent (pid),
    KEY language (l10n_parent,sys_language_uid)
);

CREATE TABLE tx_portfolio_domain_model_project
(
    uid              int(11) NOT NULL auto_increment,
    pid              int(11) DEFAULT '0' NOT NULL,
    tstamp           int(11) DEFAULT '0' NOT NULL,
    crdate           int(11) DEFAULT '0' NOT NULL,
    cruser_id        int(11) DEFAULT '0' NOT NULL,
    sys_language_uid int(11) DEFAULT '0' NOT NULL,
    l10n_parent      int(11) DEFAULT '0' NOT NULL,
    l10n_diffsource  mediumtext,
    l10n_source      int(11) DEFAULT '0' NOT NULL,
    sorting          int(10) DEFAULT '0' NOT NULL,
    deleted          tinyint(4) DEFAULT '0' NOT NULL,
    hidden           tinyint(4) DEFAULT '0' NOT NULL,
    parent           int(11) DEFAULT '0' NOT NULL,

    title            varchar(255) DEFAULT '' NOT NULL,
    description      text,
    images           INT(11) UNSIGNED DEFAULT '0' NOT NULL,
    links            INT(11) UNSIGNED DEFAULT '0' NOT NULL,
    show_detail_page smallint(5) unsigned DEFAULT '0' NOT NULL,

    PRIMARY KEY (uid),
    KEY              parent (pid),
    KEY language (l10n_parent,sys_language_uid)
);

CREATE TABLE tx_portfolio_domain_model_link
(
    uid              int(11) NOT NULL auto_increment,
    pid              int(11) DEFAULT '0' NOT NULL,
    tstamp           int(11) DEFAULT '0' NOT NULL,
    crdate           int(11) DEFAULT '0' NOT NULL,
    cruser_id        int(11) DEFAULT '0' NOT NULL,
    sys_language_uid int(11) DEFAULT '0' NOT NULL,
    l10n_parent      int(11) DEFAULT '0' NOT NULL,
    l10n_diffsource  mediumtext,
    l10n_source      int(11) DEFAULT '0' NOT NULL,
    sorting          int(10) DEFAULT '0' NOT NULL,
    deleted          tinyint(4) DEFAULT '0' NOT NULL,
    hidden           tinyint(4) DEFAULT '0' NOT NULL,
    parent           int(11) DEFAULT '0' NOT NULL,

    name             varchar(255) DEFAULT '' NOT NULL,
    link             text,

    PRIMARY KEY (uid),
    KEY              parent (pid),
    KEY language (l10n_parent,sys_language_uid)
);
