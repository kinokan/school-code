<?php
/*
Template Name: Bayside RPC
*/
?>
<?php get_header(); ?>
<?php
$school_name ="Bayside RPC";
?>

			<!-- パンくずリスト -->
			<?php get_template_part( 'breadcrumb-page' ); ?>

			<div class="col-sm-9 sp-padding10"> <!-- main col-9 -->

			<h1 class="detail"  itemprop="name headline">
				<a href="<?php the_permalink(); ?>" title="<?php printf(the_title_attribute('echo=0') ); ?>" itemprop="url"><?php echo $school_name; ?>（セブ島）の学校情報</a>
			</h1>

			<h2 id="balloon-2-bottom">ジュニア留学・親子留学の徹底サポート！24時間英語環境を提供するマクタン島の学校</h2>

			<!-- サムネイルの表示 -->
			<?php get_template_part( 'thumbnail' ); ?>

			<!-- キャンペーン用のスペース -->
			<?php get_template_part( 'campaign-space' ); ?>

			<!-- メタデータの読み込み -->
			<?php get_template_part( 'meta' ); ?>

			<section class="bg-gray padding20 sp-no-padding">
				<article class="bg-white padding10"  itemprop="articleBody">

					<!-- 学校ナビボタン -->
					<?php get_template_part( 'button/school-detail-jump-button' ); ?>

					<h2 class="top30 point"><i class="fa fa-check-circle"></i> <?php echo $school_name; ?>の５つの要点まとめ</h2>
					<ol class="point-list">
						<li>１日平均５時間から最大８時間のマンツーマン授業。</li>
						<li>100%セブの海が目の前に見えるリゾート型キャンパス。</li>
						<li>休日もマンツーマン授業追加可能でどんどん学びたい方を応援。</li>
						<li>看護師資格有りの日本人スタッフ在籍で安心のサポート体制。</li>
						<li>親子留学にも安心のベビーシッターサービス。(有料)</li>
					</ol>


					<h2 id="feature" class="detail-h2 detail-h2-sp top30"><span id="number" class="spnone">01</span><?php echo $school_name; ?>の特徴</h2>
					<p class="detail">
『Bayside English Cebu, RPC Campus（Bayside RPC）』は、セブマクタン島の最南端に位置する学校です。当校は2つのキャンパスが有り、目的に応じて『RPCキャンパス』と『<a href="http://philippines-cebu-ryugaku.com/all-school/bayside-premium/">Premiumキャンパス</a>』から選択することができます。
					</p>
					<p class="detail">
『RPCキャンパス』は、セブエリアにあるとは思えない広大な敷地が特徴のキャンパスです。次に、講師が同じ敷地内に滞在している為、いつでも英語で会話や質問ができる24時間英語を話せる環境が整っております。また、お子様には併設されているインターナショナルスクールとの合同レッスンを受けることができ、幼稚園から高校生までの学生たちと国際交流が可能となっております。
					</p>
					<p class="detail">
次に『RPCキャンパス』は、マンツーマン授業が1日3～6時間から選べる一般英語コース、仕事で必要な英語力向上や試験対策を目的としたビジネス英語コース、お子様向けのジュニアコースなどが開講されています。当キャンパスでは3歳～15歳のお子様留学や親子留学の受け入れを積極的に行っております。親子留学では、親御様が安心して勉強できる環境を提供できるよう、ベビーシッターサービスやプレイルームの完備など安心サポートを用意しております。また、平日の空き時間や土日や祝日にも、マンツーマン授業の追加が可能となっており、1時間500ペソで受講できる手軽さもとても人気です。
					</p>
					<p class="detail">
当校は日本人スタッフも複数名在籍しており、内1人は看護師資格を保持しているので、生活面や健康面でのサポート体制も大変充実しております。日本人スタッフによる日本人向けの食事の提供や、入学初日にはウェルカムセット（生活を始めるにあたって必要な日用品）の提供など、初めての海外や留学で不安のある方も安心して学習して頂ける環境作りを整えております。
					</p>

					<!-- CV button -->
					<?php get_template_part( 'button/cv-button' ); ?>

					<h2 id="course" class="detail-h2 detail-h2-sp top40"><span id="number" class="spnone">02</span><?php echo $school_name; ?>のコース紹介</h2>

<div class="table-responsive">
	<table class="table">
		<thead class="t-head">
			<tr>
				<th>プログラム</th>
				<th>コース</th>
				<th>マンツーマン</th>
				<th>グループ</th>
				<th>自由参加クラス</th>
			</tr>
		</thead>

		<tbody>

			<tr class="">
				<th scope="row" class="bg-skyblue white" rowspan="6" id="t-middle">ESLコース</th>
				<td>Generalコース</td>
				<td>５時間</td>
				<td>１時間</td>
				<td>２時間</td>
			</tr>

			<tr class="">
				<td>Intensiveコース</td>
				<td>６時間</td>
				<td>２時間</td>
				<td>２時間</td>
			</tr>

			<tr class="">
				<td>Absoluteマンツーマンコース</td>
				<td>８時間</td>
				<td>２時間</td>
				<td>-</td>
			</tr>

			<tr class="">
				<td>Groupコース</td>
				<td>３時間</td>
				<td>３時間</td>
				<td>２時間</td>
			</tr>

			<tr class="">
				<td>Relaxコース</td>
				<td>３時間</td>
				<td>１時間</td>
				<td>２時間</td>
			</tr>

			<tr class="">
				<td>Attendコース</td>
				<td>２時間</td>
				<td>-</td>
				<td>２時間</td>
			</tr>

			<tr class="">
				<th scope="row" class="bg-skyblue-light white" id="t-middle" rowspan="2">ビジネスコース</th>
				<td class="active">Generalコース</td>
				<td>４時間</td>
				<td>２時間</td>
				<td>２時間</td>
			</tr>

			<tr class="active">
				<td>Intensiveコース</td>
				<td>８時間</td>
				<td>-</td>
				<td>２時間</td>
			</tr>

			<tr class="">
				<th scope="row" class="bg-skyblue white" id="t-middle">TOEIC対策コース</th>
				<td>TOEICコース</td>
				<td>４時間</td>
				<td>２時間</td>
				<td>２時間</td>
			</tr>

			<tr class="">
				<th scope="row" class="bg-skyblue-light white" id="t-middle" rowspan="2">ジュニアコース</th>
				<td class="active">Generalコース</td>
				<td>４時間</td>
				<td>２時間</td>
				<td>２時間</td>
			</tr>

			<tr class="">
				<td>Relaxコース</td>
				<td>３時間</td>
				<td>１時間</td>
				<td>２時間</td>
			</tr>

		</tbody>
	</table>
</div>

					<!-- CV button -->
					<?php get_template_part( 'button/cv-button' ); ?>

					<h2 id="class" class="detail-h2 detail-h2-sp top40"><span id="number" class="spnone">03</span><?php echo $school_name; ?>のカリキュラム</h2>

					<h3 class="top30 point"><i class="fa fa-check-circle"></i> 概要</h3>
					<ul>
						<li class="">自由時間、土日祝日にマンツーマン授業の追加が可能です。（1コマ500ペソ） </li>
						<li class="">現地でインターナショナルスクール合同レッスンが受講可能です。（1コマ500ペソ）</li>
						<li class="">フリークラスは参加自由のクラスとなります。</li>
						<li class="">初日の月曜日はオリエンテーション、レベルテスト、ショッピングとなり通常授業はございませんが、午後より1コマ500ペソで追加授業は可能です。</li>
					</ul>


					<h3 class="top30 point"><i class="fa fa-check-circle"></i> ESLコース</h3>
					<p class="detail">
スピーキング、リーディング、ライティング、リスニングの英語4大要素を全体的にバランスよく学習していくことができ、基礎から応用レベルまで対応した一般英語コースです。弱点に焦点を当てたオーダーメイド型かつフレキシブルで、個人のニーズに応じたカリキュラムとなっています。まず、英語の基礎をしっかり身につけたい方は、ESLコースを受講する形となります。
					</p>

					<h3 class="top30 point"><i class="fa fa-check-circle"></i> ビジネスコース</h3>
					<p class="detail">
ビジネスシーンで実際に使える英語力、コミュニケーション能力を身に付けていきます。ビジネスレターの書き方、面接、取引、プレゼンテーションなど様々なシチュエーションを想定したロールプレイングを通じて、実践的に学習していきます。
					</p>

					<h3 class="top30 point"><i class="fa fa-check-circle"></i> ジュニアコース</h3>
					<p class="detail">
3 歳から15 歳のお子様を対象としたコースです。年代別に適した英語教育方法を用いて、お子様に楽しみながら英語学習に取り組んで貰える授業を行っていきます。併設されているインターナショナルスクールでの合同レッスンも受講可能となっています。若い頃から異文化に触れ、国際的な考え方を身に付けていくことが期待できます。また親子留学の際のベビーシッターサービスも充実しているため、ご両親もしっかり勉強したい場合でも全面バックアップしています。
					</p>

					<h3 class="top30 point"><i class="fa fa-check-circle"></i> フリークラスの内容</h3>
					<p class="detail">
リスニング、フリーディスカッション、TOEICリスニング、グループプレゼンテーション、ロールプレイング、アクティビティ　など
					</p>

					<h3 class="top30 point"><i class="fa fa-check-circle"></i> ジュニア向けのフリークラス内容</h3>
					<p class="detail">
フリーディスカッション、映画鑑賞、復習、など
					</p>

					<h3 class="top30 point"><i class="fa fa-check-circle"></i> 追加マンツーマン授業内容</h3>
					<p class="detail">
リーディング、スピーキング、リスニング、ライティング、発音、文法、語彙、など
					</p>

					<h3 class="top30 point"><i class="fa fa-check-circle"></i> ベビーシッターサービス(有料)</h3>
					<p class="detail">
親御様が安心して英語学習に集中できる環境を提供するべく、当校ではベビーシッターサービスを実施しております。専属のベビーシッターがマンツーマンでお子様を責任を持ってお預かり、親御様のサポートをします。（平日8:00～17:00）
					</p>

					<!-- CV button -->
					<?php get_template_part( 'button/cv-button' ); ?>

					<h2 id="price" class="detail-h2 detail-h2-sp top40"><span id="number" class="spnone">04</span><?php echo $school_name; ?>の料金表</h2>

					<h3 class="top30 point"><i class="fa fa-check-circle"></i> Generalコース/ジュニアGeneralコース/Groupコース</h3>

<div class="table-responsive">
	<table class="table">
		<tbody>
			<tr class="bg-skyblue white">
				<td>単位：円</td>
				<td>１週間</td>
				<td>２週間</td>
				<td>４週間</td>
				<td>８週間</td>
				<td>１２週間</td>
				<td>１６週間</td>
				<td>２４週間</td>
			</tr>

			<tr class="">
				<td>１人部屋</td>
				<td>63,000</td>
				<td>117,000</td>
				<td>180,000</td>
				<td>360,000</td>
				<td>540,000</td>
				<td>720,000</td>
				<td>1,080,000</td>
			</tr>

			<tr class="active">
				<td>２人部屋</td>
				<td>48,000</td>
				<td>89,000</td>
				<td>138,000</td>
				<td>276,000</td>
				<td>414,000</td>
				<td>552,000</td>
				<td>828,000</td>
			</tr>

			<tr class="">
				<td>３人部屋</td>
				<td>42,000</td>
				<td>78,000</td>
				<td>118,000</td>
				<td>236,000</td>
				<td>354,000</td>
				<td>472,000</td>
				<td>708,000</td>
			</tr>
		</tbody>
	</table>
</div>

					<h3 class="top30 point"><i class="fa fa-check-circle"></i> Intensiveコース/Businessコース/TOEIC対策コース</h3>

<div class="table-responsive">
	<table class="table">
		<tbody>
			<tr class="bg-skyblue white">
				<td>単位：円</td>
				<td>１週間</td>
				<td>２週間</td>
				<td>４週間</td>
				<td>８週間</td>
				<td>１２週間</td>
				<td>１６週間</td>
				<td>２４週間</td>
			</tr>

			<tr class="">
				<td>１人部屋</td>
				<td>73,000</td>
				<td>136,000</td>
				<td>208,000</td>
				<td>416,000</td>
				<td>624,000</td>
				<td>832,000</td>
				<td>1,248,000</td>
			</tr>

			<tr class="active">
				<td>２人部屋</td>
				<td>58,000</td>
				<td>108,000</td>
				<td>165,000</td>
				<td>330,000</td>
				<td>495,000</td>
				<td>660,000</td>
				<td>990,000</td>
			</tr>

			<tr class="">
				<td>３人部屋</td>
				<td>46,000</td>
				<td>85,000</td>
				<td>131,000</td>
				<td>262,000</td>
				<td>393,000</td>
				<td>524,000</td>
				<td>786,000</td>
			</tr>
		</tbody>
	</table>
</div>

					<h3 class="top30 point"><i class="fa fa-check-circle"></i> Absoluteマンツーマンコース</h3>

<div class="table-responsive">
	<table class="table">
		<tbody>
			<tr class="bg-skyblue white">
				<td>単位：円</td>
				<td>１週間</td>
				<td>２週間</td>
				<td>４週間</td>
				<td>８週間</td>
				<td>１２週間</td>
				<td>１６週間</td>
				<td>２４週間</td>
			</tr>

			<tr class="">
				<td>１人部屋</td>
				<td>78,000</td>
				<td>145,000</td>
				<td>223,000</td>
				<td>446,000</td>
				<td>669,000</td>
				<td>892,000</td>
				<td>1,338,000</td>
			</tr>

			<tr class="active">
				<td>２人部屋</td>
				<td>63,000</td>
				<td>117,000</td>
				<td>180,000</td>
				<td>360,000</td>
				<td>540,000</td>
				<td>720,000</td>
				<td>1,080,000</td>
			</tr>

			<tr class="">
				<td>３人部屋</td>
				<td>51,000</td>
				<td>95,000</td>
				<td>146,000</td>
				<td>292,000</td>
				<td>438,000</td>
				<td>584,000</td>
				<td>876,000</td>
			</tr>
		</tbody>
	</table>
</div>

					<h3 class="top30 point"><i class="fa fa-check-circle"></i> Business Intensiveコース</h3>

<div class="table-responsive">
	<table class="table">
		<tbody>
			<tr class="bg-skyblue white">
				<td>単位：円</td>
				<td>１週間</td>
				<td>２週間</td>
				<td>４週間</td>
				<td>８週間</td>
				<td>１２週間</td>
				<td>１６週間</td>
				<td>２４週間</td>
			</tr>

			<tr class="">
				<td>１人部屋</td>
				<td>73,000</td>
				<td>136,000</td>
				<td>208,000</td>
				<td>416,000</td>
				<td>624,000</td>
				<td>832,000</td>
				<td>1,248,000</td>
			</tr>

			<tr class="active">
				<td>２人部屋</td>
				<td>58,000</td>
				<td>108,000</td>
				<td>165,000</td>
				<td>330,000</td>
				<td>495,000</td>
				<td>660,000</td>
				<td>990,000</td>
			</tr>

			<tr class="">
				<td>３人部屋</td>
				<td>46,000</td>
				<td>85,000</td>
				<td>131,000</td>
				<td>262,000</td>
				<td>393,000</td>
				<td>524,000</td>
				<td>786,000</td>
			</tr>
		</tbody>
	</table>
</div>

					<h3 class="top30 point"><i class="fa fa-check-circle"></i> Relaxコース/ジュニアRelaxコース</h3>

<div class="table-responsive">
	<table class="table">
		<tbody>
			<tr class="bg-skyblue white">
				<td>単位：円</td>
				<td>１週間</td>
				<td>２週間</td>
				<td>４週間</td>
				<td>８週間</td>
				<td>１２週間</td>
				<td>１６週間</td>
				<td>２４週間</td>
			</tr>

			<tr class="">
				<td>１人部屋</td>
				<td>58,000</td>
				<td>108,000</td>
				<td>165,000</td>
				<td>330,000</td>
				<td>495,000</td>
				<td>660,000</td>
				<td>990,000</td>
			</tr>

			<tr class="active">
				<td>２人部屋</td>
				<td>45,000</td>
				<td>84,000</td>
				<td>128,000</td>
				<td>256,000</td>
				<td>384,000</td>
				<td>512,000</td>
				<td>768,000</td>
			</tr>

			<tr class="">
				<td>３人部屋</td>
				<td>38,000</td>
				<td>71,000</td>
				<td>108,000</td>
				<td>216,000</td>
				<td>324,000</td>
				<td>432,000</td>
				<td>648,000</td>
			</tr>
		</tbody>
	</table>
</div>

					<h3 class="top30 point"><i class="fa fa-check-circle"></i> Attendコース</h3>

<div class="table-responsive">
	<table class="table">
		<tbody>
			<tr class="bg-skyblue white">
				<td>単位：円</td>
				<td>１週間</td>
				<td>２週間</td>
				<td>４週間</td>
				<td>８週間</td>
				<td>１２週間</td>
				<td>１６週間</td>
				<td>２４週間</td>
			</tr>

			<tr class="">
				<td>１人部屋</td>
				<td>43,000</td>
				<td>79,000</td>
				<td>123,000</td>
				<td>246,000</td>
				<td>369,000</td>
				<td>492,000</td>
				<td>738,000</td>
			</tr>

			<tr class="active">
				<td>２人部屋</td>
				<td>38,000</td>
				<td>71,000</td>
				<td>108,000</td>
				<td>216,000</td>
				<td>324,000</td>
				<td>432,000</td>
				<td>648,000</td>
			</tr>

			<tr class="">
				<td>３人部屋</td>
				<td>29,600</td>
				<td>54,000</td>
				<td>84,000</td>
				<td>168,000</td>
				<td>242,000</td>
				<td>336,000</td>
				<td>504,000</td>
			</tr>
		</tbody>
	</table>
</div>

					<!-- CV button -->
					<?php get_template_part( 'button/cv-button' ); ?>

					<h2 id="picture" class="detail-h2 detail-h2-sp top40"><span id="number" class="spnone">05</span><?php echo $school_name; ?>の学校写真</h2>

					<a class="venobox col-sm-4 col-xs-6 padding5" href="<?php bloginfo('stylesheet_directory'); ?>/images/school/bayside-rpc/.jpg">
						<img src="<?php bloginfo('stylesheet_directory'); ?>/images/school/bayside-rpc/.jpg.jpg" alt="image alt" class="img-responsive max-width" />
					</a>
					<a class="venobox col-sm-4 col-xs-6 padding5" href="<?php bloginfo('stylesheet_directory'); ?>/images/school/bayside-rpc/.jpg">
						<img src="<?php bloginfo('stylesheet_directory'); ?>/images/school/bayside-rpc/.jpg.jpg" alt="image alt" class="img-responsive max-width" />
					</a>
					<a class="venobox col-sm-4 col-xs-6 padding5" href="<?php bloginfo('stylesheet_directory'); ?>/images/school/bayside-rpc/.jpg">
						<img src="<?php bloginfo('stylesheet_directory'); ?>/images/school/bayside-rpc/.jpg.jpg" alt="image alt" class="img-responsive max-width" />
					</a>

					<a class="venobox col-sm-4 col-xs-6 padding5" href="<?php bloginfo('stylesheet_directory'); ?>/images/school/bayside-rpc/.jpg">
						<img src="<?php bloginfo('stylesheet_directory'); ?>/images/school/bayside-rpc/.jpg.jpg" alt="image alt" class="img-responsive max-width" />
					</a>
					<a class="venobox col-sm-4 col-xs-6 padding5" href="<?php bloginfo('stylesheet_directory'); ?>/images/school/bayside-rpc/.jpg">
						<img src="<?php bloginfo('stylesheet_directory'); ?>/images/school/bayside-rpc/.jpg.jpg" alt="image alt" class="img-responsive max-width" />
					</a>
					<a class="venobox col-sm-4 col-xs-6 padding5" href="<?php bloginfo('stylesheet_directory'); ?>/images/school/bayside-rpc/.jpg">
						<img src="<?php bloginfo('stylesheet_directory'); ?>/images/school/bayside-rpc/.jpg.jpg" alt="image alt" class="img-responsive max-width" />
					</a>

					<a class="venobox col-sm-4 col-xs-6 padding5" href="<?php bloginfo('stylesheet_directory'); ?>/images/school/bayside-rpc/.jpg">
						<img src="<?php bloginfo('stylesheet_directory'); ?>/images/school/bayside-rpc/.jpg.jpg" alt="image alt" class="img-responsive max-width" />
					</a>
					<a class="venobox col-sm-4 col-xs-6 padding5" href="<?php bloginfo('stylesheet_directory'); ?>/images/school/bayside-rpc/.jpg">
						<img src="<?php bloginfo('stylesheet_directory'); ?>/images/school/bayside-rpc/.jpg.jpg" alt="image alt" class="img-responsive max-width" />
					</a>
					<a class="venobox col-sm-4 col-xs-6 padding5" href="<?php bloginfo('stylesheet_directory'); ?>/images/school/bayside-rpc/.jpg">
						<img src="<?php bloginfo('stylesheet_directory'); ?>/images/school/bayside-rpc/.jpg.jpg" alt="image alt" class="img-responsive max-width" />
					</a>

					<div style="clear: both;" class="top30"></div>

					<!-- CV button -->
					<?php get_template_part( 'button/cv-button' ); ?>

					<h2 id="data" class="detail-h2 detail-h2-sp top40"><span id="number" class="spnone">06</span><?php echo $school_name; ?>の学校データ</h2>

<div class="table-responsive">

	<table class="table">
		<tbody>
			<tr class="">
				<th scope="row" class="bg-skyblue white">住所</th>
				<td colspan="3">
				Barangay Agus, Lapu-Lapu City, Cebu, Philippines
				</td>
			</tr>
			<tr class="">
				<th scope="row" class="bg-skyblue white">アクセス</th>
				<td colspan="3" class="active">マクタン・セブ国際空港より車で約20分</td>
			</tr>
			<tr class="">
				<th scope="row" class="bg-skyblue white">設立年度</th>
				<td colspan="3">2005年</td>
			</tr>
			<tr class="">
				<th scope="row" class="bg-skyblue white">講師数</th>
				<td colspan="3" class="active">150名</td>
			</tr>
			<tr class="">
				<th scope="row" class="bg-skyblue white">学生定員</th>
				<td colspan="3">250名</td>
			</tr>
			<tr class="">
				<th scope="row" class="bg-skyblue white">日本人比率</th>
				<td colspan="3" class="active">70〜80％</td>
			</tr>
			<tr class="">
				<th scope="row" class="bg-skyblue white">学校施設</th>
				<td colspan="3">図書室、自習室、食堂、プール、売店、卓球台、ビリヤード台、ウェイトトレーニング器具、インターナショナルスクール、など</td>
			</tr>
			<tr class="">
				<th scope="row" class="bg-skyblue white">宿泊形態</th>
				<td colspan="3" class="active">学校寮・・・1人部屋、２人部屋、３人部屋</td>
			</tr>
			<tr class="">
				<th scope="row" class="bg-skyblue white">宿泊設備</th>
				<td colspan="3">
					ベッド、机、椅子、冷蔵庫、棚、トイレ、シャワー　など  <br />
					有料貸出： ドライヤー、携帯電話、デスクライト、延長コード、ポケットWi-Fi
				</td>
			</tr>
			<tr class="">
				<th scope="row" class="bg-skyblue white">日本語スタッフ</th>
				<td colspan="3" class="active">あり</td>
			</tr>
			<tr class="">
				<th scope="row" class="bg-skyblue white">SSP</th>
				<td class="active">取得済み</td>
				<th class="bg-skyblue white">TESDA</th>
				<td class="active">取得済み</td>
			</tr>
		</tbody>
	</table>
</div>

					<!-- CV button -->
					<?php get_template_part( 'button/cv-button' ); ?>
					<?php get_template_part( 'button/search-more' ); ?>


				</article>
			</section>

			</div> <!-- /main col-9 -->

			<?php get_sidebar(); ?>

		</div> <!-- /main row -->
	</main>
</div>

<?php get_footer(); ?>
