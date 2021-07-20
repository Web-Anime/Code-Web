-- phpMyAdmin SQL Dump
-- version 5.1.0
-- https://www.phpmyadmin.net/
--
-- Máy chủ: 127.0.0.1
-- Thời gian đã tạo: Th7 20, 2021 lúc 05:36 AM
-- Phiên bản máy phục vụ: 10.4.18-MariaDB
-- Phiên bản PHP: 8.0.3

SET SQL_MODE = "NO_AUTO_VALUE_ON_ZERO";
START TRANSACTION;
SET time_zone = "+00:00";


/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!40101 SET NAMES utf8mb4 */;

--
-- Cơ sở dữ liệu: `anime`
--

-- --------------------------------------------------------

--
-- Cấu trúc bảng cho bảng `anime`
--

CREATE TABLE `anime` (
  `id` int(255) NOT NULL,
  `danhmuc` varchar(1000) NOT NULL,
  `anh` varchar(1000) NOT NULL,
  `tenanime` varchar(1000) NOT NULL,
  `tenindex` varchar(1000) NOT NULL,
  `mota` varchar(1000) NOT NULL,
  `sotap` varchar(1000) NOT NULL,
  `film` varchar(1000) NOT NULL,
  `trangthai` varchar(1000) NOT NULL,
  `namphathanh` varchar(1000) NOT NULL,
  `luotxem` mediumtext NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Đang đổ dữ liệu cho bảng `anime`
--

INSERT INTO `anime` (`id`, `danhmuc`, `anh`, `tenanime`, `tenindex`, `mota`, `sotap`, `film`, `trangthai`, `namphathanh`, `luotxem`) VALUES
(0, 'hành động', 'Public/image/boku-no-hero-academia-5th-season.jpg', 'BOKU NO HERO ACADEMIA 4TH SEASON', 'BOKU NO HERO ...', 'Thế giới sẽ như thế nào nếu 80% dân số bộc phát những năng lực đặc biệt từ lúc 4 tuổi? Anh hùng và tội phạm sẽ đối đầu với nhau không ngừng nghỉ. Làm anh hùng đồng nghĩa với việc học cách sử dụng năng lực của mình, nhưng ta sẽ học ở đâu? Tất nhiên là chương trình đào tạo anh hùng của A.U rồi! Nhưng sẽ thế nào nếu bạn nằm trong 20% dân số không có năng lực? Izuku Midoriya, một học sinh cấp 2, rất khao khát muốn trở thành anh hùng, nhưng cậu lại không hề có sức mạnh. Không có cơ hội vào được trường đào tạo anh hùng, cuộc đời cậu tưởng như đã kết thúc. Nhưng cuộc gặp gỡ với All Might, anh hùng vĩ đại nhất đã cho cậu cơ hội thay đổi số mệnh của mình…', '25', 'videos/anime/intro.mp4', 'Hoàn Thành', '2019', '1668775'),
(1, 'shounen', 'Public/image/peach-boy-riverside.jpg', 'PEACH BOY RIVERSIDEE', 'PEACH BOY RIVE ...', 'Theo như phiên bản hiện tại của câu chuyện (từ thời Edo), Momotarou xuất hiện từ bên trong một quả đào khổng lồ, quả đào đang trôi dạt trên dòng sông thì tình cờ được một bà lão đang giặt đồ gần đó vớt lên. Gia đình ông bà lão này đã lớn tuổi mà vẫn chưa có con, bà lão đem quả đào về nhà định bụng sẽ ăn cùng ông lão nhưng hai vợ chồng ông bà rất ngạc nhiên khi bổ quả đào ra thì thấy một cậu bé nắm trong đó. Đứa bé nói rằng nó là món quà của ông Trời tặng hai ông bà. Ông bà đặt tên cậu là Momotarou (Đào Thái Lang), với momo nghĩa là trái đào, còn tarou nghĩa là đứa con trai lớn nhất trong nhà… Và câu chuyện dân gian Nhật Bản về người anh hùng đánh quỷ Momotarou ra đời. Nhưng câu chuyện còn nhiều điều hơn thế. Điều gì sẽ xảy ra nếu thay vì chỉ một quả đào khổng lồ, có rất nhiều quả đào như vậy bên cạnh một quả đào trôi nổi đến Nhật Bản. Mãi sau này, Momotarou cuối cùng đã đánh bại được những con quỷ đe dọa ngôi nhà của mình, nhưng vẫn còn nhiều con quỷ hơn được cho là lang thang ở các vù', '3', 'videos/anime/intro.mp4', 'Đang Chiếu', '2021', '15588'),
(2, 'hài hước', 'Public/image/itai-no-wa-iya-nano-de-bougyoryoku-ni-kyokufuri-shitai-to-omoimasu.jpg', 'ITAI NO WA IYA NANO DE BOUGYORYOKU', 'ITAI NO WA IYA ...', 'Câu chuyện tập trung vào nhân vật có tên là Kaede Honjou, cô đã được một người bạn có tên là Risa Shiramine rủ chơi game thực tế ảo MMO cùng. Mặc dù Kaede chả thích game lắm nhưng đằng sau đó là việc cô thực sự, thực sự không thích chịu đau đớn. Cô đã tạo ra một nhân vật có tên là Maple và quyết định đưa toàn điểm của mình vào VIT để giảm thiểu đau đớn. Kết quả là, cô di chuyển chậm “vỡ lòng”, không thể sử dụng phép và thậm chí còn thua cả một con thỏ… Nhưng hóa ra cô lại có một kỹ năng được gọi là “Tuyệt kỹ phòng thân” do kết quả của việc… nạp quá nhiều VIT cũng như “Tuyệt kỹ phản đòn” chống lại các chiêu thức đặc biệt. Giờ đây, với khả năng vô hiệu hóa mọi thiệt hại cho mình, cô đã có thể dễ dàng phiêu lưu…', '12', 'videos/anime/intro.mp4', 'Hoàn Thành', '2020', '1410214'),
(3, 'hành động', 'Public/image/shingeki-no-kyojin-the-final-season4.jpg', 'SHINGEKI NO KYOJIN: THE FINAL SEASON 4', 'SHINGEKI NO KYO...', 'công cuộc xâm lược đẫm máu. Sau rất nhiều những mất mát đau thương, những binh sĩ Trinh Sát Binh Đoàn cuối cùng cũng đã được nhìn thấy tận mắt đại dương vô tận. Liệu rằng tự do có thật sự tồn tại nơi cuối chân trời ở bên đại dương xanh thẳm ấy hay không? Câu chuyện của chàng trai Eren Jeager sẽ kết thúc như thế nào?', '16', 'videos/anime/intro.mp4', 'Đang Chiếu', '2020', '400841'),
(4, 'phiêu lưu', 'Public/image/tatoeba-last-dungeon-mae-no-mura-no-shounen-ga-joban-no-machi-de-kurasu-youna-monogatari.jpg', 'TATOEBA LAST DUNGEON MAE NO MURA NO', 'TATOEBA LAST ...', 'Câu chuyện xoay quanh Lloyd, một nhà thám hiểm “mới vào nghề” với ước mơ khám phá ra sức mạnh thực sự của mình mà cậu từng mơ ước, mặc dù lớn lên cùng những lời châm chọc của hàng xóm luôn coi mình là kẻ yếu kém. Câu chuyện được bắt đầu khi cậu rời khỏi quê hương, tình cờ được đặt chân đến ngay bên cạnh hầm ngục nguy hiểm nhất thế giới! Cậu luôn luôn nghĩ mình là người bất tài, nhưng khi đến thành phố – nơi mệnh danh là thị trấn khởi đầu cho những kẻ có máu phiêu lưu và tham vọng trở thành hải- à nhầm,… Từ đây, sự khác biệt giữa cậu và những người khác đã ngày càng rõ ràng hơn!', '12', 'videos/anime/intro.mp4', 'H', '2021', '115817'),
(5, 'hài hước', 'Public/image/horimiya.jpg', 'HORIMIYA', 'HORIMIYA', 'Mặc dù được ngưỡng mộ ở trường vì sự hòa nhã và năng lực học tập của cô ấy, học sinh trung học Kyouko Hori đã che giấu một khía cạnh khác của cô ấy. Với việc bố mẹ thường xuyên vắng nhà vì công việc, Hori phải chăm sóc em trai và làm việc nhà, không có cơ hội giao lưu khi xa trường.', '13', 'videos/anime/intro.mp4', 'Hoàn Thành', '2021', '192887'),
(6, 'hài hước', 'Public/image/one-piece.jpg', 'ONE PIECE', 'ONE PIECE', 'Vua Vua  Hải Tặc xoay quanh 1 nhóm cướp biển được gọi là Băng Hải tặc Mũ Rơm - Straw Hat Pirates - được thành lập và lãnh đạo bởi thuyền trưởng Monkey D. Luffy. Cậu bé Luffy có ước mơ tìm thấy kho báu vĩ đại nhất của Vua Hải Tặc đời trước Gold D. Roger và trở thành Vua Hải Tặc đời kế tiếp.', '982', 'videos/anime/one-piece.mp4', 'Đang Chiếu', '1999', '11870019'),
(7, 'phép thuật', 'Public/image/black-clover.jpg', 'BLACK CLOVER', 'BLACK CLOVER', 'Aster và Yuno là hai đứa trẻ bị bỏ rơi ở nhà thờ và cùng nhau lớn lên tại đó. Khi còn nhỏ, chúng đã hứa với nhau xem ai sẽ trở thành Ma pháp vương tiếp theo. Thế nhưng, khi cả hai lớn lên, mọi sô chuyện đã thay đổi. Yuno là thiên tài ma pháp với sức mạnh tuyệt đỉnh trong khi Aster lại không thể sử dụng ma pháp và cố gắng bù đắp bằng thể lực. Khi cả hai được nhận sách phép vào tuổi 15, Yuno đã được ban cuốn sách phép cỏ bốn bá (trong khi đa số là cỏ ba lá) mà Aster lại không có cuốn nào. Tuy nhiên, khi Yuno bị đe dọa, sự thật về sức mạnh của Aster đã được giải mã- cậu ta được ban cuốn sách phép cỏ năm lá, cuốn sách phá ma thuật màu đen. Bấy giờ, hai người bạn trẻ đang hướng ra thế giới, cùng chung mục tiêu.', '170', 'videos/anime/intro.mp4', 'Đang Chiếu', '2017', '5682311'),
(8, 'hành động', 'Public/image/dau-la-dai-luc.jpg', 'ĐẤU LA ĐẠI LỤC', 'ĐẤU LA ĐẠI LỤC', 'Mở đầu câu chuyện xuất hiện một nam nhân tên Đường Tam bị Đường Môn truy sát, là tông môn nổi tiếng với các loại cơ quan ám khí nhất là \"Phật nộ đường liên\". Thân là thiên tài ngàn năm có một nhưng vì chỉ có thân phận ngoại môn đồ.\r\nVì chứng minh hắn chưa bao giờ quên cội nguồn nên Đường Tam đã tự sát, không ngờ hắn lại xuyên không trọng sinh vào một đứa trẻ cùng tên trên một nơi kỳ lạ gọi là Đấu La đại lục. Người trên Đấu La đại lục, vũ hồn sẽ Giác Tỉnh lúc sáu tuổi, Vũ hồn chia làm hai loại lớn, một loại là khí vũ hồn, một loại là thú vũ hồn.\r\nĐấu La Đại Lục là câu chuyện về quá trình trưởng thành của Đường Tam tại Đại Lục Đấu La, cùng tình cảm từ thuở thanh mai trúc mã với \"đại tỷ\" Tiểu Vũ đầy bí ẩn, giữa tình thân gia đình, tình thầy trò với Đại sư, giữa các đồng đội trong đội ngũ Sử Lai Khắc, cùng học hỏi lẫn nhau cùng sát cách chiến đấu trong những trận chiến sinh tử cận kề.', '164', 'videos/anime/intro.mp4', 'Đang Chiếu', '2018', '3896532'),
(9, 'isekai', 'Public/image/tensei-shitara-slime-datta-ken-2nd-season.jpg', 'TENSEI SHITARA SLIME DATTA KEN 2ND SEASON', 'TENSEI SHITARA ... ', 'Câu chuyện bắt đầu với anh chàng Satoru Mikami, một nhân viên 37 tuổi sống cuộc sống chán chường và không vui vẻ gì. Trong một lần gặp cướp, anh đã bị mất mạng. Tưởng chừng cuộc sống chán ngắt ấy đã kết thúc, nhưng không! Ấy lại chính là sự khởi đầu của một cuộc sống mới. Mikami thức dậy, thấy mình đang ở trong một thế giới kì lạ. Và điều quái dị là anh không còn hình dạng người nữa, mà anh đã trở thành quái vật slime dẻo quẹo và không có mắt. Khi dần quen với hình dáng mới này, anh bắt đầu khám phá thế giới cùng với những quái vật khác, và công cuộc thay đổi thế giới mới đã bắt đầu.', '14', 'videos/anime/intro.mp4', 'Đang Chiếu', '2021', '299671'),
(10, 'isekai', 'Public/image/seirei-gensouki.jpg', 'SEIREI GENSOUKI', 'SEIREI GENSOUKI', 'Amakawa Haruto là một thanh niên đã chết trước khi đoàn tụ với người bạn thời thơ ấu đã biến mất cách đây 5 năm. Rio là một cậu bé sống trong khu ổ chuột muốn trả thù cho người mẹ đã bị sát hại ngay trước mặt cậu khi cậu mới 5 tuổi.\r\nTrái đất và thế giới khác. Hai người với xuất thân và giá trị hoàn toàn khác nhau. Vì lý do nào đó, ký ức và tính cách của Haruto, người đáng lẽ đã chết lại hồi sinh trong cơ thể của Rio. Khi cả hai bối rối về trí nhớ và tính cách của họ hợp nhất với nhau, Rio quyết định sống trong thế giới mới này.\r\nCùng với ký ức của Haruto, Rio đánh thức một \"sức mạnh đặc biệt\" chưa từng được biết đến, và có vẻ như nếu sử dụng nó tốt, cậu có thể sống một cuộc sống tốt đẹp hơn. Nhưng trước đó, Rio gặp phải một vụ bắt cóc hóa ra là của một công chúa của Vương quốc Bertram mà anh đang sống.\r\nSau khi cứu công chúa, Rio được nhận học bổng tại Học viện Hoàng gia, ngôi trường dành cho những người giàu có và quyền lực. Là một đứa trẻ mồ côi nghèo khổ trong một ngôi trường quý t', '2', 'videos/anime/intro.mp4', 'Đang Chiếu', '2021', '25026'),
(11, 'hành động', 'Public/image/naruto-shippuuden.jpg', 'NARUTO: SHIPPUUDEN', 'NARUTO: SHPPU ...', '12 năm trước, hồ ly 9 đuôi tấn công làng ninja Mộc Diệp, Hokage Đệ Tứ đã đánh bại và phong ấn vào cậu bé Naruto.Từ đó, Naruto bị mọi người xa lánh, vậy nên cậu tìm ra cách được thừa nhận và chú ý duy nhất – qua các trò phá phách và nghịch ngợm.Câu chuyện chính bám theo sự trưởng thành và tiến bộ của Naruto và bạn cậu khi làm ninja, và nhấn mạnh mối quan hệ giữa họ và sự ảnh hưởng của quá khứ đến tính cách họ. Naruto tìm được hai người bạn đồng hành cùng là Uchiha Sasuke và Haruno Sakura, cuộc phiêu lưu bắt đầu.', '500', 'videos/anime/intro.mp4', 'Đang Chiếu', '2007', '2211822'),
(12, 'hành động', 'Public/image/deatte-5-byou-de-battle.jpg', 'DEATTE 5-BYOU DE BATTLE', 'DEATTE 5-BYOU ...', 'Một ngày nọ, cậu học sinh cao trung mê game, cuồng kẹo Shiroyanagi Akira bị kéo vào một trận chiến bởi một cô gái bí ẩn tự xưng là Mion. Những người tham gia được thông báo rằng họ đã \"bị xóa tên khỏi hộ khẩu gia đình, tham gia vào một thí nghiệm và được ban sức mạnh đặc biệt.\"Akira quyết tâm chiến thắng trò chơi bằng sức mạnh mới và trí tuệ của mình để hủy diệt tổ chức đứng đằng sau nó.', '1', 'videos/anime/intro.mp4', 'Đang Chiếu', '2021', '3913'),
(13, 'hành động', 'Public/image/linh-kiem-ton.jpg', 'LINH KIẾM TÔN', 'LINH KIẾM TÔN', 'Cường giả bị tập kích, phản lão hoàn đồng, trở thành thiếu chủ phế vật. Kẻ thù từ đời trước kiếp này, quyết không bỏ qua. Sai lầm kiếp trước, kiếp này quyết tâm bù đắp. Linh Kiếm trường khiếu, thiên địa tam giới, ngã vi chí tôn!', '192', 'videos/anime/intro.mp4', 'Đang Chiếu', '2019', '1219883'),
(14, 'hành động', 'Public/image/detective-conan.jpg', 'THÁM TỬ LỪNG DANH CONAN', 'THÁM TỬ LỪNG ...', 'Mở đầu câu truyện, cậu học sinh trung học 17 tuổi Shinichi Kudo bị biến thành cậu bé Conan Edogawa. Shinichi trong phần đầu của Thám tử lừng danh Conan được miêu tả là một thám tử học đường xuất sắc. Trong một lần đi chơi công viên \"Miền Nhiệt đới\" với cô bạn từ thuở nhỏ Ran Mori, cậu tình cờ chứng kiến vụ một án giết người, Kishida - một hành khách trong trò chơi Chuyến tàu tốc hành đã bị giết một cách dã man. Cậu đã giúp cảnh sát làm sáng tỏ vụ án. Trên đường về nhà, cậu vô tình phát hiện một vụ làm ăn mờ ám của những người đàn ông mặc toàn đồ đen. Khi chúng phát hiện ra cậu, Shinichi đã bị đánh ngất đi. Sau đó những người đàn ông áo đen đó đã cho cậu uống một thứ thuốc độc chưa qua thử nghiệm là Apotoxin-4869 (APTX 4869) với mục đích thủ tiêu cậu. Tuy nhiên chất độc đã không giết chết Kudo.    Khi tỉnh lại, cậu bàng hoàng nhận thấy mình đã bị teo nhỏ lại thành hình dạng của một cậu học sinh tiểu học. Theo lời khuyên của Tiến sĩ Hiroshi Agasa, Shinichi đã che giấu tung tích, để tránh', '1010', 'videos/anime/intro.mp4', 'Đang Chiếu', '1996', '1668621'),
(15, 'hài hước', 'Public/image/the-amazing-world-of-gumball-season-6.jpg', 'THE AMAZING WORLD OF GUMBALL', 'THE AMAZING ...\r\n', 'The Amazing World of Gumball là bộ phim hoạt hình được sản xuất bởi sự hợp tác của Anh và Mỹ và bộ phim được trình chiếu trên kênh Cartoon Network.', '44', 'User/videos/anime/intro.mp4', 'Đang Chiếu', '2018', '1702843'),
(16, 'hành động', 'Public/image/boruto-naruto-next-generations.jpg', 'BORUTO: NARUTO NEXT GENERATIONS', 'BORUTO: NARU ...\r\n', 'Naruto đã đạt ước nguyện của mình trở thành Hokaghe và kết hôn cùng Hinata sau đó có 2 đứa con Tên là Boruto và Himawari thế là Một thế hệ mới của Ninja đã sẵn sàng để có những giai đoạn mới nối tiếp Phần thứ 2 Naruto Shippuuden', '207', 'videos/anime/intro.mp4', 'Đang Chiếu', '2017', '1810199'),
(17, 'phiêu lưu', 'Public/image/dr-stone-stone-wars.jpg', 'DR. STONE: STONE WARS', 'DR. STONE: STO...', 'Vào một ngày định mệnh, toàn thể nhân loại đã bị hoá thành đá bởi một tia sáng kì lạ. Nhiều thiên niên kỷ trôi qua, cậu học sinh trung học Taiju đã thức tỉnh, đập vỡ lớp đá kia và bước ra khỏi thế giới bên ngoài. Trước mắt cậu là hàng loạt những pho tượng đá của nhiều người. Tuy nhiên, cậu không một mình. Trước mắt cậu, anh bạn Senku yêu khoa học đột nhiên xuất hiện và cậu ta có một kế hoạch vĩ đại trong đầu – Khôi phục lại nền văn mình nhân loại bằng khoa học.', '11', 'videos/anime/intro.mp4', 'Đang Chiếu', '2021', '174836'),
(18, 'isekai', 'Public/image/kumo-desu-ga-nani-ka.jpg', 'KUMO DESU GA, NANI KA', 'KUMO DESU GA ...', 'Ngày nọ, một cô nữ sinh cấp ba ngồi trong lớp học cùng những học sinh khác và giáo viên, đột ngột cả lớp bị cuộc chiến giữa Anh Hùng và Quỷ Vương ảnh hưởng khiến ai nấy đều chết. Linh hồn họ được chuyển về thế giới của Anh Hùng và Quỷ Vương, ai nấy đều sống một cuộc đời mới. Đối với cô gái, khi tỉnh dậy, cô được chuyển sinh sang thế giới khác, cô thấy mình nằm giữa một hang động rộng lớn và bản thân cô đã tái sinh thành một con nhện. Suốt hành trình ra khỏi hang ngục, băng qua đại mê cung, cô gái cố gắng sinh tồn khỏi những con quái vật và học nhiều kĩ năng để đánh bại chúng, cũng như để khám phá sự thật về thế giới này.', '24', 'videos/anime/intro.mp4', 'Hoàn Thành', '2021', '375099'),
(19, 'harem', 'Public/image/ore-dake-haireru-kakushi-dungeon.jpg', 'ORE DAKE HAIRERU KAKUSHI DUNGEON', 'ORE DAKE HAIRE ...', 'Nor là con trai của một quý tộc nhỏ với rất ít tên tuổi ngoài việc đã có cơ hội có việc làm nhưng vào hôm trước ngày đầu tiên đi làm, cậu đã bị hủy việc. Cậu sở hữu một đặc điểm hiếm có: khả năng phép thuật để tham khảo ý kiến từ các nhà hiền triết vĩ đại. Khi sử dụng khả năng này thì cậu phải chịu chứng đau đầu khủng khiếp! Không chắc chắn những gì mà tương lai mình nắm giữ, cậu đã liên hệ với các nhà hiền triết để được tư vấn về cách di chuyển trong tương lai và hướng đến một hầm ngục bí ẩn, nơi đó chứa đầy thú hiếm và vật phẩm ma thuật. Chính tại đây, Nor sẽ được đào tạo, tổng hợp kinh nghiệm và sự “Dubai” cho đến khi đủ mạnh để thay đổi số phận.', '12', 'videos/anime/intro.mp4', 'Hoàn Thành', '2021', '165043'),
(20, 'isekai', 'Public/image/rezero-kara-hajimeru-isekai-seikatsu-2nd-season.jpg', 'RE:ZERO KARA HAJIMERU ISEKAI SEIKATSU', 'RE:ZERO SS2 ', 'Trong phim Subaru Natsuki là một học sinh Trung học bình thường, cậu bị triệu hồi đến một thế giới khác và được cứu bởi một cô gái xinh đẹp. Cậu quyết định ở lại trả ơn cho cô ấy, nhưng không đơn giản như vẻ ngoài của nó. Hai người bị kẻ thù tấn công và họ đã chết. Nhưng chính lúc này cậu lại phát hiện ra khả năng đặc biệt của mình là quay ngược thời gian, tạm gọi là “ Hối Sinh “ về thời điểm mà cậu bắt đầu đến thế giới này nhưng chỉ có một mình cậu nhớ những gì đã xảy ra…. Cậu sẽ làm gì? Hãy cùng đón xem. Mùa thứ 2 của anime Re:Zero kara Hajimeru Isekai Seikatsu', '25', 'videos/anime/intro.mp4', 'Hoàn Thành', '2020', '922357'),
(21, 'hành động', 'Public/image/jujutsu-kaisen-tv1.jpg', 'JUJUTSU KAISEN', 'JUJUTSU KAISEN', 'Vì một lý do kỳ lạ nào đó, Yuji Itadori, mặc dù với thể chất hoàn hảo nhưng anh lại đâm đầu vào tham gia CLB Huyền Bí. Tuy nhiên, họ đã sớm phát hiện ra là những câu chuyện huyền bí hoàn toàn có thật khi các thành viên trong CLB lần lượt bị tấn công! Trong khi đó, Megumi Fushiguro “bí ẩn” lại đang truy tìm một đối tượng bị nguyền rủa cấp đặc biệt và cuộc tìm kiếm này đã đưa nhóm bạn đến Itadori…', '24', 'videos/anime/intro.mp4', 'Hoàn Thành', '2020', '1601975'),
(22, 'hài hước', 'Public/image/pokemon.jpg', 'POKEMON', 'POKEMON', 'Satoshi lại cùng Pikachu bước sang một vùng đất mới để xoa dịu tâm hồn sau khi thua Liên đoàn (nói chung là cũng lại y chang mấy lần trước thôi :v ). Lần này, anh sang vùng Alola vốn là mấy hòn đảo nhiệt đới, quyết chí trở thành Pokemon Master bằng mọi giá, đến độ ghi danh nhập học vào Trường Pokemon, điều mà đáng lẽ một thằng nhóc 10 tuổi như anh phải làm từ lâu rồi :v. Tại đây, anh gặp nhiều bạn bè mới, các Pokemon mới với những loài Pokemon cũ nhưng mang hình thái hoàn toàn khác biệt. Nói chung là qua Alola xong thấy ở đây sướng quá, gái nơi đây cũng xinh nên là anh quyết định ở lại để gây dựng harem... ý lộn, để phấn đấu trở thành Pokemon Master :v :v Thôi, nói chung là cứ theo dõi phim là sẽ biết anh có làm được không ấy mà :v', '1163', 'videos/anime/intro.mp4', 'Đang Chiếu', '1997', '1581044'),
(23, '', 'Public/image/tensei-shitara-slime-datta-ken.jpg', 'TENSEI SHITARA SLIME DATTA KEN', 'TENSEI SHITARA ...', 'Câu chuyện bắt đầu với anh chàng Satoru Mikami, một nhân viên 37 tuổi sống cuộc sống chán chường và không vui vẻ gì. Trong một lần gặp cướp, anh đã bị mất mạng. Tưởng chừng cuộc sống chán ngắt ấy đã kết thúc, nhưng không! Ấy lại chính là sự khởi đầu của một cuộc sống mới. Mikami thức dậy, thấy mình đang ở trong một thế giới kì lạ. Và điều quái dị là anh không còn hình dạng người nữa, mà anh đã trở thành quái vật slime dẻo quẹo và không có mắt. Khi dần quen với hình dáng mới này, anh bắt đầu khám phá thế giới cùng với những quái vật khác, và công cuộc thay đổi thế giới mới đã bắt đầu.', '25', 'videos/anime/intro.mp4', 'Hoàn Thành', '2018', '1397857');

-- --------------------------------------------------------

--
-- Cấu trúc bảng cho bảng `blog`
--

CREATE TABLE `blog` (
  `id` int(255) NOT NULL,
  `anh` varchar(1000) NOT NULL,
  `tenblog` varchar(1000) NOT NULL,
  `mota` text NOT NULL,
  `motaindex` varchar(1000) NOT NULL,
  `loaiblog` varchar(1000) NOT NULL,
  `ngaydang` datetime NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Đang đổ dữ liệu cho bảng `blog`
--

INSERT INTO `blog` (`id`, `anh`, `tenblog`, `mota`, `motaindex`, `loaiblog`, `ngaydang`) VALUES
(1, 'Public/blog/sieu-pham-anime-vinland-saga-chinh-thuc-co-season-2.jpg', 'Siêu phẩm anime Vinland Saga chính thức có Season 2', 'Vừa qua, nhà sản xuất cho anime Vinland Saga (một trong những anime hay nhất năm 2019) đã thông báo rằng bộ phim này sẽ có mùa thứ hai. Đạo diễn Shūhei Yabuta và nhà thiết kế nhân vật Takahiko Abiru sẽ quay trở lại thực hiện dự án anime Vinland Saga season 2 này.\r\nYukimura ra mắt bộ truyện trên Tuần san Shōnen của Kodansha vào năm 2005, nhưng Kodansha đã chuyển bộ truyện sang tạp chí Afternoon vào cuối năm đó. Yukimura bắt đầu vẽ phần thứ tư và phần cuối cùng của manga vào tháng 11 năm 2019. Bộ truyện đã có hơn 5,5 triệu bản được lưu hành. Mùa đầu tiên của phim được phát sóng vào tháng 7 năm 2019.', 'Vừa qua, nhà sản xuất cho anime Vinland Saga (một trong những anime hay nhất năm 2019) đã thông báo...', 'tinanime', '2021-07-10 14:47:57'),
(2, 'Public/blog/bo-truyen-tranh-mou-ippon-duoc-chuyen-the-thanh-anime.jpg', 'Bộ truyện tranh Mou Ippon! được chuyển thể thành anime', 'Mới đây, Số 32 Tuần san Shōnen Champion đã thông báo rằng bộ truyện tranh Mou Ippon! của Yu Muraoka sẽ được chuyển thể thành TV Anime. Muraoka ra mắt manga Mou Ippon! trên Tuần san Shōnen Champion vào tháng 10 năm 2018.', 'Mới đây, Số 32 Tuần san Shōnen Champion đã thông báo rằng bộ truyện tranh Mou Ippon! của Yu Muraoka...', 'tinanime', '2021-07-10 15:10:43'),
(6, 'Public/image/anime-the-rising-of-the-shield-hero-2-bi-lui-lich-phat-song-sang-nam-2022.jpg', 'Anime The Rising of the Shield Hero 2 bị lùi lịch phát sóng sang năm 2022', 'Vừa qua, trang web chính thức cho anime The Rising of the Shield Hero 2 – mùa thứ hai của serie The Rising of the Shield Hero đã thông báo rằng ngày công chiếu của anime bị dời lại đến tháng 4 năm 2022. Ban đầu anime The Rising of the Shield Hero 2 được dự kiến sẽ công chiếu vào tháng 10 năm 2021. Anime Tate no Yuusha no Nariagari Season 2 sẽ có một số thay đổi về mặt nhân sự. Cụ thể như sau: Masato Jinbo (Chaos;Child, Fate/kaleid liner Prisma Illya 2wei Herz!) sẽ chỉ đạo sản xuất mùa thứ hai thay cho Takao Abo. Keigo Koyanagi (Regalia: The Three Sacred Stars) phụ trách chuyển tác. Masahiro Suwa (Chaika the Coffin Princess) chuyển thể hình ảnh thiết kế nhân vật gốc của Seira Minami thành hoạt hình. Kevin Penkin sẽ quay trở lại để sáng tác âm nhạc. Bộ truyện được sáng tác bởi nhà văn Aneko Yusagi và vẽ minh họa bởi Minami Seira. Tính đến nay, bộ truyện đã xuất bản được 17 tập và MF Books vừa phát hành tập 17 của bộ truyện vào ngày 25 tháng 3 năm 2017 vừa qua. Ngoài ra, bộ truyện cũng đã được chuyển thể thành Manga bởi họa sĩ Kyū. Bộ truyện tranh Tate no Yuusha no Nariagari được ra mắt năm 2014 trên Nguyệt San Comic Flapper. Mùa đầu tiên của phim gồm 25 tập được phát sóng từ tháng 1 năm 2019.', 'Vừa qua, trang web chính thức cho anime The Rising of the Shield Hero 2 - mùa thứ hai của...', 'tinanime', '2021-10-07 00:00:00');

-- --------------------------------------------------------

--
-- Cấu trúc bảng cho bảng `khachhang`
--

CREATE TABLE `khachhang` (
  `username` varchar(1000) NOT NULL,
  `password` varchar(1000) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Đang đổ dữ liệu cho bảng `khachhang`
--

INSERT INTO `khachhang` (`username`, `password`) VALUES
('admin', 'admin');

-- --------------------------------------------------------

--
-- Cấu trúc bảng cho bảng `licchieu`
--

CREATE TABLE `licchieu` (
  `id` int(11) NOT NULL,
  `lichchieu` varchar(1000) NOT NULL,
  `anh` text NOT NULL,
  `tenanime` varchar(1000) NOT NULL,
  `thoigianchieu` time NOT NULL,
  `ngaychieu` date NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8;

--
-- Đang đổ dữ liệu cho bảng `licchieu`
--

INSERT INTO `licchieu` (`id`, `lichchieu`, `anh`, `tenanime`, `thoigianchieu`, `ngaychieu`) VALUES
(1, 'thu2', 'Public/image/one-piece.jpg', 'Garo: cánh hoa ma giớ', '13:20:24', '2021-07-18'),
(2, 'thu4', 'Public/image/one-piece.jpg', 'Garo: Thương Khốc Ma Long', '13:27:17', '2021-07-18'),
(3, 'thu6', 'Public/image/one-piece.jpg', 'Garo: Cơn bão hoàng kim', '13:30:04', '2021-07-18'),
(4, 'thu2', '	Public/image/one-piece.jpg', 'Attack on titan season 1', '13:35:51', '2021-07-18'),
(5, 'thu2', '	Public/image/one-piece.jpg', 'Attack on titan season 2', '13:35:51', '2021-07-18'),
(6, 'thu2', 'Public/image/one-piece.jpg', 'Doraemon: Nobita no Little Star Wars 2021', '13:41:01', '2021-07-18'),
(7, 'thu3', 'Public/image/one-piece.jpg', 'Dragon ball Super', '13:41:28', '2021-07-18'),
(8, 'thu3', 'Public/image/one-piece.jpg', 'Dragon Ball Z', '13:41:28', '2021-07-18'),
(9, 'thu3', 'Public/image/one-piece.jpg', 'Attack on titan ss3', '13:42:47', '2021-07-18'),
(10, 'thu3', 'Public/image/one-piece.jpg', 'Attack on titan ss4', '13:42:47', '2021-07-18'),
(11, 'thu4', 'Public/image/one-piece.jpg', 'Garo: Huyết Long', '13:44:15', '2021-07-18'),
(12, 'thu4', 'Public/image/one-piece.jpg', 'Garo: Hắc ám kị sĩ Kiba', '13:44:15', '2021-07-18'),
(13, 'thu5', 'Public/image/one-piece.jpg', 'Garo: Kami no Kiba', '13:45:52', '2021-07-18'),
(14, 'thu5', 'Public/image/one-piece.jpg', 'Garo: Vesus Road', '13:45:52', '2021-07-18'),
(15, 'thu5', 'Public/image/one-piece.jpg', 'Doraemon: Chú khủng long của Nobita', '13:46:59', '2021-07-18'),
(16, 'thu5', 'Public/image/one-piece.jpg', 'Doraemon: Lạc vào xứ Quỷ', '13:46:59', '2021-07-18'),
(19, 'thu4', 'Public/image/one-piece.jpg', 'Doraemon: Truyền thuyết người khổng lồ xanh', '13:50:50', '2021-07-18'),
(20, 'thu6', 'Public/image/one-piece.jpg', 'Doraemon: Nước Nhật thời nguyên thủy', '13:50:50', '2021-07-18'),
(21, 'thu7', 'Public/image/one-piece.jpg', 'Umayon', '13:52:47', '2021-07-18'),
(22, 'thu7', 'Public/image/one-piece.jpg', 'Yami Shibai 9', '13:52:47', '2021-07-18'),
(23, 'thu7', 'Public/image/one-piece.jpg', 'Otome Game no Hametsu Flag shika Nai Akuyaku Reijou ni Tensei shiteshimatta', '13:54:42', '2021-07-18'),
(24, 'thu7', 'Public/image/one-piece.jpg', 'Genjitsu Shugi Yuusha no Oukoku Saikenki', '13:54:42', '2021-07-18'),
(25, 'thu6', 'Public/image/one-piece.jpg', 'Fumetsu no Anata e', '13:55:58', '2021-07-18'),
(26, 'cn', 'Public/image/one-piece.jpg', 'Super Cup', '13:55:58', '2021-07-18'),
(27, 'cn', 'Public/image/one-piece.jpg', 'Tokyo Revengers', '13:57:32', '2021-07-18'),
(28, 'cn', 'Public/image/one-piece.jpg', 'Lover live! Superstar!!', '13:57:32', '2021-07-18'),
(31, 'thu6', 'Public/image/one-piece.jpg', 'Dragon ball GT', '00:00:00', '0000-00-00'),
(34, 'thu2', 'Public/image/one-piece.jpg', 'Garo: cánh hoa ma giớ', '09:03:10', '2021-07-25');

-- --------------------------------------------------------

--
-- Cấu trúc bảng cho bảng `lienhe`
--

CREATE TABLE `lienhe` (
  `id` int(255) NOT NULL,
  `hoten` varchar(1000) NOT NULL,
  `sdt` varchar(1000) NOT NULL,
  `email` varchar(1000) NOT NULL,
  `loinhan` text NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Đang đổ dữ liệu cho bảng `lienhe`
--

INSERT INTO `lienhe` (`id`, `hoten`, `sdt`, `email`, `loinhan`) VALUES
(2, 'ANH', '0664665656', 'anh@gmail.com', 'sdfjsjfbjsdfbjndjanfajnfoqcnhdoaiwudjiwandhaocuwhfduaeifhduahdaoivwhdawoi');

-- --------------------------------------------------------

--
-- Cấu trúc bảng cho bảng `topnam`
--

CREATE TABLE `topnam` (
  `id` int(100) NOT NULL,
  `anh` varchar(1000) NOT NULL,
  `tenanime` varchar(1000) NOT NULL,
  `mota` varchar(1000) NOT NULL,
  `luotxem` varchar(1000) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Đang đổ dữ liệu cho bảng `topnam`
--

INSERT INTO `topnam` (`id`, `anh`, `tenanime`, `mota`, `luotxem`) VALUES
(1, 'Public/image/one-piece.jpg', 'ONE PIECE', 'Vua Hải Tặc, Đảo Hải Tặc, Vua hải tặc luffy', '156,722'),
(2, 'Public/image/kaifuku-jutsushi-no-yarinaoshi.jpg', 'Kaifuku Jutsushi no Yarinaoshi', 'Redo of Healer, Kaiyari', '119,206'),
(3, 'Public/image/jujutsu-kaisen-tv1.jpg', 'Jujutsu Kaisen (TV)', 'Sorcery Fight', '108,421'),
(4, 'Public/image/black-clover.jpg', 'Black Clover', 'Thế Giới Phép Thuật', '104,086'),
(5, 'Public/image/tensei-shitara-slime-datta-ken-2nd-season.jpg', 'Tensei shitara Slime Datta Ken 2nd Season', 'That Time I Got Reincarnated as a Slime Season 2, Tensura 2,Lúc đó tôi đã chuyển...', '83,272'),
(6, 'Public/image/mushoku-tensei-isekai-ittara-honki-dasu.jpg', 'Mushoku Tensei: Isekai Ittara Honki Dasu', 'Mushoku Tensei: Jobless Reincarnation,, Thất nghiệp chuyển sinh- Sang thế giới khá...', '80,467'),
(7, 'Public/image/shingeki-no-kyojin-the-final-season.jpg', 'Shingeki no Kyojin: The Final Season', 'Attack on Titan Final Season, Shingeki no Kyojin Season 4', '73,542'),
(8, 'Public/image/dau-la-dai-luc.jpg', 'Đấu La Đại Lục', 'Douluo Dalu, Combat Continent, Soul Land,', '60,590'),
(9, 'Public/image/tatoeba-last-dungeon-mae-no-mura-no-shounen-ga-joban-no-machi-de-kurasu-youna-monogatari.jpg', 'Tatoeba Last Dungeon Mae no Mura no Shounen ga Joban no Machi de Kurasu Youna Monogatari', 'Suppose a Kid from the Last Dungeon Boonies moved to a starter town?', '52,493'),
(10, 'Public/image/horimiya.jpg', 'Horimiya', 'ホリミヤ', '46,697'),
(11, 'Public/image/dr-stone-stone-wars.jpg', 'Dr. Stone: Stone Wars', 'Dr. Stone 2nd Season, Dr. Stone Second Season, Hồi Sinh Thế Giới Phần 2, Tiến S', '45,374'),
(12, 'Public/image/ore-dake-haireru-kakushi-dungeon.jpg', 'Ore dake Haireru Kakushi Dungeon', 'The Hidden Dungeon Only I Can Enter, Special training in the Secret Dungeon', '44,830'),
(13, 'Public/image/kumo-desu-ga-nani-ka.jpg', 'Kumo desu ga, Nani ka', 'So I\'m a Spider, So What?', '43,371'),
(14, 'Public/image/rezero-kara-hajimeru-isekai-seikatsu-2nd-season.jpg', 'Re:Zero kara Hajimeru Isekai Seikatsu 2nd Season', 'Re: Life in a different world from zero 2nd Season, ReZero 2nd Season, Re:Zero - St', '37,321'),
(15, 'Public/image/nanatsu-no-taizai-fundo-no-shinpan.jpg', 'Nanatsu no Taizai: Fundo no Shinpan', 'The Seven Deadly Sins: Dragon\'s Judgement, The Seven Deadly Sins: Judgement ', '36,240'),
(16, 'Public/image/attack-on-titan-season-3.jpg', 'Shingeki no Kyojin Season 3', 'Attack on Titan Season 3', '33,947'),
(17, 'Public/image/gotoubun-no-hanayome-2nd-season.jpg', 'Gotoubun no Hanayome ∬', '5-toubun no Hanayome ∬, The Five Wedded Brides 2nd Season', '33,387'),
(18, 'Public/image/kemono-jihen.jpg', 'Kemono Jihen', 'Văn phòng thám tử quái vật', '30,634'),
(19, 'Public/image/pokemon.jpg', 'Pokemon', 'Pokemon Full', '26,283'),
(20, 'Public/image/jimihen-jimiko-wo-kaechau-jun-isei-kouyuu.jpg', 'Jimihen!!: Jimiko wo Kaechau Jun Isei Kouyuu!!', 'Jimihen!!: Pure Heterosexual Exchange That Changes a Reserved Girl', '26,000');

-- --------------------------------------------------------

--
-- Cấu trúc bảng cho bảng `topngay`
--

CREATE TABLE `topngay` (
  `id` int(100) NOT NULL,
  `anh` varchar(1000) NOT NULL,
  `tenanime` varchar(1000) NOT NULL,
  `mota` varchar(1000) NOT NULL,
  `luotxem` varchar(1000) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Đang đổ dữ liệu cho bảng `topngay`
--

INSERT INTO `topngay` (`id`, `anh`, `tenanime`, `mota`, `luotxem`) VALUES
(1, 'Public/image/one-piece.jpg', 'ONE PIECE', 'Vua Hải Tặc, Đảo Hải Tặc, Vua hải tặc luffy', '5,223'),
(2, 'Public/image/genjitsu-shugi-yuusha-no-oukoku-saikenki.jpg', 'Genjitsu Shugi Yuusha no Oukoku Saikenki', 'How a Realist Hero Rebuilt the Kingdom, Re:Construction the Elfrieden Kingdom', '5,220\r\n'),
(3, 'Public/image/boku-no-hero-academia-5th-season.jpg', 'Boku no Hero Academia 5th Season', 'My Hero Academia 5, Học viên siêu anh hùng phần 5', '2,195\r\n'),
(4, 'Public/image/mahouka-koukou-no-yuutousei.jpg', 'Mahouka Koukou no Yuutousei', 'The Honor Student at Magic High School, The Honor at Magic High School', '1,646\r\n'),
(5, 'Public/image/dau-pha-thuong-khung-phan-4.jpg', 'Đấu Phá Thương Khung Phần 4', 'Fights Break Sphere 4', '1,595\r\n'),
(6, 'Public/image/tokyo-revengers.jpg', 'Tokyo Revengers', 'Tokyo Revengers', '1,412\r\n'),
(7, 'Public/image/mairimashita-iruma-kun-2nd-season.jpg', 'Mairimashita! Iruma-kun 2nd Season', 'Welcome to Demon School! Iruma-kun 2nd Season', '1,279\r\n'),
(8, 'Public/image/bokutachi-no-remake.jpg', 'Bokutachi no Remake', 'Remake our Life!, Bokurema, cơ hội thứ 2', '1,143\r\n'),
(9, 'Public/image/dau-la-dai-luc.jpg', 'Đấu La Đại Lục', 'Douluo Dalu, Combat Continent, Soul Land,', '1,140\r\n'),
(10, 'Public/image/black-clover.jpg', 'Black Clover', 'Thế Giới Phép Thuật', '1,045\r\n'),
(11, 'Public/image/dcide-traumerei-the-animation.jpg', 'D_Cide Traumerei The Animation', 'D_Cide Traumerei', '1,034\r\n'),
(12, 'Public/image/kumo-desu-ga-nani-ka.jpg', 'Kumo desu ga, Nani ka', 'So I\'m a Spider, So What?', '932\r\n'),
(13, 'Public/image/nguyen-long.jpg', 'Nguyên Long', 'Yuan Long', '726\r\n'),
(14, 'Public/image/edens-zero.jpg', 'Edens Zero', 'Edens Zero', '719\r\n'),
(15, 'Public/image/mahouka-koukou-no-rettousei.jpg', 'Mahouka Koukou no Rettousei', 'The Irregular at Magic High School', '692\r\n'),
(16, 'Public/image/tate-no-yuusha-no-nariagari.jpg', 'Tate no Yuusha no Nariagari', 'The Rising of the Shield Hero , Sự trỗi dậy của Khiên Dũng Sĩ', '655\r\n'),
(17, 'Public/image/naruto-shippuuden.jpg', 'Naruto: Shippuuden', 'Naruto Hurricane Chronicles, Naruto: Sức Mạnh Vĩ Thú | Naruto Phần 2', '632 '),
(18, 'Public/image/detective-conan.jpg', 'Thám Tử Lừng Danh Conan', 'Detective Conan | Meitantei Conan | 名探偵コナン', '609'),
(19, 'Public/image/the-amazing-world-of-gumball-season-6.jpg', 'The Amazing World Of Gumball: Season 6', 'The Amazing World of Gumball Phần 6', '600'),
(20, 'Public/image/re-main.jpg', 'Re-Main', 'Làm lại từ đầu', '501');

-- --------------------------------------------------------

--
-- Cấu trúc bảng cho bảng `topthang`
--

CREATE TABLE `topthang` (
  `id` int(100) NOT NULL,
  `anh` varchar(1000) NOT NULL,
  `tenanime` varchar(1000) NOT NULL,
  `mota` varchar(1000) NOT NULL,
  `luotxem` varchar(1000) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Đang đổ dữ liệu cho bảng `topthang`
--

INSERT INTO `topthang` (`id`, `anh`, `tenanime`, `mota`, `luotxem`) VALUES
(1, 'Public/image/one-piece.jpg', 'ONE PIECE', 'Vua Hải Tặc, Đảo Hải Tặc, Vua hải tặc luffy', '59,641\r\n'),
(2, 'Public/image/kumo-desu-ga-nani-ka.jpg', 'Kumo desu ga, Nani ka', 'So I\'m a Spider, So What?', '34,530\r\n'),
(3, 'Public/image/dau-la-dai-luc.jpg', 'Đấu La Đại Lục', 'Douluo Dalu, Combat Continent, Soul Land,', '20,569\r\n'),
(4, 'Public/image/black-clover.jpg', 'Black Clover', 'Thế Giới Phép Thuật', '19,088\r\n'),
(5, 'Public/image/tensei-shitara-slime-datta-ken-2nd-season.jpg', 'Tensei shitara Slime Datta Ken 2nd Season', 'That Time I Got Reincarnated as a Slime Season 2, Tensura 2,Lúc đó tôi đã chuyển...', '15,555\r\n'),
(6, 'Public/image/genjitsu-shugi-yuusha-no-oukoku-saikenki.jpg', 'Genjitsu Shugi Yuusha no Oukoku Saikenki', 'How a Realist Hero Rebuilt the Kingdom, Re:Construction the Elfrieden Kingdom', '13,830\r\n'),
(7, 'Public/image/detective-conan.jpg', 'Thám Tử Lừng Danh Conan', 'Detective Conan | Meitantei Conan | 名探偵コナン', '13,434\r\n'),
(8, 'Public/image/the-amazing-world-of-gumball-season-6.jpg', 'The Amazing World Of Gumball: Season 6', 'The Amazing World of Gumball Phần 6', '13,334'),
(9, 'Public/image/jujutsu-kaisen-tv1.jpg', 'Jujutsu Kaisen (TV)', 'Sorcery Fight', '12,941'),
(10, 'Public/image/naruto-shippuuden.jpg', 'Naruto: Shippuuden', 'Naruto Hurricane Chronicles, Naruto: Sức Mạnh Vĩ Thú | Naruto Phần 2', '12,440'),
(11, 'Public/image/nguyen-long.jpg', 'Nguyên Long', 'Yuan Long', '11,061'),
(12, 'Public/image/mairimashita-iruma-kun-2nd-season.jpg', 'Mairimashita! Iruma-kun 2nd Season', 'Welcome to Demon School! Iruma-kun 2nd Season', '9,880'),
(13, 'Public/image/peach-boy-riverside.jpg', 'Peach Boy Riverside', 'Peach Boy Riverside', '9,623'),
(14, 'Public/image/dau-pha-thuong-khung-phan-4.jpg', 'Đấu Phá Thương Khung Phần 4', 'Fights Break Sphere 4', '9,391'),
(15, 'Public/image/seirei-gensouki.jpg', 'Seirei Gensouki', 'Spirit Chronicles,Tinh linh huyễn tưởng ký', '9,326'),
(16, 'Public/image/shuumatsu-no-walkre.jpg', 'Shuumatsu no Walküre', 'Đại chiến người và thần, Record of Ragnarok, Shuumatsu no Valkyrie', '9,043'),
(17, 'Public/image/boku-no-hero-academia-5th-season.jpg', 'Boku no Hero Academia 5th Season', 'My Hero Academia 5, Học viên siêu anh hùng phần 5', '8,913'),
(18, 'Public/image/nguyet-dao-di-gioi.jpg', 'Tsuki ga Michibiku Isekai Douchuu', 'Tsukimichi -Moonlit Fantasy-,Tsukimichi: Moonlit Fantasy, Nguyệt đạo dị giới', '8,644'),
(19, 'Public/image/boruto-naruto-next-generations.jpg', 'Boruto: Naruto Next Generations', 'BORUTO -NARUTO NEXT GENERATIONS ( Naruto Season 3)', '8,065'),
(20, 'Public/image/pokemon.jpg', 'Pokemon', 'Pokemon Full', '7,728 ');

--
-- Chỉ mục cho các bảng đã đổ
--

--
-- Chỉ mục cho bảng `anime`
--
ALTER TABLE `anime`
  ADD PRIMARY KEY (`id`);

--
-- Chỉ mục cho bảng `blog`
--
ALTER TABLE `blog`
  ADD PRIMARY KEY (`id`);

--
-- Chỉ mục cho bảng `licchieu`
--
ALTER TABLE `licchieu`
  ADD PRIMARY KEY (`id`);

--
-- Chỉ mục cho bảng `lienhe`
--
ALTER TABLE `lienhe`
  ADD PRIMARY KEY (`id`);

--
-- Chỉ mục cho bảng `topnam`
--
ALTER TABLE `topnam`
  ADD PRIMARY KEY (`id`);

--
-- Chỉ mục cho bảng `topngay`
--
ALTER TABLE `topngay`
  ADD PRIMARY KEY (`id`);

--
-- Chỉ mục cho bảng `topthang`
--
ALTER TABLE `topthang`
  ADD PRIMARY KEY (`id`);

--
-- AUTO_INCREMENT cho các bảng đã đổ
--

--
-- AUTO_INCREMENT cho bảng `blog`
--
ALTER TABLE `blog`
  MODIFY `id` int(255) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=7;

--
-- AUTO_INCREMENT cho bảng `licchieu`
--
ALTER TABLE `licchieu`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=35;

--
-- AUTO_INCREMENT cho bảng `lienhe`
--
ALTER TABLE `lienhe`
  MODIFY `id` int(255) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=5;
COMMIT;

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
