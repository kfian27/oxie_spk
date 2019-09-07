/*==============================================================*/
/* DBMS name:      MySQL 5.0                                    */
/* Created on:     05-Sep-19 5:03:34 PM                         */
/*==============================================================*/


drop table if exists ASPEK;

drop table if exists GURU;

drop table if exists MURID;

drop table if exists NILAI;

drop table if exists SUB_ASPEK;

/*==============================================================*/
/* Table: ASPEK                                                 */
/*==============================================================*/
create table ASPEK
(
   ID_ASPEK             int not null,
   ASPEK                varchar(255),
   primary key (ID_ASPEK)
);

/*==============================================================*/
/* Table: GURU                                                  */
/*==============================================================*/
create table GURU
(
   ID_GURU              int not null,
   NAMA_GURU            varchar(255),
   PASS_GURU            varchar(20),
   primary key (ID_GURU)
);

/*==============================================================*/
/* Table: MURID                                                 */
/*==============================================================*/
create table MURID
(
   ID_MURID             int not null,
   ID_GURU              int,
   NIS                  varchar(10),
   NAMAL_MURID          varchar(255),
   NAMAP_MURID          varchar(50),
   JK                   varchar(8),
   TGL_LAHIR            date,
   AGAMA                varchar(20),
   ANAK                 varchar(2),
   KELOMPOK             varchar(2),
   NAMA_AYAH            varchar(255),
   NAMA_IBU             varchar(255),
   TINGGI_B             varchar(4),
   BERAT_B              varchar(4),
   ALAMAT               varchar(255),
   TLP                  numeric(14,0),
   TAHUN_MASUK          varchar(4),
   primary key (ID_MURID)
);

/*==============================================================*/
/* Table: NILAI                                                 */
/*==============================================================*/
create table NILAI
(
   ID_NILAI             int not null,
   ID_SUB               int,
   ID_MURID             int,
   ID_GURU              int,
   JAWABAN              varchar(255),
   NILAI                varchar(255),
   primary key (ID_NILAI)
);

/*==============================================================*/
/* Table: SUB_ASPEK                                             */
/*==============================================================*/
create table SUB_ASPEK
(
   ID_SUB               int not null,
   ID_ASPEK             int,
   SOAL                 varchar(255),
   primary key (ID_SUB)
);

alter table MURID add constraint FK_RELATIONSHIP_2 foreign key (ID_GURU)
      references GURU (ID_GURU) on delete restrict on update restrict;

alter table NILAI add constraint FK_RELATIONSHIP_1 foreign key (ID_MURID)
      references MURID (ID_MURID) on delete restrict on update restrict;

alter table NILAI add constraint FK_RELATIONSHIP_3 foreign key (ID_SUB)
      references SUB_ASPEK (ID_SUB) on delete restrict on update restrict;

alter table NILAI add constraint FK_RELATIONSHIP_5 foreign key (ID_GURU)
      references GURU (ID_GURU) on delete restrict on update restrict;

alter table SUB_ASPEK add constraint FK_RELATIONSHIP_4 foreign key (ID_ASPEK)
      references ASPEK (ID_ASPEK) on delete restrict on update restrict;

