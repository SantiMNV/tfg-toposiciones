BEGIN;
--
-- Change Meta options on article
--
--
-- Change Meta options on category
--
--
-- Add field other to article
--
CREATE TABLE "new__miapp_article" (
  "id" integer NOT NULL PRIMARY KEY AUTOINCREMENT,
  "other" varchar(120) NOT NULL,
  "title" varchar(100) NOT NULL,
  "content" text NOT NULL,
  "public" bool NOT NULL,
  "created_at" datetime NOT NULL,
  "updated_at" datetime NOT NULL,
  "image" varchar(100) NOT NULL
);
INSERT INTO "new__miapp_article" (
    "id",
    "title",
    "content",
    "public",
    "created_at",
    "updated_at",
    "image",
    "other"
  )
SELECT "id",
  "title",
  "content",
  "public",
  "created_at",
  "updated_at",
  "image",
  'Null'
FROM "miapp_article";
DROP TABLE "miapp_article";
ALTER TABLE "new__miapp_article"
  RENAME TO "miapp_article";
--
-- Alter field content on article
--
CREATE TABLE "new__miapp_article" (
  "id" integer NOT NULL PRIMARY KEY AUTOINCREMENT,
  "title" varchar(100) NOT NULL,
  "public" bool NOT NULL,
  "created_at" datetime NOT NULL,
  "updated_at" datetime NOT NULL,
  "image" varchar(100) NOT NULL,
  "other" vuarchar(120) NOT NULL,
  "content" text NOT NULL
);
INSERT INTO "new__miapp_article" (
    "id",
    "title",
    "public",
    "created_at",
    "updated_at",
    "image",
    "other",
    "content"
  )
SELECT "id",
  "title",
  "public",
  "created_at",
  "updated_at",
  "image",
  "other",
  "content"
FROM "miapp_article";
DROP TABLE "miapp_article";
ALTER TABLE "new__miapp_article"
  RENAME TO "miapp_article";
--
-- Alter field created_at on article
--
CREATE TABLE "new__miapp_article" (
  "id" integer NOT NULL PRIMARY KEY AUTOINCREMENT,
  "title" varchar(100) NOT NULL,
  "content" text NOT NULL,
  "public" bool NOT NULL,
  "updated_at" datetime NOT NULL,
  "image" varchar(100) NOT NULL,
  "other" varchar(120) NOT NULL,
  "created_at" datetime NOT NULL
);
INSERT INTO "new__miapp_article" (
    "id",
    "title",
    "content",
    "public",
    "updated_at",
    "image",
    "other",
    "created_at"
  )
SELECT "id",
  "title",
  "content",
  "public",
  "updated_at",
  "image",
  "other",
  "created_at"
FROM "miapp_article";
DROP TABLE "miapp_article";
ALTER TABLE "new__miapp_article"
  RENAME TO "miapp_article";
--
-- Alter field image on article
--
CREATE TABLE "new__miapp_article" (
  "id" integer NOT NULL PRIMARY KEY AUTOINCREMENT,
  "title" varchar(100) NOT NULL,
  "content" text NOT NULL,
  "public" bool NOT NULL,
  "created_at" datetime NOT NULL,
  "updated_at" datetime NOT NULL,
  "other" varchar(120) NOT NULL,
  "image" varchar(100) NOT NULL
);
INSERT INTO "new__miapp_article" (
    "id",
    "title",
    "content",
    "public",
    "created_at",
    "updated_at",
    "other",
    "image"
  )
SELECT "id",
  "title",
  "content",
  "public",
  "created_at",
  "updated_at",
  "other",
  "image"
FROM "miapp_article";
DROP TABLE "miapp_article";
ALTER TABLE "new__miapp_article"
  RENAME TO "miapp_article";
--
-- Alter field public on article
--
CREATE TABLE "new__miapp_article" (
  "id" integer NOT NULL PRIMARY KEY AUTOINCREMENT,
  "title" varchar(100) NOT NULL,
  "content" text NOT NULL,
  "created_at" datetime NOT NULL,
  "updated_at" datetime NOT NULL,
  "image" varchar(100) NOT NULL,
  "other" varchar(120) NOT NULL,
  "public" bool NOT NULL
);
INSERT INTO "new__miapp_article" (
    "id",
    "title",
    "content",
    "created_at",
    "updated_at",
    "image",
    "other",
    "public"
  )
SELECT "id",
  "title",
  "content",
  "created_at",
  "updated_at",
  "image",
  "other",
  "public"
FROM "miapp_article";
DROP TABLE "miapp_article";
ALTER TABLE "new__miapp_article"
  RENAME TO "miapp_article";
--
-- Alter field title on article
--
CREATE TABLE "new__miapp_article" (
  "id" integer NOT NULL PRIMARY KEY AUTOINCREMENT,
  "content" text NOT NULL,
  "public" bool NOT NULL,
  "created_at" datetime NOT NULL,
  "updated_at" datetime NOT NULL,
  "image" varchar(100) NOT NULL,
  "other" varchar(120) NOT NULL,
  "title" varchar(100) NOT NULL
);
INSERT INTO "new__miapp_article" (
    "id",
    "content",
    "public",
    "created_at",
    "updated_at",
    "image",
    "other",
    "title"
  )
SELECT "id",
  "content",
  "public",
  "created_at",
  "updated_at",
  "image",
  "other",
  "title"
FROM "miapp_article";
DROP TABLE "miapp_article";
ALTER TABLE "new__miapp_article"
  RENAME TO "miapp_article";
--
-- Alter field updated_at on article
--
CREATE TABLE "new__miapp_article" (
  "id" integer NOT NULL PRIMARY KEY AUTOINCREMENT,
  "title" varchar(100) NOT NULL,
  "content" text NOT NULL,
  "public" bool NOT NULL,
  "created_at" datetime NOT NULL,
  "image" varchar(100) NOT NULL,
  "other" varchar(120) NOT NULL,
  "updated_at" datetime NOT NULL
);
INSERT INTO "new__miapp_article" (
    "id",
    "title",
    "content",
    "public",
    "created_at",
    "image",
    "other",
    "updated_at"
  )
SELECT "id",
  "title",
  "content",
  "public",
  "created_at",
  "image",
  "other",
  "updated_at"
FROM "miapp_article";
DROP TABLE "miapp_article";
ALTER TABLE "new__miapp_article"
  RENAME TO "miapp_article";
--
-- Alter field created_at on category
--
CREATE TABLE "new__miapp_category" (
  "id" integer NOT NULL PRIMARY KEY AUTOINCREMENT,
  "name" varchar(100) NOT NULL,
  "desciption" varchar(250) NOT NULL,
  "created_at" date NOT NULL
);
INSERT INTO "new__miapp_category" ("id", "name", "desciption", "created_at")
SELECT "id",
  "name",
  "desciption",
  "created_at"
FROM "miapp_category";
DROP TABLE "miapp_category";
ALTER TABLE "new__miapp_category"
  RENAME TO "miapp_category";
--
-- Alter field desciption on category
--
CREATE TABLE "new__miapp_category" (
  "id" integer NOT NULL PRIMARY KEY AUTOINCREMENT,
  "name" varchar(100) NOT NULL,
  "created_at" date NOT NULL,
  "desciption" varchar(250) NOT NULL
);
INSERT INTO "new__miapp_category" ("id", "name", "created_at", "desciption")
SELECT "id",
  "name",
  "created_at",
  "desciption"
FROM "miapp_category";
DROP TABLE "miapp_category";
ALTER TABLE "new__miapp_category"
  RENAME TO "miapp_category";
--
-- Alter field name on category
--
CREATE TABLE "new__miapp_category" (
  "id" integer NOT NULL PRIMARY KEY AUTOINCREMENT,
  "desciption" varchar(250) NOT NULL,
  "created_at" date NOT NULL,
  "name" varchar(100) NOT NULL
);
INSERT INTO "new__miapp_category" ("id", "desciption", "created_at", "name")
SELECT "id",
  "desciption",
  "created_at",
  "name"
FROM "miapp_category";
DROP TABLE "miapp_category";
ALTER TABLE "new__miapp_category"
  RENAME TO "miapp_category";
COMMIT;