-- phpMyAdmin SQL Dump
-- version 5.0.2
-- https://www.phpmyadmin.net/
--
-- Servidor: 127.0.0.1:3306
-- Tiempo de generación: 24-11-2022 a las 20:52:21
-- Versión del servidor: 5.7.31
-- Versión de PHP: 7.4.9

SET SQL_MODE = "NO_AUTO_VALUE_ON_ZERO";
START TRANSACTION;
SET time_zone = "+00:00";


/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!40101 SET NAMES utf8mb4 */;

--
-- Base de datos: `dbperiodicoweb`
--

-- --------------------------------------------------------

--
-- Estructura de tabla para la tabla `info_institucional_content`
--

DROP TABLE IF EXISTS `info_institucional_content`;
CREATE TABLE IF NOT EXISTS `info_institucional_content` (
  `id` int(11) NOT NULL AUTO_INCREMENT,
  `tutulo` varchar(300) COLLATE utf8mb4_unicode_ci NOT NULL,
  `texto_content` text COLLATE utf8mb4_unicode_ci NOT NULL,
  `date_write` datetime NOT NULL,
  `state` tinyint(4) NOT NULL,
  PRIMARY KEY (`id`)
) ENGINE=MyISAM AUTO_INCREMENT=7 DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

--
-- Volcado de datos para la tabla `info_institucional_content`
--

INSERT INTO `info_institucional_content` (`id`, `tutulo`, `texto_content`, `date_write`, `state`) VALUES
(1, 'Infomación institucional', '<div class=\"container px-2 px-md-5 py-5\">\r\n<h3>Peri&oacute;dico Oficial</h3>\r\n\r\n<p>&nbsp;</p>\r\n\r\n<div class=\"fw-bold\">Misi&oacute;n</div>\r\nGarantizar las Publicaciones del Peri&oacute;dico Oficial del Gobierno del Estado de Oaxaca, tales como las leyes, decretos, reglamentos, acuerdos y dem&aacute;s actos de car&aacute;cter oficial, dando mediante estrategias, certeza jur&iacute;dica a la sociedad.\r\n\r\n<p>&nbsp;</p>\r\n\r\n<p>&nbsp;</p>\r\n\r\n<div class=\"fw-bold\">Visi&oacute;n</div>\r\nSer una &Oacute;rgano de Difusi&oacute;n confiable con Calidad y Profesionalismo, en la edici&oacute;n, publicaci&oacute;n y distribuci&oacute;n de Publicaciones Oficiales en beneficio de la ciudadan&iacute;a oaxaque&ntilde;a y del mismo Gobierno.\r\n\r\n<p>&nbsp;</p>\r\n\r\n<h3>Talleres Gr&aacute;ficos</h3>\r\n\r\n<p>&nbsp;</p>\r\n\r\n<div class=\"fw-bold\">Misi&oacute;n</div>\r\nLos Talleres Gr&aacute;ficos del Gobierno del Estado tienen la misi&oacute;n de determinar y aplicar las t&eacute;cnicas del proceso de artes gr&aacute;ficas para obtener impresos de calidad. Tiene como funci&oacute;n principal la edici&oacute;n, publicaci&oacute;n y administraci&oacute;n del Peri&oacute;dico Oficial, que es el &oacute;rgano de difusi&oacute;n y comunicaci&oacute;n del Gobierno del Estado, cuyo prop&oacute;sito consiste en difundir y dar car&aacute;cter legal a las leyes, decretos, reglamentos, circulares, &oacute;rdenes, acuerdos y dem&aacute;s mandamientos que emitan los Poderes e Instituciones del Estado y Ayuntamientos de los diversos municipios, as&iacute; como los particulares.\r\n\r\n<p>&nbsp;</p>\r\n\r\n<p>&nbsp;</p>\r\n\r\n<div class=\"fw-bold\">Visi&oacute;n</div>\r\nSer una instituci&oacute;n confiable y de excelencia que adem&aacute;s de producir el Peri&oacute;dico Oficial del Gobierno del Estado en tiempo y forma, cuente con la infraestructura necesaria que le permita posicionarse como l&iacute;der en el ramo de las artes gr&aacute;ficas, para proveer a las diversas dependencias que integran la administraci&oacute;n p&uacute;blica estatal impresos de la m&aacute;s alta calidad, elaborados con las m&aacute;s avanzadas t&eacute;cnicas\r\n\r\n<p>&nbsp;</p>\r\n\r\n<p>&nbsp;</p>\r\n\r\n<div class=\"fw-bold\">Funciones de la unidad de talleres gr&aacute;ficos</div>\r\nI. Determinar y aplicar las t&eacute;cnicas del proceso de artes gr&aacute;ficas para obtener con calidad peri&oacute;dicos, que requiera la Administraci&oacute;n P&uacute;blica Estatal;\r\n\r\n<p>&nbsp;</p>\r\n\r\n<p>II. Coordinarse permanentemente con la Director Jur&iacute;dico de la Subsecretar&iacute;a Jur&iacute;dica y de Derechos Humanos de la Secretar&iacute;a General, para acordar la forma y tiempos de publicaci&oacute;n del Peri&oacute;dico Oficial del Gobierno del Estado y de las diversas disposiciones jur&iacute;dicas;</p>\r\n\r\n<p>III. Coordinar y controlar los trabajos de formaci&oacute;n y edici&oacute;n del Peri&oacute;dico Oficial, mejorando su calidad, coadyuvando al logro de las metas y objetivos Institucionales;</p>\r\n\r\n<p>IV. Llevar el registro que permita la publicaci&oacute;n oportuna de la informaci&oacute;n oficial que tenga que hacerse en el Peri&oacute;dico Oficial; V. Revisar los originales mec&aacute;nicos de los trabajos de impresi&oacute;n solicitados por las Dependencias autorizadas;</p>\r\n\r\n<p>VI. Proporcionar el servicio de suscripci&oacute;n y entrega de los ejemplares del peri&oacute;dico oficial que le sean solicitados, ya sea por las diversas Dependencias y Entidades o por los particulares;</p>\r\n\r\n<p>VII. Procurar que los ejemplares de los Peri&oacute;dicos Oficiales, se ajusten a los lineamientos de distribuci&oacute;n y venta previamente establecidos, que le permitan abatir costos de producci&oacute;n de los mismos;</p>\r\n\r\n<p>VIII. Suministrar mantenimiento preventivo y correctivo a la maquinaria y dem&aacute;s equipo e los Talleres Gr&aacute;ficos, para el cumplimiento de las tareas encomendadas;</p>\r\n\r\n<p>IX. Controlar las entradas y salidas del material que se utiliza en la elaboraci&oacute;n del Peri&oacute;dico, as&iacute; como la existencia de los Peri&oacute;dicos en almac&eacute;n; y</p>\r\n\r\n<p>X. Las dem&aacute;s que le confiera el Secretario General, y el Director Jur&iacute;dico de la Subsecretar&iacute;a Jur&iacute;dica y de Derechos Humanos, as&iacute; como las que le se&ntilde;alen las disposiciones legales y reglamentarias relativas vigentes.</p>\r\n</div>', '2022-11-24 12:54:08', 1),
(2, 'Información servicio', '<div class=\"container px-2 px-md-5 py-5\">\r\n<h3>A. Para publicar</h3>\r\n\r\n<p>Son requisitos para la publicaci&oacute;n en el Peri&oacute;dico Oficial los siguientes:</p>\r\n\r\n<div class=\"fw-bold\">I. Trat&aacute;ndose de documentaci&oacute;n de car&aacute;cter oficial</div>\r\n\r\n<p style=\"margin-left:40px\">a) Deber&aacute; contar con la autorizaci&oacute;n de la Unidad del Peri&oacute;dico Oficial de la Consejer&iacute;a Jur&iacute;dica del Gobierno del Estado.<br />\r\nb) Se deber&aacute; presentar oficio de solicitud de publicaci&oacute;n debidamente requisitado, fundado y motivado, ante la Unidad del Peri&oacute;dico Oficial de la Consejer&iacute;a Jur&iacute;dica del Gobierno del Estado, anexando documento de manera impresa, en original y copia, as&iacute; como el archivo digital del mismo y, en su caso, el comprobante original del pago de los derechos correspondientes. A efecto de lo anterior, el interesado deber&aacute; acudir en primera instancia a la Unidad de Talleres Gr&aacute;ficos, en donde se le expedir&aacute; la orden de pago y l&iacute;nea de captura, para que realice el pago a la brevedad posible. Por pandemia deber&aacute;n enviar documento firmado y sellado al Correo unidadtalleresgraficos@gmail.com, Para que se cotic&eacute; y envi&eacute; la l&iacute;nea de captura (Tiempo de atenci&oacute;n de 24 a 48 hrs.) Nota: adjuntar informaci&oacute;n de facturaci&oacute;n (RFC, DOMICILIO FISCAL, CORREO PARA RECIBIR SU FACTURA, REGIMEN FISCAL Y USO DE SU CFDI) Conforme a las disposiciones fiscales del SAT, para emitir las Facturas electr&oacute;nicas versi&oacute;n 4.0, el campo de Uso de CFDI, regimen Fiscal y c&oacute;digo postal son obligatorios, y una mala selecci&oacute;n no es motivo de cancelaci&oacute;n.<br />\r\nc) Autorizada la publicaci&oacute;n, la documentaci&oacute;n ser&aacute; remitida a la Unidad de Talleres Gr&aacute;ficos con el oficio correspondiente.</p>\r\n\r\n<div class=\"fw-bold\">II. Documentaci&oacute;n emitida por particulares</div>\r\n\r\n<p style=\"margin-left:40px\">a) Deber&aacute; presentarse en original, debidamente firmada y sellada por la persona f&iacute;sica o moral, o notario que la emita.<br />\r\nb) Presentar oficio dirigido al jefe de la Unidad de Talleres Gr&aacute;ficos, solicitando la publicaci&oacute;n.<br />\r\nc) Las personas morales, deber&aacute;n presentar copia del documento que acredite que la persona que solicita la publicaci&oacute;n est&aacute; facultada para realizar dichos tr&aacute;mites, tales como el acta constitutiva, carta poder, o dem&aacute;s instrumento id&oacute;neo que acredite la personer&iacute;a, y<br />\r\nd) Cubrir los derechos de publicaci&oacute;n correspondientes seg&uacute;n lo establece la Ley Estatal de Derechos.</p>\r\n\r\n<div class=\"fw-bold\">III. Edictos emanados de &oacute;rganos jurisdiccionales</div>\r\n\r\n<p style=\"margin-left:40px\">a) Solicitar la publicaci&oacute;n en la Unidad de Talleres Gr&aacute;ficos.<br />\r\nb) Presentar la documentaci&oacute;n en original, debidamente firmada y sellada por el &oacute;rgano que lo emite, y<br />\r\nc) Cubrir los derechos de publicaci&oacute;n correspondientes seg&uacute;n lo establece la Ley Estatal de Derechos.</p>\r\n\r\n<p style=\"margin-left:40px\">Todo documento tendiente a insertarse en las ediciones ordinarias y sus secciones, deber&aacute; presentarse con solicitud y comprobante de pago con dos d&iacute;as de anticipaci&oacute;n a efecto de ser incluido en la edici&oacute;n semanal correspondiente, tomando en cuenta que los d&iacute;as de cierre de los peri&oacute;dicos ordinarios de cada s&aacute;bado ser&aacute;n los d&iacute;as mi&eacute;rcoles a las 1:00 p.m.</p>\r\n\r\n<p style=\"margin-left:40px\">En caso de solicitar una publicaci&oacute;n extraordinaria, los documentos ser&aacute;n entregados con dos d&iacute;as de anticipaci&oacute;n a la fecha en que se pretenda publicar.</p>\r\n\r\n<p style=\"margin-left:40px\">Todo documento tendiente a ser publicado en el peri&oacute;dico oficial, deber&aacute; estar impreso en tinta negra (no escala de grises), en hojas tama&ntilde;o carta u oficio, de papel bond, con fuentes de tama&ntilde;o m&iacute;nimo de 12 puntos (0.42331 cm) y deber&aacute; presentarse debidamente ordenado y numerado al pie de p&aacute;gina.</p>\r\n\r\n<div class=\"fw-bold\">Para cualquier duda acerca de los requisitos a publicar podr&aacute; consultar los:</div>\r\n\r\n<p style=\"margin-left:40px\">Lineamientos Generales Para El Proceso De Edici&oacute;n, Publicaci&oacute;n Y Venta Del Peri&oacute;dico Oficial Del Gobierno Del Estado De Oaxaca. Publicados en el Peri&oacute;dico Oficial del Gobierno del Estado el 28 de octubre de 2015.</p>\r\n\r\n<div class=\"fw-bold\">B. Para suscribirse</div>\r\n\r\n<p>Las suscripciones s&oacute;lo cubren los peri&oacute;dicos ordinarios, las secciones y extras deber&aacute;n adquirirse por separado<br />\r\n1. Solicitar la orden de pago para suscripci&oacute;n en las oficinas de Talleres Gr&aacute;ficos del Gobierno del Estado.<br />\r\n2. Realizar el pago de derechos en cualquiera de las oficinas recaudadoras del estado.<br />\r\n3. Presentar el original del comprobante de pago expedido por la oficina recaudadora, de no hacerlo su suscripci&oacute;n no proceder&aacute;.<br />\r\n4. Recoger peri&oacute;dicamente sus ejemplares en las instalaciones de Talleres Gr&aacute;ficos del Gobierno del Estado.<br />\r\n5. En caso de que el suscriptor no radique en la ciudad de Oaxaca de Ju&aacute;rez y quiera que los peri&oacute;dicos se le env&iacute;en, se considerar&aacute; como suscriptor for&aacute;neo y deber&aacute; presentar sus gu&iacute;as prepagadas para que se le env&iacute;en sus ejemplares mensualmente. Los costos se regir&aacute;n por lo dispuesto en la Ley Estatal de Derechos.</p>\r\n\r\n<div class=\"fw-bold\">C. Para adquirir ejemplares</div>\r\n\r\n<p>1. Solicitar la orden de pago para suscripci&oacute;n en las oficinas de Talleres Gr&aacute;ficos del Gobierno del Estado.<br />\r\n2. Realizar el pago de derechos en cualquiera de las oficinas recaudadoras de la secretar&iacute;a de Finanzas.<br />\r\n3. Presentar el original del comprobante de pago expedido por la oficina recaudadora, en caso de requerir el comprobante original para comprobaci&oacute;n de gastos anexar fotocopia.<br />\r\n4. Recoger los ejemplares en las instalaciones de Talleres Gr&aacute;ficos del Gobierno del Estado.</p>\r\n</div>', '2022-11-24 12:14:44', 1),
(3, 'Información tabuladores', '<div class=\"container py-5 px-2 px-md-5\">\r\n					<table class=\"table text-center table-borderless mb-4\" style=\"font-size: 12px; border: 1px solid #ccc;\">\r\n					  <thead>\r\n					    <tr class=\"table-dark\">\r\n					      <th scope=\"col\">Publicaciones</th>\r\n					      <th scope=\"col\">UMA (UNIDAD DE MEDIDA Y ACTUALIZACIÓN)</th>\r\n					      <th scope=\"col\">Precio</th>\r\n					    </tr>\r\n					  </thead>\r\n					  <tbody>\r\n					    <tr>\r\n					      <td>PUBLICACIONES 1/4 PLANA</td>\r\n					      <td>5.00</td>\r\n					      <td>$ 481.00</td>\r\n					    </tr>\r\n					    <tr>\r\n					      <td>PUBLICACIONES 1/2 PLANA</td>\r\n					      <td>8.00</td>\r\n					      <td>$ 770.00</td>\r\n					    </tr>\r\n					    <tr>\r\n					      <td>PUBLICACIONES 1 PLANA</td>\r\n					      <td>12.00</td>\r\n					      <td>$ 1,155.00</td>\r\n					    </tr>\r\n					  </tbody>\r\n				</table>\r\n				<table class=\"table text-center table-borderless mb-4\" style=\"font-size: 12px; border: 1px solid #ccc;\">\r\n					  <thead>\r\n					    <tr class=\"table-dark\">\r\n					      <th scope=\"col\">Venta ejemplares</th>\r\n					      <th scope=\"col\">UMA (UNIDAD DE MEDIDA Y ACTUALIZACIÓN)</th>\r\n					      <th scope=\"col\">Precio</th>\r\n					    </tr>\r\n					  </thead>\r\n					  <tbody>\r\n					    <tr>\r\n					      <td>DISPOSICIÓN DE EJEMPLAR OTROS</td>\r\n					      <td>0.50</td>\r\n					      <td>$ 48.00</td>\r\n					    </tr>\r\n					  </tbody>\r\n				</table>\r\n				<table class=\"table text-center table-borderless mb-4\" style=\"font-size: 12px; border: 1px solid #ccc;\">\r\n					  <thead>\r\n					    <tr class=\"table-dark\">\r\n					      <th scope=\"col\">Ejemplares que contengan leyes, reglamentos, planes, bandos o manuales</th>\r\n					      <th scope=\"col\">UMA (UNIDAD DE MEDIDA Y ACTUALIZACIÓN)</th>\r\n					      <th scope=\"col\">Precio</th>\r\n					    </tr>\r\n					  </thead>\r\n					  <tbody>\r\n					    <tr>\r\n					      <td>De 1 a 40 páginas</td>\r\n					      <td>1.00</td>\r\n					      <td>$ 96.00</td>\r\n					    </tr>\r\n					    <tr>\r\n					      <td>De 41 a 80 página</td>\r\n					      <td>2.00</td>\r\n					      <td>$ 192.00</td>\r\n					    </tr>\r\n					    <tr>\r\n					      <td>De 81 a 120 páginas</td>\r\n					      <td>3.00</td>\r\n					      <td>$ 289.00</td>\r\n					    </tr>\r\n					    <tr>\r\n					      <td>Más de 121 página</td>\r\n					      <td>4.00</td>\r\n					      <td>$ 385.00</td>\r\n					    </tr>\r\n					  </tbody>\r\n				</table>\r\n				<table class=\"table text-center table-borderless mb-4\" style=\"font-size: 12px; border: 1px solid #ccc;\">\r\n					  <thead>\r\n					    <tr class=\"table-dark\">\r\n					      <th scope=\"col\">Suscripciones</th>\r\n					      <th scope=\"col\">UMA (UNIDAD DE MEDIDA Y ACTUALIZACIÓN)</th>\r\n					      <th scope=\"col\">Precio</th>\r\n					    </tr>\r\n					  </thead>\r\n					  <tbody>\r\n					    <tr>\r\n					      <td>SUSCRIPCIÓN ORDINARIO SEMESTRAL</td>\r\n					      <td>9.00</td>\r\n					      <td>$ 866.00</td>\r\n					    </tr>\r\n					    <tr>\r\n					      <td>SUSCRIPCIÓN ORDINARIO ANUAL</td>\r\n					      <td>17.00</td>\r\n					      <td>$ 1636.00</td>\r\n					    </tr>\r\n					  </tbody>\r\n				</table>\r\n				<table class=\"table text-center table-borderless mb-4\" style=\"font-size: 12px; border: 1px solid #ccc;\">\r\n					  <thead>\r\n					    <tr class=\"table-dark\">\r\n					      <th scope=\"col\">Otros servicios</th>\r\n					      <th scope=\"col\">UMA (UNIDAD DE MEDIDA Y ACTUALIZACIÓN)</th>\r\n					      <th scope=\"col\">Precio</th>\r\n					    </tr>\r\n					  </thead>\r\n					  <tbody>\r\n					    <tr>\r\n					      <td>CERTIFICACIONES Y CONSTANCIAS</td>\r\n					      <td>4.00</td>\r\n					      <td>$ 385.00</td>\r\n					    </tr>\r\n					    <tr>\r\n					      <td>EXPEDICIÓN DE COPIAS CERTIFICADAS DE EJEMPLARES DEL PERIÓDICO OFICIAL, POR HOJA</td>\r\n					      <td>0.18</td>\r\n					      <td>$ 17.00</td>\r\n					    </tr>\r\n					  </tbody>\r\n				</table>\r\n\r\n				<p class=\"mb-4\" style=\"font-size: 11px;\">* El tabulador lo establece la LEY ESTATAL DE DERECHOS DE OAXACA publicado en el Periódico Oficial del Estado el 20-12-17 art. 46</p>\r\n				<p class=\"mb-4\" style=\"font-size: 11px;\">\r\n					* La Unidad de Medida y Actualización (UMA) es la referencia económica en pesos para determinar la cuantía del pago de las obligaciones y supuestos previstos en las leyes federales, de las entidades federativas, así como en las disposiciones jurídicas que emanen de todas las anteriores.(Fuente https://www.inegi.org.mx/temas/uma/)\r\n				</p>\r\n				<p class=\"mb-4\" style=\"font-size: 11px;\">\r\n					* Los precios se redondean despuÃ©s de calcular la totalidad de los conceptos cobrado\r\n				</p>\r\n			</div>', '2022-11-18 14:50:58', 1),
(4, 'Información donde publicar', '<div class=\"container py-5 px-2 px-md-5\" style=\"font-size: 14px;\">\r\n				<h6 class=\"mb-5\">La recepción de documentos para publicar, es en relación al contenido:</h6>\r\n					<div class=\"row\">\r\n						<div class=\"col-12 col-md-6\">\r\n							<h5 class=\"mb-3\">Unidad de Talleres Gráicos del Gobierno del Estado recibe:</h5>\r\n							<ol class=\"list-group-numbered\">\r\n							  <li class=\"list-group-item\">Reconocimientos de validez oficial</li>\r\n								<li class=\"list-group-item\">Avisos Notariales</li>\r\n								<li class=\"list-group-item\">Edictos emanados de Órganos jurisdiccionales</li>\r\n								<li class=\"list-group-item\">Documentos para cotizar y generar linea de captura</li>\r\n								<li class=\"list-group-item\">Notificaciones de conocimiento de amparos contra Unidad de Talleres Gráicos del Gobierno del Estad </li>\r\n							</ol>\r\n						</div>\r\n						<div class=\"col-12 col-md-6\">\r\n							<h5 class=\"mb-3\">	Consejería Jurídica del Gobierno del Estado recibe:</h5>\r\n							<div class=\"d-flex justify-content-center\">\r\n								<ol class=\"list-group-numbered\">\r\n								<li class=\"list-group-item\"> Actas</li>\r\n								<li class=\"list-group-item\"> Acuerdos</li>\r\n								<li class=\"list-group-item\"> Anexos</li>\r\n								<li class=\"list-group-item\"> Avisos</li>\r\n								<li class=\"list-group-item\"> Bandos de Policia y Buen Gobierno</li>\r\n								<li class=\"list-group-item\"> Calendarios</li>\r\n								<li class=\"list-group-item\"> Cartas</li>\r\n								<li class=\"list-group-item\"> Catálogos</li>\r\n								<li class=\"list-group-item\"> Concesiones</li>\r\n								<li class=\"list-group-item\"> Constancias</li>\r\n								<li class=\"list-group-item\"> Controversias constitucionales</li>\r\n								<li class=\"list-group-item\"> Convenios</li>\r\n								<li class=\"list-group-item\"> Decretos</li>\r\n								<li class=\"list-group-item\"> Dictámenes</li>\r\n								<li class=\"list-group-item\"> Estatutos</li>\r\n								<li class=\"list-group-item\"> Expedientes</li>\r\n								<li class=\"list-group-item\"> Fe de erratas</li>\r\n								<li class=\"list-group-item\"> Fondos</li>\r\n								<li class=\"list-group-item\"> Gacetas</li>\r\n								<li class=\"list-group-item\"> Informes</li>\r\n								<li class=\"list-group-item\"> Leyes</li>\r\n								<li class=\"list-group-item\"> Lineamientos</li>\r\n								<li class=\"list-group-item\"> Manuales</li>\r\n							</ol>\r\n								<ol class=\"list-group-numbered\">\r\n									<li class=\"list-group-item\"> Metodologías</li>\r\n									<li class=\"list-group-item\"> Modificaciones</li>\r\n									<li class=\"list-group-item\"> Oficios</li>\r\n									<li class=\"list-group-item\">Organigramas</li>\r\n									<li class=\"list-group-item\">Padrones</li>\r\n									<li class=\"list-group-item\">Participaciones</li>\r\n									<li class=\"list-group-item\">Planes</li>\r\n									<li class=\"list-group-item\">Plazos</li>\r\n									<li class=\"list-group-item\">Presupuestos</li>\r\n									<li class=\"list-group-item\">Reglamentos</li>\r\n									<li class=\"list-group-item\">Reglas de operación</li>\r\n									<li class=\"list-group-item\">Relaciones</li>\r\n									<li class=\"list-group-item\">Reportes</li>\r\n									<li class=\"list-group-item\">Resoluciones</li>\r\n									<li class=\"list-group-item\">Sentencias</li>\r\n									<li class=\"list-group-item\">Síntesis</li>\r\n									<li class=\"list-group-item\">Tesis</li>\r\n									<li class=\"list-group-item\">Votos concurrentes</li>\r\n									<li class=\"list-group-item\">Estados financieros</li>\r\n									<li class=\"list-group-item\">Amparos</li>\r\n									<li class=\"list-group-item\">Información de Concesiones</li>\r\n									<li class=\"list-group-item\">Portal aplicativo de la Secretaría de Hacienda (Pash)</li>\r\n									<li class=\"list-group-item\">Notificaciones de conocimiento de amparos contra el Periódico oficial</li>\r\n							</ol>\r\n							</div>\r\n\r\n						</div>\r\n					</div>\r\n			</div>', '2022-11-18 14:49:08', 1),
(5, 'Infotmación contacto', '<?php require RUTA_APP . \'/vistas/inc/header_public.php\'; ?>\r\n    <section class=\"\">\r\n			<div class=\"container py-5 px-2 px-md-5\">\r\n					<h3 class=\"mb-4\">Contacto</h3>\r\n					<div class=\"row\">\r\n						<div class=\"col-12 col-md-6 px-5 pb-4\"> \r\n								Lic. Mario Jiménez Noriega <br>\r\n								Consejería Jurídica <br>\r\n								Jefe de la Unidad del Periódico Oficial del Gobierno del Estado de Oaxaca. <br>\r\n								mario.jimenez@oaxaca.gob.mx <br>\r\n								Ciudad administrativa <br>\r\n								Edificio 7, nivel 1 <br>\r\n								Carretera Oaxaca-Istmo Km 11.5 <br>\r\n								Tlalixtac de Cabrera, Oaxaca. C.P. 68270 <br>\r\n								Conmutador (951) 50 1 50 00 ext. 11631 <br>\r\n						</div>\r\n						<div class=\"col-12 col-md-6 px-2 px-md-4 pb-4\"> \r\n						<iframe src=\"https://www.google.com/maps/embed?pb=!1m18!1m12!1m3!1d1887.7338565727052!2d-97.10121890880147!3d18.866321009095206!2m3!1f0!2f0!3f0!3m2!1i1024!2i768!4f13.1!3m3!1m2!1s0x0%3A0x5389d8c35461bad0!2zMTjCsDUxJzU4LjgiTiA5N8KwMDYnMDAuMyJX!5e0!3m2!1ses!2smx!4v1665124285404!5m2!1ses!2smx\" width=\"100%\" height=\"300\" style=\"border:0;\" allowfullscreen=\"\" loading=\"lazy\" referrerpolicy=\"no-referrer-when-downgrade\"></iframe>\r\n						</div>\r\n					</div>\r\n			</div>\r\n	</section>\r\n<?php require RUTA_APP . \'/vistas/inc/footer_public.php\'; ?>', '2022-11-18 14:47:16', 1),
(6, 'Suscripciones', '<div class=\"px-2 px-md-5 py-5\">\r\n<h2>SUSCRIPCI&Oacute;N IMPRESA / SUSCRIPCI&Oacute;N DIGITAL</h2>\r\n\r\n<p>&nbsp;</p>\r\n\r\n<h6>LA SUSCRIPCI&Oacute;N IMPRESA NO INCLUYE LA SUSCRIPCI&Oacute;N DIGITAL NI EL SERVICIO DE HEMEROTECA</h6>\r\n&nbsp;\r\n\r\n<h5>Suscripci&oacute;n digital</h5>\r\n<br />\r\nLa suscripci&oacute;n digital se consulta en la p&aacute;gina www.gobiernodeoaxaca.com.mx a trav&eacute;s de dispositivos m&oacute;viles o fijos, para mayor informaci&oacute;n llame al +525556362080 o escribanos a: suscripciones@gbiernodeoaxaca.com.mx<br />\r\n<br />\r\nSe adquiere por medio de nuestra tienda en l&iacute;nea <a href=\"https://b32.mx/sistwebfile10/paginas/formpasarela1\"> Sistema de suscripciones </a> en cualquiera de los tres per&iacute;odos:<br />\r\n&nbsp;\r\n<ul>\r\n	<li>Anual: MX $1,000</li>\r\n	<li>Semestral: MX $630</li>\r\n	<li>Mensual: MX $380</li>\r\n	<li>Suscripci&oacute;n Anual + Hemeroteca: MX $1,450</li>\r\n</ul>\r\n<br />\r\nLos pasos a seguir son:<br />\r\n&nbsp;\r\n<ol>\r\n	<li>INICIE SESI&Oacute;N: correo electr&oacute;nico y contrase&ntilde;a.</li>\r\n	<li>Elija el producto a comprar y elija la forma de pago.</li>\r\n	<li>El pago lo podr&aacute;s realizar por Mercado Pago, Paypal VISA o MASTERCARD.</li>\r\n</ol>\r\n<br />\r\n<br />\r\nPara mayor informaci&oacute;n llame al + 525556362080 o +525556362084 escribanos a: suscripciones@proceso.com.mx\r\n<p>&nbsp;</p>\r\n</div>', '2022-11-23 17:44:46', 1);

-- --------------------------------------------------------

--
-- Estructura de tabla para la tabla `info_pie_fast_link`
--

DROP TABLE IF EXISTS `info_pie_fast_link`;
CREATE TABLE IF NOT EXISTS `info_pie_fast_link` (
  `id` int(11) NOT NULL AUTO_INCREMENT,
  `name` varchar(100) COLLATE utf8mb4_unicode_ci NOT NULL,
  `link` varchar(400) COLLATE utf8mb4_unicode_ci NOT NULL,
  `date_write` datetime NOT NULL,
  `state` tinyint(4) NOT NULL,
  PRIMARY KEY (`id`)
) ENGINE=MyISAM AUTO_INCREMENT=3 DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

--
-- Volcado de datos para la tabla `info_pie_fast_link`
--

INSERT INTO `info_pie_fast_link` (`id`, `name`, `link`, `date_write`, `state`) VALUES
(1, 'Inicio', 'http://localhost/proyectos_all/mvc_periodico_pagina/paginas/index', '2022-11-18 18:48:15', 1);

-- --------------------------------------------------------

--
-- Estructura de tabla para la tabla `inicio_content_banner`
--

DROP TABLE IF EXISTS `inicio_content_banner`;
CREATE TABLE IF NOT EXISTS `inicio_content_banner` (
  `id` int(11) NOT NULL AUTO_INCREMENT,
  `texto_banner1` varchar(500) COLLATE utf8mb4_unicode_ci NOT NULL,
  `texto_banner2` varchar(500) COLLATE utf8mb4_unicode_ci NOT NULL,
  `date_write` datetime NOT NULL,
  PRIMARY KEY (`id`)
) ENGINE=MyISAM AUTO_INCREMENT=2 DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

--
-- Volcado de datos para la tabla `inicio_content_banner`
--

INSERT INTO `inicio_content_banner` (`id`, `texto_banner1`, `texto_banner2`, `date_write`) VALUES
(1, 'PERIÓDICO OFICIAL DEL ESTADO', 'Gobierno del Estado de Oaxaca 2016-2022', '2022-11-17 12:36:10');

-- --------------------------------------------------------

--
-- Estructura de tabla para la tabla `inicio_content_main`
--

DROP TABLE IF EXISTS `inicio_content_main`;
CREATE TABLE IF NOT EXISTS `inicio_content_main` (
  `id` int(11) NOT NULL AUTO_INCREMENT,
  `texto_cards_title` varchar(500) COLLATE utf8mb4_unicode_ci NOT NULL,
  `content_main_text` varchar(500) COLLATE utf8mb4_unicode_ci NOT NULL,
  `link` varchar(500) COLLATE utf8mb4_unicode_ci NOT NULL,
  `imagen_cards` varchar(150) COLLATE utf8mb4_unicode_ci NOT NULL,
  `type` varchar(100) COLLATE utf8mb4_unicode_ci NOT NULL,
  `date_write` datetime NOT NULL,
  `state` tinyint(4) NOT NULL,
  PRIMARY KEY (`id`)
) ENGINE=MyISAM AUTO_INCREMENT=8 DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

--
-- Volcado de datos para la tabla `inicio_content_main`
--

INSERT INTO `inicio_content_main` (`id`, `texto_cards_title`, `content_main_text`, `link`, `imagen_cards`, `type`, `date_write`, `state`) VALUES
(5, 'COSTOS DE DERECHOS DE PUBLICACIÓN', 'Encuentra información de los distintos costos para cada publicación.', '#', '1659note-digital.jpg', 'image/jpeg', '2022-11-18 09:16:59', 1),
(6, 'SUSCRIPCIONES', 'Si desea publicar su contenido puede hacer su pago desde esta sección, cualquier duda puede contactarnos con los distintos medios que le proporcionamos.', 'http://localhost/proyectos_all/mvc_periodico_pagina/paginas/suscripciones', '1756online-card.jpg', 'image/jpeg', '2022-11-23 17:47:54', 1),
(7, 'SECCIÓN DE PERIÓDICOS 2022', 'Puede ver y descargar todos los artículos que se publicaron recientemente.', '#', '1908public-add.png', 'image/png', '2022-11-18 09:19:08', 1);

-- --------------------------------------------------------

--
-- Estructura de tabla para la tabla `inifo_pie_contact`
--

DROP TABLE IF EXISTS `inifo_pie_contact`;
CREATE TABLE IF NOT EXISTS `inifo_pie_contact` (
  `id` int(11) NOT NULL AUTO_INCREMENT,
  `info` varchar(150) COLLATE utf8mb4_unicode_ci NOT NULL,
  `tipo` varchar(50) COLLATE utf8mb4_unicode_ci NOT NULL,
  `date_write` datetime NOT NULL,
  `state` tinyint(4) NOT NULL,
  PRIMARY KEY (`id`)
) ENGINE=MyISAM AUTO_INCREMENT=4 DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

--
-- Volcado de datos para la tabla `inifo_pie_contact`
--

INSERT INTO `inifo_pie_contact` (`id`, `info`, `tipo`, `date_write`, `state`) VALUES
(3, '278 120 97 89', 'tel', '2022-11-19 10:16:29', 1),
(2, 'stav1073@yahoo.com.mx', 'mail', '2022-11-18 22:34:42', 1);

-- --------------------------------------------------------

--
-- Estructura de tabla para la tabla `login_partner`
--

DROP TABLE IF EXISTS `login_partner`;
CREATE TABLE IF NOT EXISTS `login_partner` (
  `id` int(11) NOT NULL AUTO_INCREMENT,
  `name_user` varchar(200) COLLATE utf8mb4_unicode_ci NOT NULL,
  `last_name` varchar(150) COLLATE utf8mb4_unicode_ci NOT NULL,
  `email_user` varchar(100) COLLATE utf8mb4_unicode_ci NOT NULL,
  `passw_user` varchar(150) COLLATE utf8mb4_unicode_ci NOT NULL,
  `access_user` int(4) NOT NULL,
  `tipo_user` varchar(6) COLLATE utf8mb4_unicode_ci NOT NULL,
  `date_write` datetime NOT NULL,
  PRIMARY KEY (`id`)
) ENGINE=MyISAM AUTO_INCREMENT=2 DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

--
-- Volcado de datos para la tabla `login_partner`
--

INSERT INTO `login_partner` (`id`, `name_user`, `last_name`, `email_user`, `passw_user`, `access_user`, `tipo_user`, `date_write`) VALUES
(1, 'Gustavo', 'Macuixtle', 'gustavo_stav@hotmail.com', '123', 100, 'ADM', '2022-11-16 14:04:29');
COMMIT;

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
