<!DOCTYPE html>
<html>
<?php
$path = '';

$title = "Environment of Aitchison"; include_once("header-includes.php");

$banner_url = $path.'resources/assets/aitchison-env/environment-aitchison2.jpg';

$data = [

    ["Id" => "1", "Species" => "ficus glomerata ", "LocalName" => "gular", "Family" => "moraceae", "Image" => "aitchison-environment/images/1.jpg", "Quantity" => "66", "Location" => "Pr. Residence Gate Left side ground"],
    ["Id" => "2", "Species" => "syzygium cumini (eugenia jambolana) ", "LocalName" => "jamun", "Family" => "myrtaceae", "Image" => "aitchison-environment/images/2.jpg", "Quantity" => "521", "Location" => "Cricket Academy Pr. Residence Side"],
    ["Id" => "3", "Species" => "ficus religisoa ", "LocalName" => "pipal", "Family" => "moraceae", "Image" => "aitchison-environment/images/3.jpg", "Quantity" => "172", "Location" => "HMSS Courtyard"],
    ["Id" => "4", "Species" => "ziziphus jujuba / ziziphus mauritiana ", "LocalName" => "beri", "Family" => "rhamnaceae", "Image" => "aitchison-environment/images/4.jpg", "Quantity" => "12", "Location" => "Pr. Residence Orchard beside wall"],
    ["Id" => "5", "Species" => "mangifera indica ", "LocalName" => "mango", "Family" => "anacardiaceae", "Image" => "aitchison-environment/images/5.jpg", "Quantity" => "367", "Location" => "Sundar Das car park area"],
    ["Id" => "6", "Species" => "bombax ceiba / malabarica / salmalia malabarica", "LocalName" => "silk-cotton tree/ sumbal / simal ", "Family" => "bombacaceae", "Image" => "aitchison-environment/images/6.jpg", "Quantity" => "61", "Location" => "Back side of LJ House area"],
    ["Id" => "7", "Species" => "cassia fistula ", "LocalName" => "golden shower / pakistani laburnum", "Family" => "caesal piniaceae", "Image" => "aitchison-environment/images/7.jpg", "Quantity" => "69", "Location" => "Pipal Avenue area"],
    ["Id" => "8", "Species" => "ficus virens ( f.infectoria or f.lacor)", "LocalName" => "pilkhan / jangli pipla", "Family" => "moraceae", "Image" => "aitchison-environment/images/8.jpg", "Quantity" => "118", "Location" => "Main Cricket Ground surrounding areas"],
    ["Id" => "9", "Species" => "bauhinia variegata", "LocalName" => "kachnar", "Family" => "Caesalpiniaceae", "Image" => "aitchison-environment/images/9.jpg", "Quantity" => "134", "Location" => "Main gate to Old Building beside the Road"],
    ["Id" => "10", "Species" => "broussonetia papyrifera / morus papyrifera", "LocalName" => "shahtoot / mulberry", "Family" => "moraceae", "Image" => "aitchison-environment/images/10.jpg", "Quantity" => "240", "Location" => "Cricket Academy wall side"],
    ["Id" => "11", "Species" => "plumeria obtusa / plumeria rubra var.acutifolia", "LocalName" => "gul-e-chee / frangipani", "Family" => "apocyanaceae", "Image" => "aitchison-environment/images/11.jpg", "Quantity" => "85", "Location" => "Rugby Ground beside Staff Residence side"],
    ["Id" => "12", "Species" => "callistemon lanceolatus / c. citrinus var splendens", "LocalName" => "bottlebrush", "Family" => "myrtaceae", "Image" => "aitchison-environment/images/12.jpg", "Quantity" => "47", "Location" => "Main Cricket Ground surrounding areas"],
    ["Id" => "13", "Species" => "cupressus sempervirens", "LocalName" => "pyramidal cypress / saro /saru", "Family" => "cupressaceae", "Image" => "aitchison-environment/images/13.jpg", "Quantity" => "274", "Location" => "Pr. Residence Gate Left side Ground"],
    ["Id" => "14", "Species" => "dalbergia sisso", "LocalName" => "sheesham / tali", "Family" => "papilionaceae", "Image" => "aitchison-environment/images/14.jpg", "Quantity" => "525", "Location" => "Cricket Academy Pr. Residence Side"],
    ["Id" => "15", "Species" => "araucaria excelsa", "LocalName" => "Pin de Norfolk", "Family" => "pin de norfolk", "Image" => "aitchison-environment/images/15.jpg", "Quantity" => "68", "Location" => "Pr. Residence Tennis Ground"],
    ["Id" => "16", "Species" => "aegle marmelos", "LocalName" => "bel / babbarato", "Family" => "rutaceae", "Image" => "aitchison-environment/images/16.jpg", "Quantity" => "3", "Location" => "Main Cricket Ground surrounding areas"],
    ["Id" => "17", "Species" => "pinus rox burghii (p.longifolia)", "LocalName" => "chir", "Family" => "pinaceae", "Image" => "aitchison-environment/images/17.jpg", "Quantity" => "16", "Location" => "Cricket Academy Pr. Residence Side"],
    ["Id" => "18", "Species" => "heterophragma adenophyllum", "LocalName" => "biri patta / Nag Phalli", "Family" => "bignoniaceae", "Image" => "aitchison-environment/images/18.jpg", "Quantity" => "94", "Location" => "Chemistry front area"],
    ["Id" => "19", "Species" => "ficus elastica", "LocalName" => "rubber plant", "Family" => "moraceae", "Image" => "aitchison-environment/images/19.jpg", "Quantity" => "29", "Location" => "Pr. Residence Gate Left side ground"],
    ["Id" => "20", "Species" => "terminalia arjuna", "LocalName" => "arjun", "Family" => "combritaceae", "Image" => "aitchison-environment/images/20.jpg", "Quantity" => "45", "Location" => "Chemistry back side area"],
    ["Id" => "21", "Species" => "phyllanthus emblica (emblica officinalis)", "LocalName" => "amla / ambla", "Family" => "euphorbiaceae", "Image" => "aitchison-environment/images/21.jpg", "Quantity" => "6", "Location" => "Admin Block back side"],
    ["Id" => "22", "Species" => "delonix regia (poinciana regia)", "LocalName" => "gul-mohur / gold mohar", "Family" => "Caesalpiniaceae", "Image" => "aitchison-environment/images/22.jpg", "Quantity" => "8", "Location" => "PS front ground to JS Road over canal water channel"],
    ["Id" => "23", "Species" => "cedrela toona", "LocalName" => "tun / indian mahogany", "Family" => "meliaceae", "Image" => "aitchison-environment/images/23.jpg", "Quantity" => "122", "Location" => "Back side of LJ House area"],
    ["Id" => "24", "Species" => "murraya paniculata (m.exotica / chalcas paniculata)", "LocalName" => "china box / kamini", "Family" => "rutaceae", "Image" => "aitchison-environment/images/24.jpg", "Quantity" => "75", "Location" => "Back side of LJ House area"],
    ["Id" => "25", "Species" => "erythrina suberosa", "LocalName" => "gul-e-nishtar", "Family" => "papilionaceae", "Image" => "aitchison-environment/images/25.jpg", "Quantity" => "23", "Location" => "Front of Mosque ground"],
    ["Id" => "26", "Species" => "millettia ovalifolia (m.peguensis)", "LocalName" => "valaiti tahli", "Family" => "Papilionaceae", "Image" => "aitchison-environment/images/26.jpg", "Quantity" => "37", "Location" => "Car Park beside New Gate Ground"],
    ["Id" => "27", "Species" => "melia azedarach", "LocalName" => "bakain / drek / persian lilac", "Family" => "Meliaceae", "Image" => "aitchison-environment/images/27.jpg", "Quantity" => "288", "Location" => "Back side of Godley House"],
    ["Id" => "28", "Species" => "Albizia Lebbeck", "LocalName" => "siris / kala sharin", "Family" => "mimosaceae", "Image" => "aitchison-environment/images/28.jpg", "Quantity" => "108", "Location" => "Senior School inside ground back side HMSS Office"],
    ["Id" => "29", "Species" => "pterospermum acerifolium", "LocalName" => "kanak champa", "Family" => "sterculiaceae", "Image" => "aitchison-environment/images/29.jpg", "Quantity" => "29", "Location" => "Sundar Das car park area beside jilani road"],
    ["Id" => "30", "Species" => "alstonia scholaris", "LocalName" => "shatin / panj pattiya", "Family" => "Apocynaceae", "Image" => "aitchison-environment/images/30.jpg", "Quantity" => "484", "Location" => "Senior School ground behind HMSS Office"],
    ["Id" => "31", "Species" => "artocarpus heterophyllum", "LocalName" => "jack fruit / kathal / kathar", "Family" => "moraceae", "Image" => "aitchison-environment/images/31.jpg", "Quantity" => "2", "Location" => "Pr. Residence Nursery side Ground"],
    ["Id" => "32", "Species" => "anogeissus acuminata", "LocalName" => "dhokra", "Family" => "combretaceae", "Image" => "aitchison-environment/images/32.jpg", "Quantity" => "13", "Location" => "Main gate to Old Building beside the Road"],
    ["Id" => "33", "Species" => "Terminalia bellirica", "LocalName" => "bahera", "Family" => "combretaceae", "Image" => "aitchison-environment/images/33.jpg", "Quantity" => "38", "Location" => "Ground front of HMPS Residence"],
    ["Id" => "34", "Species" => "largertroemia indica ? dhura", "LocalName" => "l.parvi flora-bakli", "Family" => "l.speciosa (l. flos-reginae)-jarul", "Image" => "aitchison-environment/images/34.jpg", "Quantity" => "2", "Location" => "Rugby Ground beside Jilani Road"],
    ["Id" => "35", "Species" => "platanus orientalis", "LocalName" => "channar", "Family" => "platanaceae", "Image" => "aitchison-environment/images/35.jpg", "Quantity" => "28", "Location" => "Senior School inside ground Assembly area"],
    ["Id" => "36", "Species" => "azadirachta indica", "LocalName" => "neem", "Family" => "meliaceae", "Image" => "aitchison-environment/images/36.jpg", "Quantity" => "92", "Location" => "Back side of LJ House area"],
    ["Id" => "37", "Species" => "putranjiva roxburghii", "LocalName" => "putajan /jia-putra", "Family" => "euphorbiaceae", "Image" => "aitchison-environment/images/37.jpg", "Quantity" => "47", "Location" => "Car Park beside new gate ground"],
    ["Id" => "38", "Species" => "mimusops elengi", "LocalName" => "maulsri", "Family" => "sapotaceae", "Image" => "aitchison-environment/images/38.jpg", "Quantity" => "27", "Location" => "Main Cricket Ground surrounding areas"],
    ["Id" => "39", "Species" => "bischofia javanica", "LocalName" => "anderkani", "Family" => "euphorbiaceae", "Image" => "aitchison-environment/images/39.jpg", "Quantity" => "76", "Location" => "Main Cricket Ground surrounding areas"],
    ["Id" => "40", "Species" => "ficus benjamina", "LocalName" => "kabar / kubra /java fig /weeping fig", "Family" => "moraceae", "Image" => "aitchison-environment/images/40.jpg", "Quantity" => "269", "Location" => "Sundar Das car park area"],
    ["Id" => "41", "Species" => "grevillea robusta", "LocalName" => "shah baloot", "Family" => "protaeceae", "Image" => "aitchison-environment/images/41.jpg", "Quantity" => "29", "Location" => "Sundar Das car park area beside Jilani Road"],
    ["Id" => "42", "Species" => "guava", "LocalName" => "psidium guajava", "Family" => "myrataceae", "Image" => "aitchison-environment/images/42.jpg", "Quantity" => "152", "Location" => "Pr. Residence Orchard Ground"],
    ["Id" => "43", "Species" => "salix babylonica / s.tetrasperma", "LocalName" => "weeping willow / laila willow / majnun", "Family" => "salicaceae", "Image" => "aitchison-environment/images/43.jpg", "Quantity" => "16", "Location" => "Main Tennis surrounding"],
    ["Id" => "44", "Species" => "punica granatum", "LocalName" => "anar / pomegranate", "Family" => "punicaceae", "Image" => "aitchison-environment/images/44.jpg", "Quantity" => "114", "Location" => "Back side of LJ House area"],
    ["Id" => "45", "Species" => "eriobotrya japonica", "LocalName" => "loquat", "Family" => "rosaceae", "Image" => "aitchison-environment/images/45.jpg", "Quantity" => "62", "Location" => "HMSS Residence front ground area(Barseem)"],
    ["Id" => "46", "Species" => "cassia nilotica", "LocalName" => "kikar", "Family" => "fabacecae", "Image" => "aitchison-environment/images/46.jpg", "Quantity" => "9", "Location" => "Rugby Ground beside Staff Residence side"],
    ["Id" => "47", "Species" => "pongamia glabra", "LocalName" => "sukh chain", "Family" => "leguminosae", "Image" => "aitchison-environment/images/47.jpg", "Quantity" => "66", "Location" => "Car Park beside New gate ground"],
    ["Id" => "48", "Species" => "pyrus communis", "LocalName" => "nashpati", "Family" => "rosacecae", "Image" => "aitchison-environment/images/48.jpg", "Quantity" => "4", "Location" => "Nursery front side"],
    ["Id" => "49", "Species" => "populus nigra", "LocalName" => "poplar", "Family" => "salicaceae", "Image" => "aitchison-environment/images/49.jpg", "Quantity" => "10", "Location" => "ACOBA Ground surrounding"],
    ["Id" => "50", "Species" => "jacaranda mimosifolia", "LocalName" => "jacaranda / gul-e-neelum", "Family" => "leguminoseae", "Image" => "aitchison-environment/images/50.jpg", "Quantity" => "98", "Location" => "Front of LJ House "],
    ["Id" => "51", "Species" => "eucaly ptus citriodora", "LocalName" => "safeda", "Family" => "myrtaceae", "Image" => "aitchison-environment/images/51.jpg", "Quantity" => "291", "Location" => "Sundar Das car park area"],
    ["Id" => "52", "Species" => "saraca indica", "LocalName" => "ashoka tree", "Family" => "leguminosae", "Image" => "aitchison-environment/images/52.jpg", "Quantity" => "207", "Location" => "HMSS Residence front ground area(Barseem)"],
    ["Id" => "53", "Species" => "polyalthia longifolia", "LocalName" => "ulta ashok / Ashok", "Family" => "annonaceae", "Image" => "aitchison-environment/images/53.jpg", "Quantity" => "214", "Location" => "Senior School front areas"],
    ["Id" => "54", "Species" => "nerium odorum / thevitia nerifolia", "LocalName" => "kaner / peeli kaner", "Family" => "apocynaceae", "Image" => "aitchison-environment/images/54.jpg", "Quantity" => "29", "Location" => "Pr. Residence Orchard Ground"],
    ["Id" => "55", "Species" => "diospyros peregrina", "LocalName" => "gab", "Family" => "ebenaceae", "Image" => "aitchison-environment/images/55.jpg", "Quantity" => "34", "Location" => "New Gate ground Pr.line road side"],
    ["Id" => "56", "Species" => "citrus sinensis", "LocalName" => "malta / sweet orange", "Family" => "rutaceae", "Image" => "aitchison-environment/images/56.jpg", "Quantity" => "88", "Location" => "Front of LJ House "],
    ["Id" => "57", "Species" => "achras zapota", "LocalName" => "chiku", "Family" => "sapotaceae", "Image" => "aitchison-environment/images/57.jpg", "Quantity" => "45", "Location" => "HMSS Residence big ground area"],
    ["Id" => "58", "Species" => "nephilium litchi / litchi chinen", "LocalName" => "litchi", "Family" => "sapindaceae", "Image" => "aitchison-environment/images/58.jpg", "Quantity" => "13", "Location" => "West apartments  to Sunder Das Gate"],
    ["Id" => "59", "Species" => "cordia myxa / c.obliqa", "LocalName" => "lasura / lasuri", "Family" => "boraginaceae", "Image" => "aitchison-environment/images/59.jpg", "Quantity" => "11", "Location" => "Senior School surrounding areas"],
    ["Id" => "60", "Species" => "thuja orientalis", "LocalName" => "mor pankh", "Family" => "cupressaceae", "Image" => "aitchison-environment/images/60.jpg", "Quantity" => "142", "Location" => "Pr. Residence Nursery side Ground"],
    ["Id" => "61", "Species" => "Ficus benghalensis", "LocalName" => "borah / bargad", "Family" => "moraceae", "Image" => "aitchison-environment/images/61.jpg", "Quantity" => "17", "Location" => "Back side of Godley House"],
    ["Id" => "62", "Species" => "prunus persica", "LocalName" => "peach / aaroo / aru", "Family" => "rosaceae", "Image" => "aitchison-environment/images/62.jpg", "Quantity" => "100", "Location" => "Pr. Residence Orchard Ground"],
    ["Id" => "63", "Species" => "Schinus Molle / s.terebinthifolius", "LocalName" => "kali mirch", "Family" => "anacardiaceae", "Image" => "aitchison-environment/images/63.jpg", "Quantity" => "45", "Location" => "Rugby Ground beside Jilani Road"],
    ["Id" => "64", "Species" => "ficus lyrata", "LocalName" => "fiddle leaf fig", "Family" => "morceae", "Image" => "aitchison-environment/images/64.jpg", "Quantity" => "3", "Location" => "Front of Godley house "],
    ["Id" => "65", "Species" => "kigelia pinnata", "LocalName" => "gul-e-fanoos", "Family" => "big noniaceae", "Image" => "aitchison-environment/images/65.jpg", "Quantity" => "5", "Location" => "Main Cricket Ground surrounding areas"],
    ["Id" => "66", "Species" => "citrus limon", "LocalName" => "lemon", "Family" => "rutaceae", "Image" => "aitchison-environment/images/66.jpg", "Quantity" => "256", "Location" => "Pr. Residence Orchard Ground"],
    ["Id" => "67", "Species" => "cartaeva religidsa", "LocalName" => "barna / verna", "Family" => "cappridaceae", "Image" => "aitchison-environment/images/67.jpg", "Quantity" => "9", "Location" => "Car Park beside New gate ground"],
    ["Id" => "68", "Species" => "caryota mitis", "LocalName" => "fish tail palm", "Family" => "palmaceae", "Image" => "aitchison-environment/images/68.jpg", "Quantity" => "146", "Location" => "Senior School inside ground back side HMSS Office"],
    ["Id" => "69", "Species" => "chorisia insigni", "LocalName" => "buddha", "Family" => "bombacaceae", "Image" => "aitchison-environment/images/69.jpg", "Quantity" => "8", "Location" => "Pr. Residence Nursery side Ground"],
    ["Id" => "70", "Species" => "roystonea gegia", "LocalName" => "bottle palm / royal palm", "Family" => "palmaceae", "Image" => "aitchison-environment/images/70.jpg", "Quantity" => "43", "Location" => "Main Cricket Ground surrounding areas"],
    ["Id" => "71", "Species" => "washingtonia filifera", "LocalName" => "fan palm", "Family" => "washingtonia", "Image" => "aitchison-environment/images/71.jpg", "Quantity" => "78", "Location" => "Front of Mosque pool side"],
    ["Id" => "72", "Species" => "phoenix dactylifera", "LocalName" => "khajoor / date palm", "Family" => "palmae", "Image" => "aitchison-environment/images/72.jpg", "Quantity" => "44", "Location" => "Pr. Residence Nursery side Ground"],
    ["Id" => "73", "Species" => "cycus revoluta", "LocalName" => "kanghi palm / comb palm", "Family" => "cycadaceae", "Image" => "aitchison-environment/images/73.jpg", "Quantity" => "28", "Location" => "Senior School inside ground back side HMSS Office"],
    ["Id" => "74", "Species" => "beaucarnia", "LocalName" => "pony tail palm", "Family" => "pieo delephant", "Image" => "aitchison-environment/images/74.jpg", "Quantity" => "51", "Location" => "Pr. Residence Nursery side Ground"],
    ["Id" => "75", "Species" => "celtis", "LocalName" => "Kharak", "Family" => "Australis", "Image" => "aitchison-environment/images/75.jpg", "Quantity" => "109", "Location" => "Pr. Residence Orchard Ground"],
    ["Id" => "76", "Species" => "plumeria-rubra var", "LocalName" => "chandni", "Family" => "indian carnation", "Image" => "aitchison-environment/images/76.jpg", "Quantity" => "104", "Location" => "Sunder Das to new gate beside Rugby Ground"],
    //["Id" => "77", "Species" => "dye oks spy rose", "LocalName" => "", "Family" => "", "Image" => "aitchison-environment/images/77.jpg", "Quantity" => "8", "Location" => "JS alif lam meem building back side"],
    ["Id" => "78", "Species" => "charry", "LocalName" => "alocha", "Family" => "", "Image" => "aitchison-environment/images/78.jpg", "Quantity" => "46", "Location" => "Cricket Academy wall side"],
    ["Id" => "79", "Species" => "kari pata", "LocalName" => "Kari Patta", "Family" => "Rutaceae", "Image" => "aitchison-environment/images/79.jpg", "Quantity" => "27", "Location" => "Surrounding of Mender area"],
    ["Id" => "80", "Species" => "shameplant", "LocalName" => "mimosa pudica", "Family" => "fabaceae", "Image" => "aitchison-environment/images/80.jpg", "Quantity" => "76", "Location" => "Pr. Residence Orchard Ground"],
    ["Id" => "81", "Species" => "citrus limetta", "LocalName" => "sweet lemon", "Family" => "rutaceae", "Image" => "aitchison-environment/images/81.jpg", "Quantity" => "16", "Location" => "Pr. Residence Orchard Ground"],
    ["Id" => "82", "Species" => "armeniaca", "LocalName" => "apricot", "Family" => "rosaceae", "Image" => "aitchison-environment/images/82.jpg", "Quantity" => "3", "Location" => "Pr. Residence Tennis Ground Left"],
    ["Id" => "83", "Species" => "bignoniaceae", "LocalName" => "Bigonia", "Family" => "bigonia grandiflora", "Image" => "aitchison-environment/images/83.jpg", "Quantity" => "1", "Location" => "Pr. Residence Gate Left side Ground"],
    ["Id" => "84", "Species" => "conocarpus erectus", "LocalName" => "combretaceae", "Family" => "myrtales", "Image" => "aitchison-environment/images/84.jpg", "Quantity" => "21", "Location" => "Cricket Academy Pr. Residence Side"],
    ["Id" => "85", "Species" => "Crateva religiosa", "LocalName" => "Samandar Phal", "Family" => "", "Image" => "aitchison-environment/images/85.jpg", "Quantity" => "6", "Location" => "Nursery front side"],
    ["Id" => "86", "Species" => "chinese persimmon", "LocalName" => "japani phal", "Family" => "diospyros", "Image" => "aitchison-environment/images/86.jpg", "Quantity" => "5", "Location" => "Pr. Residence Orchard Ground"],
    ["Id" => "87", "Species" => "citrus limetta", "LocalName" => "Musammi malta", "Family" => "rutaceae", "Image" => "aitchison-environment/images/87.jpg", "Quantity" => "29", "Location" => "Pr. Residence Orchard Ground"],
    ["Id" => "88", "Species" => "citrus jambhiri", "LocalName" => "khatti / jatti khatt / rough lemon", "Family" => "rutaceae", "Image" => "aitchison-environment/images/88.jpg", "Quantity" => "55", "Location" => "Beside The Riding School"],
    ["Id" => "89", "Species" => "moringa oleifera", "LocalName" => "sohanjna", "Family" => "moringaceae", "Image" => "aitchison-environment/images/89.jpg", "Quantity" => "6", "Location" => "West apartments front ground"],
    ["Id" => "90", "Species" => "terminalia catappa", "LocalName" => "cmbbretaceae", "Family" => "terminalia Catappa", "Image" => "aitchison-environment/images/90.jpg", "Quantity" => "16", "Location" => "Gwyn House Road  side"],
    ["Id" => "91", "Species" => "hibiscus", "LocalName" => "hibiscus rosa sinensis", "Family" => "malvaceae", "Image" => "aitchison-environment/images/91.jpg", "Quantity" => "100", "Location" => "HMSS office"],
    ["Id" => "92", "Species" => "olea europaea", "LocalName" => "zaitoon", "Family" => "oleaceae", "Image" => "aitchison-environment/images/92.jpg", "Quantity" => "1", "Location" => "West apartments front ground"],
    ["Id" => "93", "Species" => "ficus carice", "LocalName" => "anjeer/fig", "Family" => "moraceae", "Image" => "aitchison-environment/images/93.jpg", "Quantity" => "7", "Location" => "Staff Residence"],
    ["Id" => "94", "Species" => "tamarind", "LocalName" => "Imli", "Family" => "Detarioideae", "Image" => "aitchison-environment/images/94.jpg", "Quantity" => "1", "Location" => "Back side of LJ House area"],
    ["Id" => "95", "Species" => "citrus paradisi", "LocalName" => "grapefruit", "Family" => "rutaceae", "Image" => "aitchison-environment/images/94.jpg", "Quantity" => "16", "Location" => "East apartments behind Kelly House ground"],

];

?>

<link rel="stylesheet" href="//code.jquery.com/ui/1.13.2/themes/base/jquery-ui.css">

<style>
    .card{
        padding: 0;
        cursor: pointer;
    }
    .card-image {
        overflow: hidden;
    }
    .card-image img {
        width: 100%;
        -webkit-transition: 0.9s;
        transition: 0.9s;
    }

    .card-title {
        border-bottom: 1px solid rgba(0,0,0,.125); 
        text-align: center; 
        color: #fff;
        margin-bottom: 0;
    }

    .card-title > .upper {
        background-color: #1d4ea9;
        overflow: hidden;
        white-space: nowrap;
        font-size: 14px;
        /* text-transform: capitalize; */
    }
    
    .card-title > .middle {
        font-weight: bold; 
        background-color: #00205b;
        padding: 0.3rem 0;
        text-transform: capitalize;
    }

    .card-contents 
    {
        color: #00205b;
        /* text-shadow: -.5px .5px .5px #00205b; */
    }

    .card:hover {
        border-color: #00205b;
    }

    .card:hover img {
        transform: scale(1.1);
        -webkit-transform: scale(1.1);
        -ms-transform: scale(1.1);
    }

    

    /* .card:hover .card-contents-title */
    .card:hover .card-contents 
    {
        background-color: #f3f3f3;
    }


    .card-contents {
        padding: .5rem;
    }

    .card-contents p {
        line-height: 1.2;
        text-align: center;
        margin-bottom: 0.5rem;
        text-transform: capitalize;
    }

    .model-text-heading {
        font-weight: bold;
    }

    .model-contents {
        overflow-y: scroll; height: 460px; padding: 15px;
    }

    .badge {
        position: absolute;
        right: 10px;
        top: 10px;
        color: #00205b;
        background-color: #fec10d;
        z-index: 100;
    }

@media (max-width: 425px){
    .model-contents {
        height: 100%;
    }
}
</style>

<body>
<?php include_once ('top-menu-bar.php'); ?>

<?php include_once ($path.'logo-page-banner.php'); ?>

<?php include_once("mega-menu.php");?>


<div class="container">

    <div class="row mt-2">
        <div class="col-lg-9 col-md-6 col-sm-12">

            <nav aria-label="breadcrumb">
                <ol class="breadcrumb">
                    <li class="breadcrumb-item"><a href="./">Home</a></li>
                    <li class="breadcrumb-item active" aria-current="page"><a href="environment-of-aitchison">Environment of Aitchison</a></li>
                </ol>
            </nav>

        </div>

        <div class="col-lg-3 col-md-6 col-sm-12 text-lg-start text-sm-center">
            <div></div>
        </div>
    </div>

    <div class="col-lg-9 col-md-12 col-sm-12">
        <div class="col-12 page-title page-title2">
            <h1><?php echo $title; ?></h1>
        </div>

    </div>

    <!-- Contents -->
    <div class="row">

        <!-- Left Area -->

        <div class="col-lg-12 col-md-12 col-sm-12">
        
        <div class="row">
            
            <?php 
            foreach($data as $row) {

            ?>
            <div class="col-md-4 col-sm-12 mb-4">
                <div class="card" data-id="<?php echo $row['Id'] ?>">
                    <div class="badge" title="Total Trees">Total: <?php echo $row['Quantity'] ?></div>
                    <div class="card-image">
                        <img src="resources/assets/aitchison-env/images/<?php echo $row['Id'] ?>.jpg" alt="News" class="img-fluid" loading="lazy">
                    </div>
                    <div class="card-title">
                        <div class="upper" ><?php echo $row['Location'] ?></div>
                        <div class="middle" ><?php echo $row['LocalName'] ?></div>
                    </div>
                    <div class="card-contents">
                        <p>
                            Species: <?php echo $row['Species'] ?>
                        </p>
                        <p>
                            Local Name: <?php echo $row['LocalName'] ?>
                        </p>
                        <p>
                            Family: <?php echo $row['Family'] ?>
                        </p>
                    </div>
                </div>
            </div>
            <?php } ?>
            
            
        </div>
        

        </div>
        <!-- End Left Area -->

        <!-- Right Area -->
        <!-- <div class="col-lg-3 col-md-6 col-sm-12 text-center news-links">

        </div> -->
        <!-- End Right Area -->

        <div class="col-lg-9 col-md-12 col-sm-12">

            <div class="divider"></div>

            <div class="row">

            </div>
        </div>

        <div class="col-lg-3 col-md-12 col-sm-12">

        </div>
    </div>
    <!-- End Contents -->

</div>

<div class="divider"></div>

<!-- Footer -->

<?php include_once($path."footer.php");?>

<!-- End Footer -->


<!-- End Footer Includes -->
<?php include_once($path."footer-includes.php");?>

<!-- End Footer Includes -->

</body>
<style>
.ui-dialog{z-index: 999999;}
@media (max-width: 425px) {
    #custom-close-button{font-size: 20px;}
}
</style>
<div id="dialog-message" title="Download complete" style="padding: 0; display:none; z-index: 999999;">
    
    <div id="model-id">
        <input type="button" value="x" id="custom-close-button" class="btn btn-primary btn-small" style="display: block; position: absolute; right: 15px; top: 0px;padding: 0 5px;"/>
        <div class="row w-100 m-0">
        <div class="col-md-5 col=sm-12 ps-0 pe-0">
            <img src="/" id="model-image" alt="Image" class="img-fluid" />
        </div>
        <div class="col-md-7 col=sm-12 p-0">
            <div id="model-contents" class="model-contents"></div>
        </div>
        </div>
    </div>
  
</div>

</html>

<script src="https://code.jquery.com/ui/1.13.2/jquery-ui.js"></script>

<script>
    
    $('.card').click(function() {
        let data_id = $(this).data('id');

        $('#model-contents').html("");

        //$('#model-id').html(data_id);
        let src = '';
        if($(window).width() > 426) {
            src = "resources/assets/aitchison-env/images/" + data_id +  "-lg.jpg";
        }
        else {
            src = "resources/assets/aitchison-env/images/" + data_id +  ".jpg";
        }

        
        $("#model-image").attr("src", src);

        $.ajax({
        url: 'resources/assets/aitchison-env/service/data.php',
        type: 'GET',
        data: 'id='+data_id,
        dataType: 'JSON',
        success: function(data, textStatus, jqXHR){
            
            $('#model-contents').html(data);

            
        },
        error: function(jqXHR, textStatus, errorThrown){

        },
        });

        $( function() {
            var isMobile = $(window).width() < 750;
            $( "#dialog-message" ).dialog({
                modal: true,
                height: $(window).width() > 750 ? 'auto' : $(window).height(),
                width: $(window).width() > 750 ? 750 : 'auto', //sets the initial size of the dialog box 

                // width: function () {
                //     return $(window).width() > 750 ? 750 : 'auto';
                // },
                // height: function () {
                //     return $(window).height();
                // },

                //width: isMobile ? '100%' : 750, // Set to full width on mobile, 750px on desktop
                //height: isMobile ? '100%' : 460,

                fluid: true,
                resizable: false,
                autoOpen: true,
                closeText: '',
                position: { my: "center", at: "center", of: window }, // Center the dialog
                appendTo: "body" // Append the dialog to the body element
                // buttons: {
                //         Ok: function() {
                //             $( this ).dialog( "close" );
                //         }
                //     }
            });

            $(".ui-dialog-titlebar").hide();

            $(window).resize(function() {
                $("#dialog-message").dialog("option", "position", "center"); //places the dialog box at the center
                $("#dialog-message").dialog({
                    width: $(window).width() > 600 ? 600 : 'auto', //resizes the dialog box as the window is resized
                });
            });

            $("#custom-close-button").click(function() {
                $("#dialog-message").dialog("close");
            });
            
        });
    });

    

</script>