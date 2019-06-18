<?php

use App\Company;
use Illuminate\Database\Seeder;

class CompaniesTableSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        // Collected by JS. God bless JS :D
        $data = [
            ['code' => 'ACSEL', 'name' => 'Acıpayam Selüloz'],
            ['code' => 'ADANA', 'name' => 'Adana Çimento (A)'],
            ['code' => 'ADBGR', 'name' => 'Adana Çimento (B)'],
            ['code' => 'ADEL', 'name' => 'Adel Kalemcilik'],
            ['code' => 'ADESE', 'name' => 'Adese Alışveriş Ticaret'],
            ['code' => 'ADNAC', 'name' => 'Adana Çimento (C)'],
            ['code' => 'AEFES', 'name' => 'Anadolu Efes'],
            ['code' => 'AFMAS', 'name' => 'Afm Film'],
            ['code' => 'AFYON', 'name' => 'Afyon Çimento'],
            ['code' => 'AGYO', 'name' => 'Atakule Gmyo'],
            ['code' => 'AKBNK', 'name' => 'Akbank'],
            ['code' => 'AKCNS', 'name' => 'Akçansa'],
            ['code' => 'AKENR', 'name' => 'Ak Enerji'],
            ['code' => 'AKFEN', 'name' => 'Akfen Holding'],
            ['code' => 'AKFGY', 'name' => 'Akfen Gmyo'],
            ['code' => 'AKGRT', 'name' => 'Aksigorta'],
            ['code' => 'AKGUV', 'name' => 'Akdenız Güvenlık Hız.'],
            ['code' => 'AKMGY', 'name' => 'Akmerkez Gmyo'],
            ['code' => 'AKPAZ', 'name' => 'Akyürek Pazarlama'],
            ['code' => 'AKSA', 'name' => 'Aksa'],
            ['code' => 'AKSEN', 'name' => 'Aksa Enerji'],
            ['code' => 'AKSGY', 'name' => 'Akiş Gmyo'],
            ['code' => 'AKSUE', 'name' => 'Aksu Enerji'],
            ['code' => 'ALARK', 'name' => 'Alarko Holding'],
            ['code' => 'ALBRK', 'name' => 'Albaraka Türk'],
            ['code' => 'ALCAR', 'name' => 'Alarko Carrıer'],
            ['code' => 'ALCTL', 'name' => 'Alcatel Lucent Teletaş'],
            ['code' => 'ALGYO', 'name' => 'Alarko Gmyo'],
            ['code' => 'ALKA', 'name' => 'Alkim Kağıt'],
            ['code' => 'ALKIM', 'name' => 'Alkim Kimya'],
            ['code' => 'ALNTF', 'name' => 'Alternatifbank'],
            ['code' => 'ALTIN', 'name' => 'Altınyıldız'],
            ['code' => 'ALYAG', 'name' => 'Altınyağ'],
            ['code' => 'ANACM', 'name' => 'Anadolu Cam'],
            ['code' => 'ANELE', 'name' => 'Anel Elektrik'],
            ['code' => 'ANELT', 'name' => 'Anel Telekom'],
            ['code' => 'ANHYT', 'name' => 'Anadolu Hayat Emek.'],
            ['code' => 'ANSA', 'name' => 'Ansa Yatırım Holding'],
            ['code' => 'ANSGR', 'name' => 'Anadolu Sigorta'],
            ['code' => 'ARCLK', 'name' => 'Arçelik'],
            ['code' => 'ARENA', 'name' => 'Arena Bilgisayar'],
            ['code' => 'ARFYO', 'name' => 'Alternatif Yat.Ort.'],
            ['code' => 'ARMDA', 'name' => 'Armada Bilgisayar'],
            ['code' => 'ARSAN', 'name' => 'Arsan Tekstil'],
            ['code' => 'ARTI', 'name' => 'Artı Yatırım Holding'],
            ['code' => 'ARTOG', 'name' => 'Ar Tarım Organik Gıda'],
            ['code' => 'ASCEL', 'name' => 'Asil Çelik'],
            ['code' => 'ASELS', 'name' => 'Aselsan'],
            ['code' => 'ASLAN', 'name' => 'Aslan Çimento'],
            ['code' => 'ASUZU', 'name' => 'Anadolu Isuzu'],
            ['code' => 'ASYAB', 'name' => 'Asya Katılım Bankası'],
            ['code' => 'ATAC', 'name' => 'Ataç İnşaat'],
            ['code' => 'ATAGY', 'name' => 'Ata Gmyo'],
            ['code' => 'ATEKS', 'name' => 'Akın Tekstil'],
            ['code' => 'ATLAS', 'name' => 'Atlas Yat. Ort.'],
            ['code' => 'ATPET', 'name' => 'Atlantik Petrol Ürünleri'],
            ['code' => 'ATSYH', 'name' => 'Atlantis Yatırım Holding'],
            ['code' => 'AVGYO', 'name' => 'Avrasya Gmyo'],
            ['code' => 'AVIVA', 'name' => 'Aviva Sigorta'],
            ['code' => 'AVOD', 'name' => 'A.V.O.D Gıda Ve Tarım'],
            ['code' => 'AVTUR', 'name' => 'Avrasya Petrol Ve Tur.'],
            ['code' => 'AYCES', 'name' => 'Altınyunus Çeşme'],
            ['code' => 'AYEN', 'name' => 'Ayen Enerji'],
            ['code' => 'AYES', 'name' => 'Ayes Akdeniz Yapı'],
            ['code' => 'AYGAZ', 'name' => 'Aygaz'],
            ['code' => 'BAGFS', 'name' => 'Bagfaş'],
            ['code' => 'BAKAB', 'name' => 'Bakanlar Medya'],
            ['code' => 'BALAT', 'name' => 'Balatacılar Balatacılık'],
            ['code' => 'BANVT', 'name' => 'Banvit'],
            ['code' => 'BASCM', 'name' => 'Baştaş Başkent Çimento'],
            ['code' => 'BAYRD', 'name' => 'Baysan Trafo Radyatörleri'],
            ['code' => 'BEYAZ', 'name' => 'Beyaz Filo'],
            ['code' => 'BFREN', 'name' => 'Bosch Fren Sistemleri'],
            ['code' => 'BIMAS', 'name' => 'Bim Mağazalar'],
            ['code' => 'BISAS', 'name' => 'Bısaş Tekstil'],
            ['code' => 'BIZIM', 'name' => 'Bizim Mağazaları'],
            ['code' => 'BJKAS', 'name' => 'Beşiktaş Futbol Yat.'],
            ['code' => 'BLCYT', 'name' => 'Bilici Yatırım'],
            ['code' => 'BMEKS', 'name' => 'Bimeks'],
            ['code' => 'BOLUC', 'name' => 'Bolu Çimento'],
            ['code' => 'BOSSA', 'name' => 'Bossa'],
            ['code' => 'BOYNR', 'name' => 'Boyner Mağazacılık'],
            ['code' => 'BRISA', 'name' => 'Brisa'],
            ['code' => 'BRKO', 'name' => 'Birko Mensucat'],
            ['code' => 'BRKSN', 'name' => 'Berkosan Yalıtım'],
            ['code' => 'BRMEN', 'name' => 'Birlik Mensucat'],
            ['code' => 'BROVA', 'name' => 'Borova Yapı'],
            ['code' => 'BRSAN', 'name' => 'Borusan Mannesmann'],
            ['code' => 'BRYAT', 'name' => 'Borusan Yat. Paz.'],
            ['code' => 'BSHEV', 'name' => 'Bsh Ev Aletleri'],
            ['code' => 'BSOKE', 'name' => 'Batısöke Çimento'],
            ['code' => 'BTCIM', 'name' => 'Batı Çimento'],
            ['code' => 'BUCIM', 'name' => 'Bursa Çimento'],
            ['code' => 'BURCE', 'name' => 'Burçelik'],
            ['code' => 'BURVA', 'name' => 'Burçelik Vana'],
            ['code' => 'CARFA', 'name' => 'Carrefoursa (A)'],
            ['code' => 'CARFB', 'name' => 'Carrefoursa (B)'],
            ['code' => 'CBSBO', 'name' => 'Çbs Boya'],
            ['code' => 'CCOLA', 'name' => 'Coca Cola İçecek'],
            ['code' => 'CELHA', 'name' => 'Çelik Halat'],
            ['code' => 'CEMAS', 'name' => 'Çemaş Döküm'],
            ['code' => 'CEMTS', 'name' => 'Çemtaş'],
            ['code' => 'CIMSA', 'name' => 'Çimsa'],
            ['code' => 'CLEBI', 'name' => 'Çelebi'],
            ['code' => 'CMBTN', 'name' => 'Çimbeton'],
            ['code' => 'CMENT', 'name' => 'Çimentaş'],
            ['code' => 'COMDO', 'name' => 'Componenta Dökümcülük'],
            ['code' => 'COSMO', 'name' => 'Cosmos Yat. Ort.'],
            ['code' => 'CRDFA', 'name' => 'Credıtwest Faktorıng'],
            ['code' => 'DAGHL', 'name' => 'Dagi Yatırım Holding'],
            ['code' => 'DAGI', 'name' => 'Dagi Giyim'],
            ['code' => 'DARDL', 'name' => 'Dardanel'],
            ['code' => 'DENCM', 'name' => 'Denizli Cam'],
            ['code' => 'DENGE', 'name' => 'Denge Holding'],
            ['code' => 'DENIZ', 'name' => 'Denizbank'],
            ['code' => 'DENTA', 'name' => 'Dentaş Ambalaj'],
            ['code' => 'DERIM', 'name' => 'Derimod'],
            ['code' => 'DESA', 'name' => 'Desa Deri'],
            ['code' => 'DESPC', 'name' => 'Despec Bilgisayar'],
            ['code' => 'DEVA', 'name' => 'Deva Holding'],
            ['code' => 'DGATE', 'name' => 'Datagate Bilgisayar'],
            ['code' => 'DGGYO', 'name' => 'Doğuş Gmyo'],
            ['code' => 'DGZTE', 'name' => 'Doğan Gazetecilik'],
            ['code' => 'DIRIT', 'name' => 'Diriteks Diriliş Tekstil'],
            ['code' => 'DITAS', 'name' => 'Ditaş Doğan'],
            ['code' => 'DMSAS', 'name' => 'Demısaş Döküm'],
            ['code' => 'DNZYO', 'name' => 'Deniz Yat.Ort.'],
            ['code' => 'DOAS', 'name' => 'Doğuş Otomotiv'],
            ['code' => 'DOBUR', 'name' => 'Doğan Burda'],
            ['code' => 'DOCO', 'name' => 'Do-Co'],
            ['code' => 'DOGUB', 'name' => 'Doğusan'],
            ['code' => 'DOHOL', 'name' => 'Doğan Holding'],
            ['code' => 'DURDO', 'name' => 'Duran Doğan Basım'],
            ['code' => 'DYHOL', 'name' => 'Doğan Yayın Hol.'],
            ['code' => 'DYOBY', 'name' => 'Dyo Boya'],
            ['code' => 'ECBYO', 'name' => 'Eczacıbaşı Yat. Ort.'],
            ['code' => 'ECILC', 'name' => 'Eczacıbaşı İlaç'],
            ['code' => 'ECYAP', 'name' => 'Eczacıbaşı Yapı'],
            ['code' => 'ECZYT', 'name' => 'Eczacıbaşı Yatırım'],
            ['code' => 'EDIP', 'name' => 'Edip Gayrimenkul'],
            ['code' => 'EGCYH', 'name' => 'Egeli & Co Yatırım Holding'],
            ['code' => 'EGCYO', 'name' => 'Egeli & Co Tarım Girişim'],
            ['code' => 'EGEEN', 'name' => 'Ege Endüstri'],
            ['code' => 'EGGUB', 'name' => 'Ege Gübre'],
            ['code' => 'EGLYO', 'name' => 'Egeli & Co Girişim Sermaye'],
            ['code' => 'EGPRO', 'name' => 'Ege Profil'],
            ['code' => 'EGSER', 'name' => 'Ege Seramik'],
            ['code' => 'EGYO', 'name' => 'Egs Gmyo'],
            ['code' => 'EKGYO', 'name' => 'Emlak Konut Gmyo'],
            ['code' => 'EKIZ', 'name' => 'Ekiz Yağ Sanayii'],
            ['code' => 'EMBYO', 'name' => 'Euro B Tipi Yat. Ort.'],
            ['code' => 'EMKEL', 'name' => 'Emek Elektrik'],
            ['code' => 'EMNIS', 'name' => 'Eminiş Ambalaj'],
            ['code' => 'ENKAI', 'name' => 'Enka İnşaat'],
            ['code' => 'EPLAS', 'name' => 'Egeplast'],
            ['code' => 'ERBOS', 'name' => 'Erbosan'],
            ['code' => 'EREGL', 'name' => 'Ereğli Demir Celik'],
            ['code' => 'ERICO', 'name' => 'Ericom Telekomünikasyon'],
            ['code' => 'ERSU', 'name' => 'Ersu Gıda'],
            ['code' => 'ESCOM', 'name' => 'Escort Teknoloji'],
            ['code' => 'ESEMS', 'name' => 'Esem Spor Giyim'],
            ['code' => 'ETILR', 'name' => 'Etiler İnci Büfe'],
            ['code' => 'ETYAT', 'name' => 'Euro Trend Yat. Ort.'],
            ['code' => 'EUKYO', 'name' => 'Euro Kapital Yat. Ort.'],
            ['code' => 'EUROM', 'name' => 'Euro Yat.Men.Değ.'],
            ['code' => 'FENER', 'name' => 'Fenerbahçe Futbol'],
            ['code' => 'FENIS', 'name' => 'Feniş Alüminyum'],
            ['code' => 'FFKRL', 'name' => 'Finans Fin. Kir.'],
            ['code' => 'FINBN', 'name' => 'Finansbank'],
            ['code' => 'FLAP', 'name' => 'Flap Kongre Toplantı Hiz.'],
            ['code' => 'FMIZP', 'name' => 'F-M İzmit Piston'],
            ['code' => 'FNSYO', 'name' => 'Finans Yat. Ort.'],
            ['code' => 'FONFK', 'name' => 'Fon Fin.Kir.'],
            ['code' => 'FRIGO', 'name' => 'Frigo Pak Gıda'],
            ['code' => 'FROTO', 'name' => 'Ford Otosan'],
            ['code' => 'FVORI', 'name' => 'Favori Dinlenme Yer.'],
            ['code' => 'GARAN', 'name' => 'Garanti Bankası'],
            ['code' => 'GARFA', 'name' => 'Garanti Faktoring'],
            ['code' => 'GDKGS', 'name' => 'Gedik Girişim'],
            ['code' => 'GDKYO', 'name' => 'Gedik Yat.Ort.'],
            ['code' => 'GEDIK', 'name' => 'Gedik Y. Men. Değ.'],
            ['code' => 'GEDIZ', 'name' => 'Gediz İplik'],
            ['code' => 'GENTS', 'name' => 'Gentaş'],
            ['code' => 'GEREL', 'name' => 'Gersan Elektrik'],
            ['code' => 'GLBMD', 'name' => 'Global Men. Değ.'],
            ['code' => 'GLRYH', 'name' => 'Güler Yat. Holding'],
            ['code' => 'GLYHO', 'name' => 'Global Yat. Holding'],
            ['code' => 'GOLTS', 'name' => 'Göltaş Çimento'],
            ['code' => 'GOODY', 'name' => 'Good-Year'],
            ['code' => 'GOZDE', 'name' => 'Gözde Girişim'],
            ['code' => 'GRNYO', 'name' => 'Garanti Yat. Ort.'],
            ['code' => 'GSDDE', 'name' => 'Gsd Denizcilik'],
            ['code' => 'GSDHO', 'name' => 'Gsd Holding'],
            ['code' => 'GSRAY', 'name' => 'Galatasaray Sportif'],
            ['code' => 'GUBRF', 'name' => 'Gübre Fabrik.'],
            ['code' => 'GUSGR', 'name' => 'Güneş Sigorta'],
            ['code' => 'HALKB', 'name' => 'T. Halk Bankası'],
            ['code' => 'HALKS', 'name' => 'Halk Sigorta'],
            ['code' => 'HATEK', 'name' => 'Hatay Tekstil'],
            ['code' => 'HEKTS', 'name' => 'Hektaş'],
            ['code' => 'HITIT', 'name' => 'Hitit Holding'],
            ['code' => 'HLGYO', 'name' => 'Halk Gmyo'],
            ['code' => 'HURGZ', 'name' => 'Hürriyet Gzt.'],
            ['code' => 'HZNDR', 'name' => 'Haznedar Refrakter'],
            ['code' => 'ICGYH', 'name' => 'Icg Yatırım Holding'],
            ['code' => 'IDAS', 'name' => 'İdaş'],
            ['code' => 'IDGYO', 'name' => 'İdealist Gmyo'],
            ['code' => 'IEYHO', 'name' => 'Işıklar Enerji Yapı Hol.'],
            ['code' => 'IHEVA', 'name' => 'İhlas Ev Aletleri'],
            ['code' => 'IHGZT', 'name' => 'İhlas Gazetecilik'],
            ['code' => 'IHLAS', 'name' => 'İhlas Holding'],
            ['code' => 'IHMAD', 'name' => 'İhlas Madencilik'],
            ['code' => 'IHYAY', 'name' => 'İhlas Yayın Holding'],
            ['code' => 'INDES', 'name' => 'İndeks Bilgisayar'],
            ['code' => 'INFO', 'name' => 'Info Yatırım'],
            ['code' => 'INTEM', 'name' => 'İntema'],
            ['code' => 'IPEKE', 'name' => 'İpek Doğal Enerji'],
            ['code' => 'ISATR', 'name' => 'İş Bankası (A)'],
            ['code' => 'ISBIR', 'name' => 'İşbir Holding'],
            ['code' => 'ISBTR', 'name' => 'İş Bankası (B)'],
            ['code' => 'ISCTR', 'name' => 'İş Bankası (C)'],
            ['code' => 'ISFIN', 'name' => 'İş Fin.Kir.'],
            ['code' => 'ISGSY', 'name' => 'İş Girişim'],
            ['code' => 'ISGYO', 'name' => 'İş Gmyo'],
            ['code' => 'ISKUR', 'name' => 'İş Bankası (Kur.)'],
            ['code' => 'ISMEN', 'name' => 'İş Y. Men. Değ.'],
            ['code' => 'ISYAT', 'name' => 'İş B Tipi Yat. Ort.'],
            ['code' => 'ISYHO', 'name' => 'Işıklar Yat. Holding'],
            ['code' => 'ITTFH', 'name' => 'İttifak Holding'],
            ['code' => 'IZMDC', 'name' => 'İzmir Demir Çelik'],
            ['code' => 'IZOCM', 'name' => 'İzocam'],
            ['code' => 'JANTS', 'name' => 'Jantsa Jant Sanayi'],
            ['code' => 'KAPLM', 'name' => 'Kaplamin'],
            ['code' => 'KAREL', 'name' => 'Karel Elektronik'],
            ['code' => 'KARKM', 'name' => 'Karkim Sondaj Akışkanları'],
            ['code' => 'KARSN', 'name' => 'Karsan Otomotiv'],
            ['code' => 'KARTN', 'name' => 'Kartonsan'],
            ['code' => 'KATMR', 'name' => 'Katmerciler Ekipman'],
            ['code' => 'KCHOL', 'name' => 'Koç Holding'],
            ['code' => 'KENT', 'name' => 'Kent Gıda'],
            ['code' => 'KERVN', 'name' => 'Kervansaray Yat. Holding'],
            ['code' => 'KERVT', 'name' => 'Kerevitaş Gıda'],
            ['code' => 'KILER', 'name' => 'Kiler Gıda'],
            ['code' => 'KIPA', 'name' => 'Tesco Kipa'],
            ['code' => 'KLBMO', 'name' => 'Kelebek Mobilya'],
            ['code' => 'KLGYO', 'name' => 'Kiler Gmyo'],
            ['code' => 'KLMSN', 'name' => 'Klimasan Klima'],
            ['code' => 'KLNMA', 'name' => 'T. Kalkınma Bank.'],
            ['code' => 'KNFRT', 'name' => 'Konfrut Gıda'],
            ['code' => 'KOMHL', 'name' => 'Kombassan Holding'],
            ['code' => 'KONYA', 'name' => 'Konya Çimento'],
            ['code' => 'KORDS', 'name' => 'Kordsa Global'],
            ['code' => 'KOZAA', 'name' => 'Koza Madencilik'],
            ['code' => 'KOZAL', 'name' => 'Koza Altın'],
            ['code' => 'KPHOL', 'name' => 'Kapital Yat. Holding'],
            ['code' => 'KRATL', 'name' => 'Karakaş Atlantis Kuyum.'],
            ['code' => 'KRDMA', 'name' => 'Kardemir (A)'],
            ['code' => 'KRDMB', 'name' => 'Kardemir (B)'],
            ['code' => 'KRDMD', 'name' => 'Kardemir (D)'],
            ['code' => 'KRONT', 'name' => 'Kron Telekomünikasyon'],
            ['code' => 'KRSAN', 'name' => 'Karsusan Su Ürünleri San.'],
            ['code' => 'KRSTL', 'name' => 'Kristal Kola'],
            ['code' => 'KRTEK', 'name' => 'Karsu Tekstil'],
            ['code' => 'KSTUR', 'name' => 'Kuştur Kuşadası Turizm'],
            ['code' => 'KUTPO', 'name' => 'Kütahya Porselen'],
            ['code' => 'KUYAS', 'name' => 'Kuyumcukent Gayrimenkul'],
            ['code' => 'LATEK', 'name' => 'Latek Lojistik'],
            ['code' => 'LINK', 'name' => 'Link Bilgisayar'],
            ['code' => 'LKMNH', 'name' => 'Lokman Hekim Sağlık'],
            ['code' => 'LOGO', 'name' => 'Logo Yazılım'],
            ['code' => 'LTHOL', 'name' => 'Latek Holding'],
            ['code' => 'LUKSK', 'name' => 'Lüks Kadife'],
            ['code' => 'MAALT', 'name' => 'Marmaris Altınyunus'],
            ['code' => 'MAKTK', 'name' => 'Makina Takım'],
            ['code' => 'MANGO', 'name' => 'Mango Gıda'],
            ['code' => 'MARTI', 'name' => 'Martı Otel'],
            ['code' => 'MATAS', 'name' => 'Mataş Matbaacılık'],
            ['code' => 'MCTAS', 'name' => 'Mct Danışmanlık'],
            ['code' => 'MEGAP', 'name' => 'Mega Polietilen'],
            ['code' => 'MEMSA', 'name' => 'Mensa'],
            ['code' => 'MEPET', 'name' => 'Metro Petrol Ve Tesisleri'],
            ['code' => 'MERIT', 'name' => 'Merit Turizm'],
            ['code' => 'MERKO', 'name' => 'Merko Gıda'],
            ['code' => 'METAL', 'name' => 'Metro Altın'],
            ['code' => 'METRO', 'name' => 'Metro Holding'],
            ['code' => 'METUR', 'name' => 'Metemtur Otelcilik'],
            ['code' => 'MGROS', 'name' => 'Migros Ticaret'],
            ['code' => 'MIPAZ', 'name' => 'Milpa'],
            ['code' => 'MMCAS', 'name' => 'Mmc San. Ve Tic. Yat.'],
            ['code' => 'MNDRS', 'name' => 'Menderes Tekstil'],
            ['code' => 'MRDIN', 'name' => 'Mardin Çimento'],
            ['code' => 'MRGYO', 'name' => 'Martı Gmyo'],
            ['code' => 'MRSHL', 'name' => 'Marshall'],
            ['code' => 'MRTGG', 'name' => 'Mert Gıda'],
            ['code' => 'MUTLU', 'name' => 'Mutlu Akü'],
            ['code' => 'MZHLD', 'name' => 'Mazhar Zorlu Holding'],
            ['code' => 'NETAS', 'name' => 'Netaş Telekom.'],
            ['code' => 'NIBAS', 'name' => 'Niğbaş Niğde Beton'],
            ['code' => 'NTHOL', 'name' => 'Net Holding'],
            ['code' => 'NTTUR', 'name' => 'Net Turizm'],
            ['code' => 'NUGYO', 'name' => 'Nurol Gmyo'],
            ['code' => 'NUHCM', 'name' => 'Nuh Çimento'],
            ['code' => 'ODAS', 'name' => 'Odaş Elektrik'],
            ['code' => 'OLMIP', 'name' => 'Olmuksan-Ip'],
            ['code' => 'ORGE', 'name' => 'Orge Enerji Elektrik'],
            ['code' => 'ORMA', 'name' => 'Orma Orman Mahsulleri'],
            ['code' => 'OSMEN', 'name' => 'Osmanlı Menkul'],
            ['code' => 'OSTIM', 'name' => 'Ostim Endüstriyel Yat'],
            ['code' => 'OTKAR', 'name' => 'Otokar'],
            ['code' => 'OYAYO', 'name' => 'Oyak Yat. Ort.'],
            ['code' => 'OYLUM', 'name' => 'Oylum Sınai Yatırımlar'],
            ['code' => 'OZBAL', 'name' => 'Özbal Çelik Boru'],
            ['code' => 'OZGYO', 'name' => 'Özderici Gmyo'],
            ['code' => 'OZKGY', 'name' => 'Özak Gmyo'],
            ['code' => 'PAGYO', 'name' => 'Panora Gmyo'],
            ['code' => 'PARSN', 'name' => 'Parsan'],
            ['code' => 'PEGYO', 'name' => 'Pera Gmyo'],
            ['code' => 'PENGD', 'name' => 'Penguen Gıda'],
            ['code' => 'PETKM', 'name' => 'Petkim'],
            ['code' => 'PETUN', 'name' => 'Pınar Et Ve Un'],
            ['code' => 'PGSUS', 'name' => 'Pegasus'],
            ['code' => 'PIMAS', 'name' => 'Pimaş'],
            ['code' => 'PINSU', 'name' => 'Pınar Su'],
            ['code' => 'PKART', 'name' => 'Plastikkart'],
            ['code' => 'PKENT', 'name' => 'Petrokent Turizm'],
            ['code' => 'PNSUT', 'name' => 'Pınar Süt'],
            ['code' => 'POLHO', 'name' => 'Polisan Holding'],
            ['code' => 'PRKAB', 'name' => 'Türk Prysmian Kablo'],
            ['code' => 'PRKME', 'name' => 'Park Elek.Madencilik'],
            ['code' => 'PRTAS', 'name' => 'Çbs Printaş'],
            ['code' => 'PRZMA', 'name' => 'Prizma Press Matbaacılık'],
            ['code' => 'PTOFS', 'name' => 'Omv Petrol Ofisi'],
            ['code' => 'RANLO', 'name' => 'Ran Lojistik'],
            ['code' => 'RAYSG', 'name' => 'Ray Sigorta'],
            ['code' => 'RHEAG', 'name' => 'Rhea Girişim'],
            ['code' => 'ROYAL', 'name' => 'Royal Halı'],
            ['code' => 'RYGYO', 'name' => 'Reysaş Gmyo'],
            ['code' => 'RYSAS', 'name' => 'Reysaş Lojistik'],
            ['code' => 'SAFGY', 'name' => 'Saf Gmyo'],
            ['code' => 'SAHOL', 'name' => 'Sabancı Holding'],
            ['code' => 'SAMAT', 'name' => 'Saray Matbaacılık'],
            ['code' => 'SANFM', 'name' => 'Sanifoam Sünger'],
            ['code' => 'SANKO', 'name' => 'Sanko Pazarlama'],
            ['code' => 'SARKY', 'name' => 'Sarkuysan'],
            ['code' => 'SASA', 'name' => 'Sasa Polyester'],
            ['code' => 'SAYAS', 'name' => 'Say Reklamcılık'],
            ['code' => 'SEKFK', 'name' => 'Şeker Fin. Kir.'],
            ['code' => 'SELEC', 'name' => 'Selçuk Ecza Deposu'],
            ['code' => 'SELGD', 'name' => 'Selçuk Gıda'],
            ['code' => 'SERVE', 'name' => 'Serve Kırtasiye'],
            ['code' => 'SILVR', 'name' => 'Silverline Endüstri'],
            ['code' => 'SISE', 'name' => 'Şişe Cam'],
            ['code' => 'SKBNK', 'name' => 'Şekerbank'],
            ['code' => 'SKPLC', 'name' => 'Şeker Piliç'],
            ['code' => 'SKTAS', 'name' => 'Söktaş'],
            ['code' => 'SNGYO', 'name' => 'Sinpaş Gmyo'],
            ['code' => 'SNPAM', 'name' => 'Sönmez Pamuklu'],
            ['code' => 'SODA', 'name' => 'Soda Sanayii'],
            ['code' => 'SODSN', 'name' => 'Sodaş Sodyum Sanayii'],
            ['code' => 'SONME', 'name' => 'Sönmez Filament'],
            ['code' => 'SRVGY', 'name' => 'Servet Gmyo'],
            ['code' => 'TACTR', 'name' => 'Taç Tarım Ürünleri'],
            ['code' => 'TARAF', 'name' => 'Taraf Gazetecilik'],
            ['code' => 'TATKS', 'name' => 'Tat Konserve'],
            ['code' => 'TAVHL', 'name' => 'Tav Havalimanları'],
            ['code' => 'TBORG', 'name' => 'T.Tuborg'],
            ['code' => 'TCELL', 'name' => 'Turkcell'],
            ['code' => 'TCRYO', 'name' => 'Tacirler Yat. Ort.'],
            ['code' => 'TEBNK', 'name' => 'T.Ekonomi Bank.'],
            ['code' => 'TEKST', 'name' => 'Tekstilbank'],
            ['code' => 'TEKTU', 'name' => 'Tek-Art Turizm'],
            ['code' => 'TEPAS', 'name' => 'Tepa Tıbbi Elektronik'],
            ['code' => 'TGSAS', 'name' => 'Tgs Dış Ticaret'],
            ['code' => 'THYAO', 'name' => 'Türk Hava Yolları'],
            ['code' => 'TIRE', 'name' => 'Mondi Tire Kutsan'],
            ['code' => 'TKFEN', 'name' => 'Tekfen Holding'],
            ['code' => 'TKNSA', 'name' => 'Teknosa İç Ve Dış Ticaret'],
            ['code' => 'TKURU', 'name' => 'Taze Kuru Gıda'],
            ['code' => 'TMSN', 'name' => 'Tümosan Motor Ve Traktör'],
            ['code' => 'TOASO', 'name' => 'Tofaş Oto. Fab.'],
            ['code' => 'TRCAS', 'name' => 'Turcas Petrol'],
            ['code' => 'TRGYO', 'name' => 'Torunlar Gmyo'],
            ['code' => 'TRKCM', 'name' => 'Trakya Cam'],
            ['code' => 'TRNSK', 'name' => 'Transtürk Hold.'],
            ['code' => 'TSGYO', 'name' => 'Tskb Gmyo'],
            ['code' => 'TSKB', 'name' => 'T.S.K.B.'],
            ['code' => 'TSPOR', 'name' => 'Trabzonspor Sportif'],
            ['code' => 'TTKOM', 'name' => 'Türk Telekom'],
            ['code' => 'TTRAK', 'name' => 'Türk Traktör'],
            ['code' => 'TUDDF', 'name' => 'T.Demir Döküm'],
            ['code' => 'TUKAS', 'name' => 'Tukaş'],
            ['code' => 'TUPRS', 'name' => 'Tüpraş'],
            ['code' => 'UCAK', 'name' => 'Usaş'],
            ['code' => 'ULAS', 'name' => 'Ulaşlar Turizm Yat.'],
            ['code' => 'ULKER', 'name' => 'Ülker Bisküvi'],
            ['code' => 'UNYEC', 'name' => 'Ünye Çimento'],
            ['code' => 'USAK', 'name' => 'Uşak Seramik'],
            ['code' => 'UTPYA', 'name' => 'Utopya Turizm'],
            ['code' => 'UYUM', 'name' => 'Uyum Gıda'],
            ['code' => 'UZERB', 'name' => 'Uzertaş Boya'],
            ['code' => 'VAKBN', 'name' => 'Vakıflar Bankası'],
            ['code' => 'VAKFN', 'name' => 'Vakıf Fin. Kir.'],
            ['code' => 'VAKKO', 'name' => 'Vakko Tekstil'],
            ['code' => 'VANGD', 'name' => 'Vanet Gıda'],
            ['code' => 'VESBE', 'name' => 'Vestel Beyaz Eşya'],
            ['code' => 'VESTL', 'name' => 'Vestel'],
            ['code' => 'VKBYO', 'name' => 'Vakıf B Tipi Yat. Ort.'],
            ['code' => 'VKGYO', 'name' => 'Vakıf Gmyo'],
            ['code' => 'VKING', 'name' => 'Viking Kağıt'],
            ['code' => 'YAPRK', 'name' => 'Yaprak Süt Ve Besi Çift.'],
            ['code' => 'YATAS', 'name' => 'Yataş'],
            ['code' => 'YAZIC', 'name' => 'Yazıcılar Holdıng'],
            ['code' => 'YBTAS', 'name' => 'Yibitaş İnşaat Malzeme'],
            ['code' => 'YESIL', 'name' => 'Yeşil Yatırım Holding'],
            ['code' => 'YGYO', 'name' => 'Yeşil Gmyo'],
            ['code' => 'YKBNK', 'name' => 'Yapı Ve Kredi Bank.'],
            ['code' => 'YKBYO', 'name' => 'Yapı Kredi B Tipi Yat.Ort'],
            ['code' => 'YKGYO', 'name' => 'Yapı Kredi Koray Gmyo'],
            ['code' => 'YKSGR', 'name' => 'Yapı Kredi Sigorta'],
            ['code' => 'YONGA', 'name' => 'Yonga Mobilya'],
            ['code' => 'YUNSA', 'name' => 'Yünsa'],
            ['code' => 'ZOREN', 'name' => 'Zorlu Enerji'],
        ];

        foreach ($data as $companyData) {
            Company::insert($companyData);
        }
    }
}
