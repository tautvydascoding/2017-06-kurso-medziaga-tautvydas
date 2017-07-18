-- phpMyAdmin SQL Dump
-- version 4.7.0
-- https://www.phpmyadmin.net/
--
-- Host: localhost:3306
-- Generation Time: Jul 18, 2017 at 01:50 PM
-- Server version: 5.6.34-log
-- PHP Version: 7.0.19

SET SQL_MODE = "NO_AUTO_VALUE_ON_ZERO";
SET AUTOCOMMIT = 0;
START TRANSACTION;
SET time_zone = "+00:00";


/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!40101 SET NAMES utf8mb4 */;

--
-- Database: `urban_wedding`
--
CREATE DATABASE IF NOT EXISTS `urban_wedding` DEFAULT CHARACTER SET utf8mb4 COLLATE utf8mb4_general_ci;
USE `urban_wedding`;

-- --------------------------------------------------------

--
-- Table structure for table `blog_posts`
--

CREATE TABLE IF NOT EXISTS `blog_posts` (
  `id` int(10) UNSIGNED NOT NULL AUTO_INCREMENT,
  `title` varchar(40) NOT NULL,
  `content` text NOT NULL,
  `author` varchar(50) CHARACTER SET utf8 NOT NULL,
  `date_added` datetime DEFAULT CURRENT_TIMESTAMP,
  PRIMARY KEY (`id`)
) ENGINE=InnoDB AUTO_INCREMENT=5 DEFAULT CHARSET=utf8mb4;

--
-- Dumping data for table `blog_posts`
--

INSERT INTO `blog_posts` (`id`, `title`, `content`, `author`, `date_added`) VALUES
(1, 'Pirmas Blogo įrašas', 'Lorem ipsum dolor sit amet, consectetuer adipiscing elit. Aenean commodo ligula eget dolor. Aenean massa. Cum sociis natoque penatibus et magnis dis parturient montes, nascetur ridiculus mus. Donec quam felis, ultricies nec, pellentesque eu, pretium quis, sem. Nulla consequat massa quis enim. Donec pede justo, fringilla vel, aliquet nec, vulputate eget, arcu. In enim justo, rhoncus ut, imperdiet a, venenatis vitae, justo.\r\n\r\nNullam dictum felis eu pede mollis pretium. Integer tincidunt. Cras dapibus. Vivamus elementum semper nisi. Aenean vulputate eleifend tellus. Aenean leo ligula, porttitor eu, consequat vitae, eleifend ac, enim. Aliquam lorem ante, dapibus in, viverra quis, feugiat a, tellus. Phasellus viverra nulla ut metus varius laoreet. Quisque rutrum. Aenean imperdiet. Etiam ultricies nisi vel augue. Curabitur ullamcorper ultricies nisi.\r\n\r\nNam eget dui. Etiam rhoncus. Maecenas tempus, tellus eget condimentum rhoncus, sem quam semper libero, sit amet adipiscing sem neque sed ipsum. Nam quam nunc, blandit vel, luctus pulvinar, hendrerit id, lorem. Maecenas nec odio et ante tincidunt tempus. Donec vitae sapien ut libero venenatis faucibus. Nullam quis ante. Etiam sit amet orci eget eros faucibus tincidunt. Duis leo. Sed fringilla mauris sit amet nibh.\r\n\r\nDonec sodales sagittis magna. Sed consequat, leo eget bibendum sodales, augue velit cursus nunc, quis gravida magna mi a libero. Fusce vulputate eleifend sapien. Vestibulum purus quam, scelerisque ut, mollis sed, nonummy id, metus. Nullam accumsan lorem in dui. Cras ultricies mi eu turpis hendrerit fringilla. Vestibulum ante ipsum primis in faucibus orci luctus et ultrices posuere cubilia Curae; In ac dui quis mi consectetuer lacinia. Nam pretium turpis et arcu. Duis arcu tortor, suscipit eget, imperdiet nec, imperdiet iaculis, ipsum. Sed aliquam ultrices mauris. Integer ante arcu, accumsan a, consectetuer eget, posuere ut, mauris. Praesent adipiscing. Phasellus ullamcorper ipsum rutrum nunc. Nunc nonummy metus. Vestibulum volutpat pretium libero. Cras id dui. ', 'Autoriaus Vardas', '2017-07-18 12:13:27'),
(2, 'Nauji dalykai!!!', 'Sed ut perspiciatis unde omnis iste natus error sit voluptatem accusantium doloremque laudantium, totam rem aperiam, eaque ipsa quae ab illo inventore veritatis et quasi architecto beatae vitae dicta sunt explicabo. Nemo enim ipsam voluptatem quia voluptas sit aspernatur aut odit aut fugit, sed quia consequuntur magni dolores eos qui ratione voluptatem sequi nesciunt.\r\n\r\nNeque porro quisquam est, qui dolorem ipsum quia dolor sit amet, consectetur, adipisci velit, sed quia non numquam eius modi tempora incidunt ut labore et dolore magnam aliquam quaerat voluptatem. Ut enim ad minima veniam, quis nostrum exercitationem ullam corporis suscipit laboriosam, nisi ut aliquid ex ea commodi consequatur?\r\n\r\nQuis autem vel eum iure reprehenderit qui in ea voluptate velit esse quam nihil molestiae consequatur, vel illum qui dolorem eum fugiat quo voluptas nulla pariatur? At vero eos et accusamus et iusto odio dignissimos ducimus qui blanditiis praesentium voluptatum deleniti atque corrupti quos dolores et quas molestias excepturi sint occaecati cupiditate non provident, similique sunt in culpa qui officia deserunt mollitia animi, id est laborum et dolorum fuga.\r\n\r\nEt harum quidem rerum facilis est et expedita distinctio. Nam libero tempore, cum soluta nobis est eligendi optio cumque nihil impedit quo minus id quod maxime placeat facere possimus, omnis voluptas assumenda est, omnis dolor repellendus. Temporibus autem quibusdam et aut officiis debitis aut rerum necessitatibus saepe eveniet ut et voluptates repudiandae sint et molestiae non recusandae.\r\n\r\nItaque earum rerum hic tenetur a sapiente delectus, ut aut reiciendis voluptatibus maiores alias consequatur aut perferendis doloribus asperiores repellat. Sed ut perspiciatis unde omnis iste natus error sit voluptatem accusantium doloremque laudantium, totam rem aperiam, eaque ipsa quae ab illo inventore veritatis et quasi architecto beatae vitae dicta sunt explicabo.\r\n\r\nNemo enim ipsam voluptatem quia voluptas sit aspernatur aut odit aut fugit, sed quia consequuntur magni dolores eos qui ratione voluptatem sequi nesciunt. Neque porro quisquam est, qui dolorem ipsum quia dolor sit amet, consectetur, adipisci velit, sed quia non numquam eius modi tempora incidunt ut labore et dolore magnam aliquam quaerat voluptatem. Ut enim ad minima veniam, quis nostrum exercitationem ullam corporis suscipit laboriosam, nisi ut aliquid ex ea commodi consequatur? Quis autem vel eum iure reprehenderit qui in ea voluptate velit esse quam nihil molestiae consequatur, vel illum qui dolorem eum fugiat quo voluptas nulla pariatur?', 'Margiris Probškovas', '2017-07-18 12:15:33'),
(3, 'Trumputis įrašiukas', 'A wonderful serenity has taken possession of my entire soul, like these sweet mornings of spring which I enjoy with my whole heart. I am alone, and feel the charm of existence in this spot, which was created for the bliss of souls like mine. I am so happy, my dear friend, so absorbed in the exquisite sense of mere tranquil existence, that I neglect my talents. I should be incapable of drawing a single stroke at the present moment; and yet I feel that I never was a greater artist than now. When, while the lovely valley teems with vapour around me, and the meridian sun strikes the upper surface of the impenetrable foliage of my trees, and but a few stray gleams steal into the inner sanctuary, I throw myself down among the tall grass by the trickling stream; and, as I lie close to the earth, a thousand unknown plants are noticed by me: when I hear the buzz of the little world among the stalks, and grow familiar with the countless indescribable forms of the insects and flies, then I feel the presence of the Almighty, who formed us in his own image, and the breath', 'Eligija Sirvitaitė', '2017-07-18 12:17:15'),
(4, 'Metamorfozė', 'Pabudęs vieną rytą iš neramaus miego, Gregoras Zamza pasijuto paverstas baisingu vabalu. Jis gulėjo lovoje ant kietos kaip šarvas nugaros ir, mažumą kilstelėjęs galvą, matė savo išgaubtą rudą suragėjusių lankų padalintą pilvą, pridengtą vos besilaikančios antklodės. Daugybė palyginti su visu kūnu pasigailėtinai plonų kojų bejėgiškai mirgėjo jam prieš akis.\r\n       „Kas man atsitiko?“ – suko galvą jis. Tai juk visai ne sapnas. Jis savo kambaryje, pažįstamoje, kiek per mažoje vienam žmogui kamaraitėje. Prie stalo, ant kurio paskleisti medžiagų kolekcijos pavyzdžiai, – Zamza buvo komivojažierius, – ant sienos kabo jo neseniai iš iliustruoto žurnalo iškirptas ir įstatytas į dailius paauksuotus rėmus paveikslas. Jame pavaizduota sėdinti dama su kailine kepure ir kailiniu boa. Pakėlusi sunkią kailinę movą, kurion ranka buvo sukišta beveik ligi alkūnės, ji tarsi sveikino žiūrovą.\r\n	   \r\n	   \r\n       Paskui Gregoro žvilgsnis nukrypo į langą, ir apsiniaukęs oras – buvo girdėti, kaip lietaus lašai teška į stogo skardą, – jį galutinai nuliūdino.\r\n       ,,Gal man dar nusnūsti ir pamiršti visas tas kvailystes“, – manė jis, tačiau kaip tai padaryti – jis buvo įpratęs miegoti ant dešinio šono, o šitaip dabar neįsitaisysi. Kad ir kiek blaškėsi, besistengdamas atsigulti ant dešinio šono, vis tiek tuojau atvirsdavo atgal. Gal šimtąsyk bandė, užsimerkęs, kad nematytų kirbančių kojų, ir liovėsi tik tada, kai šone pajuto ligi tol nepatirtą nestiprų maudulį.\r\n       „Dieve, – galvojo jis, – kokį sunkų darbą aš išsirinkau! Per dienų dienas kelionėje. Nusiplūki daug labiau negu kontoroj, o kur dar kelionių nepatogumai, rūpestis nepavėluoti į traukinį, nereguliarus prastas maistas, vis kiti žmonės, nė su vienu ilgiau nepabendrausi, nuoširdžiai neįsišnekėsi. Kad jį kur galas tokį gyvenimą!“\r\n       Jis pajuto, jog truputį panižo pilvas; pamažu aukštielninkas pasistūmėjo link lovos galo, kad būtų patogiau pakelti galvą; rado niežtimą vietą, nubertą mažais, baltais, nežinia iš kur atsiradusiais taškeliais; norėjo viena koja tą vietą apsičiupinėti, bet tuojau atitraukė, nes kai prisilietė, per visą kūną nuėjo šiurpuliai.\r\n       Vėl atsigulė kaip pirma.\r\n	   \r\n	   \r\n       „Taip anksti keldamasis, – galvojo jis, – visai iškvaišti. Žmogui reikia išsimiegoti. Kiti komivojažieriai gyvena be rūpesčių kaip haremo gražuolės. Kai aš, pavyzdžiui, prieš pietus grįžtu į viešbuti persirašyti užsakymų, jie dar tiktai pusryčiauja. Kad aš taip pabandyčiau, šefas kaipmat išgrūstų iš darbo. Beje, ką gali žinoti, gal man tai būtų į naudą. Jeigu ne tėvai, jau seniai būčiau pats spjovęs į tą kontorą, ateičiau pas šefą ir į akis iškločiau, ką apie jį manau. Nuo pulto nusiverstų išgirdęs! Keistas įprotis atsisėsti ant pulto ir iš aukščiau kalbėtis su tarnautoju, o tas turi prie jo prisikišti, nes šefas neprigirdi. Ką gi, vilčių dar yra; kai tiktai surinksiu tiek pinigų, kad galėčiau atiduoti tėvų skolą, – tai truks kokius penkerius šešerius metus,– būtinai taip padarysiu. O paskui pinigus kibirais semsiu. Bet dabar jau laikas keltis, nes traukinys išvažiuoja penktą.“\r\n       Jis pasižiūrėjo į žadintuvą, tiksintį ant komodos.\r\n	   \r\n	   \r\n       ,,Viešpatie šventas!“ – persigando. Buvo pusė septynių, jau net po puses, greit be penkiolikos, ir rodyklės ramiai sukosi toliau. Nejau žadintuvas neskambino? Iš lovos buvo matyti, kad jo nustatyta teisingai – ketvirtai valandai; be abejonės, žadintuvas skambėjo. Taip, bet kaip tu pramiegosi, jei nuo jo čirškimo net baldai dreba? Kas be ko, miegojo neramiai, bet, matyt, labai kietai. Tačiau dabar ką daryti? Kitas traukinys išeina septintą valandą; kad spėtum į jį, reikėtų beprotiškai skubėti, o kolekcija dar nesudėta, ir jis pats ne per geriausiai jaučiasi. Net jeigu ir spėtų į traukinį, vis tiek gautų nuo šefo pipirų, nes firmos pasiuntinys lauke prie penktos valandos traukinio ir apie jo prasižengimą seniai pranešė. Tai juk šefo šunelis, be stuburo ir galvos. O ką, jeigu apsiskelbtų sergąs? Tai būtų be galo nemalonu ir gali pasirodyti įtartina, nes Gregoras per visus penkerius savo tarnybos metus dar nesyk nesirgo. Šefas, be abejonės, ateitų su ligonių kasos gydytoju, apipiltų priekaištais tėvus, kad užaugino tokį tinginį sūnų, ir nepriimtų jokio pasiteisinimo, remdamasis ligonių kasos gydytojo diagnoze, o tam visi žmonės sveikutėliai ir vengia darbo. Ir šiuo atveju turbūt neklystų? Gregoras iš tiesų jautėsi visiškai sveikas ir net labai norėjo valgyti, tik po tokio ilgo miego kažkodėl buvo apsnūdęs.\r\n       Kai jis visa tai karštligiškai svarstė, nesiryždamas lipti iš lovos – laikrodis tuo metu kaip tik išmušė be penkiolikos septynias, – palei jo galvą pasigirdo atsargus beldimas į duris.', 'Franz Kafka', '2017-07-18 12:22:38');

-- --------------------------------------------------------

--
-- Table structure for table `contacts`
--

CREATE TABLE IF NOT EXISTS `contacts` (
  `id` int(10) UNSIGNED NOT NULL AUTO_INCREMENT,
  `type` varchar(20) NOT NULL,
  `value` varchar(50) NOT NULL,
  PRIMARY KEY (`id`)
) ENGINE=InnoDB AUTO_INCREMENT=4 DEFAULT CHARSET=utf8mb4;

--
-- Dumping data for table `contacts`
--

INSERT INTO `contacts` (`id`, `type`, `value`) VALUES
(1, 'phone', '+3709999999'),
(2, 'email', 'info@urbanwedding.lt'),
(3, 'fb', 'https://www.facebook.com/urban.wedding.sventes/');
COMMIT;

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
