-- MySQL dump 10.13  Distrib 5.7.17, for Win64 (x86_64)
--
-- Host: 127.0.0.1    Database: bast
-- ------------------------------------------------------
-- Server version	5.5.5-10.3.16-MariaDB

/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!40101 SET NAMES utf8 */;
/*!40103 SET @OLD_TIME_ZONE=@@TIME_ZONE */;
/*!40103 SET TIME_ZONE='+00:00' */;
/*!40014 SET @OLD_UNIQUE_CHECKS=@@UNIQUE_CHECKS, UNIQUE_CHECKS=0 */;
/*!40014 SET @OLD_FOREIGN_KEY_CHECKS=@@FOREIGN_KEY_CHECKS, FOREIGN_KEY_CHECKS=0 */;
/*!40101 SET @OLD_SQL_MODE=@@SQL_MODE, SQL_MODE='NO_AUTO_VALUE_ON_ZERO' */;
/*!40111 SET @OLD_SQL_NOTES=@@SQL_NOTES, SQL_NOTES=0 */;

--
-- Table structure for table `activities`
--

DROP TABLE IF EXISTS `activities`;
/*!40101 SET @saved_cs_client     = @@character_set_client */;
/*!40101 SET character_set_client = utf8 */;
CREATE TABLE `activities` (
  `id` int(11) NOT NULL AUTO_INCREMENT,
  `name` varchar(45) NOT NULL,
  `address` varchar(75) NOT NULL,
  `schedule` varchar(75) NOT NULL,
  `price` varchar(45) DEFAULT NULL,
  `image` varchar(150) NOT NULL,
  `descrip1` varchar(150) NOT NULL,
  `descrip2` varchar(2500) DEFAULT NULL,
  PRIMARY KEY (`id`)
) ENGINE=InnoDB AUTO_INCREMENT=9 DEFAULT CHARSET=latin1;
/*!40101 SET character_set_client = @saved_cs_client */;

--
-- Dumping data for table `activities`
--

LOCK TABLES `activities` WRITE;
/*!40000 ALTER TABLE `activities` DISABLE KEYS */;
INSERT INTO `activities` VALUES (1,'La Feria de San Telmo','Inicia desde la calle Defensa 120','Domingos de 10.00hs a 17.00 hs.','Gratis','https://www.buenosaires123.com.ar/imagenes/feria_san_telmo_domingos.jpg','Es un verdadero festival callejero. Cada domingo recibe \ncerca de 10 mil personas, entre ellas a muchos turistas extranjeros.','Visitar el mercado es aventurarse a un paseo que rememora la Buenos Aires de antes. \nRealizar las compras del día, buscar algún condimento que no es sencillo encontrar en otro lugar, \no simplemente dejarse llevar entre los puestos de antigüedades, artesanías, discos o juguetes viejos,\n es una experiencia ecléctica, que toma lo mejor de cada rubro para hacer de ello una combinación nueva y \n única. Este rejunte de propuestas disímiles son el gran atractivo del paseo.'),(2,'Caminito','Calles Del Valle Iberlucea y Magallanes','Todos los días de 9.00hs a 19.00hs','Gratis','https://media.diariopopular.com.ar/adjuntos/143/imagenes/003/403/0003403989.jpg','Caminito es uno de los paseos más emblemáticos de la ciudad y de los \natractivos imperdibles para quienes la visitan. ','Esta feria se encuentra en el popular paseo de Caminito, en el barrio de La Boca. Con sus\n conventillos pintados de distintos colores, Caminito se ha convertido en uno de los recorridos más \n emblemáticos de la ciudad y, desde el año 1959, es reconocido como museo a cielo abierto gracias \n a las numerosas donaciones de distintos artistas y al impulso fundamental del pintor Benito Quinquela Martín, \n vecino del barrio y cuyo museo se encuentra en las inmediaciones.'),(3,'La Feria del Libro en Plaza Italia','Avenida Santa Fé y Darregueyra',' Sábados, Domingos y Feriados de 12 a 20:30 hs.','Gratis','http://2.bp.blogspot.com/-ZiT3xLW8KWY/UtMtPWEgAfI/AAAAAAAABJg/urk--jW4sqk/s1600/DSC08543.gif','Está fija todo el año y es una de las ferias más importante de libros usados del país.','\nIr a la feria de libros de Plaza Italia ya es un clásico de Palermo. Está fija todo \nel año y es una de las ferias más importante de libros usados del país. Se halla muy\n cerca del Zoológico, frente al La Rural.  En las semanas en que se hace la Feria de\n l libro, el que pasea puede darse una panzada de libros y visitar en un día dos ferias\n muy diferentes entre sí. Cada una tiene distintos tipos de libros, de contenido, y distintos modos de exposición.'),(4,'La Feria de Recoleta','Entre la avenida Pueyrredón y Libertador','Todos los fines de semana y feriados de 11.00 a 20.00 hs.','Gratuito','https://www.buenosaires.travel/wp-content/buenosaires_uploads/capital-federal-22-801x563.jpg','La Feria de Recoleta es el mayor mercado artesanal de Buenos Aires. Un lugar ideal para comprar regalos y recuerdos.','La Feria de Recoleta es un paseo artesanal ubicado en la Plaza Francia. \nMás específicamente situada entre las avenidas Pueyrredón y Del Libertador de Recoleta, es también conocida por el nombre de Feria de Plaza Francia, en honor al espacio verde que la aloja. Se inició en los años 70 y hoy en día es una de las ferias artesanales más importantes y variadas de la Ciudad de Buenos Aires.\n\nEntre la oferta del paseo se encuentran instrumentos de diversos materiales como cerámica, cuero, madera, \nmetal, plástico, tejidos en tela y telar. La feria abre todos los fines de semana, incluyendo feriados, en horario de 11 de la mañana, y se extiende hasta las 20 horas. La opción también incluye actividades nocturnas, ya que en los alrededores de la plaza también se llevan a cabo espectáculos callejeros que integran músicos, malabaristas, payasos y artistas callejeros, tanto de día como de noche.\n\nLos inicios de la feria se remontan a finales de la década de 1970, cuando un grupo de personas se reunió p\nara comenzar a vender sus artesanías en el interior de la plaza. Con los años, la venta se oficializó, y la \nferia comenzó a crecer inusitadamente, llegando a contar hoy en día con más de cien artesanos registrados.\n\nJunto al predio se ubica el Centro Cultural Recoleta, además de la Iglesia del Pilar y el Cementerio de Recoleta. \nOtros atractivos cercanos lo constituyen el Museo de Bellas Artes y el Monumento a La Flor, por lo que es posible\n visitar los alrededores para conocer otros espacios interesantes.'),(5,'La Feria de Plaza Serrano','Calle Jorge Luis Borges y calle Honduras, Plaza Serrano, Palermo.','Sábados, domingos y feriados de 10.00 a 20.00 hs.','Gratuito','https://turismo.buenosaires.gob.ar/sites/turismo/files/feria_plaza_cortzar_serrano_palermo_1200_2.jpg','La Feria de Plaza Serrano en Palermo Soho es el lugar ideal para comprar ropa y accesorios, en especial para \nlas mujeres.','Plaza serrano, más conocida como “placita serrano”, pero en realidad llamada “Plaza Cortazar” \nes un clásico de la noche en Palermo. Un plaza rodeada de bares, ferias y locales de ropa, libros y\n discos, ¿qué más se puede pedir? Perfecto para un día que combine mate y shopping o para pasear por la feria de artesanías.\n\nEn la fera de Plaza Serrano vas a encontrar ropa, mates decorados, carteras de cuero, obras de arte, \nartistas callejeros que pintan retratos caricaturescos de la gente, juegos de ingenio y más. La feria \nse renueva a menudo ya que algunos extranjeros paran en Placita Serrano y hay mucha movida de gente.'),(6,'El Mercado de las Pulgas','Avenida Dorrego 1600 y Niceto Vega','De Martes a Domingo de 10.00 a 19.00 horas','Gratuito','https://buenosairesconnect.com/wp-content/uploads/2011/06/Mercado-de-Pulgas-fotos-16.jpg','Funciona desde el año 1986 en un gran galpón donde pueden encontrarse todo tipo de curiosidades y donde se destacan las antigüedades','Funciona desde el año 1986 en un gran galpón donde pueden encontrarse todo tipo de curiosidades y donde se destacan las antigüedades en mobiliario, obras de arte y objetos de todas las épocas y estilos. En una fusión de bohemia y objetos de calidad, todo tipo de personajes desfilan por allí y como un gran “cambalache”, conviven las tarotistas que tiran las cartas, los vendedores de sifones de vidrio, los buscavidas, los locales del ´70 con ofertas que incluyen desde las lámparas a los muebles y otros tantos objetos de valor. Actualmente todo el edificio se encuentra en tareas de reconstrucción.'),(7,'Experiencia gastronómica argentina','El restaurante está en Fitz Roy 2110','El 24, 25 y 31 de diciembre ','Aproximadamente $3.724','https://media-cdn.tripadvisor.com/media/attractions-splice-spp-540x360/06/6f/20/df.jpg','Venga y únase a nosotros en un delicioso viaje por la gastronomía más destacada de Argentina en la experiencia culinaria más divertida e interactiva d','Venga y únase a nosotros en un delicioso viaje por la gastronomía más destacada de Argentina en la experiencia culinaria más divertida e interactiva de Buenos Aires. Añada algo de brillo a su velada y opte por la clase de elaboración de cócteles a base de vino para empezar. A continuación, aprenderá cómo cerrar empanadas utilizando diferentes técnicas de \"repulga\". Durante la cena disfrutará de cuatro vinos boutique maridados a la perfección con alimentos de todos los rincones de Argentina y podrá la guinda con lo que muchos dicen que es la mejor carne de todo el país. El último paso será aprender a preparar la bebida más popular de Argentina, el mate, junto con los dulces más famosos, los alfajores.'),(8,'Lección de tango y cata de vinos.','Dr. Tomás Manuel de Anchorena 575','De Lunes a Sabado. Hora 14.00hs y 19.00hs','Aproximadamente $1.840','https://media-cdn.tripadvisor.com/media/attractions-splice-spp-540x360/07/18/0f/d2.jpg','Lección de tango de 60 minutos y desgustación empanadas caseras y vinos.','Tendrás una experiencia maravillosa. Al principio vas a hacer una clase de tango de 60 minutos, donde aprenderás los movimientos básicos. Podrás bailar en una milonga después de eso. Cuando terminemos la clase, vamos a probar algunas empanadas caseras, con vinos típicos de Argentina. La experiencia es dentro de un típico y original conventillo (casa popular de los inmigrantes). Entonces, tendrás la oportunidad de ver cómo solían vivir los inmigrantes.');
/*!40000 ALTER TABLE `activities` ENABLE KEYS */;
UNLOCK TABLES;

--
-- Table structure for table `foods`
--

DROP TABLE IF EXISTS `foods`;
/*!40101 SET @saved_cs_client     = @@character_set_client */;
/*!40101 SET character_set_client = utf8 */;
CREATE TABLE `foods` (
  `id` int(11) NOT NULL AUTO_INCREMENT,
  `name` varchar(45) NOT NULL,
  `address` varchar(75) NOT NULL,
  `schedule` varchar(75) NOT NULL,
  `price` varchar(45) DEFAULT NULL,
  `image` varchar(150) NOT NULL,
  `descrip1` varchar(100) NOT NULL,
  `descrip2` varchar(2500) NOT NULL,
  PRIMARY KEY (`id`)
) ENGINE=InnoDB AUTO_INCREMENT=5 DEFAULT CHARSET=latin1;
/*!40101 SET character_set_client = @saved_cs_client */;

--
-- Dumping data for table `foods`
--

LOCK TABLES `foods` WRITE;
/*!40000 ALTER TABLE `foods` DISABLE KEYS */;
INSERT INTO `foods` VALUES (1,'Il Trovatore','Avenida Rivadavia 5078','De Lunes a Domingos de 10.00hs a 00.00hs','Apartir de $180','https://d1jnk9nvznvex1.cloudfront.net/wp-content/uploads/2017/11/il-trovatore-1.jpg?x13392','Una de las heladerias artesanales italinas mas fmaosas de la ciudad','Fundada en el año 1963 por el señor Vito Diana, quien arriba desde su Italia natal con mucho ánimo de progreso \nen el año 1952. En sus primeros años de estadía en la Argentina hizo sus primeros pasos como heladero artesanal.'),(2,'Siga la vaca','Avenida Moreau de Justo 1714','Todos los días de 12.00hs a 00.00hs','Apartir de $650','https://cdn.needish.com/is-prod-deals/sQh4fCoVr_XtvMX3yAaQ9Q/scale/900x600.jpg','El innovador sistema aplicado a la principal \ntradición gastronómica argentina, el asado.','El innovador sistema ‘todo incluido’ aplicado a la principal tradición gastronómica argentina, \nel asado, elaborado con las mejores materias primas del mercado y ofrecido a un precio fijo, \nsin sorpresas ni costos ocultos resultaron clave a la hora del reconocimiento de nuestros clientes argentinos y extranjeros.\nInaugurado en 1993, el primer local creció hasta ser capaz de recibir, a más de 300 personas.'),(3,'Le Pain Quotidien','Vicente López 2050','De Domingo a Domingo de 9.00hs a 00.00hs','Apartir de $ 150','http://a.mktgcdn.com/p/e8S5rKDAM0wKbmtkDXgpYbR5T7Py4d93kgZUVrXsErs/470x264.png','Nuestro menú celebra la simplicidad de los alimentos frescos y nutritivos.','En este mundo cambiante y agitado, te invitamos a disfrutar de un lugar en el cual se aprecia la tradición y la sencillez. Nuestros panaderos mezclan harina de trigo orgánica molida en piedra, sal marina y agua con masa madre para crear un humilde comienzo de cuatro ingredientes. Los panes son entonces pacientemente amasados a mano y cocidos en nuestros hornos revestidos de piedra. Son las hogazas artesanales de nuestro pasado, horneadas según la tradición. Nuestro pan elaborado a mano se convie'),(4,'Croque Madame','Avenida Libertador 1902','De Lunes a Domingo de 10.00hs a 00.00 hs.','Apartir de $ 150','https://media-cdn.tripadvisor.com/media/photo-s/0a/c0/b7/ba/area-externa-do-cafe.jpg','Un clásico y hermoso refugio del bullicio del barrio. La propuesta del espacio es cocina popular fra','Este restaurant y confitería situado dentro del perímetro del Palacio Errázuriz, hoy Museo Nacional de Arte Decorativo funciona en un edificio que es independiente al mismo. Alli, en el interior del Museo, nos encontramos con Croque Madame, un clásico y hermoso refugio del bullicio del barrio. La propuesta del espacio es cocina popular francesa. El nombre hace referencia a los “croque”: rodajas de pan del día anterior, dorados, con queso gruyere, jamón o lo que haya sobrado del día anterior');
/*!40000 ALTER TABLE `foods` ENABLE KEYS */;
UNLOCK TABLES;

--
-- Table structure for table `hotels`
--

DROP TABLE IF EXISTS `hotels`;
/*!40101 SET @saved_cs_client     = @@character_set_client */;
/*!40101 SET character_set_client = utf8 */;
CREATE TABLE `hotels` (
  `id` int(11) NOT NULL AUTO_INCREMENT,
  `name` varchar(45) NOT NULL,
  `address` varchar(75) NOT NULL,
  `schedule` varchar(75) NOT NULL,
  `price` varchar(45) DEFAULT NULL,
  `image` varchar(150) NOT NULL,
  `descrip1` varchar(150) NOT NULL,
  `descrip2` varchar(2500) NOT NULL,
  PRIMARY KEY (`id`)
) ENGINE=InnoDB AUTO_INCREMENT=4 DEFAULT CHARSET=latin1;
/*!40101 SET character_set_client = @saved_cs_client */;

--
-- Dumping data for table `hotels`
--

LOCK TABLES `hotels` WRITE;
/*!40000 ALTER TABLE `hotels` DISABLE KEYS */;
INSERT INTO `hotels` VALUES (2,'Centuria Hotel Buenos Aires','Calle Suipacha 30 ','Todos los días de 10.00hs a 24.00hs ','A partir de $ 1200','https://q-ec.bstatic.com/images/hotel/max1280x900/374/37485666.jpg','Centuria Hotel Buenos Aires está ubicado en pleno corazón de la Ciudad de Buenos Aires','Centuria Hotel Buenos Aires está ubicado en pleno corazón de la Ciudad de Buenos Aires, a tan solo 300 metros del Obelisco y de la Calle Florida. Contamos con 70 habitaciones, salones para eventos y convenciones, desayuno buffet, cochera cubierta, gym y servicio de WI-FI en todas las áreas del establecimiento.'),(3,'Exe Hotel Colón','Carlos Pellegrini 507 ','Todos los días hasta las 00.00hs','A partir de $1800','https://r-ec.bstatic.com/images/hotel/max1280x900/622/62262049.jpg','Hotel de 4 estrellas ofrece habitaciones cómodas en el barrio Centro de Buenos Aires','El Exe Hotel Colon de 4 estrellas ofrece habitaciones cómodas en el barrio Centro de Buenos Aires de Ciudad Autónoma de Buenos Aires. Después de renovación en 2008, el hotel está en el edificio de 14 pisos con una arquitectura tradicional.');
/*!40000 ALTER TABLE `hotels` ENABLE KEYS */;
UNLOCK TABLES;

--
-- Table structure for table `places`
--

DROP TABLE IF EXISTS `places`;
/*!40101 SET @saved_cs_client     = @@character_set_client */;
/*!40101 SET character_set_client = utf8 */;
CREATE TABLE `places` (
  `id` int(11) NOT NULL AUTO_INCREMENT,
  `name` varchar(50) NOT NULL,
  `address` varchar(75) NOT NULL,
  `schedule` varchar(75) NOT NULL,
  `price` varchar(45) DEFAULT NULL,
  `image` varchar(500) NOT NULL,
  `descrip1` varchar(150) NOT NULL,
  `descrip2` varchar(2500) NOT NULL,
  PRIMARY KEY (`id`)
) ENGINE=InnoDB AUTO_INCREMENT=3 DEFAULT CHARSET=latin1;
/*!40101 SET character_set_client = @saved_cs_client */;

--
-- Dumping data for table `places`
--

LOCK TABLES `places` WRITE;
/*!40000 ALTER TABLE `places` DISABLE KEYS */;
INSERT INTO `places` VALUES (2,'La Casa Rosada','Calle Balcarce 50','Las visitas son sábados de 10.00 hs a 18.00 hs.','Gratuito','https://i.blogs.es/3fe687/casarosada-6-12-2015/1366_2000.jpg','También conocida como Casa de Gobierno, es uno de los edificios más emblemáticos de la Ciudad de Buenos Aires.','Es la sede del Poder Ejecutivo de la República Argentina. Dentro de la misma se encuentra el despacho del presidente de la Nación Argentina. Este edificio se localiza en la calle Balcarce 50, en el barrio de Monserrat en la Ciudad de Buenos Aires, frente a la histórica Plaza de Mayo. Su color característico es rosado y es considerado uno de los edificios más \nemblemáticos de Buenos Aires. Alberga además el Museo de la Casa de Gobierno, con objetos relacionados con los presidentes del país');
/*!40000 ALTER TABLE `places` ENABLE KEYS */;
UNLOCK TABLES;

--
-- Table structure for table `questions`
--

DROP TABLE IF EXISTS `questions`;
/*!40101 SET @saved_cs_client     = @@character_set_client */;
/*!40101 SET character_set_client = utf8 */;
CREATE TABLE `questions` (
  `id` int(11) NOT NULL AUTO_INCREMENT,
  `name` varchar(150) NOT NULL,
  `answer` varchar(300) NOT NULL,
  `image` varchar(150) NOT NULL,
  PRIMARY KEY (`id`)
) ENGINE=InnoDB AUTO_INCREMENT=7 DEFAULT CHARSET=latin1;
/*!40101 SET character_set_client = @saved_cs_client */;

--
-- Dumping data for table `questions`
--

LOCK TABLES `questions` WRITE;
/*!40000 ALTER TABLE `questions` DISABLE KEYS */;
INSERT INTO `questions` VALUES (1,'¿Quiénes somos?','Somos una website que se encarga en ayudar tanto a lugareños como extranjeros para que puedan conocer un poco más acerca la linda ciudad de Buenos Aires y puedan aprovechar cada rincón que esta maravillosa ciudad ofrece al mundo.','img/Pregf_01.png'),(2,'¿Que podes hacer aqui en BAST?','Aqui podras organizar una agenda de los sitios que querés visitar ya sean actividades, lugares, sitios de comida y hoteles. Cada uno de los lugares podras encontrar una breve reseña , como tambien su horario, ubicación y un precio estimado.','img/Pregf_02.png'),(3,'¿Qué es la sección LUGARES?','En esta sección de la página podaras encontrar información de\n cada uno sitios más turísticos y visitados de Bueno Aires Ciudad Capital (CABA). Podrás encontrar desde barrios hasta \n lugares un poco más específico donde podrás iniciar tu aventura turística.','img/Pregf_03.png'),(4,'¿Qué es la sección GASTRONOMIA?','En esta sección podrá encontrar los lugares más chic para poder compartir con tu familia y amigos. Podrás encontrar lugares desde \nrestaurantes más icónicos de la ciudad como las franquicias de comida preferidas por el público porteño.','img/Pregf_04.png'),(5,'¿Qué es la sección HOTELES?','Esta sección esta dedica al hospedaje. Aquí podrás encontrar posadas, residencias y hoteles que podrás usar \ncomo referencia para que así puedas escoger la elección de hospedaje más cómoda para vos.','img/Pregf_05.png'),(6,'¿Qué es la sección ACTIVIDADES?','Buenos Aires Ciudad Capital es \nconocida como la Nueva York de Latino América por eso es que la ciudad siempre ofrece distintas\n actividades adaptándose a cada uno de sus habitantes y turistas. Aquí podrás ver cada una de las \n actividades que la ciudad propone.','img/Pregf_06.png');
/*!40000 ALTER TABLE `questions` ENABLE KEYS */;
UNLOCK TABLES;

--
-- Table structure for table `users`
--

DROP TABLE IF EXISTS `users`;
/*!40101 SET @saved_cs_client     = @@character_set_client */;
/*!40101 SET character_set_client = utf8 */;
CREATE TABLE `users` (
  `id` int(11) NOT NULL AUTO_INCREMENT,
  `name` varchar(45) NOT NULL,
  `mobile` varchar(15) DEFAULT NULL,
  `telephone` varchar(15) DEFAULT NULL,
  `email` varchar(45) NOT NULL,
  `avatar` varchar(200) DEFAULT NULL,
  `priority` int(11) DEFAULT NULL,
  `password` varchar(45) NOT NULL,
  PRIMARY KEY (`id`)
) ENGINE=InnoDB AUTO_INCREMENT=5 DEFAULT CHARSET=latin1;
/*!40101 SET character_set_client = @saved_cs_client */;

--
-- Dumping data for table `users`
--

LOCK TABLES `users` WRITE;
/*!40000 ALTER TABLE `users` DISABLE KEYS */;
INSERT INTO `users` VALUES (1,'Nicolas Palermo','116553592','02812747373','nicolax0416@gmail.com','nico.jpg',9,'123456'),(2,'Niklaus Palermo XY','111111111111111','111111111111111','nicolax0417@gmail.com','nico.jpg',1,'123456'),(3,'Nicolas de Jesus Palermo Rodriguez','123456789','123456789','alvaro@gmail.com','5d39d1b69a2b2.jpg',1,'1234567'),(4,'facu','','1140996804','facu@gmail.com','5d40afeb2b505.png',9,'facu1981');
/*!40000 ALTER TABLE `users` ENABLE KEYS */;
UNLOCK TABLES;

--
-- Table structure for table `users_activities`
--

DROP TABLE IF EXISTS `users_activities`;
/*!40101 SET @saved_cs_client     = @@character_set_client */;
/*!40101 SET character_set_client = utf8 */;
CREATE TABLE `users_activities` (
  `id` int(11) NOT NULL AUTO_INCREMENT,
  `id_users` int(11) NOT NULL,
  `id_activities` int(11) NOT NULL,
  PRIMARY KEY (`id`)
) ENGINE=InnoDB AUTO_INCREMENT=6 DEFAULT CHARSET=latin1;
/*!40101 SET character_set_client = @saved_cs_client */;

--
-- Dumping data for table `users_activities`
--

LOCK TABLES `users_activities` WRITE;
/*!40000 ALTER TABLE `users_activities` DISABLE KEYS */;
INSERT INTO `users_activities` VALUES (2,4,2),(3,4,1),(5,4,3);
/*!40000 ALTER TABLE `users_activities` ENABLE KEYS */;
UNLOCK TABLES;

--
-- Table structure for table `users_foods`
--

DROP TABLE IF EXISTS `users_foods`;
/*!40101 SET @saved_cs_client     = @@character_set_client */;
/*!40101 SET character_set_client = utf8 */;
CREATE TABLE `users_foods` (
  `id` int(11) NOT NULL AUTO_INCREMENT,
  `id_users` int(11) NOT NULL,
  `id_foods` int(11) NOT NULL,
  PRIMARY KEY (`id`)
) ENGINE=InnoDB AUTO_INCREMENT=5 DEFAULT CHARSET=latin1;
/*!40101 SET character_set_client = @saved_cs_client */;

--
-- Dumping data for table `users_foods`
--

LOCK TABLES `users_foods` WRITE;
/*!40000 ALTER TABLE `users_foods` DISABLE KEYS */;
INSERT INTO `users_foods` VALUES (1,4,2),(3,4,3),(4,4,4);
/*!40000 ALTER TABLE `users_foods` ENABLE KEYS */;
UNLOCK TABLES;

--
-- Table structure for table `users_hotels`
--

DROP TABLE IF EXISTS `users_hotels`;
/*!40101 SET @saved_cs_client     = @@character_set_client */;
/*!40101 SET character_set_client = utf8 */;
CREATE TABLE `users_hotels` (
  `id` int(11) NOT NULL AUTO_INCREMENT,
  `id_users` int(11) NOT NULL,
  `id_hotels` int(11) NOT NULL,
  PRIMARY KEY (`id`)
) ENGINE=InnoDB AUTO_INCREMENT=3 DEFAULT CHARSET=latin1;
/*!40101 SET character_set_client = @saved_cs_client */;

--
-- Dumping data for table `users_hotels`
--

LOCK TABLES `users_hotels` WRITE;
/*!40000 ALTER TABLE `users_hotels` DISABLE KEYS */;
/*!40000 ALTER TABLE `users_hotels` ENABLE KEYS */;
UNLOCK TABLES;

--
-- Table structure for table `users_places`
--

DROP TABLE IF EXISTS `users_places`;
/*!40101 SET @saved_cs_client     = @@character_set_client */;
/*!40101 SET character_set_client = utf8 */;
CREATE TABLE `users_places` (
  `id` int(11) NOT NULL AUTO_INCREMENT,
  `id_users` int(11) NOT NULL,
  `id_places` int(11) NOT NULL,
  PRIMARY KEY (`id`)
) ENGINE=InnoDB AUTO_INCREMENT=2 DEFAULT CHARSET=latin1;
/*!40101 SET character_set_client = @saved_cs_client */;

--
-- Dumping data for table `users_places`
--

LOCK TABLES `users_places` WRITE;
/*!40000 ALTER TABLE `users_places` DISABLE KEYS */;
/*!40000 ALTER TABLE `users_places` ENABLE KEYS */;
UNLOCK TABLES;
/*!40103 SET TIME_ZONE=@OLD_TIME_ZONE */;

/*!40101 SET SQL_MODE=@OLD_SQL_MODE */;
/*!40014 SET FOREIGN_KEY_CHECKS=@OLD_FOREIGN_KEY_CHECKS */;
/*!40014 SET UNIQUE_CHECKS=@OLD_UNIQUE_CHECKS */;
/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
/*!40111 SET SQL_NOTES=@OLD_SQL_NOTES */;

-- Dump completed on 2019-08-03  2:49:06
