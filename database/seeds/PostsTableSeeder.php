<?php

use Illuminate\Database\Seeder;
use App\Post;
class PostsTableSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        //
        $faker = Faker\Factory::create();
        $post = new Post();
            
    
            
        // for ($i=0; $i < 10 ; $i++) { 
        //     $post = new Post();
        //     $post->title = $faker->sentence($nbWords = 6, $variableNbWords = true);
        //     $post->slug = str_slug($post->title);
        //     $post->content = $faker->text();
        //     $post->address = $faker->address;
        //     $post->starting_day = $faker->date($format = 'Y-m-d', $max = 'now');
        //     $post->ending_day = $faker->date($format = 'Y-m-d', $max = 'now');
        //     $post->salary = $faker->numberBetween($min = 500000, $max = 5000000);
        //     $post->city_id = $faker->biasedNumberBetween($min = 1, $max = 10);
        //     $post->recruitment_id = $faker->biasedNumberBetween($min = 1, $max = 10);
    
        //     $post->save();
        // }
            $post->title = "Nhân Viên Tiếp Thị Sản Phẩm - PG - PB";
            $post->slug = str_slug($post->title);
            $post->content = '<!DOCTYPE html>
                        <html>
                        <head>
                        </head>
                        <body>
                        <h4><strong>M&ocirc; tả c&ocirc;ng việc</strong></h4>
                        <p>-&nbsp;<a href="http://mywork.com.vn/tuyen-dung/44/tiep-thi-quang-cao.html">Tiếp thị</a>,&nbsp;<a href="http://mywork.com.vn/tuyen-dung/63/tu-van.html">tư vấn</a>&nbsp;sản phẩm nước xả, nước rửa ch&eacute;n tại TP. Th&aacute;i Nguy&ecirc;n.<br /> - Y&ecirc;u cầu ngoan, chịu kh&oacute;, đi trước giờ l&agrave;m 15 ph&uacute;t.<br /> ---------------------------------------------------<br /> Mọi chi tiết li&ecirc;n hệ:<br /> C&ocirc;ng ty Truyền th&ocirc;ng &amp; Sự kiện NEWSUN<br /> Địa chỉ: Tầng 5 Số 12A, Ng&otilde; 105 - Đ. Lương Ngọc Quyến - TP. Th&aacute;i Nguy&ecirc;n<br /> &nbsp;</p>
                        <h4><strong>Quyền lợi được hưởng</strong></h4>
                        <p>- Thời gian l&agrave;m việc: s&aacute;ng từ 6h - 10h, chiều từ 3h - 7h.<br /> - C&oacute; &ocirc; t&ocirc; đưa đ&oacute;n tại điểm tập trung.<br /> - Kh&ocirc;ng y&ecirc;u cầu về ngoại h&igrave;nh.</p>
                        <h4><strong>Y&ecirc;u cầu c&ocirc;ng việc</strong></h4>
                        <p>- Tiếp thị, b&aacute;n sản phẩm nước xả, nước rửa ch&eacute;n<br /> - Đi trước giờ l&agrave;m việc 15 ph&uacute;t<br /> - Số lượng ho&agrave;n th&agrave;nh h&agrave;ng ng&agrave;y: 40 can</p>
                        <h4><strong>Y&ecirc;u cầu hồ sơ</strong></h4>
                        <p>- Đơn xin việc.<br /> - Sơ yếu l&yacute; lịch.<br /> - Hộ khẩu, chứng minh nh&acirc;n d&acirc;n.</p>
                        </body>
                        </html>
                            ';
            $post->address = "Hồ Chí Minh";
            $post->starting_day = $faker->date($format = 'Y-m-d', $max = 'now');
            $post->ending_day = $faker->date($format = 'Y-m-d', $max = 'now');
            $post->salary = 400000;
            $post->city_id = $faker->biasedNumberBetween($min = 1, $max = 10);
            $post->recruitment_id = $faker->biasedNumberBetween($min = 1, $max = 10);
            $post->save();

            
            
    
            
        // for ($i=0; $i < 10 ; $i++) { 
        //     $post = new Post();
        //     $post->title = $faker->sentence($nbWords = 6, $variableNbWords = true);
        //     $post->slug = str_slug($post->title);
        //     $post->content = $faker->text();
        //     $post->address = $faker->address;
        //     $post->starting_day = $faker->date($format = 'Y-m-d', $max = 'now');
        //     $post->ending_day = $faker->date($format = 'Y-m-d', $max = 'now');
        //     $post->salary = $faker->numberBetween($min = 500000, $max = 5000000);
        //     $post->city_id = $faker->biasedNumberBetween($min = 1, $max = 10);
        //     $post->recruitment_id = $faker->biasedNumberBetween($min = 1, $max = 10);
    
        //     $post->save();
        // }
            $post = new Post();
            $post->title = "Nhân Viên PG/ PB - Hồ Chí Minh";
            $post->slug = str_slug($post->title);
            $post->content = '<!DOCTYPE html>
                            <html>
                            <head>
                            </head>
                            <body>
                            <h4><em><strong>M&ocirc; tả C&ocirc;ng việc</strong></em></h4>
                            <ul>
                            <li>Tư vấn, giới thiệu sản phẩm v&agrave; b&aacute;n h&agrave;ng</li>
                            <li>Thực hiện chỉ ti&ecirc;u doanh thu</li>
                            <li>Đảm bảo h&agrave;ng ho&aacute; tại bộ phận phải đầy đủ, đ&uacute;ng quy c&aacute;ch</li>
                            <li>Thu thập v&agrave; tổng hợp được th&ocirc;ng tin của c&aacute;c đối thủ cạnh tranh về sản phẩm, gi&aacute;, c&aacute;c chương tr&igrave;nh b&aacute;n h&agrave;ng ...</li>
                            </ul>
                            <p><strong>QUYỀN LỢI ĐƯỢC HƯỞNG</strong></p>
                            <ul>
                            <li>Thu nhập hấp dẫn ++, nhiều chế độ đ&atilde;i ngộ</li>
                            <li>M&ocirc;i trường l&agrave;m việc chuy&ecirc;n nghiệp, th&acirc;n thiện</li>
                            <li>Được hưởng đầy đủ c&aacute;c chế độ theo quy định của ph&aacute;p luật</li>
                            </ul>
                            <h4><em><strong>Y&ecirc;u Cầu C&ocirc;ng Việc</strong></em></h4>
                            <p>&nbsp;</p>
                            <ul style="list-style-type: circle;">
                            <li>Tốt nghiệp THPT trở l&ecirc;n</li>
                            <li>Nhanh nhẹn, ngoại h&igrave;nh kh&aacute;, c&oacute; khả năng giao tiếp, thuyết phục tốt</li>
                            <li>Trung thực, nhiệt t&igrave;nh</li>
                            <li>C&oacute; &iacute;t nhất 6 th&aacute;ng kinh nghiệm tại vị tr&iacute; tương đương</li>
                            </ul>
                            <h4><em><strong>Th&ocirc;ng tin kh&aacute;c</strong></em></h4>
                            <ul>
                            <li>Bằng cấp: Trung học</li>
                            <li>Độ tuổi: Kh&ocirc;ng giới hạn tuổi</li>
                            <li>H&igrave;nh thức: Nh&acirc;n vi&ecirc;n ch&iacute;nh thức</li>
                            </ul>
                            </body>
                            </html>
                            ';
            $post->address = "TP Hồ Chí Minh";
            $post->starting_day = $faker->date($format = 'Y-m-d', $max = 'now');
            $post->ending_day = $faker->date($format = 'Y-m-d', $max = 'now');
            $post->salary = 4500000;
            $post->city_id = $faker->biasedNumberBetween($min = 1, $max = 10);
            $post->recruitment_id = $faker->biasedNumberBetween($min = 1, $max = 10);
            $post->save();

            $post = new Post();
            $post->title = "Nhân Viên PG (Part - time)";
            $post->slug = str_slug($post->title);
            $post->content = '<!DOCTYPE html>
                            <html>
                            <head>
                            </head>
                            <body>
                            <h2><em><strong>M&ocirc; tả chi tiết c&ocirc;ng việc</strong></em></h2>
                            <p>- Hỗ trợ trong việc quản l&iacute; KOP, kế hoạch chạy booth để tăng doanh số;<br /> - Chăm s&oacute;c, tư vấn cho kh&aacute;ch h&agrave;ng về sản phẩm c&ocirc;ng ty;<br /> - T&igrave;m kiếm kh&aacute;ch h&agrave;ng tiềm năng cho việc ph&aacute;t mẫu thử;<br /> - Sắp xếp , trưng b&agrave;y sản phẩm trong cửa h&agrave;ng, kiểm tra tồn kho để b&aacute;o cho gi&aacute;m s&aacute;t b&aacute;n h&agrave;ng;<br /> - Hỗ trợ trong việc quản l&iacute; c&ocirc;ng cụ b&aacute;n h&agrave;ng (qu&agrave; tặng, tờ rơi, bong bong, etc)</p>
                            <p>* L&agrave;m việc tại c&aacute;c cửa h&agrave;ng, đại l&yacute; trực thuộc c&aacute;c quận được ph&acirc;n c&ocirc;ng</p>
                            <h2>K<em><strong>inh nghiệm/Kỹ năng chi tiết</strong></em></h2>
                            <p>- Chủ động trong c&ocirc;ng việc để xử l&iacute; t&igrave;nh huống;<br /> - C&oacute; tr&aacute;ch nhiệm, chăm chỉ v&agrave; nhiệt huyết trong c&ocirc;ng việc;<br /> - Khả năng giao tiếp, tư vấn v&agrave; chăm s&oacute;c kh&aacute;ch h&agrave;ng tốt.</p>
                            <h2><strong>M&ocirc; tả</strong></h2>
                            <ul>
                            <li><span style="font-size: 14pt;">Ng&agrave;nh nghề việc l&agrave;m:</span></li>
                            <ul>
                            <li><a href="https://www.careerlink.vn/viec-lam/ban-hang/31">B&aacute;n h&agrave;ng</a></li>
                            <li><a href="https://www.careerlink.vn/viec-lam/tiep-thi/136">Tiếp thị</a></li>
                            <li><a href="https://www.careerlink.vn/viec-lam/ban-le-ban-si/190">B&aacute;n lẻ/ B&aacute;n sỉ</a></li>
                            </ul>
                            <li><span style="font-size: 14pt;">Cấp bậc</span>: Nh&acirc;n vi&ecirc;n</li>
                            <li><span style="font-size: 14pt;">Nơi l&agrave;m việc</span>:</li>
                            <ul>
                            <li><a href="https://www.careerlink.vn/tim-viec-lam-tai/ho-chi-minh/HCM">Hồ Ch&iacute; Minh&nbsp;</a>,&nbsp;Quận G&ograve; Vấp</li>
                            <li><a href="https://www.careerlink.vn/tim-viec-lam-tai/ho-chi-minh/HCM">Hồ Ch&iacute; Minh&nbsp;</a>,&nbsp;Quận T&acirc;n B&igrave;nh</li>
                            <li><a href="https://www.careerlink.vn/tim-viec-lam-tai/ho-chi-minh/HCM">Hồ Ch&iacute; Minh&nbsp;</a>,&nbsp;Quận B&igrave;nh Thạnh</li>
                            <li><a href="https://www.careerlink.vn/tim-viec-lam-tai/ho-chi-minh/HCM">Hồ Ch&iacute; Minh&nbsp;</a>,&nbsp;Quận Ph&uacute; Nhuận</li>
                            <li><a href="https://www.careerlink.vn/tim-viec-lam-tai/ho-chi-minh/HCM">Hồ Ch&iacute; Minh&nbsp;</a>,&nbsp;Quận Thủ Đức</li>
                            <li><a href="https://www.careerlink.vn/tim-viec-lam-tai/ho-chi-minh/HCM">Hồ Ch&iacute; Minh&nbsp;</a>,&nbsp;Quận T&acirc;n Ph&uacute;</li>
                            </ul>
                            <li><span style="font-size: 14pt;">Tr&igrave;nh độ học vấn</span>:&nbsp;Trung cấp</li>
                            <li><span style="font-size: 14pt;">Mức kinh nghiệm</span>:&nbsp;0-1 năm kinh nghiệm</li>
                            <li><span style="font-size: 14pt;">Loại c&ocirc;ng việc</span>:&nbsp;B&aacute;n thời gian tạm thời</li>
                            <li><span style="font-size: 14pt;">Tuổi</span>: 18-26</li>
                            <li><span style="font-size: 14pt;">Giới t&iacute;nh</span>: Nam/Nữ</li>
                            </ul>
                            <h2><em><strong>Th&ocirc;ng tin li&ecirc;n hệ</strong></em></h2>
                            <ul>
                            <li>C&aacute;ch li&ecirc;n hệ: Nộp trực tuyến, Gửi k&egrave;m File, Trực tiếp</li>
                            <li>M&ocirc; tả:</li>
                            </ul>
                            <p><strong><em>- C&aacute;c ứng vi&ecirc;n quan t&acirc;m c&oacute; thể nộp hồ sơ trực tuyến, email hay trực tiếp đến c&ocirc;ng ty.</em></strong></p>
                            <ul>
                            <li>T&ecirc;n li&ecirc;n hệ: Ph&ograve;ng Nh&acirc;n Sự-Tổng vụ</li>
                            <li>Địa chỉ:&nbsp;L&ocirc; A1-6, đường số N5, KCN T&acirc;y Bắc Củ Chi, Huyện Củ Chi&nbsp;,&nbsp;Hồ Ch&iacute; Minh&nbsp;,&nbsp;Việt Nam</li>
                            </ul>
                            </body>
                            </html>
                            ';
            $post->address = "TP Nha Trang";
            $post->starting_day = $faker->date($format = 'Y-m-d', $max = 'now');
            $post->ending_day = $faker->date($format = 'Y-m-d', $max = 'now');
            $post->salary = 350000;
            $post->city_id = $faker->biasedNumberBetween($min = 1, $max = 10);
            $post->recruitment_id = $faker->biasedNumberBetween($min = 1, $max = 10);
            $post->save();

            $post = new Post();
            $post->title = "PG ở Nha Trang";
            $post->slug = str_slug($post->title);
            $post->content = '<!DOCTYPE html>
                            <html>
                            <head>
                            </head>
                            <body>
                            <h4><strong>M&ocirc; tả c&ocirc;ng việc</strong></h4>
                            <p>Giới thiệu sản phẩm<br /> <a href="http://mywork.com.vn/tuyen-dung/63/tu-van.html">Tư vấn</a>&nbsp;sản phẩm đến kh&aacute;ch h&agrave;ng.</p>
                            <h4><strong>Quyền lợi được hưởng</strong></h4>
                            <p>Trả lương theo ng&agrave;y.</p>
                            <h4><strong>Y&ecirc;u cầu c&ocirc;ng việc</strong></h4>
                            <p>N&oacute;i năng lưu lo&aacute;t<br /> Ngoại h&igrave;nh dễ nh&igrave;n</p>
                            <h4><strong>Y&ecirc;u cầu hồ sơ</strong></h4>
                            <p>- Đơn xin việc.<br /> - Sơ yếu l&yacute; lịch.<br /> - Hộ khẩu, chứng minh nh&acirc;n d&acirc;n v&agrave; giấy kh&aacute;m sức khỏe.<br /> - C&aacute;c bằng cấp c&oacute; li&ecirc;n quan.</p>
                            </body>
                            </html>';
            $post->address = "TP Nha Trang";
            $post->starting_day = $faker->date($format = 'Y-m-d', $max = 'now');
            $post->ending_day = $faker->date($format = 'Y-m-d', $max = 'now');
            $post->salary = 300000;
            $post->city_id = $faker->biasedNumberBetween($min = 1, $max = 10);
            $post->recruitment_id = $faker->biasedNumberBetween($min = 1, $max = 10);
            $post->save();

            $post = new Post();
            $post->title = "Nhân Viên Tư Vấn Bán Hàng ( PG & PB )";
            $post->slug = str_slug($post->title);
            $post->content = '<!DOCTYPE html>
                            <html>
                            <head>
                            </head>
                            <body>
                            <h4><em><strong>M&ocirc; tả c&ocirc;ng việc</strong></em></h4>
                            <p>- Độ tuổi: 18- 25 tuổi</p>
                            <p>- Tr&igrave;nh độ: tối thiểu 12/12</p>
                            <p>- Nữ cao 1m58 trở l&ecirc;n, Nam cao 1m65 &nbsp;trở l&ecirc;n ưu ti&ecirc;n c&oacute; ngoại h&igrave;nh.</p>
                            <p>- Số lượng: 3người.</p>
                            <h4><em><strong>Quyền lợi được hưởng</strong></em></h4>
                            <p>- Mức lương: lương cơ bản + phụ cấp 4tr + KPI doanh số b&aacute;n ( từ 5tr đến 10tr)</p>
                            <p>-Thời gian l&agrave;m việc :8 tiếng 1 ng&agrave;y ( tuần nghĩ 1 ng&agrave;y)</p>
                            <p>- Đầy đủ c&aacute;c ch&iacute;nh s&aacute;ch v&agrave; được hưởng c&aacute;c chế độ BHXH, BHYT, cơ hội thăng tiến cao trong c&ocirc;ng việc.</p>
                            <p>-&nbsp;<a href="http://mywork.com.vn/tuyen-dung/89/moi-truong.html">M&ocirc;i trường</a>&nbsp;l&agrave;m việc: chuy&ecirc;n ngiệp, năng động v&agrave; lịch sự</p>
                            <h4><em><strong>Y&ecirc;u cầu c&ocirc;ng việc</strong></em></h4>
                            <p>- Y&ecirc;u th&iacute;ch c&ocirc;ng việc&nbsp;<a href="http://mywork.com.vn/tuyen-dung/31/ban-hang.html">b&aacute;n h&agrave;ng</a>, chịu kh&oacute;, lanh lẹ, giao tiếp tốt.</p>
                            <p>- Ứng vi&ecirc;n đ&atilde; c&oacute; kinh nghiệm b&aacute;n h&agrave;ng l&agrave; lợi thế, sẽ được&nbsp;<a href="http://mywork.com.vn/tuyen-dung/58/giao-duc-dao-tao.html">đ&agrave;o tạo</a>&nbsp;th&ecirc;m.</p>
                            <h4><em><strong>Y&ecirc;u cầu hồ sơ</strong></em></h4>
                            <p>- Đơn xin việc.</p>
                            <p>- Sơ yếu l&yacute; lịch.</p>
                            <p>- Hộ khẩu, chứng minh nh&acirc;n d&acirc;n v&agrave; giấy kh&aacute;m sức khỏe.</p>
                            <p>- C&aacute;c bằng cấp c&oacute; li&ecirc;n quan.</p>
                            <p>Hoặc nộp trược tiếp tại&nbsp;<a href="http://mywork.com.vn/tuyen-dung/74/hanh-chinh-van-phong.html">văn ph&ograve;ng</a>&nbsp;c&ocirc;ng ty.<br /> &nbsp;ĐỊA CHỈ CTY : Cty TNHH C&ocirc;ng Nghệ MngSheng Việt Nam Tầng 4, Số 139 - Nam Kỳ Khởi Nghĩa &ndash; Phường 4 &ndash; Mỹ Tho &ndash; Tiền Giang. ĐT:0733.868.855 DĐ 0932.134.298 gặp &nbsp;Chị H&ograve;a&nbsp;</p>
                            </body>
                            </html>';
            $post->address = "TP Nha Trang";
            $post->starting_day = $faker->date($format = 'Y-m-d', $max = 'now');
            $post->ending_day = $faker->date($format = 'Y-m-d', $max = 'now');
            $post->salary = 400000;
            $post->city_id = $faker->biasedNumberBetween($min = 1, $max = 10);
            $post->recruitment_id = $faker->biasedNumberBetween($min = 1, $max = 10);
            $post->save();

            $post = new Post();
            $post->title = "Tuyển PG/ PB Cho Hội Thảo, Sự Kiện";
            $post->slug = str_slug($post->title);
            $post->content = '<!DOCTYPE html>
                                <html>
                                <head>
                                </head>
                                <body>
                                <h4><strong>M&ocirc; tả c&ocirc;ng việc</strong></h4>
                                <p>PG/ PB:<br /> - Check - in kh&aacute;ch tại hội thảo<br /> -&nbsp;<a href="http://mywork.com.vn/tuyen-dung/63/tu-van.html">Tư vấn</a>&nbsp;cho kh&aacute;ch h&agrave;ng về sản phẩm sau chương tr&igrave;nh</p>
                                <h4><strong>Quyền lợi được hưởng</strong></h4>
                                <p>- Được đ&agrave;o tạo b&agrave;i bản về quy tr&igrave;nh l&agrave;m việc<br /> - Nhận lương ngay sau chương tr&igrave;nh<br /> - M&ocirc;i trường l&agrave;m việc năng động, t&iacute;ch cực</p>
                                <h4><strong>Y&ecirc;u cầu c&ocirc;ng việc</strong></h4>
                                <p>- Nam, nữ ngoại h&igrave;nh ưu nh&igrave;n<br /> - Th&acirc;n thiện, vui vẻ, nhiệt t&igrave;nh<br /> - Từng c&oacute; kinh nghiệm l&agrave;m PB/ PG/</p>
                                <h4><strong>Y&ecirc;u cầu hồ sơ</strong></h4>
                                <p>CV giới thiệu về bản th&acirc;n, kinh nghiệm l&agrave;m việc.</p>
                                </body>
                                </html>';
            $post->address = "Hà Nội";
            $post->starting_day = $faker->date($format = 'Y-m-d', $max = 'now');
            $post->ending_day = $faker->date($format = 'Y-m-d', $max = 'now');
            $post->salary = 400000;
            $post->city_id = $faker->biasedNumberBetween($min = 1, $max = 10);
            $post->recruitment_id = $faker->biasedNumberBetween($min = 1, $max = 10);
            $post->save();

            $post = new Post();
            $post->title = "Nhân Viên PG - Làm Tại Metro An Phú, Big C An Phú";
            $post->slug = str_slug($post->title);
            $post->content = '<!DOCTYPE html>
                                <html>
                                <head>
                                </head>
                                <body>
                                <h4><strong>M&ocirc; tả c&ocirc;ng việc</strong></h4>
                                <p>- Hướng dẫn kh&aacute;ch h&agrave;ng v&agrave;&nbsp;<a href="http://mywork.com.vn/tuyen-dung/63/tu-van.html">tư vấn</a>&nbsp;<a href="http://mywork.com.vn/tuyen-dung/31/ban-hang.html">b&aacute;n h&agrave;ng</a>&nbsp;về c&aacute;c sản phẩm của c&ocirc;ng ty<br /> - Chịu tr&aacute;ch nhiệm b&aacute;n h&agrave;ng đạt chỉ ti&ecirc;u doanh số được ph&acirc;n c&ocirc;ng<br /> - Tư vấn b&aacute;n h&agrave;ng, đặt h&agrave;ng, ho&agrave;n th&agrave;nh c&aacute;c b&aacute;o c&aacute;o của c&ocirc;ng ty<br /> - C&ocirc;ng việc chi tiết trao đổi th&ecirc;m khi phỏng vấn</p>
                                <h4><strong>Quyền lợi được hưởng</strong></h4>
                                <p>- HĐLĐ với đầy đủ c&aacute;c chế độ Bảo Hiểm theo luật định sau thời gian thử việc.<br /> - C&aacute;c chế độ thưởng doanh số xứng đ&aacute;ng với kết quả đạt được h&agrave;ng th&aacute;ng.<br /> - Du lịch hằng năm theo quy định của C&ocirc;ng ty</p>
                                <h4><strong>Y&ecirc;u cầu c&ocirc;ng việc</strong></h4>
                                <p>- C&oacute; sức khỏe tốt, si&ecirc;ng năng v&agrave; trung thực.<br /> - Th&iacute;ch nghi với t&aacute;c phong l&agrave;m việc theo nh&oacute;m.</p>
                                <h4><strong>Y&ecirc;u cầu hồ sơ</strong></h4>
                                <p>- Đơn xin việc.<br /> - Sơ yếu l&yacute; lịch.<br /> - Hộ khẩu, chứng minh nh&acirc;n d&acirc;n v&agrave; giấy kh&aacute;m sức khỏe.<br /> - C&aacute;c bằng cấp c&oacute; li&ecirc;n quan.</p>
                                </body>
                                </html>';
            $post->address = "TP An Phú";
            $post->starting_day = $faker->date($format = 'Y-m-d', $max = 'now');
            $post->ending_day = $faker->date($format = 'Y-m-d', $max = 'now');
            $post->salary = 300000;
            $post->city_id = $faker->biasedNumberBetween($min = 1, $max = 10);
            $post->recruitment_id = $faker->biasedNumberBetween($min = 1, $max = 10);
            $post->save();

            $post = new Post();
            $post->title = "PG & PB";
            $post->slug = str_slug($post->title);
            $post->content = '<!DOCTYPE html>
                                <html>
                                <head>
                                </head>
                                <body>
                                <h4><strong>M&ocirc; tả c&ocirc;ng việc&nbsp;</strong></h4>
                                <p>giới thiệu v&agrave; ph&aacute;t sản phẩm mẫu cho kh&aacute;ch h&agrave;ng v&agrave; hỗ trợ bộ phận PR</p>
                                <h4><strong>Quyền lợi được hưởng</strong></h4>
                                <p>-Chế độ lương ph&ugrave; hợp<br /> - L&agrave;m việc trong&nbsp;<a href="http://mywork.com.vn/tuyen-dung/89/moi-truong.html">m&ocirc;i trường</a>&nbsp;th&acirc;n thiện, năng động<br /> - L&agrave;m tốt sẽ c&oacute; thưởng<br /> - Chưa c&oacute; kinh nghiệm sẽ được&nbsp;<a href="http://mywork.com.vn/tuyen-dung/58/giao-duc-dao-tao.html">đ&agrave;o tạo</a>&nbsp;b&agrave;i bản.<br /> - L&agrave;m từ 2 th&aacute;ng trở l&ecirc;n sẽ được c&ocirc;ng ty đ&oacute;ng&nbsp;<a href="http://mywork.com.vn/tuyen-dung/3/bao-hiem.html">bảo hiểm</a>.</p>
                                <h4><strong>Y&ecirc;u cầu c&ocirc;ng việc</strong></h4>
                                <p>-Nam, Nữ từ 18-25 tuổi.<br /> - Ngoại h&igrave;nh ưa nh&igrave;n<br /> - Giao tiếp tốt, vui vẻ, trung thực v&agrave; l&agrave;m việc<br /> chăm chỉ.</p>
                                <h4><strong>Y&ecirc;u cầu hồ sơ</strong></h4>
                                <p>- Đơn xin việc.<br /> - Sơ yếu l&yacute; lịch.<br /> - Hộ khẩu, chứng minh nh&acirc;n d&acirc;n v&agrave; giấy kh&aacute;m sức khỏe.<br /> - C&aacute;c bằng cấp c&oacute; li&ecirc;n quan.</p>
                                </body>
                                </html>';
            $post->address = "TP Khánh Hoà";
            $post->starting_day = $faker->date($format = 'Y-m-d', $max = 'now');
            $post->ending_day = $faker->date($format = 'Y-m-d', $max = 'now');
            $post->salary = 350000;
            $post->city_id = $faker->biasedNumberBetween($min = 1, $max = 10);
            $post->recruitment_id = $faker->biasedNumberBetween($min = 1, $max = 10);
            $post->save();
    }
}
