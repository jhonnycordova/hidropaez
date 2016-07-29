--
-- PostgreSQL database dump
--

SET statement_timeout = 0;
SET client_encoding = 'UTF8';
SET standard_conforming_strings = on;
SET check_function_bodies = false;
SET client_min_messages = warning;

--
-- Name: plpgsql; Type: EXTENSION; Schema: -; Owner: 
--

CREATE EXTENSION IF NOT EXISTS plpgsql WITH SCHEMA pg_catalog;


--
-- Name: EXTENSION plpgsql; Type: COMMENT; Schema: -; Owner: 
--

COMMENT ON EXTENSION plpgsql IS 'PL/pgSQL procedural language';


SET search_path = public, pg_catalog;

SET default_tablespace = '';

SET default_with_oids = false;

--
-- Name: almacenes; Type: TABLE; Schema: public; Owner: postgres; Tablespace: 
--

CREATE TABLE almacenes (
    id_sistema integer NOT NULL,
    htacum numeric(10,2),
    sulaluminio numeric(10,2),
    gascloro numeric(10,2),
    cal numeric(10,2),
    cilindros_llenos integer,
    cilindros_vacios integer,
    clresidual numeric(10,2),
    hipoclorito numeric(10,2),
    policloruro numeric(10,2),
    gasclorolb numeric(10,2)
);


ALTER TABLE public.almacenes OWNER TO postgres;

--
-- Name: TABLE almacenes; Type: COMMENT; Schema: public; Owner: postgres
--

COMMENT ON TABLE almacenes IS 'Almacenes de los sistemas';


--
-- Name: COLUMN almacenes.id_sistema; Type: COMMENT; Schema: public; Owner: postgres
--

COMMENT ON COLUMN almacenes.id_sistema IS 'Identificador del Sistema';


--
-- Name: altagracia_parametros; Type: TABLE; Schema: public; Owner: postgres; Tablespace: 
--

CREATE TABLE altagracia_parametros (
    id_dia bigint NOT NULL,
    id_empleado integer NOT NULL,
    fecha date NOT NULL,
    cloro numeric(10,2),
    turcruda numeric(10,2),
    turfiltrada numeric(10,2),
    colorcruda numeric(10,2),
    colorfiltrada numeric(10,2),
    phcruda numeric(10,2),
    phfiltrada numeric(10,2),
    reporte boolean NOT NULL
);


ALTER TABLE public.altagracia_parametros OWNER TO postgres;

--
-- Name: TABLE altagracia_parametros; Type: COMMENT; Schema: public; Owner: postgres
--

COMMENT ON TABLE altagracia_parametros IS 'Esta es la tabla para formato de parametros fisicoquimicos de Altagracia';


--
-- Name: altagracia_id_dia_seq; Type: SEQUENCE; Schema: public; Owner: postgres
--

CREATE SEQUENCE altagracia_id_dia_seq
    START WITH 1
    INCREMENT BY 1
    NO MINVALUE
    NO MAXVALUE
    CACHE 1;


ALTER TABLE public.altagracia_id_dia_seq OWNER TO postgres;

--
-- Name: altagracia_id_dia_seq; Type: SEQUENCE OWNED BY; Schema: public; Owner: postgres
--

ALTER SEQUENCE altagracia_id_dia_seq OWNED BY altagracia_parametros.id_dia;


--
-- Name: calabozo_parametros; Type: TABLE; Schema: public; Owner: postgres; Tablespace: 
--

CREATE TABLE calabozo_parametros (
    id_dia bigint NOT NULL,
    id_empleado integer NOT NULL,
    fecha date NOT NULL,
    cloro numeric(10,2),
    turcruda numeric(10,2),
    turfiltrada numeric(10,2),
    colorcruda numeric(10,2),
    colorfiltrada numeric(10,2),
    phcruda numeric(10,2),
    phfiltrada numeric(10,2),
    reporte boolean
);


ALTER TABLE public.calabozo_parametros OWNER TO postgres;

--
-- Name: TABLE calabozo_parametros; Type: COMMENT; Schema: public; Owner: postgres
--

COMMENT ON TABLE calabozo_parametros IS 'Tabla para formato de parametros fisicoquimicos para Calabozo';


--
-- Name: COLUMN calabozo_parametros.id_dia; Type: COMMENT; Schema: public; Owner: postgres
--

COMMENT ON COLUMN calabozo_parametros.id_dia IS 'Identificador del Dia';


--
-- Name: COLUMN calabozo_parametros.id_empleado; Type: COMMENT; Schema: public; Owner: postgres
--

COMMENT ON COLUMN calabozo_parametros.id_empleado IS 'Id del empleado que registro';


--
-- Name: COLUMN calabozo_parametros.fecha; Type: COMMENT; Schema: public; Owner: postgres
--

COMMENT ON COLUMN calabozo_parametros.fecha IS 'Fecha';


--
-- Name: COLUMN calabozo_parametros.cloro; Type: COMMENT; Schema: public; Owner: postgres
--

COMMENT ON COLUMN calabozo_parametros.cloro IS 'Cloro Notificado';


--
-- Name: COLUMN calabozo_parametros.turcruda; Type: COMMENT; Schema: public; Owner: postgres
--

COMMENT ON COLUMN calabozo_parametros.turcruda IS 'Turbiedad Cruda Notificada';


--
-- Name: COLUMN calabozo_parametros.turfiltrada; Type: COMMENT; Schema: public; Owner: postgres
--

COMMENT ON COLUMN calabozo_parametros.turfiltrada IS 'Turbiedad Filtrada Notificada';


--
-- Name: COLUMN calabozo_parametros.colorcruda; Type: COMMENT; Schema: public; Owner: postgres
--

COMMENT ON COLUMN calabozo_parametros.colorcruda IS 'Color Cruda Filtrada';


--
-- Name: COLUMN calabozo_parametros.colorfiltrada; Type: COMMENT; Schema: public; Owner: postgres
--

COMMENT ON COLUMN calabozo_parametros.colorfiltrada IS 'Color Filtrada Notificada';


--
-- Name: COLUMN calabozo_parametros.phcruda; Type: COMMENT; Schema: public; Owner: postgres
--

COMMENT ON COLUMN calabozo_parametros.phcruda IS 'pH Cruda Notificada';


--
-- Name: COLUMN calabozo_parametros.phfiltrada; Type: COMMENT; Schema: public; Owner: postgres
--

COMMENT ON COLUMN calabozo_parametros.phfiltrada IS 'pH Filtrada Notificada';


--
-- Name: COLUMN calabozo_parametros.reporte; Type: COMMENT; Schema: public; Owner: postgres
--

COMMENT ON COLUMN calabozo_parametros.reporte IS 'Reporto o no';


--
-- Name: calabozo_id_dia_seq; Type: SEQUENCE; Schema: public; Owner: postgres
--

CREATE SEQUENCE calabozo_id_dia_seq
    START WITH 1
    INCREMENT BY 1
    NO MINVALUE
    NO MAXVALUE
    CACHE 1;


ALTER TABLE public.calabozo_id_dia_seq OWNER TO postgres;

--
-- Name: calabozo_id_dia_seq; Type: SEQUENCE OWNED BY; Schema: public; Owner: postgres
--

ALTER SEQUENCE calabozo_id_dia_seq OWNED BY calabozo_parametros.id_dia;


--
-- Name: chaguaramas_parametros; Type: TABLE; Schema: public; Owner: postgres; Tablespace: 
--

CREATE TABLE chaguaramas_parametros (
    id_dia bigint NOT NULL,
    id_empleado integer NOT NULL,
    fecha date NOT NULL,
    cloro numeric(10,2),
    turcruda numeric(10,2),
    turfiltrada numeric(10,2),
    colorcruda numeric(10,2),
    colorfiltrada numeric(10,2),
    phcruda numeric(10,2),
    phfiltrada numeric(10,2),
    reporte boolean NOT NULL
);


ALTER TABLE public.chaguaramas_parametros OWNER TO postgres;

--
-- Name: TABLE chaguaramas_parametros; Type: COMMENT; Schema: public; Owner: postgres
--

COMMENT ON TABLE chaguaramas_parametros IS 'Tabla para formato de parametros fisicoquimicos de Chaguaramas';


--
-- Name: chaguaramas_id_dia_seq; Type: SEQUENCE; Schema: public; Owner: postgres
--

CREATE SEQUENCE chaguaramas_id_dia_seq
    START WITH 1
    INCREMENT BY 1
    NO MINVALUE
    NO MAXVALUE
    CACHE 1;


ALTER TABLE public.chaguaramas_id_dia_seq OWNER TO postgres;

--
-- Name: chaguaramas_id_dia_seq; Type: SEQUENCE OWNED BY; Schema: public; Owner: postgres
--

ALTER SEQUENCE chaguaramas_id_dia_seq OWNED BY chaguaramas_parametros.id_dia;


--
-- Name: empleados; Type: TABLE; Schema: public; Owner: postgres; Tablespace: 
--

CREATE TABLE empleados (
    id_empleado integer NOT NULL,
    nombres text NOT NULL,
    apellidos text NOT NULL,
    cedula integer NOT NULL,
    edad integer NOT NULL,
    email character varying(255) NOT NULL,
    usuario character varying(255) NOT NULL,
    clave character varying(255) NOT NULL
);


ALTER TABLE public.empleados OWNER TO postgres;

--
-- Name: TABLE empleados; Type: COMMENT; Schema: public; Owner: postgres
--

COMMENT ON TABLE empleados IS 'Tabla para Guardar los Empleados que Usan el Sistema';


--
-- Name: COLUMN empleados.id_empleado; Type: COMMENT; Schema: public; Owner: postgres
--

COMMENT ON COLUMN empleados.id_empleado IS 'Identificador del Empleado';


--
-- Name: COLUMN empleados.nombres; Type: COMMENT; Schema: public; Owner: postgres
--

COMMENT ON COLUMN empleados.nombres IS 'Nombres del Empleado';


--
-- Name: COLUMN empleados.apellidos; Type: COMMENT; Schema: public; Owner: postgres
--

COMMENT ON COLUMN empleados.apellidos IS 'Apellidos del Empleado';


--
-- Name: COLUMN empleados.cedula; Type: COMMENT; Schema: public; Owner: postgres
--

COMMENT ON COLUMN empleados.cedula IS 'Cédula del Empleado';


--
-- Name: COLUMN empleados.edad; Type: COMMENT; Schema: public; Owner: postgres
--

COMMENT ON COLUMN empleados.edad IS 'Edad del Empleado';


--
-- Name: COLUMN empleados.email; Type: COMMENT; Schema: public; Owner: postgres
--

COMMENT ON COLUMN empleados.email IS 'Email del Empleado';


--
-- Name: COLUMN empleados.usuario; Type: COMMENT; Schema: public; Owner: postgres
--

COMMENT ON COLUMN empleados.usuario IS 'Usuario o nombre de acceso';


--
-- Name: COLUMN empleados.clave; Type: COMMENT; Schema: public; Owner: postgres
--

COMMENT ON COLUMN empleados.clave IS 'Clave del Empleado';


--
-- Name: empleados_id_empleado_seq; Type: SEQUENCE; Schema: public; Owner: postgres
--

CREATE SEQUENCE empleados_id_empleado_seq
    START WITH 1
    INCREMENT BY 1
    NO MINVALUE
    NO MAXVALUE
    CACHE 1;


ALTER TABLE public.empleados_id_empleado_seq OWNER TO postgres;

--
-- Name: empleados_id_empleado_seq; Type: SEQUENCE OWNED BY; Schema: public; Owner: postgres
--

ALTER SEQUENCE empleados_id_empleado_seq OWNED BY empleados.id_empleado;


--
-- Name: espino_parametros; Type: TABLE; Schema: public; Owner: postgres; Tablespace: 
--

CREATE TABLE espino_parametros (
    id_dia bigint NOT NULL,
    id_empleado integer NOT NULL,
    fecha date NOT NULL,
    cloro numeric(10,2),
    turcruda numeric(10,2),
    turfiltrada numeric(10,2),
    colorcruda numeric(10,2),
    colorfiltrada numeric(10,2),
    phcruda numeric(10,2),
    phfiltrada numeric(10,2),
    reporte boolean NOT NULL
);


ALTER TABLE public.espino_parametros OWNER TO postgres;

--
-- Name: TABLE espino_parametros; Type: COMMENT; Schema: public; Owner: postgres
--

COMMENT ON TABLE espino_parametros IS 'Tabla para formato de parametros fisicoquimicos de Espino';


--
-- Name: espino_id_dia_seq; Type: SEQUENCE; Schema: public; Owner: postgres
--

CREATE SEQUENCE espino_id_dia_seq
    START WITH 1
    INCREMENT BY 1
    NO MINVALUE
    NO MAXVALUE
    CACHE 1;


ALTER TABLE public.espino_id_dia_seq OWNER TO postgres;

--
-- Name: espino_id_dia_seq; Type: SEQUENCE OWNED BY; Schema: public; Owner: postgres
--

ALTER SEQUENCE espino_id_dia_seq OWNED BY espino_parametros.id_dia;


--
-- Name: formato_diario; Type: TABLE; Schema: public; Owner: postgres; Tablespace: 
--

CREATE TABLE formato_diario (
    id_sistema integer NOT NULL,
    fecha date NOT NULL,
    id_empleado integer NOT NULL,
    ht numeric(10,2),
    sulconsumido numeric(10,2),
    gasconsumido numeric(10,2),
    calconsumido numeric(10,2),
    hipoclorito numeric(10,2),
    fallaelectrica numeric(10,2),
    fallamecanica numeric(10,2),
    procruda numeric(10,2),
    procacum numeric(10,2),
    propota numeric(10,2),
    propacum numeric(10,2),
    observaciones text,
    policloruro numeric(10,2),
    reporte boolean,
    gasclorolb numeric(10,2)
);


ALTER TABLE public.formato_diario OWNER TO postgres;

--
-- Name: TABLE formato_diario; Type: COMMENT; Schema: public; Owner: postgres
--

COMMENT ON TABLE formato_diario IS 'Tabla para guardar el formato diario que reportan los demás sistemas';


--
-- Name: COLUMN formato_diario.id_sistema; Type: COMMENT; Schema: public; Owner: postgres
--

COMMENT ON COLUMN formato_diario.id_sistema IS 'Identificador del Sistema';


--
-- Name: COLUMN formato_diario.fecha; Type: COMMENT; Schema: public; Owner: postgres
--

COMMENT ON COLUMN formato_diario.fecha IS 'Fecha';


--
-- Name: COLUMN formato_diario.id_empleado; Type: COMMENT; Schema: public; Owner: postgres
--

COMMENT ON COLUMN formato_diario.id_empleado IS 'Identificador del empleado que registro';


--
-- Name: COLUMN formato_diario.ht; Type: COMMENT; Schema: public; Owner: postgres
--

COMMENT ON COLUMN formato_diario.ht IS 'horas trabajadas';


--
-- Name: COLUMN formato_diario.sulconsumido; Type: COMMENT; Schema: public; Owner: postgres
--

COMMENT ON COLUMN formato_diario.sulconsumido IS 'sulfato de aluminio consumido';


--
-- Name: COLUMN formato_diario.gasconsumido; Type: COMMENT; Schema: public; Owner: postgres
--

COMMENT ON COLUMN formato_diario.gasconsumido IS 'gas cloro consumido';


--
-- Name: COLUMN formato_diario.calconsumido; Type: COMMENT; Schema: public; Owner: postgres
--

COMMENT ON COLUMN formato_diario.calconsumido IS 'cal consumida';


--
-- Name: COLUMN formato_diario.hipoclorito; Type: COMMENT; Schema: public; Owner: postgres
--

COMMENT ON COLUMN formato_diario.hipoclorito IS 'hipoclorito';


--
-- Name: COLUMN formato_diario.fallaelectrica; Type: COMMENT; Schema: public; Owner: postgres
--

COMMENT ON COLUMN formato_diario.fallaelectrica IS 'Falla electrica';


--
-- Name: COLUMN formato_diario.fallamecanica; Type: COMMENT; Schema: public; Owner: postgres
--

COMMENT ON COLUMN formato_diario.fallamecanica IS 'falla mecanica';


--
-- Name: COLUMN formato_diario.procruda; Type: COMMENT; Schema: public; Owner: postgres
--

COMMENT ON COLUMN formato_diario.procruda IS 'produccion cruda';


--
-- Name: COLUMN formato_diario.procacum; Type: COMMENT; Schema: public; Owner: postgres
--

COMMENT ON COLUMN formato_diario.procacum IS 'produccion acumulada';


--
-- Name: COLUMN formato_diario.propota; Type: COMMENT; Schema: public; Owner: postgres
--

COMMENT ON COLUMN formato_diario.propota IS 'produccion potabilizada';


--
-- Name: COLUMN formato_diario.propacum; Type: COMMENT; Schema: public; Owner: postgres
--

COMMENT ON COLUMN formato_diario.propacum IS 'produccion potabilizada acum';


--
-- Name: formato_sustancias; Type: TABLE; Schema: public; Owner: postgres; Tablespace: 
--

CREATE TABLE formato_sustancias (
    id_sistema integer NOT NULL,
    fecha date NOT NULL,
    id_empleado integer NOT NULL,
    servicio integer,
    danado integer,
    consmax integer,
    recibido_gascloro numeric(10,2),
    recibido_sulfato numeric(10,2),
    recibido_cal numeric(10,2),
    recibido_hipoclorito numeric(10,2),
    recibido_poli numeric(10,2),
    traspasos_gascloro numeric(10,2),
    traspasos_sulfato numeric(10,2),
    traspasos_cal numeric(10,2),
    traspasos_hipoclorito numeric(10,2),
    traspasos_poli numeric(10,2),
    aplicacion_gascloro numeric(10,2),
    aplicacion_sulfato numeric(10,2),
    aplicacion_cal numeric(10,2),
    aplicacion_hipoclorito numeric(10,2),
    aplicacion_poli numeric(10,2),
    aplicacion_clorolb character varying(50),
    duracion_gascloro numeric(10,2),
    duracion_sulfato numeric(10,2),
    duracion_cal numeric(10,2),
    duracion_hipoclorito numeric(10,2),
    duracion_poli numeric(10,2),
    cilindros_llenos integer,
    cilindros_vacios integer,
    recibido_clorolb numeric(10,2),
    traspasos_clorolb numeric(10,2),
    duracion_clorolb numeric(10,2),
    saldo_gascloro numeric(10,2),
    saldo_sulfato numeric(10,2),
    saldo_cal numeric(10,2),
    saldo_hipoclorito numeric(10,2),
    saldo_poli numeric(10,2),
    saldo_clorolb numeric(10,2)
);


ALTER TABLE public.formato_sustancias OWNER TO postgres;

--
-- Name: TABLE formato_sustancias; Type: COMMENT; Schema: public; Owner: postgres
--

COMMENT ON TABLE formato_sustancias IS 'Tabla para Guardar los datos del Formato Sustancias';


--
-- Name: guardatinajas_parametros; Type: TABLE; Schema: public; Owner: postgres; Tablespace: 
--

CREATE TABLE guardatinajas_parametros (
    id_dia bigint NOT NULL,
    id_empleado integer NOT NULL,
    fecha date NOT NULL,
    cloro numeric(10,2),
    turcruda numeric(10,2),
    turfiltrada numeric(10,2),
    colorcruda numeric(10,2),
    colorfiltrada numeric(10,2),
    phcruda numeric(10,2),
    phfiltrada numeric(10,2),
    reporte boolean NOT NULL
);


ALTER TABLE public.guardatinajas_parametros OWNER TO postgres;

--
-- Name: TABLE guardatinajas_parametros; Type: COMMENT; Schema: public; Owner: postgres
--

COMMENT ON TABLE guardatinajas_parametros IS 'Esta es la tabla para formato de parametros fisicoquimicos de Guardatinajas';


--
-- Name: guardatinajas_id_dia_seq; Type: SEQUENCE; Schema: public; Owner: postgres
--

CREATE SEQUENCE guardatinajas_id_dia_seq
    START WITH 1
    INCREMENT BY 1
    NO MINVALUE
    NO MAXVALUE
    CACHE 1;


ALTER TABLE public.guardatinajas_id_dia_seq OWNER TO postgres;

--
-- Name: guardatinajas_id_dia_seq; Type: SEQUENCE OWNED BY; Schema: public; Owner: postgres
--

ALTER SEQUENCE guardatinajas_id_dia_seq OWNED BY guardatinajas_parametros.id_dia;


--
-- Name: sanjuan_parametros; Type: TABLE; Schema: public; Owner: postgres; Tablespace: 
--

CREATE TABLE sanjuan_parametros (
    id_dia bigint NOT NULL,
    id_empleado integer NOT NULL,
    fecha date NOT NULL,
    cloro numeric(10,2),
    turcruda numeric(10,2),
    turfiltrada numeric(10,2),
    colorcruda numeric(10,2),
    colorfiltrada numeric(10,2),
    phcruda numeric(10,2),
    phfiltrada numeric(10,2),
    reporte boolean NOT NULL
);


ALTER TABLE public.sanjuan_parametros OWNER TO postgres;

--
-- Name: TABLE sanjuan_parametros; Type: COMMENT; Schema: public; Owner: postgres
--

COMMENT ON TABLE sanjuan_parametros IS 'Esta es la tabla Formato de Parametros Fisicoquimicos para San Juan de los Morros';


--
-- Name: COLUMN sanjuan_parametros.id_dia; Type: COMMENT; Schema: public; Owner: postgres
--

COMMENT ON COLUMN sanjuan_parametros.id_dia IS 'Identificador del Dia';


--
-- Name: COLUMN sanjuan_parametros.id_empleado; Type: COMMENT; Schema: public; Owner: postgres
--

COMMENT ON COLUMN sanjuan_parametros.id_empleado IS 'Id del empleado que registro';


--
-- Name: COLUMN sanjuan_parametros.fecha; Type: COMMENT; Schema: public; Owner: postgres
--

COMMENT ON COLUMN sanjuan_parametros.fecha IS 'Fecha';


--
-- Name: COLUMN sanjuan_parametros.cloro; Type: COMMENT; Schema: public; Owner: postgres
--

COMMENT ON COLUMN sanjuan_parametros.cloro IS 'Cloro Notificado';


--
-- Name: COLUMN sanjuan_parametros.turcruda; Type: COMMENT; Schema: public; Owner: postgres
--

COMMENT ON COLUMN sanjuan_parametros.turcruda IS 'Turbiedad Cruda Notificada';


--
-- Name: COLUMN sanjuan_parametros.turfiltrada; Type: COMMENT; Schema: public; Owner: postgres
--

COMMENT ON COLUMN sanjuan_parametros.turfiltrada IS 'Turbiedad Filtrada Notificada';


--
-- Name: COLUMN sanjuan_parametros.colorcruda; Type: COMMENT; Schema: public; Owner: postgres
--

COMMENT ON COLUMN sanjuan_parametros.colorcruda IS 'Color Cruda Filtrada';


--
-- Name: COLUMN sanjuan_parametros.colorfiltrada; Type: COMMENT; Schema: public; Owner: postgres
--

COMMENT ON COLUMN sanjuan_parametros.colorfiltrada IS 'Color Filtrada Notificada';


--
-- Name: COLUMN sanjuan_parametros.phcruda; Type: COMMENT; Schema: public; Owner: postgres
--

COMMENT ON COLUMN sanjuan_parametros.phcruda IS 'pH Cruda Notificada';


--
-- Name: COLUMN sanjuan_parametros.phfiltrada; Type: COMMENT; Schema: public; Owner: postgres
--

COMMENT ON COLUMN sanjuan_parametros.phfiltrada IS 'pH Filtrada Notificada';


--
-- Name: COLUMN sanjuan_parametros.reporte; Type: COMMENT; Schema: public; Owner: postgres
--

COMMENT ON COLUMN sanjuan_parametros.reporte IS 'Dice si reporto o no';


--
-- Name: parametrosSanJuan_id_dia_seq; Type: SEQUENCE; Schema: public; Owner: postgres
--

CREATE SEQUENCE "parametrosSanJuan_id_dia_seq"
    START WITH 1
    INCREMENT BY 1
    NO MINVALUE
    NO MAXVALUE
    CACHE 1;


ALTER TABLE public."parametrosSanJuan_id_dia_seq" OWNER TO postgres;

--
-- Name: parametrosSanJuan_id_dia_seq; Type: SEQUENCE OWNED BY; Schema: public; Owner: postgres
--

ALTER SEQUENCE "parametrosSanJuan_id_dia_seq" OWNED BY sanjuan_parametros.id_dia;


--
-- Name: san_jose_parametros; Type: TABLE; Schema: public; Owner: postgres; Tablespace: 
--

CREATE TABLE san_jose_parametros (
    id_dia bigint NOT NULL,
    id_empleado integer NOT NULL,
    fecha date NOT NULL,
    cloro numeric(10,2),
    turcruda numeric(10,2),
    turfiltrada numeric(10,2),
    colorcruda numeric(10,2),
    colorfiltrada numeric(10,2),
    phcruda numeric(10,2),
    phfiltrada numeric(10,2),
    reporte boolean NOT NULL
);


ALTER TABLE public.san_jose_parametros OWNER TO postgres;

--
-- Name: TABLE san_jose_parametros; Type: COMMENT; Schema: public; Owner: postgres
--

COMMENT ON TABLE san_jose_parametros IS 'Tabla para formato de parámetros fisicoquimicos de San Jose de Guaribe';


--
-- Name: san_jose_id_dia_seq; Type: SEQUENCE; Schema: public; Owner: postgres
--

CREATE SEQUENCE san_jose_id_dia_seq
    START WITH 1
    INCREMENT BY 1
    NO MINVALUE
    NO MAXVALUE
    CACHE 1;


ALTER TABLE public.san_jose_id_dia_seq OWNER TO postgres;

--
-- Name: san_jose_id_dia_seq; Type: SEQUENCE OWNED BY; Schema: public; Owner: postgres
--

ALTER SEQUENCE san_jose_id_dia_seq OWNED BY san_jose_parametros.id_dia;


--
-- Name: san_rafael_parametros; Type: TABLE; Schema: public; Owner: postgres; Tablespace: 
--

CREATE TABLE san_rafael_parametros (
    id_dia bigint NOT NULL,
    id_empleado integer NOT NULL,
    fecha date NOT NULL,
    cloro numeric(10,2),
    turcruda numeric(10,2),
    turfiltrada numeric(10,2),
    colorcruda numeric(10,2),
    colorfiltrada numeric(10,2),
    phcruda numeric(10,2),
    phfiltrada numeric(10,2),
    reporte boolean NOT NULL
);


ALTER TABLE public.san_rafael_parametros OWNER TO postgres;

--
-- Name: TABLE san_rafael_parametros; Type: COMMENT; Schema: public; Owner: postgres
--

COMMENT ON TABLE san_rafael_parametros IS 'Tabla para formato de parametros fisicoquimicos de San Rafael de Laya';


--
-- Name: san_rafael_id_dia_seq; Type: SEQUENCE; Schema: public; Owner: postgres
--

CREATE SEQUENCE san_rafael_id_dia_seq
    START WITH 1
    INCREMENT BY 1
    NO MINVALUE
    NO MAXVALUE
    CACHE 1;


ALTER TABLE public.san_rafael_id_dia_seq OWNER TO postgres;

--
-- Name: san_rafael_id_dia_seq; Type: SEQUENCE OWNED BY; Schema: public; Owner: postgres
--

ALTER SEQUENCE san_rafael_id_dia_seq OWNED BY san_rafael_parametros.id_dia;


--
-- Name: santa_maria_parametros; Type: TABLE; Schema: public; Owner: postgres; Tablespace: 
--

CREATE TABLE santa_maria_parametros (
    id_dia bigint NOT NULL,
    id_empleado integer NOT NULL,
    fecha date NOT NULL,
    cloro numeric(10,2),
    turcruda numeric(10,2),
    turfiltrada numeric(10,2),
    colorcruda numeric(10,2),
    colorfiltrada numeric(10,2),
    phcruda numeric(10,2),
    phfiltrada numeric(10,2),
    reporte boolean NOT NULL
);


ALTER TABLE public.santa_maria_parametros OWNER TO postgres;

--
-- Name: TABLE santa_maria_parametros; Type: COMMENT; Schema: public; Owner: postgres
--

COMMENT ON TABLE santa_maria_parametros IS 'Tabla para formato de parametros fisicoquimicos de Santa Maria';


--
-- Name: santa_maria_id_dia_seq; Type: SEQUENCE; Schema: public; Owner: postgres
--

CREATE SEQUENCE santa_maria_id_dia_seq
    START WITH 1
    INCREMENT BY 1
    NO MINVALUE
    NO MAXVALUE
    CACHE 1;


ALTER TABLE public.santa_maria_id_dia_seq OWNER TO postgres;

--
-- Name: santa_maria_id_dia_seq; Type: SEQUENCE OWNED BY; Schema: public; Owner: postgres
--

ALTER SEQUENCE santa_maria_id_dia_seq OWNED BY santa_maria_parametros.id_dia;


--
-- Name: sistemas; Type: TABLE; Schema: public; Owner: postgres; Tablespace: 
--

CREATE TABLE sistemas (
    id_sistema integer NOT NULL,
    nombre character varying(255) NOT NULL
);


ALTER TABLE public.sistemas OWNER TO postgres;

--
-- Name: TABLE sistemas; Type: COMMENT; Schema: public; Owner: postgres
--

COMMENT ON TABLE sistemas IS 'Los 15 sistemas del Estado Guárico';


--
-- Name: COLUMN sistemas.id_sistema; Type: COMMENT; Schema: public; Owner: postgres
--

COMMENT ON COLUMN sistemas.id_sistema IS 'Identificador del Sistema';


--
-- Name: COLUMN sistemas.nombre; Type: COMMENT; Schema: public; Owner: postgres
--

COMMENT ON COLUMN sistemas.nombre IS 'Nombre del Sistema';


--
-- Name: sistemas_id_sistema_seq; Type: SEQUENCE; Schema: public; Owner: postgres
--

CREATE SEQUENCE sistemas_id_sistema_seq
    START WITH 1
    INCREMENT BY 1
    NO MINVALUE
    NO MAXVALUE
    CACHE 1;


ALTER TABLE public.sistemas_id_sistema_seq OWNER TO postgres;

--
-- Name: sistemas_id_sistema_seq; Type: SEQUENCE OWNED BY; Schema: public; Owner: postgres
--

ALTER SEQUENCE sistemas_id_sistema_seq OWNED BY sistemas.id_sistema;


--
-- Name: socorro_parametros; Type: TABLE; Schema: public; Owner: postgres; Tablespace: 
--

CREATE TABLE socorro_parametros (
    id_dia bigint NOT NULL,
    id_empleado integer NOT NULL,
    fecha date NOT NULL,
    cloro numeric(10,2),
    turcruda numeric(10,2),
    turfiltrada numeric(10,2),
    colorcruda numeric(10,2),
    colorfiltrada numeric(10,2),
    phcruda numeric(10,2),
    phfiltrada numeric(10,2),
    reporte boolean NOT NULL
);


ALTER TABLE public.socorro_parametros OWNER TO postgres;

--
-- Name: TABLE socorro_parametros; Type: COMMENT; Schema: public; Owner: postgres
--

COMMENT ON TABLE socorro_parametros IS 'Esta es la tabla para formato de parametros fisicoquimicos de El Socorro';


--
-- Name: socorro_id_dia_seq; Type: SEQUENCE; Schema: public; Owner: postgres
--

CREATE SEQUENCE socorro_id_dia_seq
    START WITH 1
    INCREMENT BY 1
    NO MINVALUE
    NO MAXVALUE
    CACHE 1;


ALTER TABLE public.socorro_id_dia_seq OWNER TO postgres;

--
-- Name: socorro_id_dia_seq; Type: SEQUENCE OWNED BY; Schema: public; Owner: postgres
--

ALTER SEQUENCE socorro_id_dia_seq OWNED BY socorro_parametros.id_dia;


--
-- Name: som_galeria_parametros; Type: TABLE; Schema: public; Owner: postgres; Tablespace: 
--

CREATE TABLE som_galeria_parametros (
    id_dia bigint NOT NULL,
    id_empleado integer NOT NULL,
    fecha date NOT NULL,
    cloro numeric(10,2),
    turcruda numeric(10,2),
    turfiltrada numeric(10,2),
    colorcruda numeric(10,2),
    colorfiltrada numeric(10,2),
    phcruda numeric(10,2),
    phfiltrada numeric(10,2),
    reporte boolean NOT NULL
);


ALTER TABLE public.som_galeria_parametros OWNER TO postgres;

--
-- Name: TABLE som_galeria_parametros; Type: COMMENT; Schema: public; Owner: postgres
--

COMMENT ON TABLE som_galeria_parametros IS 'Tabla para formato de parametros fisicoquimicos de Sombrero Galeria';


--
-- Name: som_galeria_id_dia_seq; Type: SEQUENCE; Schema: public; Owner: postgres
--

CREATE SEQUENCE som_galeria_id_dia_seq
    START WITH 1
    INCREMENT BY 1
    NO MINVALUE
    NO MAXVALUE
    CACHE 1;


ALTER TABLE public.som_galeria_id_dia_seq OWNER TO postgres;

--
-- Name: som_galeria_id_dia_seq; Type: SEQUENCE OWNED BY; Schema: public; Owner: postgres
--

ALTER SEQUENCE som_galeria_id_dia_seq OWNED BY som_galeria_parametros.id_dia;


--
-- Name: som_obrero_parametros; Type: TABLE; Schema: public; Owner: postgres; Tablespace: 
--

CREATE TABLE som_obrero_parametros (
    id_dia bigint NOT NULL,
    id_empleado integer NOT NULL,
    fecha date NOT NULL,
    cloro numeric(10,2),
    turcruda numeric(10,2),
    turfiltrada numeric(10,2),
    colorcruda numeric(10,2),
    colorfiltrada numeric(10,2),
    phcruda numeric(10,2),
    phfiltrada numeric(10,2),
    reporte boolean NOT NULL
);


ALTER TABLE public.som_obrero_parametros OWNER TO postgres;

--
-- Name: TABLE som_obrero_parametros; Type: COMMENT; Schema: public; Owner: postgres
--

COMMENT ON TABLE som_obrero_parametros IS 'Tabla para formato de parametros fisicoquimicos de Sombrero Este Banco Obrero';


--
-- Name: som_obrero_id_dia_seq; Type: SEQUENCE; Schema: public; Owner: postgres
--

CREATE SEQUENCE som_obrero_id_dia_seq
    START WITH 1
    INCREMENT BY 1
    NO MINVALUE
    NO MAXVALUE
    CACHE 1;


ALTER TABLE public.som_obrero_id_dia_seq OWNER TO postgres;

--
-- Name: som_obrero_id_dia_seq; Type: SEQUENCE OWNED BY; Schema: public; Owner: postgres
--

ALTER SEQUENCE som_obrero_id_dia_seq OWNED BY som_obrero_parametros.id_dia;


--
-- Name: tucupido_parametros; Type: TABLE; Schema: public; Owner: postgres; Tablespace: 
--

CREATE TABLE tucupido_parametros (
    id_dia bigint NOT NULL,
    id_empleado integer NOT NULL,
    fecha date NOT NULL,
    cloro numeric(10,2),
    turcruda numeric(10,2),
    turfiltrada numeric(10,2),
    colorcruda numeric(10,2),
    colorfiltrada numeric(10,2),
    phcruda numeric(10,2),
    phfiltrada numeric(10,2),
    reporte boolean NOT NULL
);


ALTER TABLE public.tucupido_parametros OWNER TO postgres;

--
-- Name: TABLE tucupido_parametros; Type: COMMENT; Schema: public; Owner: postgres
--

COMMENT ON TABLE tucupido_parametros IS 'Esta es la tabla de parametros fisiquimicos de tucupido
';


--
-- Name: tucupido_id_dia_seq; Type: SEQUENCE; Schema: public; Owner: postgres
--

CREATE SEQUENCE tucupido_id_dia_seq
    START WITH 1
    INCREMENT BY 1
    NO MINVALUE
    NO MAXVALUE
    CACHE 1;


ALTER TABLE public.tucupido_id_dia_seq OWNER TO postgres;

--
-- Name: tucupido_id_dia_seq; Type: SEQUENCE OWNED BY; Schema: public; Owner: postgres
--

ALTER SEQUENCE tucupido_id_dia_seq OWNED BY tucupido_parametros.id_dia;


--
-- Name: valle_pascua_parametros; Type: TABLE; Schema: public; Owner: postgres; Tablespace: 
--

CREATE TABLE valle_pascua_parametros (
    id_dia bigint NOT NULL,
    id_empleado integer NOT NULL,
    fecha date NOT NULL,
    cloro numeric(10,2),
    turcruda numeric(10,2),
    turfiltrada numeric(10,2),
    colorcruda numeric(10,2),
    colorfiltrada numeric(10,2),
    phcruda numeric(10,2),
    phfiltrada numeric(10,2),
    reporte boolean NOT NULL
);


ALTER TABLE public.valle_pascua_parametros OWNER TO postgres;

--
-- Name: TABLE valle_pascua_parametros; Type: COMMENT; Schema: public; Owner: postgres
--

COMMENT ON TABLE valle_pascua_parametros IS 'Esta es la tabla para formato de parametros fisicoquimicos de Valle de la Pascua';


--
-- Name: valle_pascua_id_dia_seq; Type: SEQUENCE; Schema: public; Owner: postgres
--

CREATE SEQUENCE valle_pascua_id_dia_seq
    START WITH 1
    INCREMENT BY 1
    NO MINVALUE
    NO MAXVALUE
    CACHE 1;


ALTER TABLE public.valle_pascua_id_dia_seq OWNER TO postgres;

--
-- Name: valle_pascua_id_dia_seq; Type: SEQUENCE OWNED BY; Schema: public; Owner: postgres
--

ALTER SEQUENCE valle_pascua_id_dia_seq OWNED BY valle_pascua_parametros.id_dia;


--
-- Name: zaraza_parametros; Type: TABLE; Schema: public; Owner: postgres; Tablespace: 
--

CREATE TABLE zaraza_parametros (
    id_dia bigint NOT NULL,
    id_empleado integer NOT NULL,
    fecha date NOT NULL,
    cloro numeric(10,2),
    turcruda numeric(10,2),
    turfiltrada numeric(10,2),
    colorcruda numeric(10,2),
    colorfiltrada numeric(10,2),
    phcruda numeric(10,2),
    phfiltrada numeric(10,2),
    reporte boolean NOT NULL
);


ALTER TABLE public.zaraza_parametros OWNER TO postgres;

--
-- Name: TABLE zaraza_parametros; Type: COMMENT; Schema: public; Owner: postgres
--

COMMENT ON TABLE zaraza_parametros IS 'tabla para formato de parametros fisicoquimicos de Zaraza';


--
-- Name: COLUMN zaraza_parametros.colorfiltrada; Type: COMMENT; Schema: public; Owner: postgres
--

COMMENT ON COLUMN zaraza_parametros.colorfiltrada IS 'Color Filtrada Notificada';


--
-- Name: zaraza_id_dia_seq; Type: SEQUENCE; Schema: public; Owner: postgres
--

CREATE SEQUENCE zaraza_id_dia_seq
    START WITH 1
    INCREMENT BY 1
    NO MINVALUE
    NO MAXVALUE
    CACHE 1;


ALTER TABLE public.zaraza_id_dia_seq OWNER TO postgres;

--
-- Name: zaraza_id_dia_seq; Type: SEQUENCE OWNED BY; Schema: public; Owner: postgres
--

ALTER SEQUENCE zaraza_id_dia_seq OWNED BY zaraza_parametros.id_dia;


--
-- Name: id_dia; Type: DEFAULT; Schema: public; Owner: postgres
--

ALTER TABLE ONLY altagracia_parametros ALTER COLUMN id_dia SET DEFAULT nextval('altagracia_id_dia_seq'::regclass);


--
-- Name: id_dia; Type: DEFAULT; Schema: public; Owner: postgres
--

ALTER TABLE ONLY calabozo_parametros ALTER COLUMN id_dia SET DEFAULT nextval('calabozo_id_dia_seq'::regclass);


--
-- Name: id_dia; Type: DEFAULT; Schema: public; Owner: postgres
--

ALTER TABLE ONLY chaguaramas_parametros ALTER COLUMN id_dia SET DEFAULT nextval('chaguaramas_id_dia_seq'::regclass);


--
-- Name: id_empleado; Type: DEFAULT; Schema: public; Owner: postgres
--

ALTER TABLE ONLY empleados ALTER COLUMN id_empleado SET DEFAULT nextval('empleados_id_empleado_seq'::regclass);


--
-- Name: id_dia; Type: DEFAULT; Schema: public; Owner: postgres
--

ALTER TABLE ONLY espino_parametros ALTER COLUMN id_dia SET DEFAULT nextval('espino_id_dia_seq'::regclass);


--
-- Name: id_dia; Type: DEFAULT; Schema: public; Owner: postgres
--

ALTER TABLE ONLY guardatinajas_parametros ALTER COLUMN id_dia SET DEFAULT nextval('guardatinajas_id_dia_seq'::regclass);


--
-- Name: id_dia; Type: DEFAULT; Schema: public; Owner: postgres
--

ALTER TABLE ONLY san_jose_parametros ALTER COLUMN id_dia SET DEFAULT nextval('san_jose_id_dia_seq'::regclass);


--
-- Name: id_dia; Type: DEFAULT; Schema: public; Owner: postgres
--

ALTER TABLE ONLY san_rafael_parametros ALTER COLUMN id_dia SET DEFAULT nextval('san_rafael_id_dia_seq'::regclass);


--
-- Name: id_dia; Type: DEFAULT; Schema: public; Owner: postgres
--

ALTER TABLE ONLY sanjuan_parametros ALTER COLUMN id_dia SET DEFAULT nextval('"parametrosSanJuan_id_dia_seq"'::regclass);


--
-- Name: id_dia; Type: DEFAULT; Schema: public; Owner: postgres
--

ALTER TABLE ONLY santa_maria_parametros ALTER COLUMN id_dia SET DEFAULT nextval('santa_maria_id_dia_seq'::regclass);


--
-- Name: id_sistema; Type: DEFAULT; Schema: public; Owner: postgres
--

ALTER TABLE ONLY sistemas ALTER COLUMN id_sistema SET DEFAULT nextval('sistemas_id_sistema_seq'::regclass);


--
-- Name: id_dia; Type: DEFAULT; Schema: public; Owner: postgres
--

ALTER TABLE ONLY socorro_parametros ALTER COLUMN id_dia SET DEFAULT nextval('socorro_id_dia_seq'::regclass);


--
-- Name: id_dia; Type: DEFAULT; Schema: public; Owner: postgres
--

ALTER TABLE ONLY som_galeria_parametros ALTER COLUMN id_dia SET DEFAULT nextval('som_galeria_id_dia_seq'::regclass);


--
-- Name: id_dia; Type: DEFAULT; Schema: public; Owner: postgres
--

ALTER TABLE ONLY som_obrero_parametros ALTER COLUMN id_dia SET DEFAULT nextval('som_obrero_id_dia_seq'::regclass);


--
-- Name: id_dia; Type: DEFAULT; Schema: public; Owner: postgres
--

ALTER TABLE ONLY tucupido_parametros ALTER COLUMN id_dia SET DEFAULT nextval('tucupido_id_dia_seq'::regclass);


--
-- Name: id_dia; Type: DEFAULT; Schema: public; Owner: postgres
--

ALTER TABLE ONLY valle_pascua_parametros ALTER COLUMN id_dia SET DEFAULT nextval('valle_pascua_id_dia_seq'::regclass);


--
-- Name: id_dia; Type: DEFAULT; Schema: public; Owner: postgres
--

ALTER TABLE ONLY zaraza_parametros ALTER COLUMN id_dia SET DEFAULT nextval('zaraza_id_dia_seq'::regclass);


--
-- Data for Name: almacenes; Type: TABLE DATA; Schema: public; Owner: postgres
--

INSERT INTO almacenes VALUES (3, 48.00, 25905.00, 674.00, 13.00, 1, 25, 0.00, 0.00, 0.00, 0.00);
INSERT INTO almacenes VALUES (1, 2.00, -50.00, -99.00, 100.00, 0, 13, 100.00, 100.00, 100.00, 100.00);
INSERT INTO almacenes VALUES (2, 24.00, 8550.00, 634.00, 0.00, 0, 16, 0.00, 0.00, 0.00, 136.20);
INSERT INTO almacenes VALUES (4, 24.00, 15400.00, 10862.00, 0.00, 10, 22, 0.00, 20.00, 0.00, 340.50);
INSERT INTO almacenes VALUES (5, 24.00, 880.00, 382.00, 0.00, 0, 2, 0.00, 0.50, 275.00, 0.00);
INSERT INTO almacenes VALUES (6, 24.00, 2620.00, 599.00, 860.00, 0, 1, 0.00, 0.60, 0.00, 0.00);
INSERT INTO almacenes VALUES (7, 24.00, 27358.00, 139.00, 0.00, 0, 4, 0.00, 0.00, 0.00, 0.00);
INSERT INTO almacenes VALUES (8, 19.00, 3064.00, 478.27, 0.00, 1, 2, 0.00, 2.50, 0.00, 0.00);
INSERT INTO almacenes VALUES (9, 15.00, 3080.00, 907.00, 0.00, 1, 1, 0.00, 0.00, 0.00, 0.00);
INSERT INTO almacenes VALUES (10, 24.00, 1378.00, 454.00, 0.00, 0, 1, 0.00, 0.00, 0.00, 0.00);
INSERT INTO almacenes VALUES (11, 12.00, 630.00, 49.10, 0.00, 0, 0, 0.00, 0.00, 0.00, 49.10);
INSERT INTO almacenes VALUES (12, 24.00, 0.00, 110.00, 0.00, 0, 1, 0.00, 0.00, 0.00, 0.00);
INSERT INTO almacenes VALUES (13, 21.45, 300.00, 773.53, 0.00, 0, 1, 0.00, 0.00, 0.00, 0.00);
INSERT INTO almacenes VALUES (14, 24.00, 0.00, 109.00, 0.00, 0, 1, 0.00, 0.00, 0.00, 0.00);
INSERT INTO almacenes VALUES (15, 24.00, 0.00, 0.00, 0.00, 0, 0, 0.00, 0.00, 0.00, 68.10);


--
-- Name: altagracia_id_dia_seq; Type: SEQUENCE SET; Schema: public; Owner: postgres
--

SELECT pg_catalog.setval('altagracia_id_dia_seq', 66, true);


--
-- Data for Name: altagracia_parametros; Type: TABLE DATA; Schema: public; Owner: postgres
--

INSERT INTO altagracia_parametros VALUES (64, 13, '2014-09-10', NULL, NULL, NULL, NULL, NULL, NULL, NULL, false);
INSERT INTO altagracia_parametros VALUES (65, 13, '2014-09-11', 0.00, 0.00, 0.00, 0.00, 0.00, 0.00, 0.00, true);
INSERT INTO altagracia_parametros VALUES (66, 13, '2014-09-12', 0.00, 0.00, 0.00, 0.00, 0.00, 0.00, 0.00, true);


--
-- Name: calabozo_id_dia_seq; Type: SEQUENCE SET; Schema: public; Owner: postgres
--

SELECT pg_catalog.setval('calabozo_id_dia_seq', 71, true);


--
-- Data for Name: calabozo_parametros; Type: TABLE DATA; Schema: public; Owner: postgres
--

INSERT INTO calabozo_parametros VALUES (69, 13, '2014-09-10', 0.00, 12.00, 0.00, 0.00, 0.00, 0.00, 0.00, true);
INSERT INTO calabozo_parametros VALUES (70, 13, '2014-09-11', 0.00, 0.00, 0.00, 0.00, 0.00, 0.00, 0.00, true);
INSERT INTO calabozo_parametros VALUES (71, 13, '2014-09-12', NULL, NULL, NULL, NULL, NULL, NULL, NULL, false);


--
-- Name: chaguaramas_id_dia_seq; Type: SEQUENCE SET; Schema: public; Owner: postgres
--

SELECT pg_catalog.setval('chaguaramas_id_dia_seq', 43, true);


--
-- Data for Name: chaguaramas_parametros; Type: TABLE DATA; Schema: public; Owner: postgres
--

INSERT INTO chaguaramas_parametros VALUES (41, 13, '2014-09-10', 0.00, 0.00, 0.00, 0.00, 0.00, 0.00, 0.00, true);
INSERT INTO chaguaramas_parametros VALUES (42, 13, '2014-09-11', 0.00, 0.00, 0.00, 0.00, 0.00, 0.00, 0.00, true);
INSERT INTO chaguaramas_parametros VALUES (43, 13, '2014-09-12', 0.00, 0.00, 0.00, 0.00, 0.00, 0.00, 0.00, true);


--
-- Data for Name: empleados; Type: TABLE DATA; Schema: public; Owner: postgres
--

INSERT INTO empleados VALUES (13, 'Jhonny', 'Córdova', 20990499, 21, 'cordova.jhonny@gmail.com', 'jhonnycordova', '202cb962ac59075b964b07152d234b70');


--
-- Name: empleados_id_empleado_seq; Type: SEQUENCE SET; Schema: public; Owner: postgres
--

SELECT pg_catalog.setval('empleados_id_empleado_seq', 14, true);


--
-- Name: espino_id_dia_seq; Type: SEQUENCE SET; Schema: public; Owner: postgres
--

SELECT pg_catalog.setval('espino_id_dia_seq', 49, true);


--
-- Data for Name: espino_parametros; Type: TABLE DATA; Schema: public; Owner: postgres
--

INSERT INTO espino_parametros VALUES (47, 13, '2014-09-10', 0.00, 0.00, 0.00, 0.00, 0.00, 0.00, 0.00, true);
INSERT INTO espino_parametros VALUES (48, 13, '2014-09-11', 0.00, 0.00, 0.00, 0.00, 0.00, 0.00, 0.00, true);
INSERT INTO espino_parametros VALUES (49, 13, '2014-09-12', 0.00, 0.00, 0.00, 0.00, 0.00, 0.00, 0.00, true);


--
-- Data for Name: formato_diario; Type: TABLE DATA; Schema: public; Owner: postgres
--

INSERT INTO formato_diario VALUES (4, '2014-06-02', 13, 24.00, 1480.00, 136.00, 0.00, 0.00, 0.00, 0.00, 0.00, 0.00, 0.00, 0.00, '', 0.00, true, 0.00);
INSERT INTO formato_diario VALUES (5, '2014-06-02', 13, 24.00, 40.00, 24.00, 0.00, 0.10, 0.00, 0.00, 0.00, 0.00, 0.00, 0.00, '', 0.00, true, 0.00);
INSERT INTO formato_diario VALUES (6, '2014-06-02', 13, 24.00, 400.00, 40.00, 80.00, 0.00, 0.00, 0.00, 0.00, 0.00, 0.00, 0.00, '', 0.00, true, 0.00);
INSERT INTO formato_diario VALUES (7, '2014-06-02', 13, 24.00, 1940.00, 90.00, 0.00, 0.00, 0.00, 0.00, 0.00, 0.00, 0.00, 0.00, '', 0.00, true, 0.00);
INSERT INTO formato_diario VALUES (13, '2014-06-02', 13, 21.45, 120.00, 24.13, 0.00, 0.00, 0.00, 0.00, 0.00, 0.00, 0.00, 0.00, '', 0.00, true, 0.00);
INSERT INTO formato_diario VALUES (9, '2014-06-02', 13, 15.00, 100.00, 10.00, 0.00, 0.00, 0.00, 0.00, 0.00, 0.00, 0.00, 0.00, '', 0.00, true, 0.00);
INSERT INTO formato_diario VALUES (8, '2014-06-02', 13, 19.00, 228.00, 14.44, 0.00, 0.00, 0.00, 0.00, 0.00, 0.00, 0.00, 0.00, '', 0.00, true, 0.00);
INSERT INTO formato_diario VALUES (11, '2014-06-02', 13, 12.00, 30.00, 1.00, 0.00, 0.00, 0.00, 0.00, 0.00, 0.00, 0.00, 0.00, '', 0.00, true, 0.00);
INSERT INTO formato_diario VALUES (10, '2014-06-02', 13, 24.00, 64.00, 4.00, 0.00, 0.00, 0.00, 0.00, 0.00, 0.00, 0.00, 0.00, '', 0.00, true, 0.00);
INSERT INTO formato_diario VALUES (12, '2014-06-02', 13, 24.00, 0.00, 1.00, 0.00, 0.00, 0.00, 0.00, 0.00, 0.00, 0.00, 0.00, '', 0.00, true, 0.00);
INSERT INTO formato_diario VALUES (14, '2014-06-02', 13, 24.00, 0.00, 7.00, 0.00, 0.00, 0.00, 0.00, 0.00, 0.00, 0.00, 0.00, '', 0.00, true, 0.00);
INSERT INTO formato_diario VALUES (15, '2014-06-02', 13, 24.00, 0.00, 0.00, 0.00, 0.00, 0.00, 0.00, 0.00, 0.00, 0.00, 0.00, '', 0.00, true, 22.70);
INSERT INTO formato_diario VALUES (2, '2014-06-02', 13, 24.00, 680.00, 91.00, 0.00, 0.00, 0.00, 0.00, 0.00, 0.00, 0.00, 0.00, '', 0.00, true, 0.00);
INSERT INTO formato_diario VALUES (1, '2014-06-02', 13, 0.00, 0.00, 50.00, 0.00, 0.00, 0.00, 0.00, 0.00, 0.00, 0.00, 0.00, '0', 0.00, true, 0.00);
INSERT INTO formato_diario VALUES (3, '2014-06-02', 13, 24.00, 45.00, 114.00, 0.00, 0.00, 0.00, 0.00, 0.00, 0.00, 0.00, 0.00, '', 0.00, true, 0.00);
INSERT INTO formato_diario VALUES (1, '2014-09-15', 13, 2.00, 2.00, 2.00, 2.00, 2.00, 2.00, 2.00, 2.00, 2.00, 2.00, 2.00, '21', 2.00, true, 2.00);


--
-- Data for Name: formato_sustancias; Type: TABLE DATA; Schema: public; Owner: postgres
--

INSERT INTO formato_sustancias VALUES (2, '2014-06-02', 13, 0, 0, 0, 0.00, 0.00, 0.00, 0.00, 0.00, 0.00, 0.00, 0.00, 0.00, 0.00, 3.79, 28.33, 0.00, 0.00, 0.00, '0', 7.00, 12.60, 0.00, 0.00, 0.00, 0, 16, 0.00, 0.00, 0.00, 634.00, 8550.00, 0.00, 0.00, 0.00, 136.20);
INSERT INTO formato_sustancias VALUES (4, '2014-06-02', 13, 0, 0, 0, 0.00, 0.00, 0.00, 0.00, 0.00, 0.00, 0.00, 0.00, 0.00, 0.00, 5.67, 61.67, 0.00, 0.00, 0.00, '0', 79.90, 10.40, 0.00, 0.00, 0.00, 10, 22, 0.00, 0.00, 0.00, 10862.00, 15400.00, 0.00, 20.00, 0.00, 340.50);
INSERT INTO formato_sustancias VALUES (5, '2014-06-02', 13, 0, 0, 0, 0.00, 0.00, 0.00, 0.00, 0.00, 0.00, 0.00, 0.00, 0.00, 0.00, 1.00, 1.67, 0.00, 0.00, 0.00, '0', 15.90, 22.00, 0.00, 5.00, 0.00, 0, 2, 0.00, 0.00, 0.00, 382.00, 880.00, 0.00, 0.50, 275.00, 0.00);
INSERT INTO formato_sustancias VALUES (6, '2014-06-02', 13, 0, 0, 0, 0.00, 0.00, 0.00, 0.00, 0.00, 0.00, 0.00, 0.00, 0.00, 0.00, 1.67, 16.67, 3.33, 0.00, 0.00, '0', 15.00, 6.50, 10.80, 0.00, 0.00, 0, 1, 0.00, 0.00, 0.00, 599.00, 2620.00, 860.00, 0.60, 0.00, 0.00);
INSERT INTO formato_sustancias VALUES (7, '2014-06-02', 13, 0, 0, 0, 0.00, 0.00, 0.00, 0.00, 0.00, 0.00, 0.00, 0.00, 0.00, 0.00, 3.75, 80.83, 0.00, 0.00, 0.00, '0', 1.50, 14.10, 0.00, 0.00, 0.00, 0, 4, 0.00, 0.00, 0.00, 139.00, 27358.00, 0.00, 0.00, 0.00, 0.00);
INSERT INTO formato_sustancias VALUES (8, '2014-06-02', 13, 0, 0, 0, 0.00, 0.00, 0.00, 0.00, 0.00, 0.00, 0.00, 0.00, 0.00, 0.00, 0.76, 12.00, 0.00, 0.00, 0.00, '0', 33.10, 13.40, 0.00, 0.00, 0.00, 1, 2, 0.00, 0.00, 0.00, 478.27, 3064.00, 0.00, 2.50, 0.00, 0.00);
INSERT INTO formato_sustancias VALUES (9, '2014-06-02', 13, 0, 0, 0, 0.00, 0.00, 0.00, 0.00, 0.00, 0.00, 0.00, 0.00, 0.00, 0.00, 0.67, 6.67, 0.00, 0.00, 0.00, '0', 90.70, 30.80, 0.00, 0.00, 0.00, 1, 1, 0.00, 0.00, 0.00, 907.00, 3080.00, 0.00, 0.00, 0.00, 0.00);
INSERT INTO formato_sustancias VALUES (10, '2014-06-02', 13, 0, 0, 0, 0.00, 0.00, 0.00, 0.00, 0.00, 0.00, 0.00, 0.00, 0.00, 0.00, 0.17, 2.67, 0.00, 0.00, 0.00, '0', 113.50, 21.50, 0.00, 0.00, 0.00, 0, 1, 0.00, 0.00, 0.00, 454.00, 1378.00, 0.00, 0.00, 0.00, 0.00);
INSERT INTO formato_sustancias VALUES (11, '2014-06-02', 13, 0, 0, 0, 0.00, 0.00, 0.00, 0.00, 0.00, 0.00, 0.00, 0.00, 0.00, 0.00, 0.08, 2.50, 0.00, 0.00, 0.00, '0', 49.10, 21.00, 0.00, 0.00, 0.00, 0, 0, 0.00, 0.00, 0.00, 49.10, 630.00, 0.00, 0.00, 0.00, 49.10);
INSERT INTO formato_sustancias VALUES (12, '2014-06-02', 13, 0, 0, 0, 0.00, 0.00, 0.00, 0.00, 0.00, 0.00, 0.00, 0.00, 0.00, 0.00, 0.04, 0.00, 0.00, 0.00, 0.00, '0', 110.00, 0.00, 0.00, 0.00, 0.00, 0, 1, 0.00, 0.00, 0.00, 110.00, 0.00, 0.00, 0.00, 0.00, 0.00);
INSERT INTO formato_sustancias VALUES (13, '2014-06-02', 13, 0, 0, 0, 0.00, 0.00, 0.00, 0.00, 0.00, 0.00, 0.00, 0.00, 0.00, 0.00, 1.12, 5.59, 0.00, 0.00, 0.00, '0', 32.10, 2.50, 0.00, 0.00, 0.00, 0, 1, 0.00, 0.00, 0.00, 773.53, 300.00, 0.00, 0.00, 0.00, 0.00);
INSERT INTO formato_sustancias VALUES (14, '2014-06-02', 13, 0, 0, 0, 0.00, 0.00, 0.00, 0.00, 0.00, 0.00, 0.00, 0.00, 0.00, 0.00, 0.29, 0.00, 0.00, 0.00, 0.00, '0', 15.60, 0.00, 0.00, 0.00, 0.00, 0, 1, 0.00, 0.00, 0.00, 109.00, 0.00, 0.00, 0.00, 0.00, 0.00);
INSERT INTO formato_sustancias VALUES (15, '2014-06-02', 13, 0, 0, 0, 0.00, 0.00, 0.00, 0.00, 0.00, 0.00, 0.00, 0.00, 0.00, 0.00, 0.00, 0.00, 0.00, 0.00, 0.00, '0', 0.00, 0.00, 0.00, 0.00, 0.00, 0, 0, 0.00, 0.00, 3.00, 0.00, 0.00, 0.00, 0.00, 0.00, 68.10);
INSERT INTO formato_sustancias VALUES (1, '2014-06-02', 13, 0, 0, 0, 0.00, 100.00, 0.00, 0.00, 0.00, 100.00, 200.00, 0.00, 0.00, 0.00, -0.02, 0.00, 0.00, 0.00, 0.00, '0', 30.00, 30.00, 30.00, 30.00, 0.00, 0, 13, 0.00, 0.00, 0.00, 471.00, 22960.00, 5180.00, 5.00, 0.00, 408.60);
INSERT INTO formato_sustancias VALUES (3, '2014-06-02', 13, 0, 0, 0, 0.00, 0.00, 0.00, 0.00, 0.00, 0.00, 1000.00, 0.00, 0.00, 0.00, 4.75, 0.00, 0.00, 0.00, 0.00, '0', 5.90, 0.00, 0.00, 0.00, 0.00, 1, 25, 0.00, 0.00, 0.00, 674.00, 25905.00, 13.00, 0.00, 0.00, 0.00);


--
-- Name: guardatinajas_id_dia_seq; Type: SEQUENCE SET; Schema: public; Owner: postgres
--

SELECT pg_catalog.setval('guardatinajas_id_dia_seq', 47, true);


--
-- Data for Name: guardatinajas_parametros; Type: TABLE DATA; Schema: public; Owner: postgres
--

INSERT INTO guardatinajas_parametros VALUES (45, 13, '2014-09-10', 0.00, 0.00, 0.00, 0.00, 0.00, 0.00, 0.00, true);
INSERT INTO guardatinajas_parametros VALUES (46, 13, '2014-09-11', 0.00, 0.00, 0.00, 0.00, 0.00, 0.00, 0.00, true);
INSERT INTO guardatinajas_parametros VALUES (47, 13, '2014-09-12', 0.00, 0.00, 0.00, 0.00, 0.00, 0.00, 0.00, true);


--
-- Name: parametrosSanJuan_id_dia_seq; Type: SEQUENCE SET; Schema: public; Owner: postgres
--

SELECT pg_catalog.setval('"parametrosSanJuan_id_dia_seq"', 88, true);


--
-- Name: san_jose_id_dia_seq; Type: SEQUENCE SET; Schema: public; Owner: postgres
--

SELECT pg_catalog.setval('san_jose_id_dia_seq', 58, true);


--
-- Data for Name: san_jose_parametros; Type: TABLE DATA; Schema: public; Owner: postgres
--

INSERT INTO san_jose_parametros VALUES (56, 13, '2014-09-10', 0.00, 0.00, 0.00, 0.00, 0.00, 0.00, 0.00, true);
INSERT INTO san_jose_parametros VALUES (57, 13, '2014-09-11', 0.00, 0.00, 0.00, 0.00, 0.00, 0.00, 0.00, true);
INSERT INTO san_jose_parametros VALUES (58, 13, '2014-09-12', 0.00, 0.00, 0.00, 0.00, 0.00, 0.00, 0.00, true);


--
-- Name: san_rafael_id_dia_seq; Type: SEQUENCE SET; Schema: public; Owner: postgres
--

SELECT pg_catalog.setval('san_rafael_id_dia_seq', 45, true);


--
-- Data for Name: san_rafael_parametros; Type: TABLE DATA; Schema: public; Owner: postgres
--

INSERT INTO san_rafael_parametros VALUES (43, 13, '2014-09-10', 0.00, 0.00, 0.00, 0.00, 0.00, 0.00, 0.00, true);
INSERT INTO san_rafael_parametros VALUES (44, 13, '2014-09-11', 0.00, 0.00, 0.00, 0.00, 0.00, 0.00, 0.00, true);
INSERT INTO san_rafael_parametros VALUES (45, 13, '2014-09-12', 0.00, 0.00, 0.00, 0.00, 0.00, 0.00, 0.00, true);


--
-- Data for Name: sanjuan_parametros; Type: TABLE DATA; Schema: public; Owner: postgres
--

INSERT INTO sanjuan_parametros VALUES (86, 13, '2014-09-10', 23.00, 12.00, 0.00, 0.00, 0.00, 0.00, 0.00, true);
INSERT INTO sanjuan_parametros VALUES (87, 13, '2014-09-11', 0.00, 0.00, 0.00, 0.00, 0.00, 0.00, 0.00, true);
INSERT INTO sanjuan_parametros VALUES (88, 13, '2014-09-12', NULL, NULL, NULL, NULL, NULL, NULL, NULL, false);


--
-- Name: santa_maria_id_dia_seq; Type: SEQUENCE SET; Schema: public; Owner: postgres
--

SELECT pg_catalog.setval('santa_maria_id_dia_seq', 52, true);


--
-- Data for Name: santa_maria_parametros; Type: TABLE DATA; Schema: public; Owner: postgres
--

INSERT INTO santa_maria_parametros VALUES (50, 13, '2014-09-10', 0.00, 0.00, 0.00, 0.00, 0.00, 0.00, 0.00, true);
INSERT INTO santa_maria_parametros VALUES (51, 13, '2014-09-11', 0.00, 0.00, 0.00, 0.00, 0.00, 0.00, 0.00, true);
INSERT INTO santa_maria_parametros VALUES (52, 13, '2014-09-12', 0.00, 0.00, 0.00, 0.00, 0.00, 0.00, 0.00, true);


--
-- Data for Name: sistemas; Type: TABLE DATA; Schema: public; Owner: postgres
--

INSERT INTO sistemas VALUES (1, 'San Juan de los Morros');
INSERT INTO sistemas VALUES (2, 'Calabozo');
INSERT INTO sistemas VALUES (3, 'Altagracia de Orituco');
INSERT INTO sistemas VALUES (4, 'Valle de la Pascua');
INSERT INTO sistemas VALUES (5, 'Tucupido');
INSERT INTO sistemas VALUES (6, 'San José de Guaribe');
INSERT INTO sistemas VALUES (7, 'Zaraza');
INSERT INTO sistemas VALUES (8, 'El Socorro');
INSERT INTO sistemas VALUES (9, 'Santa María de Ipire');
INSERT INTO sistemas VALUES (10, 'Espino');
INSERT INTO sistemas VALUES (11, 'Guardatinajas');
INSERT INTO sistemas VALUES (12, 'San Rafael de Laya');
INSERT INTO sistemas VALUES (13, 'Chaguaramas');
INSERT INTO sistemas VALUES (14, 'Sombrero Galería');
INSERT INTO sistemas VALUES (15, 'Sombrero Est. Banco Obrero');


--
-- Name: sistemas_id_sistema_seq; Type: SEQUENCE SET; Schema: public; Owner: postgres
--

SELECT pg_catalog.setval('sistemas_id_sistema_seq', 15, true);


--
-- Name: socorro_id_dia_seq; Type: SEQUENCE SET; Schema: public; Owner: postgres
--

SELECT pg_catalog.setval('socorro_id_dia_seq', 54, true);


--
-- Data for Name: socorro_parametros; Type: TABLE DATA; Schema: public; Owner: postgres
--

INSERT INTO socorro_parametros VALUES (52, 13, '2014-09-10', 0.00, 0.00, 0.00, 0.00, 0.00, 0.00, 0.00, true);
INSERT INTO socorro_parametros VALUES (53, 13, '2014-09-11', 0.00, 0.00, 0.00, 0.00, 0.00, 0.00, 0.00, true);
INSERT INTO socorro_parametros VALUES (54, 13, '2014-09-12', 0.00, 0.00, 0.00, 0.00, 0.00, 0.00, 0.00, true);


--
-- Name: som_galeria_id_dia_seq; Type: SEQUENCE SET; Schema: public; Owner: postgres
--

SELECT pg_catalog.setval('som_galeria_id_dia_seq', 39, true);


--
-- Data for Name: som_galeria_parametros; Type: TABLE DATA; Schema: public; Owner: postgres
--

INSERT INTO som_galeria_parametros VALUES (37, 13, '2014-09-10', 0.00, 0.00, 0.00, 0.00, 0.00, 0.00, 0.00, true);
INSERT INTO som_galeria_parametros VALUES (38, 13, '2014-09-11', 0.00, 0.00, 0.00, 0.00, 0.00, 0.00, 0.00, true);
INSERT INTO som_galeria_parametros VALUES (39, 13, '2014-09-12', 0.00, 0.00, 0.00, 0.00, 0.00, 0.00, 0.00, true);


--
-- Name: som_obrero_id_dia_seq; Type: SEQUENCE SET; Schema: public; Owner: postgres
--

SELECT pg_catalog.setval('som_obrero_id_dia_seq', 37, true);


--
-- Data for Name: som_obrero_parametros; Type: TABLE DATA; Schema: public; Owner: postgres
--

INSERT INTO som_obrero_parametros VALUES (35, 13, '2014-09-10', 0.00, 0.00, 0.00, 0.00, 0.00, 0.00, 0.00, true);
INSERT INTO som_obrero_parametros VALUES (36, 13, '2014-09-11', 0.00, 0.00, 0.00, 0.00, 0.00, 0.00, 0.00, true);
INSERT INTO som_obrero_parametros VALUES (37, 13, '2014-09-12', 0.00, 0.00, 0.00, 0.00, 0.00, 0.00, 0.00, true);


--
-- Name: tucupido_id_dia_seq; Type: SEQUENCE SET; Schema: public; Owner: postgres
--

SELECT pg_catalog.setval('tucupido_id_dia_seq', 61, true);


--
-- Data for Name: tucupido_parametros; Type: TABLE DATA; Schema: public; Owner: postgres
--

INSERT INTO tucupido_parametros VALUES (59, 13, '2014-09-10', 0.00, 0.00, 0.00, 0.00, 0.00, 0.00, 0.00, true);
INSERT INTO tucupido_parametros VALUES (60, 13, '2014-09-11', 0.00, 0.00, 0.00, 0.00, 0.00, 0.00, 0.00, true);
INSERT INTO tucupido_parametros VALUES (61, 13, '2014-09-12', 0.00, 0.00, 0.00, 0.00, 0.00, 0.00, 0.00, true);


--
-- Name: valle_pascua_id_dia_seq; Type: SEQUENCE SET; Schema: public; Owner: postgres
--

SELECT pg_catalog.setval('valle_pascua_id_dia_seq', 64, true);


--
-- Data for Name: valle_pascua_parametros; Type: TABLE DATA; Schema: public; Owner: postgres
--

INSERT INTO valle_pascua_parametros VALUES (62, 13, '2014-09-10', 0.00, 0.00, 0.00, 0.00, 0.00, 0.00, 0.00, true);
INSERT INTO valle_pascua_parametros VALUES (63, 13, '2014-09-11', 0.00, 0.00, 0.00, 0.00, 0.00, 0.00, 0.00, true);
INSERT INTO valle_pascua_parametros VALUES (64, 13, '2014-09-12', 0.00, 0.00, 0.00, 0.00, 0.00, 0.00, 0.00, true);


--
-- Name: zaraza_id_dia_seq; Type: SEQUENCE SET; Schema: public; Owner: postgres
--

SELECT pg_catalog.setval('zaraza_id_dia_seq', 56, true);


--
-- Data for Name: zaraza_parametros; Type: TABLE DATA; Schema: public; Owner: postgres
--

INSERT INTO zaraza_parametros VALUES (54, 13, '2014-09-10', 0.00, 0.00, 0.00, 0.00, 0.00, 0.00, 0.00, true);
INSERT INTO zaraza_parametros VALUES (55, 13, '2014-09-11', 0.00, 0.00, 0.00, 0.00, 0.00, 0.00, 0.00, true);
INSERT INTO zaraza_parametros VALUES (56, 13, '2014-09-12', 0.00, 0.00, 0.00, 0.00, 0.00, 0.00, 0.00, true);


--
-- Name: Unica; Type: CONSTRAINT; Schema: public; Owner: postgres; Tablespace: 
--

ALTER TABLE ONLY altagracia_parametros
    ADD CONSTRAINT "Unica" UNIQUE (fecha);


--
-- Name: Unica Fecha; Type: CONSTRAINT; Schema: public; Owner: postgres; Tablespace: 
--

ALTER TABLE ONLY tucupido_parametros
    ADD CONSTRAINT "Unica Fecha" UNIQUE (fecha);


--
-- Name: almacenes_pkey; Type: CONSTRAINT; Schema: public; Owner: postgres; Tablespace: 
--

ALTER TABLE ONLY almacenes
    ADD CONSTRAINT almacenes_pkey PRIMARY KEY (id_sistema);


--
-- Name: altagracia_pkey; Type: CONSTRAINT; Schema: public; Owner: postgres; Tablespace: 
--

ALTER TABLE ONLY altagracia_parametros
    ADD CONSTRAINT altagracia_pkey PRIMARY KEY (id_dia);


--
-- Name: calabozo_fecha_key; Type: CONSTRAINT; Schema: public; Owner: postgres; Tablespace: 
--

ALTER TABLE ONLY calabozo_parametros
    ADD CONSTRAINT calabozo_fecha_key UNIQUE (fecha);


--
-- Name: calabozo_pkey; Type: CONSTRAINT; Schema: public; Owner: postgres; Tablespace: 
--

ALTER TABLE ONLY calabozo_parametros
    ADD CONSTRAINT calabozo_pkey PRIMARY KEY (id_dia);


--
-- Name: chaguaramas_fecha_key; Type: CONSTRAINT; Schema: public; Owner: postgres; Tablespace: 
--

ALTER TABLE ONLY chaguaramas_parametros
    ADD CONSTRAINT chaguaramas_fecha_key UNIQUE (fecha);


--
-- Name: chaguaramas_pkey; Type: CONSTRAINT; Schema: public; Owner: postgres; Tablespace: 
--

ALTER TABLE ONLY chaguaramas_parametros
    ADD CONSTRAINT chaguaramas_pkey PRIMARY KEY (id_dia);


--
-- Name: empleados_cedula_key; Type: CONSTRAINT; Schema: public; Owner: postgres; Tablespace: 
--

ALTER TABLE ONLY empleados
    ADD CONSTRAINT empleados_cedula_key UNIQUE (cedula);


--
-- Name: empleados_pkey; Type: CONSTRAINT; Schema: public; Owner: postgres; Tablespace: 
--

ALTER TABLE ONLY empleados
    ADD CONSTRAINT empleados_pkey PRIMARY KEY (id_empleado);


--
-- Name: espino_fecha_key; Type: CONSTRAINT; Schema: public; Owner: postgres; Tablespace: 
--

ALTER TABLE ONLY espino_parametros
    ADD CONSTRAINT espino_fecha_key UNIQUE (fecha);


--
-- Name: espino_pkey; Type: CONSTRAINT; Schema: public; Owner: postgres; Tablespace: 
--

ALTER TABLE ONLY espino_parametros
    ADD CONSTRAINT espino_pkey PRIMARY KEY (id_dia);


--
-- Name: formato_diario_pkey; Type: CONSTRAINT; Schema: public; Owner: postgres; Tablespace: 
--

ALTER TABLE ONLY formato_diario
    ADD CONSTRAINT formato_diario_pkey PRIMARY KEY (id_sistema, fecha);


--
-- Name: formato_sustancias_pkey; Type: CONSTRAINT; Schema: public; Owner: postgres; Tablespace: 
--

ALTER TABLE ONLY formato_sustancias
    ADD CONSTRAINT formato_sustancias_pkey PRIMARY KEY (id_sistema, fecha);


--
-- Name: guardatinajas_fecha_key; Type: CONSTRAINT; Schema: public; Owner: postgres; Tablespace: 
--

ALTER TABLE ONLY guardatinajas_parametros
    ADD CONSTRAINT guardatinajas_fecha_key UNIQUE (fecha);


--
-- Name: guardatinajas_pkey; Type: CONSTRAINT; Schema: public; Owner: postgres; Tablespace: 
--

ALTER TABLE ONLY guardatinajas_parametros
    ADD CONSTRAINT guardatinajas_pkey PRIMARY KEY (id_dia);


--
-- Name: parametrosSanJuan_fecha_key; Type: CONSTRAINT; Schema: public; Owner: postgres; Tablespace: 
--

ALTER TABLE ONLY sanjuan_parametros
    ADD CONSTRAINT "parametrosSanJuan_fecha_key" UNIQUE (fecha);


--
-- Name: parametrosSanJuan_pkey; Type: CONSTRAINT; Schema: public; Owner: postgres; Tablespace: 
--

ALTER TABLE ONLY sanjuan_parametros
    ADD CONSTRAINT "parametrosSanJuan_pkey" PRIMARY KEY (id_dia);


--
-- Name: san_jose_fecha_key; Type: CONSTRAINT; Schema: public; Owner: postgres; Tablespace: 
--

ALTER TABLE ONLY san_jose_parametros
    ADD CONSTRAINT san_jose_fecha_key UNIQUE (fecha);


--
-- Name: san_jose_pkey; Type: CONSTRAINT; Schema: public; Owner: postgres; Tablespace: 
--

ALTER TABLE ONLY san_jose_parametros
    ADD CONSTRAINT san_jose_pkey PRIMARY KEY (id_dia);


--
-- Name: san_rafael_fecha_key; Type: CONSTRAINT; Schema: public; Owner: postgres; Tablespace: 
--

ALTER TABLE ONLY san_rafael_parametros
    ADD CONSTRAINT san_rafael_fecha_key UNIQUE (fecha);


--
-- Name: san_rafael_pkey; Type: CONSTRAINT; Schema: public; Owner: postgres; Tablespace: 
--

ALTER TABLE ONLY san_rafael_parametros
    ADD CONSTRAINT san_rafael_pkey PRIMARY KEY (id_dia);


--
-- Name: santa_maria_fecha_key; Type: CONSTRAINT; Schema: public; Owner: postgres; Tablespace: 
--

ALTER TABLE ONLY santa_maria_parametros
    ADD CONSTRAINT santa_maria_fecha_key UNIQUE (fecha);


--
-- Name: santa_maria_pkey; Type: CONSTRAINT; Schema: public; Owner: postgres; Tablespace: 
--

ALTER TABLE ONLY santa_maria_parametros
    ADD CONSTRAINT santa_maria_pkey PRIMARY KEY (id_dia);


--
-- Name: sistemas_pkey; Type: CONSTRAINT; Schema: public; Owner: postgres; Tablespace: 
--

ALTER TABLE ONLY sistemas
    ADD CONSTRAINT sistemas_pkey PRIMARY KEY (id_sistema);


--
-- Name: socorro_fecha_key; Type: CONSTRAINT; Schema: public; Owner: postgres; Tablespace: 
--

ALTER TABLE ONLY socorro_parametros
    ADD CONSTRAINT socorro_fecha_key UNIQUE (fecha);


--
-- Name: socorro_pkey; Type: CONSTRAINT; Schema: public; Owner: postgres; Tablespace: 
--

ALTER TABLE ONLY socorro_parametros
    ADD CONSTRAINT socorro_pkey PRIMARY KEY (id_dia);


--
-- Name: som_galeria_fecha_key; Type: CONSTRAINT; Schema: public; Owner: postgres; Tablespace: 
--

ALTER TABLE ONLY som_galeria_parametros
    ADD CONSTRAINT som_galeria_fecha_key UNIQUE (fecha);


--
-- Name: som_galeria_pkey; Type: CONSTRAINT; Schema: public; Owner: postgres; Tablespace: 
--

ALTER TABLE ONLY som_galeria_parametros
    ADD CONSTRAINT som_galeria_pkey PRIMARY KEY (id_dia);


--
-- Name: som_obrero_fecha_key; Type: CONSTRAINT; Schema: public; Owner: postgres; Tablespace: 
--

ALTER TABLE ONLY som_obrero_parametros
    ADD CONSTRAINT som_obrero_fecha_key UNIQUE (fecha);


--
-- Name: som_obrero_pkey; Type: CONSTRAINT; Schema: public; Owner: postgres; Tablespace: 
--

ALTER TABLE ONLY som_obrero_parametros
    ADD CONSTRAINT som_obrero_pkey PRIMARY KEY (id_dia);


--
-- Name: tucupido_pkey; Type: CONSTRAINT; Schema: public; Owner: postgres; Tablespace: 
--

ALTER TABLE ONLY tucupido_parametros
    ADD CONSTRAINT tucupido_pkey PRIMARY KEY (id_dia);


--
-- Name: usuario; Type: CONSTRAINT; Schema: public; Owner: postgres; Tablespace: 
--

ALTER TABLE ONLY empleados
    ADD CONSTRAINT usuario UNIQUE (usuario);


--
-- Name: valle_pascua_fecha_key; Type: CONSTRAINT; Schema: public; Owner: postgres; Tablespace: 
--

ALTER TABLE ONLY valle_pascua_parametros
    ADD CONSTRAINT valle_pascua_fecha_key UNIQUE (fecha);


--
-- Name: valle_pascua_pkey; Type: CONSTRAINT; Schema: public; Owner: postgres; Tablespace: 
--

ALTER TABLE ONLY valle_pascua_parametros
    ADD CONSTRAINT valle_pascua_pkey PRIMARY KEY (id_dia);


--
-- Name: zaraza_fecha_key; Type: CONSTRAINT; Schema: public; Owner: postgres; Tablespace: 
--

ALTER TABLE ONLY zaraza_parametros
    ADD CONSTRAINT zaraza_fecha_key UNIQUE (fecha);


--
-- Name: zaraza_pkey; Type: CONSTRAINT; Schema: public; Owner: postgres; Tablespace: 
--

ALTER TABLE ONLY zaraza_parametros
    ADD CONSTRAINT zaraza_pkey PRIMARY KEY (id_dia);


--
-- Name: almacenes_id_sistema_fkey; Type: FK CONSTRAINT; Schema: public; Owner: postgres
--

ALTER TABLE ONLY almacenes
    ADD CONSTRAINT almacenes_id_sistema_fkey FOREIGN KEY (id_sistema) REFERENCES sistemas(id_sistema) ON UPDATE CASCADE ON DELETE CASCADE;


--
-- Name: formato_sustancias_id_sistema_fkey; Type: FK CONSTRAINT; Schema: public; Owner: postgres
--

ALTER TABLE ONLY formato_sustancias
    ADD CONSTRAINT formato_sustancias_id_sistema_fkey FOREIGN KEY (id_sistema) REFERENCES sistemas(id_sistema) ON UPDATE CASCADE ON DELETE CASCADE;


--
-- Name: public; Type: ACL; Schema: -; Owner: postgres
--

REVOKE ALL ON SCHEMA public FROM PUBLIC;
REVOKE ALL ON SCHEMA public FROM postgres;
GRANT ALL ON SCHEMA public TO postgres;
GRANT ALL ON SCHEMA public TO PUBLIC;


--
-- PostgreSQL database dump complete
--

