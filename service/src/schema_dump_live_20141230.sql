--
-- PostgreSQL database dump
--

SET client_encoding = 'UTF8';
SET standard_conforming_strings = off;
SET check_function_bodies = false;
SET client_min_messages = warning;
SET escape_string_warning = off;

SET search_path = public, pg_catalog;

ALTER TABLE ONLY public.ride_offers DROP CONSTRAINT ride_offers_route_id_fkey;
ALTER TABLE ONLY public.public_transport DROP CONSTRAINT public_transport_route_id_fkey;
ALTER TABLE ONLY public.users DROP CONSTRAINT users_pkey;
ALTER TABLE ONLY public.user_registration DROP CONSTRAINT user_registration_pkey;
ALTER TABLE ONLY public.user_number DROP CONSTRAINT user_numbers_pkey;
ALTER TABLE ONLY public.translation DROP CONSTRAINT translation_pkey;
ALTER TABLE ONLY public.taxi DROP CONSTRAINT taxi_pkey;
ALTER TABLE ONLY public.status_log DROP CONSTRAINT status_log_pkey;
ALTER TABLE ONLY public.sms DROP CONSTRAINT sms_pkey;
ALTER TABLE ONLY public.routes DROP CONSTRAINT routes_pkey;
ALTER TABLE ONLY public.route_pickuppoint DROP CONSTRAINT route_pickuppoint_pkey;
ALTER TABLE ONLY public.ride_requests DROP CONSTRAINT ride_requests_pkey;
ALTER TABLE ONLY public.ride_offers DROP CONSTRAINT ride_offers_pkey;
ALTER TABLE ONLY public.public_transport DROP CONSTRAINT public_transport_pkey;
ALTER TABLE ONLY public.pickuppoint DROP CONSTRAINT pickuppoint_pkey;
ALTER TABLE ONLY public.location DROP CONSTRAINT location_pkey;
ALTER TABLE ONLY public.error_log DROP CONSTRAINT error_log_pkey;
ALTER TABLE ONLY public.emailsuffix DROP CONSTRAINT emailsuffix_pkey;
ALTER TABLE ONLY public.company DROP CONSTRAINT companies_pkey;
ALTER TABLE public.users ALTER COLUMN id DROP DEFAULT;
ALTER TABLE public.user_registration ALTER COLUMN id DROP DEFAULT;
ALTER TABLE public.user_number ALTER COLUMN id DROP DEFAULT;
ALTER TABLE public.translation ALTER COLUMN id DROP DEFAULT;
ALTER TABLE public.taxi ALTER COLUMN id DROP DEFAULT;
ALTER TABLE public.status_log ALTER COLUMN id DROP DEFAULT;
ALTER TABLE public.sms ALTER COLUMN id DROP DEFAULT;
ALTER TABLE public.route_pickuppoint ALTER COLUMN id DROP DEFAULT;
ALTER TABLE public.ride_requests ALTER COLUMN id DROP DEFAULT;
ALTER TABLE public.ride_offers ALTER COLUMN id DROP DEFAULT;
ALTER TABLE public.public_transport ALTER COLUMN id DROP DEFAULT;
ALTER TABLE public.pickuppoint ALTER COLUMN id DROP DEFAULT;
ALTER TABLE public.location ALTER COLUMN id DROP DEFAULT;
ALTER TABLE public.error_log ALTER COLUMN id DROP DEFAULT;
ALTER TABLE public.emailsuffix ALTER COLUMN id DROP DEFAULT;
ALTER TABLE public.company ALTER COLUMN id DROP DEFAULT;
DROP SEQUENCE public.users_id_seq;
DROP TABLE public.users;
DROP SEQUENCE public.user_registration_seq;
DROP SEQUENCE public.user_registration_id_seq;
DROP TABLE public.user_registration;
DROP SEQUENCE public.user_numbers_id_seq;
DROP TABLE public.user_number;
DROP SEQUENCE public.translation_id_seq;
DROP TABLE public.translation;
DROP SEQUENCE public.taxi_id_seq;
DROP TABLE public.taxi;
DROP SEQUENCE public.status_log_id_seq;
DROP TABLE public.status_log;
DROP SEQUENCE public.sms_id_seq;
DROP TABLE public.sms;
DROP TABLE public.routes;
DROP SEQUENCE public.routes_seq;
DROP SEQUENCE public.route_pickuppoint_id_seq;
DROP TABLE public.route_pickuppoint;
DROP SEQUENCE public.ride_requests_id_seq;
DROP TABLE public.ride_requests;
DROP SEQUENCE public.ride_offers_id_seq;
DROP TABLE public.ride_offers;
DROP SEQUENCE public.public_transport_id_seq;
DROP TABLE public.public_transport;
DROP SEQUENCE public.pickuppoint_location_id_seq;
DROP SEQUENCE public.pickuppoint_id_seq;
DROP TABLE public.pickuppoint;
DROP SEQUENCE public.location_id_seq;
DROP TABLE public.location;
DROP SEQUENCE public.error_log_id_seq;
DROP TABLE public.error_log;
DROP SEQUENCE public.emailsuffix_id_seq;
DROP TABLE public.emailsuffix;
DROP SEQUENCE public.companies_id_seq;
DROP TABLE public.company;
DROP TYPE public.enum_route_status;
DROP TYPE public.enum_ride_status;


--
-- Name: enum_ride_status; Type: TYPE; Schema: public; Owner: -
--

CREATE TYPE enum_ride_status AS ENUM (
    'open',
    'closed'
);


--
-- Name: enum_route_status; Type: TYPE; Schema: public; Owner: -
--

CREATE TYPE enum_route_status AS ENUM (
    'enabled',
    'disabled'
);


SET default_tablespace = '';

SET default_with_oids = false;

--
-- Name: company; Type: TABLE; Schema: public; Owner: -; Tablespace:
--

CREATE TABLE company (
    id integer NOT NULL,
    name character varying(255),
    smskey character varying(255),
    zendeskid character varying(255),
    logourl character varying(255),
    email character varying(255)
);


--
-- Name: TABLE company; Type: COMMENT; Schema: public; Owner: -
--

COMMENT ON TABLE company IS 'Companies using call2ride';


--
-- Name: companies_id_seq; Type: SEQUENCE; Schema: public; Owner: -
--

CREATE SEQUENCE companies_id_seq
    INCREMENT BY 1
    NO MAXVALUE
    NO MINVALUE
    CACHE 1;


--
-- Name: companies_id_seq; Type: SEQUENCE OWNED BY; Schema: public; Owner: -
--

ALTER SEQUENCE companies_id_seq OWNED BY company.id;


--
-- Name: emailsuffix; Type: TABLE; Schema: public; Owner: -; Tablespace:
--

CREATE TABLE emailsuffix (
    id integer NOT NULL,
    suffix character varying(255),
    location_id integer
);


--
-- Name: emailsuffix_id_seq; Type: SEQUENCE; Schema: public; Owner: -
--

CREATE SEQUENCE emailsuffix_id_seq
    INCREMENT BY 1
    NO MAXVALUE
    NO MINVALUE
    CACHE 1;


--
-- Name: emailsuffix_id_seq; Type: SEQUENCE OWNED BY; Schema: public; Owner: -
--

ALTER SEQUENCE emailsuffix_id_seq OWNED BY emailsuffix.id;


--
-- Name: error_log; Type: TABLE; Schema: public; Owner: -; Tablespace:
--

CREATE TABLE error_log (
    id integer NOT NULL,
    user_id integer,
    code character varying(255),
    message text,
    "time" timestamp without time zone
);


--
-- Name: error_log_id_seq; Type: SEQUENCE; Schema: public; Owner: -
--

CREATE SEQUENCE error_log_id_seq
    INCREMENT BY 1
    NO MAXVALUE
    NO MINVALUE
    CACHE 1;


--
-- Name: error_log_id_seq; Type: SEQUENCE OWNED BY; Schema: public; Owner: -
--

ALTER SEQUENCE error_log_id_seq OWNED BY error_log.id;


--
-- Name: location; Type: TABLE; Schema: public; Owner: -; Tablespace:
--

CREATE TABLE location (
    id integer NOT NULL,
    company_id integer,
    "Name" character varying(255),
    timezone character varying(255),
    phone character varying(255)
);


--
-- Name: location_id_seq; Type: SEQUENCE; Schema: public; Owner: -
--

CREATE SEQUENCE location_id_seq
    INCREMENT BY 1
    NO MAXVALUE
    NO MINVALUE
    CACHE 1;


--
-- Name: location_id_seq; Type: SEQUENCE OWNED BY; Schema: public; Owner: -
--

ALTER SEQUENCE location_id_seq OWNED BY location.id;


--
-- Name: pickuppoint; Type: TABLE; Schema: public; Owner: -; Tablespace:
--

CREATE TABLE pickuppoint (
    id integer NOT NULL,
    location_id integer,
    name character varying(255),
    geo character varying(255),
    key character varying(3)
);


--
-- Name: TABLE pickuppoint; Type: COMMENT; Schema: public; Owner: -
--

COMMENT ON TABLE pickuppoint IS 'Pickuppoints';


--
-- Name: pickuppoint_id_seq; Type: SEQUENCE; Schema: public; Owner: -
--

CREATE SEQUENCE pickuppoint_id_seq
    INCREMENT BY 1
    NO MAXVALUE
    NO MINVALUE
    CACHE 1;


--
-- Name: pickuppoint_id_seq; Type: SEQUENCE OWNED BY; Schema: public; Owner: -
--

ALTER SEQUENCE pickuppoint_id_seq OWNED BY pickuppoint.id;


--
-- Name: pickuppoint_location_id_seq; Type: SEQUENCE; Schema: public; Owner: -
--

CREATE SEQUENCE pickuppoint_location_id_seq
    START WITH 1
    INCREMENT BY 1
    NO MAXVALUE
    NO MINVALUE
    CACHE 1;


--
-- Name: pickuppoint_location_id_seq; Type: SEQUENCE OWNED BY; Schema: public; Owner: -
--

ALTER SEQUENCE pickuppoint_location_id_seq OWNED BY pickuppoint.location_id;


--
-- Name: public_transport; Type: TABLE; Schema: public; Owner: -; Tablespace:
--

CREATE TABLE public_transport (
    id integer NOT NULL,
    route_id integer NOT NULL,
    departure_time time without time zone NOT NULL,
    arrival_time time without time zone NOT NULL,
    means text,
    start_point integer,
    end_point integer
);


--
-- Name: COLUMN public_transport.route_id; Type: COMMENT; Schema: public; Owner: -
--

COMMENT ON COLUMN public_transport.route_id IS 'is this still needed?';


--
-- Name: public_transport_id_seq; Type: SEQUENCE; Schema: public; Owner: -
--

CREATE SEQUENCE public_transport_id_seq
    INCREMENT BY 1
    NO MAXVALUE
    NO MINVALUE
    CACHE 1;


--
-- Name: public_transport_id_seq; Type: SEQUENCE OWNED BY; Schema: public; Owner: -
--

ALTER SEQUENCE public_transport_id_seq OWNED BY public_transport.id;


--
-- Name: ride_offers; Type: TABLE; Schema: public; Owner: -; Tablespace:
--

CREATE TABLE ride_offers (
    id integer NOT NULL,
    user_number_id integer NOT NULL,
    route_id integer NOT NULL,
    start_time timestamp with time zone NOT NULL,
    request_time timestamp with time zone DEFAULT now(),
    status enum_ride_status NOT NULL,
    reverse boolean
);


--
-- Name: ride_offers_id_seq; Type: SEQUENCE; Schema: public; Owner: -
--

CREATE SEQUENCE ride_offers_id_seq
    INCREMENT BY 1
    NO MAXVALUE
    NO MINVALUE
    CACHE 1;


--
-- Name: ride_offers_id_seq; Type: SEQUENCE OWNED BY; Schema: public; Owner: -
--

ALTER SEQUENCE ride_offers_id_seq OWNED BY ride_offers.id;


--
-- Name: ride_requests; Type: TABLE; Schema: public; Owner: -; Tablespace:
--

CREATE TABLE ride_requests (
    id integer NOT NULL,
    earliest_start_time timestamp with time zone NOT NULL,
    latest_start_time timestamp with time zone NOT NULL,
    request_time timestamp with time zone DEFAULT now(),
    status enum_ride_status NOT NULL,
    start_point integer,
    end_point integer,
    user_number_id integer
);


--
-- Name: ride_requests_id_seq; Type: SEQUENCE; Schema: public; Owner: -
--

CREATE SEQUENCE ride_requests_id_seq
    INCREMENT BY 1
    NO MAXVALUE
    NO MINVALUE
    CACHE 1;


--
-- Name: ride_requests_id_seq; Type: SEQUENCE OWNED BY; Schema: public; Owner: -
--

ALTER SEQUENCE ride_requests_id_seq OWNED BY ride_requests.id;


--
-- Name: route_pickuppoint; Type: TABLE; Schema: public; Owner: -; Tablespace:
--

CREATE TABLE route_pickuppoint (
    id integer NOT NULL,
    route_id integer,
    point_id integer,
    steptime time without time zone,
    "position" integer
);


--
-- Name: COLUMN route_pickuppoint.route_id; Type: COMMENT; Schema: public; Owner: -
--

COMMENT ON COLUMN route_pickuppoint.route_id IS 'ID of the route. Unique only in combination with location ID and user ID';


--
-- Name: COLUMN route_pickuppoint.point_id; Type: COMMENT; Schema: public; Owner: -
--

COMMENT ON COLUMN route_pickuppoint.point_id IS 'ID of the pickuppoint';


--
-- Name: COLUMN route_pickuppoint.steptime; Type: COMMENT; Schema: public; Owner: -
--

COMMENT ON COLUMN route_pickuppoint.steptime IS 'time it takes to reach this point from the start point (static, should be dynamic vi TCM + route planner in future)';


--
-- Name: COLUMN route_pickuppoint."position"; Type: COMMENT; Schema: public; Owner: -
--

COMMENT ON COLUMN route_pickuppoint."position" IS 'determines the sequence of pickuppoints within a route';


--
-- Name: route_pickuppoint_id_seq; Type: SEQUENCE; Schema: public; Owner: -
--

CREATE SEQUENCE route_pickuppoint_id_seq
    INCREMENT BY 1
    NO MAXVALUE
    NO MINVALUE
    CACHE 1;


--
-- Name: route_pickuppoint_id_seq; Type: SEQUENCE OWNED BY; Schema: public; Owner: -
--

ALTER SEQUENCE route_pickuppoint_id_seq OWNED BY route_pickuppoint.id;


--
-- Name: routes_seq; Type: SEQUENCE; Schema: public; Owner: -
--

CREATE SEQUENCE routes_seq
    INCREMENT BY 1
    NO MAXVALUE
    NO MINVALUE
    CACHE 1;


--
-- Name: routes; Type: TABLE; Schema: public; Owner: -; Tablespace:
--

CREATE TABLE routes (
    id integer DEFAULT nextval('routes_seq'::regclass) NOT NULL,
    origin character varying,
    destination character varying,
    status enum_route_status,
    key character varying(3),
    location_id integer,
    user_id integer
);


--
-- Name: COLUMN routes.id; Type: COMMENT; Schema: public; Owner: -
--

COMMENT ON COLUMN routes.id IS 'Unique identifyer, internal only, not to be confused with "key" which is the public route identifyer to be entered by the user';


--
-- Name: COLUMN routes.status; Type: COMMENT; Schema: public; Owner: -
--

COMMENT ON COLUMN routes.status IS 'enabled/disabled';


--
-- Name: COLUMN routes.key; Type: COMMENT; Schema: public; Owner: -
--

COMMENT ON COLUMN routes.key IS 'Key for identifying the route';


--
-- Name: COLUMN routes.location_id; Type: COMMENT; Schema: public; Owner: -
--

COMMENT ON COLUMN routes.location_id IS 'the same routes keys can exist at multiple locations';


--
-- Name: COLUMN routes.user_id; Type: COMMENT; Schema: public; Owner: -
--

COMMENT ON COLUMN routes.user_id IS 'NULL in case of public routes or set with a value in case of user-specific routes';


--
-- Name: sms; Type: TABLE; Schema: public; Owner: -; Tablespace:
--

CREATE TABLE sms (
    id integer NOT NULL,
    message text,
    message_id character varying(20),
    receiver_nr character varying(30),
    cost numeric,
    send_time timestamp with time zone DEFAULT now(),
    error text
);


--
-- Name: sms_id_seq; Type: SEQUENCE; Schema: public; Owner: -
--

CREATE SEQUENCE sms_id_seq
    INCREMENT BY 1
    NO MAXVALUE
    NO MINVALUE
    CACHE 1;


--
-- Name: sms_id_seq; Type: SEQUENCE OWNED BY; Schema: public; Owner: -
--

ALTER SEQUENCE sms_id_seq OWNED BY sms.id;


--
-- Name: status_log; Type: TABLE; Schema: public; Owner: -; Tablespace:
--

CREATE TABLE status_log (
    id integer NOT NULL,
    ride_offer_id integer,
    ride_requests_id integer,
    old_status enum_ride_status,
    new_status enum_ride_status,
    change_time timestamp with time zone DEFAULT now()
);


--
-- Name: status_log_id_seq; Type: SEQUENCE; Schema: public; Owner: -
--

CREATE SEQUENCE status_log_id_seq
    INCREMENT BY 1
    NO MAXVALUE
    NO MINVALUE
    CACHE 1;


--
-- Name: status_log_id_seq; Type: SEQUENCE OWNED BY; Schema: public; Owner: -
--

ALTER SEQUENCE status_log_id_seq OWNED BY status_log.id;


--
-- Name: taxi; Type: TABLE; Schema: public; Owner: -; Tablespace:
--

CREATE TABLE taxi (
    id integer NOT NULL,
    number character varying(50),
    location_id integer
);


--
-- Name: taxi_id_seq; Type: SEQUENCE; Schema: public; Owner: -
--

CREATE SEQUENCE taxi_id_seq
    INCREMENT BY 1
    NO MAXVALUE
    NO MINVALUE
    CACHE 1;


--
-- Name: taxi_id_seq; Type: SEQUENCE OWNED BY; Schema: public; Owner: -
--

ALTER SEQUENCE taxi_id_seq OWNED BY taxi.id;


--
-- Name: translation; Type: TABLE; Schema: public; Owner: -; Tablespace:
--

CREATE TABLE translation (
    id integer NOT NULL,
    lang character varying(10),
    key text,
    translation text
);


--
-- Name: translation_id_seq; Type: SEQUENCE; Schema: public; Owner: -
--

CREATE SEQUENCE translation_id_seq
    INCREMENT BY 1
    NO MAXVALUE
    NO MINVALUE
    CACHE 1;


--
-- Name: translation_id_seq; Type: SEQUENCE OWNED BY; Schema: public; Owner: -
--

ALTER SEQUENCE translation_id_seq OWNED BY translation.id;


--
-- Name: user_number; Type: TABLE; Schema: public; Owner: -; Tablespace:
--

CREATE TABLE user_number (
    id integer NOT NULL,
    user_id integer,
    number character varying(255),
    is_default boolean,
    validation_code character varying(10),
    is_active boolean
);


--
-- Name: user_numbers_id_seq; Type: SEQUENCE; Schema: public; Owner: -
--

CREATE SEQUENCE user_numbers_id_seq
    INCREMENT BY 1
    NO MAXVALUE
    NO MINVALUE
    CACHE 1;


--
-- Name: user_numbers_id_seq; Type: SEQUENCE OWNED BY; Schema: public; Owner: -
--

ALTER SEQUENCE user_numbers_id_seq OWNED BY user_number.id;


--
-- Name: user_registration; Type: TABLE; Schema: public; Owner: -; Tablespace:
--

CREATE TABLE user_registration (
    id integer NOT NULL,
    name character varying NOT NULL,
    cell_phone_nr character varying(50),
    email character varying(255),
    code_cell_phone character varying(20),
    code_email character varying(20),
    created timestamp with time zone,
    status integer
);


--
-- Name: TABLE user_registration; Type: COMMENT; Schema: public; Owner: -
--

COMMENT ON TABLE user_registration IS 'Data for the Registration Process';


--
-- Name: user_registration_id_seq; Type: SEQUENCE; Schema: public; Owner: -
--

CREATE SEQUENCE user_registration_id_seq
    INCREMENT BY 1
    NO MAXVALUE
    NO MINVALUE
    CACHE 1;


--
-- Name: user_registration_id_seq; Type: SEQUENCE OWNED BY; Schema: public; Owner: -
--

ALTER SEQUENCE user_registration_id_seq OWNED BY user_registration.id;


--
-- Name: user_registration_seq; Type: SEQUENCE; Schema: public; Owner: -
--

CREATE SEQUENCE user_registration_seq
    START WITH 1
    INCREMENT BY 1
    NO MAXVALUE
    NO MINVALUE
    CACHE 1;


--
-- Name: users; Type: TABLE; Schema: public; Owner: -; Tablespace:
--

CREATE TABLE users (
    id integer NOT NULL,
    name character varying,
    is_active boolean,
    email character varying(255),
    company_id integer,
    default_location_id integer,
    password character varying(255),
    group_id integer,
    lost_password character varying(10),
    language character varying(255)
);


--
-- Name: users_id_seq; Type: SEQUENCE; Schema: public; Owner: -
--

CREATE SEQUENCE users_id_seq
    INCREMENT BY 1
    NO MAXVALUE
    NO MINVALUE
    CACHE 1;


--
-- Name: users_id_seq; Type: SEQUENCE OWNED BY; Schema: public; Owner: -
--

ALTER SEQUENCE users_id_seq OWNED BY users.id;


--
-- Name: id; Type: DEFAULT; Schema: public; Owner: -
--

ALTER TABLE company ALTER COLUMN id SET DEFAULT nextval('companies_id_seq'::regclass);


--
-- Name: id; Type: DEFAULT; Schema: public; Owner: -
--

ALTER TABLE emailsuffix ALTER COLUMN id SET DEFAULT nextval('emailsuffix_id_seq'::regclass);


--
-- Name: id; Type: DEFAULT; Schema: public; Owner: -
--

ALTER TABLE error_log ALTER COLUMN id SET DEFAULT nextval('error_log_id_seq'::regclass);


--
-- Name: id; Type: DEFAULT; Schema: public; Owner: -
--

ALTER TABLE location ALTER COLUMN id SET DEFAULT nextval('location_id_seq'::regclass);


--
-- Name: id; Type: DEFAULT; Schema: public; Owner: -
--

ALTER TABLE pickuppoint ALTER COLUMN id SET DEFAULT nextval('pickuppoint_id_seq'::regclass);


--
-- Name: id; Type: DEFAULT; Schema: public; Owner: -
--

ALTER TABLE public_transport ALTER COLUMN id SET DEFAULT nextval('public_transport_id_seq'::regclass);


--
-- Name: id; Type: DEFAULT; Schema: public; Owner: -
--

ALTER TABLE ride_offers ALTER COLUMN id SET DEFAULT nextval('ride_offers_id_seq'::regclass);


--
-- Name: id; Type: DEFAULT; Schema: public; Owner: -
--

ALTER TABLE ride_requests ALTER COLUMN id SET DEFAULT nextval('ride_requests_id_seq'::regclass);


--
-- Name: id; Type: DEFAULT; Schema: public; Owner: -
--

ALTER TABLE route_pickuppoint ALTER COLUMN id SET DEFAULT nextval('route_pickuppoint_id_seq'::regclass);


--
-- Name: id; Type: DEFAULT; Schema: public; Owner: -
--

ALTER TABLE sms ALTER COLUMN id SET DEFAULT nextval('sms_id_seq'::regclass);


--
-- Name: id; Type: DEFAULT; Schema: public; Owner: -
--

ALTER TABLE status_log ALTER COLUMN id SET DEFAULT nextval('status_log_id_seq'::regclass);


--
-- Name: id; Type: DEFAULT; Schema: public; Owner: -
--

ALTER TABLE taxi ALTER COLUMN id SET DEFAULT nextval('taxi_id_seq'::regclass);


--
-- Name: id; Type: DEFAULT; Schema: public; Owner: -
--

ALTER TABLE translation ALTER COLUMN id SET DEFAULT nextval('translation_id_seq'::regclass);


--
-- Name: id; Type: DEFAULT; Schema: public; Owner: -
--

ALTER TABLE user_number ALTER COLUMN id SET DEFAULT nextval('user_numbers_id_seq'::regclass);


--
-- Name: id; Type: DEFAULT; Schema: public; Owner: -
--

ALTER TABLE user_registration ALTER COLUMN id SET DEFAULT nextval('user_registration_id_seq'::regclass);


--
-- Name: id; Type: DEFAULT; Schema: public; Owner: -
--

ALTER TABLE users ALTER COLUMN id SET DEFAULT nextval('users_id_seq'::regclass);


--
-- Name: companies_pkey; Type: CONSTRAINT; Schema: public; Owner: -; Tablespace:
--

ALTER TABLE ONLY company
    ADD CONSTRAINT companies_pkey PRIMARY KEY (id);


--
-- Name: emailsuffix_pkey; Type: CONSTRAINT; Schema: public; Owner: -; Tablespace:
--

ALTER TABLE ONLY emailsuffix
    ADD CONSTRAINT emailsuffix_pkey PRIMARY KEY (id);


--
-- Name: error_log_pkey; Type: CONSTRAINT; Schema: public; Owner: -; Tablespace:
--

ALTER TABLE ONLY error_log
    ADD CONSTRAINT error_log_pkey PRIMARY KEY (id);


--
-- Name: location_pkey; Type: CONSTRAINT; Schema: public; Owner: -; Tablespace:
--

ALTER TABLE ONLY location
    ADD CONSTRAINT location_pkey PRIMARY KEY (id);


--
-- Name: pickuppoint_pkey; Type: CONSTRAINT; Schema: public; Owner: -; Tablespace:
--

ALTER TABLE ONLY pickuppoint
    ADD CONSTRAINT pickuppoint_pkey PRIMARY KEY (id);


--
-- Name: public_transport_pkey; Type: CONSTRAINT; Schema: public; Owner: -; Tablespace:
--

ALTER TABLE ONLY public_transport
    ADD CONSTRAINT public_transport_pkey PRIMARY KEY (id);


--
-- Name: ride_offers_pkey; Type: CONSTRAINT; Schema: public; Owner: -; Tablespace:
--

ALTER TABLE ONLY ride_offers
    ADD CONSTRAINT ride_offers_pkey PRIMARY KEY (id);


--
-- Name: ride_requests_pkey; Type: CONSTRAINT; Schema: public; Owner: -; Tablespace:
--

ALTER TABLE ONLY ride_requests
    ADD CONSTRAINT ride_requests_pkey PRIMARY KEY (id);


--
-- Name: route_pickuppoint_pkey; Type: CONSTRAINT; Schema: public; Owner: -; Tablespace:
--

ALTER TABLE ONLY route_pickuppoint
    ADD CONSTRAINT route_pickuppoint_pkey PRIMARY KEY (id);


--
-- Name: routes_pkey; Type: CONSTRAINT; Schema: public; Owner: -; Tablespace:
--

ALTER TABLE ONLY routes
    ADD CONSTRAINT routes_pkey PRIMARY KEY (id);


--
-- Name: sms_pkey; Type: CONSTRAINT; Schema: public; Owner: -; Tablespace:
--

ALTER TABLE ONLY sms
    ADD CONSTRAINT sms_pkey PRIMARY KEY (id);


--
-- Name: status_log_pkey; Type: CONSTRAINT; Schema: public; Owner: -; Tablespace:
--

ALTER TABLE ONLY status_log
    ADD CONSTRAINT status_log_pkey PRIMARY KEY (id);


--
-- Name: taxi_pkey; Type: CONSTRAINT; Schema: public; Owner: -; Tablespace:
--

ALTER TABLE ONLY taxi
    ADD CONSTRAINT taxi_pkey PRIMARY KEY (id);


--
-- Name: translation_pkey; Type: CONSTRAINT; Schema: public; Owner: -; Tablespace:
--

ALTER TABLE ONLY translation
    ADD CONSTRAINT translation_pkey PRIMARY KEY (id);


--
-- Name: user_numbers_pkey; Type: CONSTRAINT; Schema: public; Owner: -; Tablespace:
--

ALTER TABLE ONLY user_number
    ADD CONSTRAINT user_numbers_pkey PRIMARY KEY (id);


--
-- Name: user_registration_pkey; Type: CONSTRAINT; Schema: public; Owner: -; Tablespace:
--

ALTER TABLE ONLY user_registration
    ADD CONSTRAINT user_registration_pkey PRIMARY KEY (id);


--
-- Name: users_pkey; Type: CONSTRAINT; Schema: public; Owner: -; Tablespace:
--

ALTER TABLE ONLY users
    ADD CONSTRAINT users_pkey PRIMARY KEY (id);


--
-- Name: public_transport_route_id_fkey; Type: FK CONSTRAINT; Schema: public; Owner: -
--

ALTER TABLE ONLY public_transport
    ADD CONSTRAINT public_transport_route_id_fkey FOREIGN KEY (route_id) REFERENCES routes(id);


--
-- Name: ride_offers_route_id_fkey; Type: FK CONSTRAINT; Schema: public; Owner: -
--

ALTER TABLE ONLY ride_offers
    ADD CONSTRAINT ride_offers_route_id_fkey FOREIGN KEY (route_id) REFERENCES routes(id);


--
-- PostgreSQL database dump complete
--

