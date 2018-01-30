<?php
    die;
?>
/* inserty */

INSERT INTO kdm_languages
(language_id, label, name)
VALUES(1, 'pl', 'polski');
INSERT INTO kdm_languages
(language_id, label, name)
VALUES(2, 'en', 'angielski');

INSERT INTO kdm_countries
(country_id, name, latitude, longitude, flag_img_url)
VALUES(1, 'Polska', '51.9554186', '14.647386', '/wp-content/themes/kd/images/flags/pl.png');
INSERT INTO kdm_countries
(country_id, name, latitude, longitude, flag_img_url)
VALUES(2, 'Grecja', '37.9746139', '23.7175228', '/wp-content/themes/kd/images/flags/gr.png');
INSERT INTO kdm_countries
(country_id, name, latitude, longitude, flag_img_url)
VALUES(3, 'Holandia', '52.1399808', '4.4347074', '/wp-content/themes/kd/images/flags/nl.png');
INSERT INTO kdm_countries
(country_id, name, latitude, longitude, flag_img_url)
VALUES(4, 'Ukraina', '49.33002', '24.3127435', '/wp-content/themes/kd/images/flags/ua.png');
INSERT INTO kdm_countries
(country_id, name, latitude, longitude, flag_img_url)
VALUES(5, 'Nowa Zelandia', '-43.6078206', '169.0444282', '/wp-content/themes/kd/images/flags/nz.png');
INSERT INTO kdm_countries
(country_id, name, latitude, longitude, flag_img_url)
VALUES(6, 'Czechy', '49.545', '14.1703701', '/wp-content/themes/kd/images/flags/cz.png');
INSERT INTO kdm_countries
(country_id, name, latitude, longitude, flag_img_url)
VALUES(7, 'Irlandia', '52.548349', ' -8.493179', '/wp-content/themes/kd/images/flags/ie.png');
INSERT INTO kdm_countries
(country_id, name, latitude, longitude, flag_img_url)
VALUES(8, 'Azerbejdżan', '40.453144', '47.821610', '/wp-content/themes/kd/images/flags/az.png');

INSERT INTO kdm_cities
(city_id, country_id, name, latitude, longitude)
VALUES(1, 1, 'Dobrzeń Wielki', '50.7695173', '17.7175531');
INSERT INTO kdm_cities
(city_id, country_id, name, latitude, longitude)
VALUES(2, 1, 'Gniezno', '52.5248666', '17.5330065');
INSERT INTO kdm_cities
(city_id, country_id, name, latitude, longitude)
VALUES(3, 1, 'Olsztyn', '53.7760917', '20.3956599');
INSERT INTO kdm_cities
(city_id, country_id, name, latitude, longitude)
VALUES(4, 1, 'Szklarska Poręba', '50.8142755', '15.4665624');
INSERT INTO kdm_cities
(city_id, country_id, name, latitude, longitude)
VALUES(5, 1, 'Jarosław', '50.021484', '22.675723');
INSERT INTO kdm_cities
(city_id, country_id, name, latitude, longitude)
VALUES(6, 1, 'Hartowiec', '53.3991727', '19.8434519');
INSERT INTO kdm_cities
(city_id, country_id, name, latitude, longitude)
VALUES(7, 1, 'Pruszcz Gdański', '54.2576805', '18.6143139');
INSERT INTO kdm_cities
(city_id, country_id, name, latitude, longitude)
VALUES(8, 1, 'Kutno', '52.2222787', '19.3008818');
INSERT INTO kdm_cities
(city_id, country_id, name, latitude, longitude)
VALUES(9, 1, 'Więcławice Stare', '50.1555671', '20.0181778');
INSERT INTO kdm_cities
(city_id, country_id, name, latitude, longitude)
VALUES(10, 1, 'Ciosmy', '50.5438913', '22.5402783');
INSERT INTO kdm_cities
(city_id, country_id, name, latitude, longitude)
VALUES(11, 1, 'Zamość', '50.7213772', '23.2134073');
INSERT INTO kdm_cities
(city_id, country_id, name, latitude, longitude)
VALUES(12, 1, 'Gryfice', '53.916859', '15.1674496');
INSERT INTO kdm_cities
(city_id, country_id, name, latitude, longitude)
VALUES(13, 1, 'Łomża', '53.169229', '22.0231161');
INSERT INTO kdm_cities
(city_id, country_id, name, latitude, longitude)
VALUES(14, 1, 'Huta Krzeszowska', '50.5245282', '22.4520013');
INSERT INTO kdm_cities
(city_id, country_id, name, latitude, longitude)
VALUES(15, 1, 'Gdańsk', '54.3610059', '18.548103');
INSERT INTO kdm_cities
(city_id, country_id, name, latitude, longitude)
VALUES(16, 1, 'Bydgoszcz', '53.1256045', '17.8957804');
INSERT INTO kdm_cities
(city_id, country_id, name, latitude, longitude)
VALUES(17, 1, 'Bzinica Stara', '50.6885667', '18.4567357');
INSERT INTO kdm_cities
(city_id, country_id, name, latitude, longitude)
VALUES(18, 1, 'Wielka Wieś', '50.1516252', '19.7395922');
INSERT INTO kdm_cities
(city_id, country_id, name, latitude, longitude)
VALUES(19, 1, 'Limanowa', '49.7150897', '20.3752048');
INSERT INTO kdm_cities
(city_id, country_id, name, latitude, longitude)
VALUES(20, 1, 'Białystok', '53.1276046', '23.0858544');
INSERT INTO kdm_cities
(city_id, country_id, name, latitude, longitude)
VALUES(21, 2, 'Ateny', '37.972280', '23.725978');
INSERT INTO kdm_cities
(city_id, country_id, name, latitude, longitude)
VALUES(22, 3, 'Badhoevedorp', '52.3300102', '4.7467976');
INSERT INTO kdm_cities
(city_id, country_id, name, latitude, longitude)
VALUES(23, 4, 'Szepetówka', '50.1823529', '27.0233412');
INSERT INTO kdm_cities
(city_id, country_id, name, latitude, longitude)
VALUES(24, 5, 'Christchurch', '-43.5130508', '172.4586488');
INSERT INTO kdm_cities
(city_id, country_id, name, latitude, longitude)
VALUES(25, 6, 'Czeski Cieszyn', '49.7364049', '18.5453625');
INSERT INTO kdm_cities
(city_id, country_id, name, latitude, longitude)
VALUES(26, 7, 'Cork', '51.8959842', '-8.5332614');
INSERT INTO kdm_cities
(city_id, country_id, name, latitude, longitude)
VALUES(27, 8, 'Baku', '40.390594', '49.837074');
INSERT INTO kdm_cities
(city_id, country_id, name, latitude, longitude)
VALUES(28, 1, 'Cieszanów', '50.245719', '23.129832');
INSERT INTO kdm_cities
(city_id, country_id, name, latitude, longitude)
VALUES(29, 1, 'Firlej', '51.558740', '22.509511');
INSERT INTO kdm_cities
(city_id, country_id, name, latitude, longitude)
VALUES(30, 1, 'Grabowiec', '50.819929', '23.550988');
INSERT INTO kdm_cities
(city_id, country_id, name, latitude, longitude)
VALUES(31, 1, 'Grabowiec gm. Dubicze Cerkiewne', '52.640905', '23.417394');
INSERT INTO kdm_cities
(city_id, country_id, name, latitude, longitude)
VALUES(32, 1, 'Huszlew', '52.136248', '22.841023');
INSERT INTO kdm_cities
(city_id, country_id, name, latitude, longitude)
VALUES(33, 1, 'Łańcut', '50.069484', '22.229638');
INSERT INTO kdm_cities
(city_id, country_id, name, latitude, longitude)
VALUES(34, 1, 'Łódź', '51.764536', '19.455522');
INSERT INTO kdm_cities
(city_id, country_id, name, latitude, longitude)
VALUES(35, 1, 'Kołczygłowy', '54.238583', '17.231627');
INSERT INTO kdm_cities
(city_id, country_id, name, latitude, longitude)
VALUES(36, 1, 'Kotórz Wielki', '50.725564', '18.072762');
INSERT INTO kdm_cities
(city_id, country_id, name, latitude, longitude)
VALUES(37, 1, 'Krzyworzeka', '51.184826', '18.518440');
INSERT INTO kdm_cities
(city_id, country_id, name, latitude, longitude)
VALUES(38, 1, 'Laski', '51.405888', '19.275592');
INSERT INTO kdm_cities
(city_id, country_id, name, latitude, longitude)
VALUES(39, 1, 'Lgota-Mokrzesz', '50.613271', '19.237181');
INSERT INTO kdm_cities
(city_id, country_id, name, latitude, longitude)
VALUES(40, 1, 'Lubań', '51.117603', '15.289957');
INSERT INTO kdm_cities
(city_id, country_id, name, latitude, longitude)
VALUES(41, 1, 'Opolno Zdrój', '50.885050', '14.928371');
INSERT INTO kdm_cities
(city_id, country_id, name, latitude, longitude)
VALUES(42, 1, 'Otłoczyn', '52.907024', '18.721835');
INSERT INTO kdm_cities
(city_id, country_id, name, latitude, longitude)
VALUES(43, 1, 'Polanka Wielka', '49.985341', '19.326420');
INSERT INTO kdm_cities
(city_id, country_id, name, latitude, longitude)
VALUES(44, 1, 'Poręba', '50.488273', '19.338903');
INSERT INTO kdm_cities
(city_id, country_id, name, latitude, longitude)
VALUES(45, 1, 'Przededworze', '50.611543', '20.728937');
INSERT INTO kdm_cities
(city_id, country_id, name, latitude, longitude)
VALUES(46, 1, 'Przedmoście', '51.628583', '16.161513');
INSERT INTO kdm_cities
(city_id, country_id, name, latitude, longitude)
VALUES(47, 1, 'Ryki', '51.625622', '21.933189');
INSERT INTO kdm_cities
(city_id, country_id, name, latitude, longitude)
VALUES(48, 1, 'Siedlce', '52.167569', '22.290086');
INSERT INTO kdm_cities
(city_id, country_id, name, latitude, longitude)
VALUES(49, 1, 'Skierniewice', '51.954186', '20.158527');
INSERT INTO kdm_cities
(city_id, country_id, name, latitude, longitude)
VALUES(50, 1, 'Stoczek Łukowski', '51.961406', '21.971268');
INSERT INTO kdm_cities
(city_id, country_id, name, latitude, longitude)
VALUES(51, 1, 'Strzegom', '50.959871', '16.352026');
INSERT INTO kdm_cities
(city_id, country_id, name, latitude, longitude)
VALUES(52, 1, 'Tarnobrzeg', '50.572988', '21.679244');
INSERT INTO kdm_cities
(city_id, country_id, name, latitude, longitude)
VALUES(53, 1, 'Toruń', '53.013795', '18.598437');
INSERT INTO kdm_cities
(city_id, country_id, name, latitude, longitude)
VALUES(54, 1, 'Wisznice', '51.788251', '23.209019');


/* /inserty */

/* inserty */
INSERT INTO kdm_email_templates
(email_template_id, label, description)
VALUES(1, 'after_payment_confirmation', 'Wiadomość wysyłana po zatwierdzonej wpłacie.');

INSERT INTO kdm_email_templates
(email_template_id, label, description)
VALUES(2, 'after_payment_created', 'Wiadomość wysyłana po utworzeniu płatności.');

/* /inserty */

/* placeholdery na angielskie langi */
INSERT INTO kdm_country_languages (country_id, language_id, name)
SELECT country_id, language_id, kdm_countries.name FROM kdm_countries JOIN kdm_languages ORDER BY language_id;

INSERT INTO kdm_city_languages (city_id, language_id, name)
SELECT city_id, language_id, kdm_cities.name FROM kdm_cities JOIN kdm_languages ORDER BY language_id;

/* posty nowego typu */
INSERT INTO wpkd_posts
(ID, post_author, post_date, post_date_gmt, post_content, post_title, post_excerpt, post_status, comment_status, ping_status, post_password, post_name, to_ping, pinged, post_modified, post_modified_gmt, post_content_filtered, post_parent, guid, menu_order, post_type, post_mime_type, comment_count)
VALUES(6593, 1, STR_TO_DATE('2017-01-11 12:17:22','%Y-%m-%d %H:%i:%s'), STR_TO_DATE('2017-01-11 11:17:22','%Y-%m-%d %H:%i:%s'), '', 'Fundacja Managerska CREATIVE', '', 'publish', 'closed', 'closed', '', 'fundacja-managerska-creative', '', '', STR_TO_DATE('2017-01-11 12:18:49','%Y-%m-%d %H:%i:%s'), STR_TO_DATE('2017-01-11 11:18:49','%Y-%m-%d %H:%i:%s'), '', 0, 'http://kilometrydobra.loc/?post_type=organization_2017&#038;p=6593', 0, 'organization_2017', '', 0);
INSERT INTO wpkd_posts
(ID, post_author, post_date, post_date_gmt, post_content, post_title, post_excerpt, post_status, comment_status, ping_status, post_password, post_name, to_ping, pinged, post_modified, post_modified_gmt, post_content_filtered, post_parent, guid, menu_order, post_type, post_mime_type, comment_count)
VALUES(6594, 1, STR_TO_DATE('2017-01-11 12:18:09','%Y-%m-%d %H:%i:%s'), STR_TO_DATE('2017-01-11 11:18:09','%Y-%m-%d %H:%i:%s'), '', 'Fundacja Patria', '', 'publish', 'closed', 'closed', '', 'fundacja-patria', '', '', STR_TO_DATE('2017-01-11 12:18:09','%Y-%m-%d %H:%i:%s'), STR_TO_DATE('2017-01-11 11:18:09','%Y-%m-%d %H:%i:%s'), '', 0, 'http://kilometrydobra.loc/?post_type=organization_2017&#038;p=6594', 0, 'organization_2017', '', 0);
INSERT INTO wpkd_posts
(ID, post_author, post_date, post_date_gmt, post_content, post_title, post_excerpt, post_status, comment_status, ping_status, post_password, post_name, to_ping, pinged, post_modified, post_modified_gmt, post_content_filtered, post_parent, guid, menu_order, post_type, post_mime_type, comment_count)
VALUES(6595, 1, STR_TO_DATE('2017-01-11 12:19:35','%Y-%m-%d %H:%i:%s'), STR_TO_DATE('2017-01-11 11:19:35','%Y-%m-%d %H:%i:%s'), '', 'Fundacja Przyszłość dla Dzieci', '', 'publish', 'closed', 'closed', '', 'fundacja-przyszlosc-dla-dzieci', '', '', STR_TO_DATE('2017-01-11 12:19:35','%Y-%m-%d %H:%i:%s'), STR_TO_DATE('2017-01-11 11:19:35','%Y-%m-%d %H:%i:%s'), '', 0, 'http://kilometrydobra.loc/?post_type=organization_2017&#038;p=6595', 0, 'organization_2017', '', 0);
INSERT INTO wpkd_posts
(ID, post_author, post_date, post_date_gmt, post_content, post_title, post_excerpt, post_status, comment_status, ping_status, post_password, post_name, to_ping, pinged, post_modified, post_modified_gmt, post_content_filtered, post_parent, guid, menu_order, post_type, post_mime_type, comment_count)
VALUES(6596, 1, STR_TO_DATE('2017-01-11 12:19:59','%Y-%m-%d %H:%i:%s'), STR_TO_DATE('2017-01-11 11:19:59','%Y-%m-%d %H:%i:%s'), '', 'Stowarzyszenie Rodziców Dzieci Niepełnosprawnych', '', 'publish', 'closed', 'closed', '', 'stowarzyszenie-rodzicow-dzieci-niepelnosprawnych', '', '', STR_TO_DATE('2017-01-11 12:19:59','%Y-%m-%d %H:%i:%s'), STR_TO_DATE('2017-01-11 11:19:59','%Y-%m-%d %H:%i:%s'), '', 0, 'http://kilometrydobra.loc/?post_type=organization_2017&#038;p=6596', 0, 'organization_2017', '', 0);
INSERT INTO wpkd_posts
(ID, post_author, post_date, post_date_gmt, post_content, post_title, post_excerpt, post_status, comment_status, ping_status, post_password, post_name, to_ping, pinged, post_modified, post_modified_gmt, post_content_filtered, post_parent, guid, menu_order, post_type, post_mime_type, comment_count)
VALUES(6597, 1, STR_TO_DATE('2017-01-11 12:20:32','%Y-%m-%d %H:%i:%s'), STR_TO_DATE('2017-01-11 11:20:32','%Y-%m-%d %H:%i:%s'), '', 'Towarzystwo Przyjaciół Dzieci, Stowarzyszenie Sympatyków Zespołu Szkół Spożywczych Chemicznych i Ogólnokształcących, Stowarzyszenie na Rzecz Integracji i Edukacji "Razem Łatwiej" przy Szkole Podstawowej Nr 11 z Oddziałami Integracyjnymi', '', 'publish', 'closed', 'closed', '', 'towarzystwo-przyjaciol-dzieci-stowarzyszenie-sympatykow-zespolu-szkol-spozywczych-chemicznych-i-ogolnoksztalcacych-stowarzyszenie-na-rzecz-integracji-i-edukacji-razem-latwiej-przy-szkole-podstaw', '', '', STR_TO_DATE('2017-01-11 12:20:32','%Y-%m-%d %H:%i:%s'), STR_TO_DATE('2017-01-11 11:20:32','%Y-%m-%d %H:%i:%s'), '', 0, 'http://kilometrydobra.loc/?post_type=organization_2017&#038;p=6597', 0, 'organization_2017', '', 0);
INSERT INTO wpkd_posts
(ID, post_author, post_date, post_date_gmt, post_content, post_title, post_excerpt, post_status, comment_status, ping_status, post_password, post_name, to_ping, pinged, post_modified, post_modified_gmt, post_content_filtered, post_parent, guid, menu_order, post_type, post_mime_type, comment_count)
VALUES(6598, 1, STR_TO_DATE('2017-01-11 12:22:33','%Y-%m-%d %H:%i:%s'), STR_TO_DATE('2017-01-11 11:22:33','%Y-%m-%d %H:%i:%s'), '', 'Parafia rzymskokatolicka p.w. Podwyższenia Krzyża św. w Hartowcu', '', 'publish', 'closed', 'closed', '', 'parafia-rzymskokatolicka-p-w-podwyzszenia-krzyza-sw-w-hartowcu', '', '', STR_TO_DATE('2017-01-11 12:22:33','%Y-%m-%d %H:%i:%s'), STR_TO_DATE('2017-01-11 11:22:33','%Y-%m-%d %H:%i:%s'), '', 0, 'http://kilometrydobra.loc/?post_type=organization_2017&#038;p=6598', 0, 'organization_2017', '', 0);
INSERT INTO wpkd_posts
(ID, post_author, post_date, post_date_gmt, post_content, post_title, post_excerpt, post_status, comment_status, ping_status, post_password, post_name, to_ping, pinged, post_modified, post_modified_gmt, post_content_filtered, post_parent, guid, menu_order, post_type, post_mime_type, comment_count)
VALUES(6599, 1, STR_TO_DATE('2017-01-11 12:23:28','%Y-%m-%d %H:%i:%s'), STR_TO_DATE('2017-01-11 11:23:28','%Y-%m-%d %H:%i:%s'), '', 'Stowarzyszenie Podaj Rękę', '', 'publish', 'closed', 'closed', '', 'stowarzyszenie-podaj-reke', '', '', STR_TO_DATE('2017-01-11 12:23:28','%Y-%m-%d %H:%i:%s'), STR_TO_DATE('2017-01-11 11:23:28','%Y-%m-%d %H:%i:%s'), '', 0, 'http://kilometrydobra.loc/?post_type=organization_2017&#038;p=6599', 0, 'organization_2017', '', 0);
INSERT INTO wpkd_posts
(ID, post_author, post_date, post_date_gmt, post_content, post_title, post_excerpt, post_status, comment_status, ping_status, post_password, post_name, to_ping, pinged, post_modified, post_modified_gmt, post_content_filtered, post_parent, guid, menu_order, post_type, post_mime_type, comment_count)
VALUES(6600, 1, STR_TO_DATE('2017-01-11 12:24:28','%Y-%m-%d %H:%i:%s'), STR_TO_DATE('2017-01-11 11:24:28','%Y-%m-%d %H:%i:%s'), '', 'Stowarzyszenie Podaj Rękę', '', 'publish', 'closed', 'closed', '', 'stowarzyszenie-podaj-reke-2', '', '', STR_TO_DATE('2017-01-11 12:24:28','%Y-%m-%d %H:%i:%s'), STR_TO_DATE('2017-01-11 11:24:28','%Y-%m-%d %H:%i:%s'), '', 0, 'http://kilometrydobra.loc/?post_type=organization_2017&#038;p=6600', 0, 'organization_2017', '', 0);
INSERT INTO wpkd_posts
(ID, post_author, post_date, post_date_gmt, post_content, post_title, post_excerpt, post_status, comment_status, ping_status, post_password, post_name, to_ping, pinged, post_modified, post_modified_gmt, post_content_filtered, post_parent, guid, menu_order, post_type, post_mime_type, comment_count)
VALUES(6601, 1, STR_TO_DATE('2017-01-11 12:25:03','%Y-%m-%d %H:%i:%s'), STR_TO_DATE('2017-01-11 11:25:03','%Y-%m-%d %H:%i:%s'), '', 'Sanktuarium Św. Jakuba Apostoła', '', 'publish', 'closed', 'closed', '', 'sanktuarium-sw-jakuba-apostola', '', '', STR_TO_DATE('2017-01-11 12:25:03','%Y-%m-%d %H:%i:%s'), STR_TO_DATE('2017-01-11 11:25:03','%Y-%m-%d %H:%i:%s'), '', 0, 'http://kilometrydobra.loc/?post_type=organization_2017&#038;p=6601', 0, 'organization_2017', '', 0);
INSERT INTO wpkd_posts
(ID, post_author, post_date, post_date_gmt, post_content, post_title, post_excerpt, post_status, comment_status, ping_status, post_password, post_name, to_ping, pinged, post_modified, post_modified_gmt, post_content_filtered, post_parent, guid, menu_order, post_type, post_mime_type, comment_count)
VALUES(6602, 1, STR_TO_DATE('2017-01-11 12:25:46','%Y-%m-%d %H:%i:%s'), STR_TO_DATE('2017-01-11 11:25:46','%Y-%m-%d %H:%i:%s'), '', 'Stowarzyszenie Dąb', '', 'publish', 'closed', 'closed', '', 'stowarzyszenie-dab', '', '', STR_TO_DATE('2017-01-11 12:25:46','%Y-%m-%d %H:%i:%s'), STR_TO_DATE('2017-01-11 11:25:46','%Y-%m-%d %H:%i:%s'), '', 0, 'http://kilometrydobra.loc/?post_type=organization_2017&#038;p=6602', 0, 'organization_2017', '', 0);
INSERT INTO wpkd_posts
(ID, post_author, post_date, post_date_gmt, post_content, post_title, post_excerpt, post_status, comment_status, ping_status, post_password, post_name, to_ping, pinged, post_modified, post_modified_gmt, post_content_filtered, post_parent, guid, menu_order, post_type, post_mime_type, comment_count)
VALUES(6603, 1, STR_TO_DATE('2017-01-11 12:26:35','%Y-%m-%d %H:%i:%s'), STR_TO_DATE('2017-01-11 11:26:35','%Y-%m-%d %H:%i:%s'), '', 'Polskie Stowarzyszenie na rzecz Osób z Niepełnosprawnością Intelektualną Koło', '', 'publish', 'closed', 'closed', '', 'polskie-stowarzyszenie-na-rzecz-osob-z-niepelnosprawnoscia-intelektualna-kolo', '', '', STR_TO_DATE('2017-01-11 12:26:35','%Y-%m-%d %H:%i:%s'), STR_TO_DATE('2017-01-11 11:26:35','%Y-%m-%d %H:%i:%s'), '', 0, 'http://kilometrydobra.loc/?post_type=organization_2017&#038;p=6603', 0, 'organization_2017', '', 0);
INSERT INTO wpkd_posts
(ID, post_author, post_date, post_date_gmt, post_content, post_title, post_excerpt, post_status, comment_status, ping_status, post_password, post_name, to_ping, pinged, post_modified, post_modified_gmt, post_content_filtered, post_parent, guid, menu_order, post_type, post_mime_type, comment_count)
VALUES(6604, 1, STR_TO_DATE('2017-01-11 12:27:14','%Y-%m-%d %H:%i:%s'), STR_TO_DATE('2017-01-11 11:27:14','%Y-%m-%d %H:%i:%s'), '', 'PSOUU Gryfice', '', 'publish', 'closed', 'closed', '', 'psouu-gryfice', '', '', STR_TO_DATE('2017-01-11 12:27:14','%Y-%m-%d %H:%i:%s'), STR_TO_DATE('2017-01-11 11:27:14','%Y-%m-%d %H:%i:%s'), '', 0, 'http://kilometrydobra.loc/?post_type=organization_2017&#038;p=6604', 0, 'organization_2017', '', 0);
INSERT INTO wpkd_posts
(ID, post_author, post_date, post_date_gmt, post_content, post_title, post_excerpt, post_status, comment_status, ping_status, post_password, post_name, to_ping, pinged, post_modified, post_modified_gmt, post_content_filtered, post_parent, guid, menu_order, post_type, post_mime_type, comment_count)
VALUES(6605, 1, STR_TO_DATE('2017-01-11 12:27:48','%Y-%m-%d %H:%i:%s'), STR_TO_DATE('2017-01-11 11:27:48','%Y-%m-%d %H:%i:%s'), '', 'Caritas Diecezji Łomżyńskiej', '', 'publish', 'closed', 'closed', '', 'caritas-diecezji-lomzynskiej', '', '', STR_TO_DATE('2017-01-11 12:27:48','%Y-%m-%d %H:%i:%s'), STR_TO_DATE('2017-01-11 11:27:48','%Y-%m-%d %H:%i:%s'), '', 0, 'http://kilometrydobra.loc/?post_type=organization_2017&#038;p=6605', 0, 'organization_2017', '', 0);
INSERT INTO wpkd_posts
(ID, post_author, post_date, post_date_gmt, post_content, post_title, post_excerpt, post_status, comment_status, ping_status, post_password, post_name, to_ping, pinged, post_modified, post_modified_gmt, post_content_filtered, post_parent, guid, menu_order, post_type, post_mime_type, comment_count)
VALUES(6606, 1, STR_TO_DATE('2017-01-11 12:29:25','%Y-%m-%d %H:%i:%s'), STR_TO_DATE('2017-01-11 11:29:25','%Y-%m-%d %H:%i:%s'), '', 'Uczniowski Klub Sportowy "Impuls"', '', 'publish', 'closed', 'closed', '', 'uczniowski-klub-sportowy-impuls', '', '', STR_TO_DATE('2017-01-11 12:29:25','%Y-%m-%d %H:%i:%s'), STR_TO_DATE('2017-01-11 11:29:25','%Y-%m-%d %H:%i:%s'), '', 0, 'http://kilometrydobra.loc/?post_type=organization_2017&#038;p=6606', 0, 'organization_2017', '', 0);
INSERT INTO wpkd_posts
(ID, post_author, post_date, post_date_gmt, post_content, post_title, post_excerpt, post_status, comment_status, ping_status, post_password, post_name, to_ping, pinged, post_modified, post_modified_gmt, post_content_filtered, post_parent, guid, menu_order, post_type, post_mime_type, comment_count)
VALUES(6607, 1, STR_TO_DATE('2017-01-11 12:30:03','%Y-%m-%d %H:%i:%s'), STR_TO_DATE('2017-01-11 11:30:03','%Y-%m-%d %H:%i:%s'), '', 'Stowarzyszenie Podaj Rękę', '', 'publish', 'closed', 'closed', '', 'stowarzyszenie-podaj-reke-3', '', '', STR_TO_DATE('2017-01-11 12:30:03','%Y-%m-%d %H:%i:%s'), STR_TO_DATE('2017-01-11 11:30:03','%Y-%m-%d %H:%i:%s'), '', 0, 'http://kilometrydobra.loc/?post_type=organization_2017&#038;p=6607', 0, 'organization_2017', '', 0);
INSERT INTO wpkd_posts
(ID, post_author, post_date, post_date_gmt, post_content, post_title, post_excerpt, post_status, comment_status, ping_status, post_password, post_name, to_ping, pinged, post_modified, post_modified_gmt, post_content_filtered, post_parent, guid, menu_order, post_type, post_mime_type, comment_count)
VALUES(6608, 1, STR_TO_DATE('2017-01-11 12:30:51','%Y-%m-%d %H:%i:%s'), STR_TO_DATE('2017-01-11 11:30:51','%Y-%m-%d %H:%i:%s'), '', 'Stowarzyszenie Podaj Rękę', '', 'publish', 'closed', 'closed', '', 'stowarzyszenie-podaj-reke-4', '', '', STR_TO_DATE('2017-01-11 12:30:51','%Y-%m-%d %H:%i:%s'), STR_TO_DATE('2017-01-11 11:30:51','%Y-%m-%d %H:%i:%s'), '', 0, 'http://kilometrydobra.loc/?post_type=organization_2017&#038;p=6608', 0, 'organization_2017', '', 0);
INSERT INTO wpkd_posts
(ID, post_author, post_date, post_date_gmt, post_content, post_title, post_excerpt, post_status, comment_status, ping_status, post_password, post_name, to_ping, pinged, post_modified, post_modified_gmt, post_content_filtered, post_parent, guid, menu_order, post_type, post_mime_type, comment_count)
VALUES(6609, 1, STR_TO_DATE('2017-01-11 12:31:41','%Y-%m-%d %H:%i:%s'), STR_TO_DATE('2017-01-11 11:31:41','%Y-%m-%d %H:%i:%s'), '', 'Stowarzyszenie Rozwoju Wsi', '', 'publish', 'closed', 'closed', '', 'stowarzyszenie-rozwoju-wsi', '', '', STR_TO_DATE('2017-01-11 12:31:41','%Y-%m-%d %H:%i:%s'), STR_TO_DATE('2017-01-11 11:31:41','%Y-%m-%d %H:%i:%s'), '', 0, 'http://kilometrydobra.loc/?post_type=organization_2017&#038;p=6609', 0, 'organization_2017', '', 0);
INSERT INTO wpkd_posts
(ID, post_author, post_date, post_date_gmt, post_content, post_title, post_excerpt, post_status, comment_status, ping_status, post_password, post_name, to_ping, pinged, post_modified, post_modified_gmt, post_content_filtered, post_parent, guid, menu_order, post_type, post_mime_type, comment_count)
VALUES(6610, 1, STR_TO_DATE('2017-01-11 12:33:13','%Y-%m-%d %H:%i:%s'), STR_TO_DATE('2017-01-11 11:33:13','%Y-%m-%d %H:%i:%s'), '', 'Fundacja Mój Sen', '', 'publish', 'closed', 'closed', '', 'fundacja-moj-sen', '', '', STR_TO_DATE('2017-01-11 12:33:13','%Y-%m-%d %H:%i:%s'), STR_TO_DATE('2017-01-11 11:33:13','%Y-%m-%d %H:%i:%s'), '', 0, 'http://kilometrydobra.loc/?post_type=organization_2017&#038;p=6610', 0, 'organization_2017', '', 0);
INSERT INTO wpkd_posts
(ID, post_author, post_date, post_date_gmt, post_content, post_title, post_excerpt, post_status, comment_status, ping_status, post_password, post_name, to_ping, pinged, post_modified, post_modified_gmt, post_content_filtered, post_parent, guid, menu_order, post_type, post_mime_type, comment_count)
VALUES(6611, 1, STR_TO_DATE('2017-01-11 12:33:48','%Y-%m-%d %H:%i:%s'), STR_TO_DATE('2017-01-11 11:33:48','%Y-%m-%d %H:%i:%s'), '', 'Limanowska Akcja Charytatywna', '', 'publish', 'closed', 'closed', '', 'limanowska-akcja-charytatywna', '', '', STR_TO_DATE('2017-01-11 12:33:48','%Y-%m-%d %H:%i:%s'), STR_TO_DATE('2017-01-11 11:33:48','%Y-%m-%d %H:%i:%s'), '', 0, 'http://kilometrydobra.loc/?post_type=organization_2017&#038;p=6611', 0, 'organization_2017', '', 0);
INSERT INTO wpkd_posts
(ID, post_author, post_date, post_date_gmt, post_content, post_title, post_excerpt, post_status, comment_status, ping_status, post_password, post_name, to_ping, pinged, post_modified, post_modified_gmt, post_content_filtered, post_parent, guid, menu_order, post_type, post_mime_type, comment_count)
VALUES(6612, 1, STR_TO_DATE('2017-01-11 12:34:33','%Y-%m-%d %H:%i:%s'), STR_TO_DATE('2017-01-11 11:34:33','%Y-%m-%d %H:%i:%s'), '', 'Caritas Archidiecezji', '', 'publish', 'closed', 'closed', '', 'caritas-archidiecezji', '', '', STR_TO_DATE('2017-01-11 12:34:33','%Y-%m-%d %H:%i:%s'), STR_TO_DATE('2017-01-11 11:34:33','%Y-%m-%d %H:%i:%s'), '', 0, 'http://kilometrydobra.loc/?post_type=organization_2017&#038;p=6612', 0, 'organization_2017', '', 0);
INSERT INTO wpkd_posts
(ID, post_author, post_date, post_date_gmt, post_content, post_title, post_excerpt, post_status, comment_status, ping_status, post_password, post_name, to_ping, pinged, post_modified, post_modified_gmt, post_content_filtered, post_parent, guid, menu_order, post_type, post_mime_type, comment_count)
VALUES(6613, 1, STR_TO_DATE('2017-01-11 12:35:08','%Y-%m-%d %H:%i:%s'), STR_TO_DATE('2017-01-11 11:35:08','%Y-%m-%d %H:%i:%s'), '', '*Fundacja EuroPolonia', '', 'publish', 'closed', 'closed', '', 'fundacja-europolonia', '', '', STR_TO_DATE('2017-01-11 12:35:08','%Y-%m-%d %H:%i:%s'), STR_TO_DATE('2017-01-11 11:35:08','%Y-%m-%d %H:%i:%s'), '', 0, 'http://kilometrydobra.loc/?post_type=organization_2017&#038;p=6613', 0, 'organization_2017', '', 0);
INSERT INTO wpkd_posts
(ID, post_author, post_date, post_date_gmt, post_content, post_title, post_excerpt, post_status, comment_status, ping_status, post_password, post_name, to_ping, pinged, post_modified, post_modified_gmt, post_content_filtered, post_parent, guid, menu_order, post_type, post_mime_type, comment_count)
VALUES(6614, 1, STR_TO_DATE('2017-01-11 12:35:44','%Y-%m-%d %H:%i:%s'), STR_TO_DATE('2017-01-11 11:35:44','%Y-%m-%d %H:%i:%s'), '', 'Zrzeszenie Polaków w Grecji "Książe Mieszko"', '', 'publish', 'closed', 'closed', '', 'zrzeszenie-polakow-w-grecji-ksiaze-mieszko', '', '', STR_TO_DATE('2017-01-11 12:35:44','%Y-%m-%d %H:%i:%s'), STR_TO_DATE('2017-01-11 11:35:44','%Y-%m-%d %H:%i:%s'), '', 0, 'http://kilometrydobra.loc/?post_type=organization_2017&#038;p=6614', 0, 'organization_2017', '', 0);
INSERT INTO wpkd_posts
(ID, post_author, post_date, post_date_gmt, post_content, post_title, post_excerpt, post_status, comment_status, ping_status, post_password, post_name, to_ping, pinged, post_modified, post_modified_gmt, post_content_filtered, post_parent, guid, menu_order, post_type, post_mime_type, comment_count)
VALUES(6615, 1, STR_TO_DATE('2017-01-11 12:36:42','%Y-%m-%d %H:%i:%s'), STR_TO_DATE('2017-01-11 11:36:42','%Y-%m-%d %H:%i:%s'), '', 'Wspólnota Polska "Polonia - Azerbejdżan"', '', 'publish', 'closed', 'closed', '', 'wspolnota-polska-polonia-azerbejdzan', '', '', STR_TO_DATE('2017-01-11 12:36:43','%Y-%m-%d %H:%i:%s'), STR_TO_DATE('2017-01-11 11:36:43','%Y-%m-%d %H:%i:%s'), '', 0, 'http://kilometrydobra.loc/?post_type=organization_2017&#038;p=6615', 0, 'organization_2017', '', 0);
INSERT INTO wpkd_posts
(ID, post_author, post_date, post_date_gmt, post_content, post_title, post_excerpt, post_status, comment_status, ping_status, post_password, post_name, to_ping, pinged, post_modified, post_modified_gmt, post_content_filtered, post_parent, guid, menu_order, post_type, post_mime_type, comment_count)
VALUES(6616, 1, STR_TO_DATE('2017-01-11 12:37:11','%Y-%m-%d %H:%i:%s'), STR_TO_DATE('2017-01-11 11:37:11','%Y-%m-%d %H:%i:%s'), '', '*Stowarzyszenie My Cork', '', 'publish', 'closed', 'closed', '', 'stowarzyszenie-my-cork', '', '', STR_TO_DATE('2017-01-11 12:37:11','%Y-%m-%d %H:%i:%s'), STR_TO_DATE('2017-01-11 11:37:11','%Y-%m-%d %H:%i:%s'), '', 0, 'http://kilometrydobra.loc/?post_type=organization_2017&#038;p=6616', 0, 'organization_2017', '', 0);
INSERT INTO wpkd_posts
(ID, post_author, post_date, post_date_gmt, post_content, post_title, post_excerpt, post_status, comment_status, ping_status, post_password, post_name, to_ping, pinged, post_modified, post_modified_gmt, post_content_filtered, post_parent, guid, menu_order, post_type, post_mime_type, comment_count)
VALUES(6617, 1, STR_TO_DATE('2017-01-11 12:37:44','%Y-%m-%d %H:%i:%s'), STR_TO_DATE('2017-01-11 11:37:44','%Y-%m-%d %H:%i:%s'), '', '*Polski Związek Kulturalno - Oświatowy', '', 'publish', 'closed', 'closed', '', 'polski-zwiazek-kulturalno-oswiatowy', '', '', STR_TO_DATE('2017-01-11 12:37:44','%Y-%m-%d %H:%i:%s'), STR_TO_DATE('2017-01-11 11:37:44','%Y-%m-%d %H:%i:%s'), '', 0, 'http://kilometrydobra.loc/?post_type=organization_2017&#038;p=6617', 0, 'organization_2017', '', 0);
INSERT INTO wpkd_posts
(ID, post_author, post_date, post_date_gmt, post_content, post_title, post_excerpt, post_status, comment_status, ping_status, post_password, post_name, to_ping, pinged, post_modified, post_modified_gmt, post_content_filtered, post_parent, guid, menu_order, post_type, post_mime_type, comment_count)
VALUES(6618, 1, STR_TO_DATE('2017-01-11 12:38:13','%Y-%m-%d %H:%i:%s'), STR_TO_DATE('2017-01-11 11:38:13','%Y-%m-%d %H:%i:%s'), '', '*Federacja Polskich Organizacji w Nowej Zelandii', '', 'publish', 'closed', 'closed', '', 'federacja-polskich-organizacji-w-nowej-zelandii', '', '', STR_TO_DATE('2017-01-11 12:38:13','%Y-%m-%d %H:%i:%s'), STR_TO_DATE('2017-01-11 11:38:13','%Y-%m-%d %H:%i:%s'), '', 0, 'http://kilometrydobra.loc/?post_type=organization_2017&#038;p=6618', 0, 'organization_2017', '', 0);
INSERT INTO wpkd_posts
(ID, post_author, post_date, post_date_gmt, post_content, post_title, post_excerpt, post_status, comment_status, ping_status, post_password, post_name, to_ping, pinged, post_modified, post_modified_gmt, post_content_filtered, post_parent, guid, menu_order, post_type, post_mime_type, comment_count)
VALUES(6619, 1, STR_TO_DATE('2017-01-11 12:38:52','%Y-%m-%d %H:%i:%s'), STR_TO_DATE('2017-01-11 11:38:52','%Y-%m-%d %H:%i:%s'), '', 'Odział Związku Polaków na Ukrainie', '', 'publish', 'closed', 'closed', '', 'odzial-zwiazku-polakow-na-ukrainie', '', '', STR_TO_DATE('2017-01-11 12:38:52','%Y-%m-%d %H:%i:%s'), STR_TO_DATE('2017-01-11 11:38:52','%Y-%m-%d %H:%i:%s'), '', 0, 'http://kilometrydobra.loc/?post_type=organization_2017&#038;p=6619', 0, 'organization_2017', '', 0);

/* organizacje */
INSERT INTO kdm_organizations
(organization_id, city_id, bm_service_id, bm_key, paypal_email, logo_img_url)
VALUES(6593, 1, 0, '', '', '/wp-content/uploads/2016/11/LOGOcreative.png');
INSERT INTO kdm_organizations
(organization_id, city_id, bm_service_id, bm_key, paypal_email, logo_img_url)
VALUES(6594, 2, 0, '', '', '/wp-content/uploads/2016/12/LOGOpatria.png');
INSERT INTO kdm_organizations
(organization_id, city_id, bm_service_id, bm_key, paypal_email, logo_img_url)
VALUES(6595, 3, 0, '', '', '/wp-content/uploads/2016/11/LOGOprzyszlosc2.jpg');
INSERT INTO kdm_organizations
(organization_id, city_id, bm_service_id, bm_key, paypal_email, logo_img_url)
VALUES(6596, 4, 0, '', '', '');
INSERT INTO kdm_organizations
(organization_id, city_id, bm_service_id, bm_key, paypal_email, logo_img_url)
VALUES(6597, 5, 0, '', '', '');
INSERT INTO kdm_organizations
(organization_id, city_id, bm_service_id, bm_key, paypal_email, logo_img_url)
VALUES(6598, 6, 0, '', '', '/wp-content/uploads/2016/11/LOGOhartowiec.gif');
INSERT INTO kdm_organizations
(organization_id, city_id, bm_service_id, bm_key, paypal_email, logo_img_url)
VALUES(6599, 7, 0, '', '', '/wp-content/uploads/2016/10/LOGOpodaj-r%C4%99ke.png');
INSERT INTO kdm_organizations
(organization_id, city_id, bm_service_id, bm_key, paypal_email, logo_img_url)
VALUES(6600, 8, 0, '', '', '/wp-content/uploads/2016/10/LOGOpodaj-r%C4%99ke.png');
INSERT INTO kdm_organizations
(organization_id, city_id, bm_service_id, bm_key, paypal_email, logo_img_url)
VALUES(6601, 9, 0, '', '', '/wp-content/uploads/2016/02/Logo.jpg');
INSERT INTO kdm_organizations
(organization_id, city_id, bm_service_id, bm_key, paypal_email, logo_img_url)
VALUES(6602, 10, 0, '', '', '/wp-content/uploads/2016/02/D%C4%85b.png');
INSERT INTO kdm_organizations
(organization_id, city_id, bm_service_id, bm_key, paypal_email, logo_img_url)
VALUES(6603, 11, 0, '', '', '/wp-content/uploads/2016/02/PSOUU_wl_-_logo.jpg');
INSERT INTO kdm_organizations
(organization_id, city_id, bm_service_id, bm_key, paypal_email, logo_img_url)
VALUES(6604, 12, 0, '', '', '/wp-content/uploads/2016/02/PSOUU_wl_-_logo.jpg');
INSERT INTO kdm_organizations
(organization_id, city_id, bm_service_id, bm_key, paypal_email, logo_img_url)
VALUES(6605, 13, 0, '', '', '/wp-content/uploads/2016/02/fundacja-logo.png');
INSERT INTO kdm_organizations
(organization_id, city_id, bm_service_id, bm_key, paypal_email, logo_img_url)
VALUES(6606, 14, 0, '', '', '/wp-content/uploads/2016/06/LOGOdab.png');
INSERT INTO kdm_organizations
(organization_id, city_id, bm_service_id, bm_key, paypal_email, logo_img_url)
VALUES(6607, 15, 0, '', '', '/wp-content/uploads/2016/10/LOGOpodaj-r%C4%99ke.png');
INSERT INTO kdm_organizations
(organization_id, city_id, bm_service_id, bm_key, paypal_email, logo_img_url)
VALUES(6608, 16, 0, '', '', '/wp-content/uploads/2016/10/LOGOpodaj-r%C4%99ke.png');
INSERT INTO kdm_organizations
(organization_id, city_id, bm_service_id, bm_key, paypal_email, logo_img_url)
VALUES(6609, 17, 0, '', '', '/wp-content/uploads/2016/10/LOGOrozwoju-wsi.jpg');
INSERT INTO kdm_organizations
(organization_id, city_id, bm_service_id, bm_key, paypal_email, logo_img_url)
VALUES(6610, 18, 0, '', '', '/wp-content/uploads/2016/10/logo-fundacja-1.png');
INSERT INTO kdm_organizations
(organization_id, city_id, bm_service_id, bm_key, paypal_email, logo_img_url)
VALUES(6611, 19, 0, '', '', '/wp-content/uploads/2016/06/0.jpg');
INSERT INTO kdm_organizations
(organization_id, city_id, bm_service_id, bm_key, paypal_email, logo_img_url)
VALUES(6612, 20, 0, '', '', '/wp-content/uploads/2016/02/fundacja-logo.png');
INSERT INTO kdm_organizations
(organization_id, city_id, bm_service_id, bm_key, paypal_email, logo_img_url)
VALUES(6613, 22, 0, '', '', '/wp-content/uploads/2016/12/Logo_Europolonia.png');
INSERT INTO kdm_organizations
(organization_id, city_id, bm_service_id, bm_key, paypal_email, logo_img_url)
VALUES(6614, 21, 0, '', '', '/wp-content/uploads/2016/12/LOGOksi%C4%85%C5%BCe-miezko.png');
INSERT INTO kdm_organizations
(organization_id, city_id, bm_service_id, bm_key, paypal_email, logo_img_url)
VALUES(6615, 27, 0, '', '', '');
INSERT INTO kdm_organizations
(organization_id, city_id, bm_service_id, bm_key, paypal_email, logo_img_url)
VALUES(6616, 26, 0, '', '', '/wp-content/uploads/2016/12/xlogo_mycork_big.gif.pagespeed.ic_.wB6dW6j812.png');
INSERT INTO kdm_organizations
(organization_id, city_id, bm_service_id, bm_key, paypal_email, logo_img_url)
VALUES(6617, 25, 0, '', '', '/wp-content/uploads/2016/12/LOGOpzko.png');
INSERT INTO kdm_organizations
(organization_id, city_id, bm_service_id, bm_key, paypal_email, logo_img_url)
VALUES(6618, 24, 0, '', '', '');
INSERT INTO kdm_organizations
(organization_id, city_id, bm_service_id, bm_key, paypal_email, logo_img_url)
VALUES(6619, 23, 0, '', '', '/wp-content/uploads/2016/06/Bez-tytu%C5%82u.png');

/* langi organizacji */
INSERT INTO kdm_organization_languages
(organization_language_id, organization_id, language_id, name, goal)
VALUES(1, 6593, 1, 'Fundacja Managerska CREATIVE', '');
INSERT INTO kdm_organization_languages
(organization_language_id, organization_id, language_id, name, goal)
VALUES(2, 6593, 2, 'Fundacja Managerska CREATIVE', '');
INSERT INTO kdm_organization_languages
(organization_language_id, organization_id, language_id, name, goal)
VALUES(3, 6594, 1, 'Fundacja Patria', '');
INSERT INTO kdm_organization_languages
(organization_language_id, organization_id, language_id, name, goal)
VALUES(4, 6594, 2, 'Fundacja Patria', '');
INSERT INTO kdm_organization_languages
(organization_language_id, organization_id, language_id, name, goal)
VALUES(7, 6595, 1, 'Fundacja Przyszłość dla Dzieci', '');
INSERT INTO kdm_organization_languages
(organization_language_id, organization_id, language_id, name, goal)
VALUES(8, 6595, 2, 'Fundacja Przyszłość dla Dzieci', '');
INSERT INTO kdm_organization_languages
(organization_language_id, organization_id, language_id, name, goal)
VALUES(9, 6596, 1, 'Stowarzyszenie Rodziców Dzieci Niepełnosprawnych', '');
INSERT INTO kdm_organization_languages
(organization_language_id, organization_id, language_id, name, goal)
VALUES(10, 6596, 2, 'Stowarzyszenie Rodziców Dzieci Niepełnosprawnych', '');
INSERT INTO kdm_organization_languages
(organization_language_id, organization_id, language_id, name, goal)
VALUES(11, 6597, 1, 'Towarzystwo Przyjaciół Dzieci, Stowarzyszenie Sympatyków Zespołu Szkół Spożywczych Chemicznych i Ogólnokształcących, Stowarzyszenie na Rzecz Integracji i Edukacji \"Razem Łatwiej\" przy Szkole Podstawowej Nr 11 z Oddziałami Integracyjnymi', '');
INSERT INTO kdm_organization_languages
(organization_language_id, organization_id, language_id, name, goal)
VALUES(12, 6597, 2, 'Towarzystwo Przyjaciół Dzieci, Stowarzyszenie Sympatyków Zespołu Szkół Spożywczych Chemicznych i Ogólnokształcących, Stowarzyszenie na Rzecz Integracji i Edukacji \"Razem Łatwiej\" przy Szkole Podstawowej Nr 11 z Oddziałami Integracyjnymi', '');
INSERT INTO kdm_organization_languages
(organization_language_id, organization_id, language_id, name, goal)
VALUES(13, 6598, 1, 'Parafia rzymskokatolicka p.w. Podwyższenia Krzyża św. w Hartowcu', '');
INSERT INTO kdm_organization_languages
(organization_language_id, organization_id, language_id, name, goal)
VALUES(14, 6598, 2, 'Parafia rzymskokatolicka p.w. Podwyższenia Krzyża św. w Hartowcu', '');
INSERT INTO kdm_organization_languages
(organization_language_id, organization_id, language_id, name, goal)
VALUES(15, 6599, 1, 'Stowarzyszenie Podaj Rękę', 'Adaptacja i doposażenie Ośrodka Rehabilitacyjno - Wypoczynkowego ŚWIT');
INSERT INTO kdm_organization_languages
(organization_language_id, organization_id, language_id, name, goal)
VALUES(16, 6599, 2, 'Stowarzyszenie Podaj Rękę', 'Adaptacja i doposażenie Ośrodka Rehabilitacyjno - Wypoczynkowego ŚWIT');
INSERT INTO kdm_organization_languages
(organization_language_id, organization_id, language_id, name, goal)
VALUES(17, 6600, 1, 'Stowarzyszenie Podaj Rękę', 'Adaptacja i doposażenie Ośrodka Rehabilitacyjno - Wypoczynkowego ŚWIT');
INSERT INTO kdm_organization_languages
(organization_language_id, organization_id, language_id, name, goal)
VALUES(18, 6600, 2, 'Stowarzyszenie Podaj Rękę', 'Adaptacja i doposażenie Ośrodka Rehabilitacyjno - Wypoczynkowego ŚWIT');
INSERT INTO kdm_organization_languages
(organization_language_id, organization_id, language_id, name, goal)
VALUES(19, 6601, 1, 'Sanktuarium Św. Jakuba Apostoła', 'Utworzenie funduszu stypendialnego dla zdolnej młodzieży z terenu gminy Michałowice');
INSERT INTO kdm_organization_languages
(organization_language_id, organization_id, language_id, name, goal)
VALUES(20, 6601, 2, 'Sanktuarium Św. Jakuba Apostoła', 'Utworzenie funduszu stypendialnego dla zdolnej młodzieży z terenu gminy Michałowice');
INSERT INTO kdm_organization_languages
(organization_language_id, organization_id, language_id, name, goal)
VALUES(21, 6602, 1, 'Stowarzyszenie Dąb', '\"Uniwersytet z bliska\" - rozwój edukacyjny dzieci i młodzieży');
INSERT INTO kdm_organization_languages
(organization_language_id, organization_id, language_id, name, goal)
VALUES(22, 6602, 2, 'Stowarzyszenie Dąb', '\"Uniwersytet z bliska\" - rozwój edukacyjny dzieci i młodzieży');
INSERT INTO kdm_organization_languages
(organization_language_id, organization_id, language_id, name, goal)
VALUES(23, 6603, 1, 'Polskie Stowarzyszenie na rzecz Osób z Niepełnosprawnością Intelektualną Koło', 'Zakup samochodu do przewozu osób niepełnosprawnych intelektualnie oraz utworzenie i prowadzenie nowych form wsparcia dla osób niepełnosprawnych intelektualnie');
INSERT INTO kdm_organization_languages
(organization_language_id, organization_id, language_id, name, goal)
VALUES(24, 6603, 2, 'Polskie Stowarzyszenie na rzecz Osób z Niepełnosprawnością Intelektualną Koło', 'Zakup samochodu do przewozu osób niepełnosprawnych intelektualnie oraz utworzenie i prowadzenie nowych form wsparcia dla osób niepełnosprawnych intelektualnie');
INSERT INTO kdm_organization_languages
(organization_language_id, organization_id, language_id, name, goal)
VALUES(25, 6604, 1, 'PSOUU Gryfice', 'Rozwój mieszkalnictwa wspomaganego dla osób niepełnosprawnych');
INSERT INTO kdm_organization_languages
(organization_language_id, organization_id, language_id, name, goal)
VALUES(26, 6604, 2, 'PSOUU Gryfice', 'Rozwój mieszkalnictwa wspomaganego dla osób niepełnosprawnych');
INSERT INTO kdm_organization_languages
(organization_language_id, organization_id, language_id, name, goal)
VALUES(27, 6605, 1, 'Caritas Diecezji Łomżyńskiej', 'Wsparcie podopiecznych Caritas Diecezji Łomżyńskiej - remont kuchni i stołówki w ośrodku rehabilitacji zdrowotnej i społecznej.');
INSERT INTO kdm_organization_languages
(organization_language_id, organization_id, language_id, name, goal)
VALUES(28, 6605, 2, 'Caritas Diecezji Łomżyńskiej', 'Wsparcie podopiecznych Caritas Diecezji Łomżyńskiej - remont kuchni i stołówki w ośrodku rehabilitacji zdrowotnej i społecznej.');
INSERT INTO kdm_organization_languages
(organization_language_id, organization_id, language_id, name, goal)
VALUES(29, 6606, 1, 'Uczniowski Klub Sportowy \"Impuls\"', 'organizacja zajęć sportowych dla dzieci i młodzieży');
INSERT INTO kdm_organization_languages
(organization_language_id, organization_id, language_id, name, goal)
VALUES(30, 6606, 2, 'Uczniowski Klub Sportowy \"Impuls\"', 'organizacja zajęć sportowych dla dzieci i młodzieży');
INSERT INTO kdm_organization_languages
(organization_language_id, organization_id, language_id, name, goal)
VALUES(31, 6607, 1, 'Stowarzyszenie Podaj Rękę', 'Adaptacja i doposażenie Ośrodka Rehabilitacyjno - Wypoczynkowego ŚWIT');
INSERT INTO kdm_organization_languages
(organization_language_id, organization_id, language_id, name, goal)
VALUES(32, 6607, 2, 'Stowarzyszenie Podaj Rękę', 'Adaptacja i doposażenie Ośrodka Rehabilitacyjno - Wypoczynkowego ŚWIT');
INSERT INTO kdm_organization_languages
(organization_language_id, organization_id, language_id, name, goal)
VALUES(33, 6608, 1, 'Stowarzyszenie Podaj Rękę', 'Adaptacja i doposażenie Ośrodka Rehabilitacyjno - Wypoczynkowego ŚWIT');
INSERT INTO kdm_organization_languages
(organization_language_id, organization_id, language_id, name, goal)
VALUES(34, 6608, 2, 'Stowarzyszenie Podaj Rękę', 'Adaptacja i doposażenie Ośrodka Rehabilitacyjno - Wypoczynkowego ŚWIT');
INSERT INTO kdm_organization_languages
(organization_language_id, organization_id, language_id, name, goal)
VALUES(35, 6609, 1, 'Stowarzyszenie Rozwoju Wsi', 'Uratuj kuchnię - remont stołówki szkolnej');
INSERT INTO kdm_organization_languages
(organization_language_id, organization_id, language_id, name, goal)
VALUES(36, 6609, 2, 'Stowarzyszenie Rozwoju Wsi', 'Uratuj kuchnię - remont stołówki szkolnej');
INSERT INTO kdm_organization_languages
(organization_language_id, organization_id, language_id, name, goal)
VALUES(37, 6610, 1, 'Fundacja Mój Sen', 'Zbiórka na rzecz podopiecznych fundacji');
INSERT INTO kdm_organization_languages
(organization_language_id, organization_id, language_id, name, goal)
VALUES(38, 6610, 2, 'Fundacja Mój Sen', 'Zbiórka na rzecz podopiecznych fundacji');
INSERT INTO kdm_organization_languages
(organization_language_id, organization_id, language_id, name, goal)
VALUES(39, 6611, 1, 'Limanowska Akcja Charytatywna', 'Utworzenie funduszu pomocy potrzebującym z gminy Limanowa');
INSERT INTO kdm_organization_languages
(organization_language_id, organization_id, language_id, name, goal)
VALUES(40, 6611, 2, 'Limanowska Akcja Charytatywna', 'Utworzenie funduszu pomocy potrzebującym z gminy Limanowa');
INSERT INTO kdm_organization_languages
(organization_language_id, organization_id, language_id, name, goal)
VALUES(41, 6612, 1, 'Caritas Archidiecezji', 'Remont Katolickiego Ośrodka Wychowania i Terapii Uzależnień „Metanoia”.');
INSERT INTO kdm_organization_languages
(organization_language_id, organization_id, language_id, name, goal)
VALUES(42, 6612, 2, 'Caritas Archidiecezji', 'Remont Katolickiego Ośrodka Wychowania i Terapii Uzależnień „Metanoia”.');
INSERT INTO kdm_organization_languages
(organization_language_id, organization_id, language_id, name, goal)
VALUES(43, 6613, 1, '*Fundacja EuroPolonia', '');
INSERT INTO kdm_organization_languages
(organization_language_id, organization_id, language_id, name, goal)
VALUES(44, 6613, 2, '*Fundacja EuroPolonia', '');
INSERT INTO kdm_organization_languages
(organization_language_id, organization_id, language_id, name, goal)
VALUES(45, 6614, 1, 'Zrzeszenie Polaków w Grecji \"Książe Mieszko\"', '');
INSERT INTO kdm_organization_languages
(organization_language_id, organization_id, language_id, name, goal)
VALUES(46, 6614, 2, 'Zrzeszenie Polaków w Grecji \"Książe Mieszko\"', '');
INSERT INTO kdm_organization_languages
(organization_language_id, organization_id, language_id, name, goal)
VALUES(47, 6615, 1, 'Wspólnota Polska \"Polonia - Azerbejdżan\"', '');
INSERT INTO kdm_organization_languages
(organization_language_id, organization_id, language_id, name, goal)
VALUES(48, 6615, 2, 'Wspólnota Polska \"Polonia - Azerbejdżan\"', '');
INSERT INTO kdm_organization_languages
(organization_language_id, organization_id, language_id, name, goal)
VALUES(49, 6616, 1, '*Stowarzyszenie My Cork', '');
INSERT INTO kdm_organization_languages
(organization_language_id, organization_id, language_id, name, goal)
VALUES(50, 6616, 2, '*Stowarzyszenie My Cork', '');
INSERT INTO kdm_organization_languages
(organization_language_id, organization_id, language_id, name, goal)
VALUES(51, 6617, 1, '*Polski Związek Kulturalno - Oświatowy', '');
INSERT INTO kdm_organization_languages
(organization_language_id, organization_id, language_id, name, goal)
VALUES(52, 6617, 2, '*Polski Związek Kulturalno - Oświatowy', '');
INSERT INTO kdm_organization_languages
(organization_language_id, organization_id, language_id, name, goal)
VALUES(53, 6618, 1, '*Federacja Polskich Organizacji w Nowej Zelandii', '');
INSERT INTO kdm_organization_languages
(organization_language_id, organization_id, language_id, name, goal)
VALUES(54, 6618, 2, '*Federacja Polskich Organizacji w Nowej Zelandii', '');
INSERT INTO kdm_organization_languages
(organization_language_id, organization_id, language_id, name, goal)
VALUES(55, 6619, 1, 'Odział Związku Polaków na Ukrainie', 'Budowa Polsko-Ukraińskiego Centrum Kultury w Szepetówce');
INSERT INTO kdm_organization_languages
(organization_language_id, organization_id, language_id, name, goal)
VALUES(56, 6619, 2, 'Odział Związku Polaków na Ukrainie', 'Budowa Polsko-Ukraińskiego Centrum Kultury w Szepetówce');

/* texts */

INSERT INTO kdm_texts
(text_id, label, description)
VALUES(1, 'baseUrl', '');
INSERT INTO kdm_texts
(text_id, label, description)
VALUES(2, 'joinUsButton', '');
INSERT INTO kdm_texts
(text_id, label, description)
VALUES(3, 'homepageCounterCaption', '');
INSERT INTO kdm_texts
(text_id, label, description)
VALUES(4, 'homepageGlobeBoxCaption', '');
INSERT INTO kdm_texts
(text_id, label, description)
VALUES(5, 'homepageGlobeBoxButton', '');
INSERT INTO kdm_texts
(text_id, label, description)
VALUES(6, 'homepageOurResultsBoxCaption', '');
INSERT INTO kdm_texts
(text_id, label, description)
VALUES(7, 'homepageCampaignersBoxCaption', '');
INSERT INTO kdm_texts
(text_id, label, description)
VALUES(8, 'homepageVideoBoxCaption', '');
INSERT INTO kdm_texts
(text_id, label, description)
VALUES(9, 'homepageHowToJoinBoxCaption', '');
INSERT INTO kdm_texts
(text_id, label, description)
VALUES(10, 'homepageHowToJoinBoxButton', '');
INSERT INTO kdm_texts
(text_id, label, description)
VALUES(11, 'homepageOurResultsBoxButton', '');
INSERT INTO kdm_texts
(text_id, label, description)
VALUES(12, 'afterEnrollmentBoxCaption', '');
INSERT INTO kdm_texts
(text_id, label, description)
VALUES(13, 'afterEnrollmentBoxContent', '');
INSERT INTO kdm_texts
(text_id, label, description)
VALUES(14, 'homepageOurResultsTile1Title', '');
INSERT INTO kdm_texts
(text_id, label, description)
VALUES(15, 'homepageOurResultsTile1Caption', '');
INSERT INTO kdm_texts
(text_id, label, description)
VALUES(16, 'homepageOurResultsTile2Title', '');
INSERT INTO kdm_texts
(text_id, label, description)
VALUES(17, 'homepageOurResultsTile2Caption', '');
INSERT INTO kdm_texts
(text_id, label, description)
VALUES(18, 'homepageOurResultsTile3Title', '');
INSERT INTO kdm_texts
(text_id, label, description)
VALUES(19, 'homepageOurResultsTile3Caption', '');
INSERT INTO kdm_texts
(text_id, label, description)
VALUES(20, 'homepageHowToJoinBoxStep1Caption', '');
INSERT INTO kdm_texts
(text_id, label, description)
VALUES(21, 'homepageHowToJoinBoxStep2Caption', '');
INSERT INTO kdm_texts
(text_id, label, description)
VALUES(22, 'homepageHowToJoinBoxStep3Caption', '');
INSERT INTO kdm_texts
(text_id, label, description)
VALUES(23, 'homepageCampaignersBoxCountry', '');
INSERT INTO kdm_texts
(text_id, label, description)
VALUES(24, 'homepageCampaignersBoxCity', '');
INSERT INTO kdm_texts
(text_id, label, description)
VALUES(25, 'homepageCampaignersBoxLogo', '');
INSERT INTO kdm_texts
(text_id, label, description)
VALUES(26, 'homepageCampaignersBoxGoal', '');
INSERT INTO kdm_texts
(text_id, label, description)
VALUES(27, 'enrollmentFormCaption', '');
INSERT INTO kdm_texts
(text_id, label, description)
VALUES(28, 'enrollmentFormOrganizationNameLabel', '');
INSERT INTO kdm_texts
(text_id, label, description)
VALUES(29, 'enrollmentFormCountryCityLabel', '');
INSERT INTO kdm_texts
(text_id, label, description)
VALUES(30, 'enrollmentFormFirstNameLastNameLabel', '');
INSERT INTO kdm_texts
(text_id, label, description)
VALUES(31, 'enrollmentFormEmailLabel', '');
INSERT INTO kdm_texts
(text_id, label, description)
VALUES(32, 'enrollmentFormPhoneLabel', '');
INSERT INTO kdm_texts
(text_id, label, description)
VALUES(33, 'enrollmentFormSendButtonLabel', '');
INSERT INTO kdm_texts
(text_id, label, description)
VALUES(34, 'enrollmentFormOrganizationNamePlaceholder', '');
INSERT INTO kdm_texts
(text_id, label, description)
VALUES(35, 'enrollmentFormCountryPlaceholder', '');
INSERT INTO kdm_texts
(text_id, label, description)
VALUES(36, 'enrollmentFormCityPlaceholder', '');
INSERT INTO kdm_texts
(text_id, label, description)
VALUES(37, 'enrollmentFormFirstNamePlaceholder', '');
INSERT INTO kdm_texts
(text_id, label, description)
VALUES(38, 'enrollmentFormLastNamePlaceholder', '');
INSERT INTO kdm_texts
(text_id, label, description)
VALUES(39, 'enrollmentFormEmailPlaceholder', '');
INSERT INTO kdm_texts
(text_id, label, description)
VALUES(40, 'enrollmentFormPhonePlaceholder', '');
INSERT INTO kdm_texts
(text_id, label, description)
VALUES(41, 'aboutUsTitle', '');
INSERT INTO kdm_texts
(text_id, label, description)
VALUES(42, 'aboutUsCaption', '');
INSERT INTO kdm_texts
(text_id, label, description)
VALUES(43, 'aboutUsItem1Caption', '');
INSERT INTO kdm_texts
(text_id, label, description)
VALUES(44, 'aboutUsItem2Caption', '');
INSERT INTO kdm_texts
(text_id, label, description)
VALUES(45, 'aboutUsItem3Caption', '');
INSERT INTO kdm_texts
(text_id, label, description)
VALUES(46, 'aboutUsBottomCaption', '');
INSERT INTO kdm_texts
(text_id, label, description)
VALUES(47, 'enrollmentAgreement', '');
INSERT INTO kdm_texts
(text_id, label, description)
VALUES(48, 'ogTitle', '');
INSERT INTO kdm_texts
(text_id, label, description)
VALUES(49, 'ogDescription', '');
INSERT INTO kdm_texts
(text_id, label, description)
VALUES(50, 'ogImage', '');

/* text languages */

INSERT INTO kdm_text_languages
(text_language_id, text_id, language_id, `text`)
VALUES(1, 1, 1, '/');
INSERT INTO kdm_text_languages
(text_language_id, text_id, language_id, `text`)
VALUES(2, 1, 2, '/milesofgood/');
INSERT INTO kdm_text_languages
(text_language_id, text_id, language_id, `text`)
VALUES(3, 2, 1, 'Pobierz informator');
INSERT INTO kdm_text_languages
(text_language_id, text_id, language_id, `text`)
VALUES(4, 2, 2, 'Download directory');
INSERT INTO kdm_text_languages
(text_language_id, text_id, language_id, `text`)
VALUES(5, 3, 1, '#organizacji jest już w edycji 2017!');
INSERT INTO kdm_text_languages
(text_language_id, text_id, language_id, `text`)
VALUES(6, 3, 2, '#organizations are with us in edition 2017!');
INSERT INTO kdm_text_languages
(text_language_id, text_id, language_id, `text`)
VALUES(7, 4, 1, 'Zbierz pieniądze na #cel swojej organizacji!');
INSERT INTO kdm_text_languages
(text_language_id, text_id, language_id, `text`)
VALUES(8, 4, 2, 'You can collect money for #goal your organization!');
INSERT INTO kdm_text_languages
(text_language_id, text_id, language_id, `text`)
VALUES(9, 5, 1, 'Pobierz informator');
INSERT INTO kdm_text_languages
(text_language_id, text_id, language_id, `text`)
VALUES(10, 5, 2, 'Download directory');
INSERT INTO kdm_text_languages
(text_language_id, text_id, language_id, `text`)
VALUES(11, 6, 1, 'Nasze wyniki');
INSERT INTO kdm_text_languages
(text_language_id, text_id, language_id, `text`)
VALUES(12, 6, 2, 'OurResults.');
INSERT INTO kdm_text_languages
(text_language_id, text_id, language_id, `text`)
VALUES(13, 7, 1, 'Poznaj #organizacje, które będą z nami w 2018 roku');
INSERT INTO kdm_text_languages
(text_language_id, text_id, language_id, `text`)
VALUES(14, 7, 2, 'Meet awesome #organizations, which will be with us in 2018');
INSERT INTO kdm_text_languages
(text_language_id, text_id, language_id, `text`)
VALUES(15, 8, 1, 'Będzie się działo!');
INSERT INTO kdm_text_languages
(text_language_id, text_id, language_id, `text`)
VALUES(16, 8, 2, 'Look at this!');
INSERT INTO kdm_text_languages
(text_language_id, text_id, language_id, `text`)
VALUES(17, 9, 1, 'Jak do nas dołączyć?');
INSERT INTO kdm_text_languages
(text_language_id, text_id, language_id, `text`)
VALUES(18, 9, 2, 'How to join us?');
INSERT INTO kdm_text_languages
(text_language_id, text_id, language_id, `text`)
VALUES(19, 10, 1, 'Pobierz informator');
INSERT INTO kdm_text_languages
(text_language_id, text_id, language_id, `text`)
VALUES(20, 10, 2, 'Download directory');
INSERT INTO kdm_text_languages
(text_language_id, text_id, language_id, `text`)
VALUES(21, 11, 1, 'Pobierz informator');
INSERT INTO kdm_text_languages
(text_language_id, text_id, language_id, `text`)
VALUES(22, 11, 2, 'Download directory');
INSERT INTO kdm_text_languages
(text_language_id, text_id, language_id, `text`)
VALUES(23, 12, 1, 'Gratulujemy!');
INSERT INTO kdm_text_languages
(text_language_id, text_id, language_id, `text`)
VALUES(24, 12, 2, 'Congratulations!');
INSERT INTO kdm_text_languages
(text_language_id, text_id, language_id, `text`)
VALUES(25, 13, 1, 'Formularz został przesłany, skontaktujemy się z Tobą wkr�tce .');
INSERT INTO kdm_text_languages
(text_language_id, text_id, language_id, `text`)
VALUES(26, 13, 2, 'Form has been sent correctly, we will contact you in 3 days.');
INSERT INTO kdm_text_languages
(text_language_id, text_id, language_id, `text`)
VALUES(27, 14, 1, 'Darczyńcy wsparli');
INSERT INTO kdm_text_languages
(text_language_id, text_id, language_id, `text`)
VALUES(28, 14, 2, 'Donors have supported');
INSERT INTO kdm_text_languages
(text_language_id, text_id, language_id, `text`)
VALUES(29, 15, 1, '80 celów');
INSERT INTO kdm_text_languages
(text_language_id, text_id, language_id, `text`)
VALUES(30, 15, 2, '80 goals');
INSERT INTO kdm_text_languages
(text_language_id, text_id, language_id, `text`)
VALUES(31, 16, 1, 'Zebraliśmy już');
INSERT INTO kdm_text_languages
(text_language_id, text_id, language_id, `text`)
VALUES(32, 16, 2, 'Together we have collected');
INSERT INTO kdm_text_languages
(text_language_id, text_id, language_id, `text`)
VALUES(33, 17, 1, '2,3 MLN PLN');
INSERT INTO kdm_text_languages
(text_language_id, text_id, language_id, `text`)
VALUES(34, 17, 2, '2,3 MLN PLN');
INSERT INTO kdm_text_languages
(text_language_id, text_id, language_id, `text`)
VALUES(35, 18, 1, 'Kilometry Dobra zna już');
INSERT INTO kdm_text_languages
(text_language_id, text_id, language_id, `text`)
VALUES(36, 18, 2, 'People that recognize<br>Miles of Good');
INSERT INTO kdm_text_languages
(text_language_id, text_id, language_id, `text`)
VALUES(37, 19, 1, '6,1 mln osób');
INSERT INTO kdm_text_languages
(text_language_id, text_id, language_id, `text`)
VALUES(38, 19, 2, '6,1 million');
INSERT INTO kdm_text_languages
(text_language_id, text_id, language_id, `text`)
VALUES(39, 20, 1, 'uzupełnij formularz');
INSERT INTO kdm_text_languages
(text_language_id, text_id, language_id, `text`)
VALUES(40, 20, 2, 'complete a form');
INSERT INTO kdm_text_languages
(text_language_id, text_id, language_id, `text`)
VALUES(41, 21, 1, 'skontaktuj się z konsultantem');
INSERT INTO kdm_text_languages
(text_language_id, text_id, language_id, `text`)
VALUES(42, 21, 2, 'contact with a consultant');
INSERT INTO kdm_text_languages
(text_language_id, text_id, language_id, `text`)
VALUES(43, 22, 1, 'podpisz umowę');
INSERT INTO kdm_text_languages
(text_language_id, text_id, language_id, `text`)
VALUES(44, 22, 2, 'sign agreement');
INSERT INTO kdm_text_languages
(text_language_id, text_id, language_id, `text`)
VALUES(45, 23, 1, 'Państwo');
INSERT INTO kdm_text_languages
(text_language_id, text_id, language_id, `text`)
VALUES(46, 23, 2, 'Country');
INSERT INTO kdm_text_languages
(text_language_id, text_id, language_id, `text`)
VALUES(47, 24, 1, 'Miasto');
INSERT INTO kdm_text_languages
(text_language_id, text_id, language_id, `text`)
VALUES(48, 24, 2, 'City');
INSERT INTO kdm_text_languages
(text_language_id, text_id, language_id, `text`)
VALUES(49, 25, 1, 'Logo');
INSERT INTO kdm_text_languages
(text_language_id, text_id, language_id, `text`)
VALUES(50, 25, 2, 'Logo');
INSERT INTO kdm_text_languages
(text_language_id, text_id, language_id, `text`)
VALUES(51, 26, 1, 'Organizacja-Cel');
INSERT INTO kdm_text_languages
(text_language_id, text_id, language_id, `text`)
VALUES(52, 26, 2, 'Organization-Goal');
INSERT INTO kdm_text_languages
(text_language_id, text_id, language_id, `text`)
VALUES(53, 27, 1, 'Formularz kontaktowy');
INSERT INTO kdm_text_languages
(text_language_id, text_id, language_id, `text`)
VALUES(54, 27, 2, 'Contact form');
INSERT INTO kdm_text_languages
(text_language_id, text_id, language_id, `text`)
VALUES(55, 28, 1, 'Nazwa organizacji');
INSERT INTO kdm_text_languages
(text_language_id, text_id, language_id, `text`)
VALUES(56, 28, 2, 'Name of the organization');
INSERT INTO kdm_text_languages
(text_language_id, text_id, language_id, `text`)
VALUES(57, 29, 1, 'Państwo i miasto w którym działa organizacja');
INSERT INTO kdm_text_languages
(text_language_id, text_id, language_id, `text`)
VALUES(58, 29, 2, 'Coutry and city, where the organization operates');
INSERT INTO kdm_text_languages
(text_language_id, text_id, language_id, `text`)
VALUES(59, 30, 1, 'Twoje imię i nazwisko');
INSERT INTO kdm_text_languages
(text_language_id, text_id, language_id, `text`)
VALUES(60, 30, 2, 'Your name and surname');
INSERT INTO kdm_text_languages
(text_language_id, text_id, language_id, `text`)
VALUES(61, 31, 1, 'Twój e-mail');
INSERT INTO kdm_text_languages
(text_language_id, text_id, language_id, `text`)
VALUES(62, 31, 2, 'Your e-mail');
INSERT INTO kdm_text_languages
(text_language_id, text_id, language_id, `text`)
VALUES(63, 32, 1, 'Twój numer telefonu');
INSERT INTO kdm_text_languages
(text_language_id, text_id, language_id, `text`)
VALUES(64, 32, 2, 'Your mobile phone');
INSERT INTO kdm_text_languages
(text_language_id, text_id, language_id, `text`)
VALUES(65, 33, 1, 'Wyślij');
INSERT INTO kdm_text_languages
(text_language_id, text_id, language_id, `text`)
VALUES(66, 33, 2, 'Send');
INSERT INTO kdm_text_languages
(text_language_id, text_id, language_id, `text`)
VALUES(67, 34, 1, 'Nazwa organizacji');
INSERT INTO kdm_text_languages
(text_language_id, text_id, language_id, `text`)
VALUES(68, 34, 2, 'Organization name');
INSERT INTO kdm_text_languages
(text_language_id, text_id, language_id, `text`)
VALUES(69, 35, 1, 'Państwo');
INSERT INTO kdm_text_languages
(text_language_id, text_id, language_id, `text`)
VALUES(70, 35, 2, 'Country');
INSERT INTO kdm_text_languages
(text_language_id, text_id, language_id, `text`)
VALUES(71, 36, 1, 'Miasto');
INSERT INTO kdm_text_languages
(text_language_id, text_id, language_id, `text`)
VALUES(72, 36, 2, 'City');
INSERT INTO kdm_text_languages
(text_language_id, text_id, language_id, `text`)
VALUES(73, 37, 1, 'Imię');
INSERT INTO kdm_text_languages
(text_language_id, text_id, language_id, `text`)
VALUES(74, 37, 2, 'First name');
INSERT INTO kdm_text_languages
(text_language_id, text_id, language_id, `text`)
VALUES(75, 38, 1, 'Nazwisko');
INSERT INTO kdm_text_languages
(text_language_id, text_id, language_id, `text`)
VALUES(76, 38, 2, 'Last name');
INSERT INTO kdm_text_languages
(text_language_id, text_id, language_id, `text`)
VALUES(77, 39, 1, 'Adres e-mail');
INSERT INTO kdm_text_languages
(text_language_id, text_id, language_id, `text`)
VALUES(78, 39, 2, 'E-mail address');
INSERT INTO kdm_text_languages
(text_language_id, text_id, language_id, `text`)
VALUES(79, 40, 1, 'Numer telefonu');
INSERT INTO kdm_text_languages
(text_language_id, text_id, language_id, `text`)
VALUES(80, 40, 2, 'Phone number');
INSERT INTO kdm_text_languages
(text_language_id, text_id, language_id, `text`)
VALUES(81, 41, 1, 'Kilometry Dobra');
INSERT INTO kdm_text_languages
(text_language_id, text_id, language_id, `text`)
VALUES(82, 41, 2, 'Miles of Good');
INSERT INTO kdm_text_languages
(text_language_id, text_id, language_id, `text`)
VALUES(83, 42, 1, 'Kilometry Dobra to kampania społeczna do której może dołączyć każdy, chcący działać w duchu idei filantropii, która nie ma granic.');
INSERT INTO kdm_text_languages
(text_language_id, text_id, language_id, `text`)
VALUES(84, 42, 2, 'Miles of good is a charity campaign that can be joined by anyone who wants to pursue the idea of philantropy, which has no borders.');
INSERT INTO kdm_text_languages
(text_language_id, text_id, language_id, `text`)
VALUES(85, 43, 1, '<strong>Kilometry Dobra</strong> to stworzona w Polsce <strong>międzynarodowa kampania dobroczynna</strong>, jedyna, w której mogą wziąć udział organizacje z całego świata. Nie jest to jednorazowa akcja jak kiedyś Ice Bucket Challenge, lecz regularna, powtarzana co roku.<br><br>To kampania, która sprawia, że organizacje pozarządowe <strong>uzyskują pieniądze na realizację swoich celów</strong>. W ciągu ostatnich 3 lat do fundacji i stowarzyszeń trafiło już ponad <strong>2,3 mln zł. na realizację 80 celów</strong>.<br><br>Kilometry Dobra działają w oparciu o <strong>współracę organizacji i aktywnych osób</strong>. Budujemy koalicję, która ma większą siłę przebicia w dotarciu do darczyńców i mediów. Kampania uczy odpowiedzialności, współpracy (organizacje finansują ją z własnych środków), dobrego zarządzania oraz promuje skuteczne i etycznie działające organizacje.<br>A przede wszystkim wzmacnia je finansowo<br><br>Zbieramy pieniądze na różne cele społeczne: edukację, bezpieczeństwo, ekologię, sport, kulturę, potrzeby humanitarne, kościół, niepełnosprawnych, zdrowie.<br><br><strong>Dodatkowo, Kilometry Dobra to wygodny sposób zbierania pieniędzy</strong>, gdyż:<ul><li>Każda organizacja zbiera na swój cel.</li><li>Pieniądze trafiają bezpośrednio do każdej organizacji, nigdy nie są na jednym koncie.</li></ul>Organizacje są wyposażane w materiały promocyjne (ulotki, skarbonki, bannery, roll upy, koszulki), dostają swoją stronę internetową, wsparcie techniczne i dedykowane szkolenie z fundraisingu. Nad kampanią czuwa też zespół, który promuje działania organizacji w mediach ogólnopolskich i kanałach społecznościowych.<br><br>Kilometry Dobra 2017 potrwają od 1 marca do 4 czerwca.');
INSERT INTO kdm_text_languages
(text_language_id, text_id, language_id, `text`)
VALUES(86, 43, 2, '<strong>Miles of Good</strong> is a campaign that will help you gain donors and <strong>receive funding for achieving your goals</strong>.<br /><br /><strong>Miles of Good</strong> operates basing on the cooperation of organisations and <strong>active workers from around the world</strong>. We are building a coalition that has a stronger chance of reaching potential donors and the media. The campaign teaches values such as responsibility, partnership (organisations finance it with their own resources) and good management. It also promotes organisations that function in an effective an ethical way by aiding them financially.<br /><br />The involved organisations raise money for various social goals: education, security, ecology, sport, culture, humanitarian relief, churches, the disabled and health.');
INSERT INTO kdm_text_languages
(text_language_id, text_id, language_id, `text`)
VALUES(87, 44, 1, 'Przez 3 miesiące organizacje pozyskują pieniądze wszystkimi dostępnymi metodami: poprzez zbiórki w szkołach, parafiach, stronę internetową, aukcje, koncerty itp. <strong>Kampanii towarzyszy próba pobicia rekordu Guinnessa.</strong><br>Konkurencją jest układanie ciągu monet o jednym nominale - stąd Kilometry Dobra. Monety przykleja się na taśmę klejącą, tworząc metrowe odcinki (to ułatwienie wprowadzili kilka lat temu Filipińczycy). Do rekordu potrzebujemy 75 km., czyli ponad 3,3 mln zł.<br><br><strong>W ostatniej edycji:</strong><ul><li>Ukazało się 905 publikacji medialnych o organizacjach uczestniczących w akcji.</li><li>Ekwiwalent reklamowy wyniósł 2 295 752 zł.</li><li>Informacje o Kilometrach Dobra dotarły do 6 369 073 osób.</li></ul>Dotychczasowe <strong>efekty Kilometrów Dobra</strong> to m.in., stypendia naukowe dla dzieci z terenu małopolski, powstanie świetlicy rehabilitacyjnej dla niepełnosprawnych umysłowo z Zamościa, remont przedszkola Sióstr Benedyktynek w Jarosławiu czy też zakup samochodu specjalistycznego dla rodziny ze Złotoryi.');
INSERT INTO kdm_text_languages
(text_language_id, text_id, language_id, `text`)
VALUES(88, 44, 2, '<strong>Additionally, Miles of Good is a comfortable way of raising money because:</strong><br /><br /><ul><li>every organisation works for their own goals</li><li>the funds go directly to each organisation, they are never in one account</li></ul><br /><br />This year''s campaign will begin on the 1st of March and end on the 4th of June 2017. For 3 months, cooperation organisations will be raising money with all the available methods: through rallies at schools, parishes as well as through our website and other auctions and concerts. <strong>The campaign is accompanied by an attempt to beat the Guinness world record.</strong><br /><br />The competition consists of assembling rows of coins of the same denomination - that''s why the campaign is named Miles of Good. The coins are being glued to rows of tape, creating one meter sections (this facilitation was invented a few years ago by the Filipinos). To beat the record we need almost 47 miles.<br /><br />The coing for creating the sections is chosen in agreement <strong>with the first organisation</strong> that enters the campaign for each country.');
INSERT INTO kdm_text_languages
(text_language_id, text_id, language_id, `text`)
VALUES(89, 45, 1, 'Naszą akcję wspierają znani i lubiani ambasadorzy: <strong>Robert Lewandowski, Cezary Żak, zespół Perfect, IRA, Bracia Golec, Kamil Grosicki, Jakub Wawrzyniak, Łukasz Piszczek, Maciej Kot, prof. Walery Pisarek, Omenaa Mensah, Artur Barciś, Krzysztof Ibisz, Barbara Stępniak – Wilk, Jacek Krzynówek, Ewa Bem,  Piotr Wyszomirski, Joachim Mencel, Paulina Maj, Witold Paszt</strong>. <a href="https://www.youtube.com/watch?v=6qT9P4LDQ3k" target="_blank">Hymn kampanii</a> został w tym roku napisany i nagrany przez zespół <strong>Skaldowie</strong>.<br><br>Organizacja dużej i skutecznej kampanii fundraisingowej to koszt 300 - 500 tys. zł. Uczestnicząc w kampanii Kilometry Dobra organizacje ponoszą nawet <strong>kilkaset razy mniejsze koszty</strong>. Wkład własny zależy od wielkości miejscowości, w której dana organizacja będzie przeprowadzać finał.<br><br>Chcemy, by Kilometry Dobra stały się największą kampanią filantropijną w Polsce,a w <strong>2020 były zbierane na wszystkich kontynentach</strong>, w 1000 miast na całym świecie.');
INSERT INTO kdm_text_languages
(text_language_id, text_id, language_id, `text`)
VALUES(90, 45, 2, 'For each organisation that applies to enter the campaign, <strong>we offer</strong>:<br /><br /><ul><li>providing a website for the campaign with a subpage dedicated to your organisation,</li><li>providing a system of international online payments,</li><li>creating the design of promotional materials,</li><li>creating the design of graphics to use online,</li><li>translations of documents and promotional materials,</li><li>helpdesk in English,</li><li>promoting the campaign on social media,</li><li>a fundraising know-how from various countries around the world.</li></ul><br /><br />The campaign is financed from the recruitment fees payed separately by each organisation. The fee is decided taking into consideration the financial situation of the country, basing on PKB per Capita calculated by the International Monetary Fund.');
INSERT INTO kdm_text_languages
(text_language_id, text_id, language_id, `text`)
VALUES(91, 46, 1, 'Kilometry Dobra to <span class="text-bold font-size-2em">prawdziwe Mistrzostwa Świata w Dobroci</span>, weź w nich udział!');
INSERT INTO kdm_text_languages
(text_language_id, text_id, language_id, `text`)
VALUES(92, 46, 2, '<a href="/zglos-sie"><strong>Order a directory</strong></a> to find out more about the rules of the campaign.');
INSERT INTO kdm_text_languages
(text_language_id, text_id, language_id, `text`)
VALUES(93, 47, 1, 'Wyrażam zgodę na przetwarzanie moich danych osobowych dla potrzeb niezbędnych do realizacji rekrutacji organizacji do kampanii Kilometry Dobra (zgodnie z Ustawą z dnia 29.08.1997 roku o Ochronie Danych Osobowych; tekst jednolity: Dz. U. z 2002r. Nr 101, poz. 926 ze zm.).');
INSERT INTO kdm_text_languages
(text_language_id, text_id, language_id, `text`)
VALUES(94, 47, 2, 'I hereby give consent for my personal data included in my application to be processed for the purposes of recruitment to the Miles of Good, in accordance with the Personal Data Protection Act dated 29.08.1997 (consolidated text: Journal of Laws of the Republic of Poland 2002 No 101, item 926 as amended).');
INSERT INTO kdm_text_languages
(text_language_id, text_id, language_id, `text`)
VALUES(95, 48, 1, 'Kilometry Dobra');
INSERT INTO kdm_text_languages
(text_language_id, text_id, language_id, `text`)
VALUES(96, 48, 2, 'Kilometry Dobra');
INSERT INTO kdm_text_languages
(text_language_id, text_id, language_id, `text`)
VALUES(97, 49, 1, 'Kilometry Dobra to kampania społeczna do której może dołączyć każdy, chcący działać w duchu idei filantropii, która nie ma granic.');
INSERT INTO kdm_text_languages
(text_language_id, text_id, language_id, `text`)
VALUES(98, 49, 2, 'Kilometry Dobra to kampania społeczna do której może dołączyć każdy, chcący działać w duchu idei filantropii, która nie ma granic.');
INSERT INTO kdm_text_languages
(text_language_id, text_id, language_id, `text`)
VALUES(99, 50, 1, 'http://kilometrydobra.pl/wp-content/themes/kd/images/horizontal-logo.png');
INSERT INTO kdm_text_languages
(text_language_id, text_id, language_id, `text`)
VALUES(100, 50, 2, 'http://kilometrydobra.pl/wp-content/themes/kd/images/horizontal-logo.png');
