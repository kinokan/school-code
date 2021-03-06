<?php
/*
Template Name: CAEA
*/
?>
<?php get_header(); ?>
<?php
$school_name ="CEBU AMERICAN ENGLISH ACADEMY";
?>

			<!-- パンくずリスト -->
			<?php get_template_part( 'breadcrumb-page' ); ?>

			<div class="col-sm-9 sp-padding10"> <!-- main col-9 -->

			<h1 class="detail"  itemprop="name headline">
				<a href="<?php the_permalink(); ?>" title="<?php printf(the_title_attribute('echo=0') ); ?>" itemprop="url"><?php echo $school_name; ?>（セブ島）の学校情報</a>
			</h1>

			<h2 id="balloon-2-bottom">自由な校でコース種類も豊富な落ち着いた大人向けのホテル滞在型語学学校！</h2>

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
						<li>門限なしの自由な雰囲気で、ストレスなく学習できる環境</li>
						<li>日本人経営で安心・安全なサポートを提供。</li>
						<li>様々なコース設定で幅広いニーズに対応</li>
						<li>ホテル滞在でハイクオリティな生活環境の提供</li>
						<li>本格的な日本食の提供により、食事面で心配な方にも安心。</li>
					</ol>

					<h2 id="feature" class="detail-h2 detail-h2-sp top30"><span id="number" class="spnone">01</span><?php echo $school_name; ?>の特徴</h2>
					<p class="detail">
『CEBU AMERICAN ENGLISH ACADEMY（CAEA）』は、自ら経営しているホテルを校舎として利用している語学学校です。					</p>
					<p class="detail">
宿泊施設もホテルということもあり、綺麗な施設で快適に過ごせる環境が整っております。また、食事はホテル内の日本食レストランで食事をして頂く為、本格的な日本料理を食べることができます。食事面で不安がある方や、日本と変わらない生活レベルを求めている方におすすめです。また、『CAEA』は門限がなく自由な校風が特徴の為、ゆったりと自分のペースで生活したい方にも最適です。学校周辺には病院やコンビニ、コーヒーショップ、スーパーマーケットなどがあり、利便性にも優れています。
					</p>
					<p class="detail">
当校のコースは一般英語が学べるレギュラーコース、マンツーマン授業のみが受けられるコース、ビジネスコース、医療英語コース、親子留学コースなど多彩に用意されております。マンツーマン授業は全て学生1人1人にあったカリキュラムで進められていきます。当校のコースは学生のニーズや弱点に焦点を当てた授業の提供に努めています。また、当講師陣は、厳しい採用基準を満たした優秀な講師陣で構成されています。ネイティブスピーカーではないフィリピン人講師だからこそできる、言語習得のノウハウの提供を行っております。
					</p>
					<p class="detail">
また当校は日本人経営の学校ということもあり、いざというときには日本語で相談、サポートが受けられるので安心して留学生活を送ることが可能となっております。週末には講師たちと外出し、フィリピンの文化に触れることで現地の理解を深め、学校外で英語を使うことによる英語力の向上を目的とした、自由参加型のアクティビティの時間を設けています（月1回金曜または土曜に実施）
					</p>

					<!-- CV button -->
					<?php get_template_part( 'button/cv-button' ); ?>

					<h2 id="course" class="detail-h2 detail-h2-sp top40"><span id="number" class="spnone">02</span><?php echo $school_name; ?>のコース紹介</h2>

<div class="table-responsive">
	<table class="table">
		<thead class="t-head">
			<tr>
				<th>プログラム</th>
				<th>マンツーマン</th>
				<th>グループ</th>
				<th>対象レベル</th>
			</tr>
		</thead>

		<tbody>

			<tr class="">
				<th scope="row" class="bg-skyblue white">レギュラーコース</th>
				<td>６時間</td>
				<td>２時間</td>
				<td>初級〜全レベル</td>
			</tr>

			<tr class="">
				<th scope="row" class="bg-skyblue white">マンツーマン6レッスンコース</th>
				<td>６時間</td>
				<td>-</td>
				<td>初級〜全レベル</td>
			</tr>

			<tr class="">
				<th scope="row" class="bg-skyblue white">ビジネス英語コース</th>
				<td>４時間</td>
				<td>-</td>
				<td>中級〜全レベル</td>
			</tr>

			<tr class="">
				<th scope="row" class="bg-skyblue white">医療プロフェッショナル英語コース</th>
				<td>８時間</td>
				<td>２時間</td>
				<td>中級〜全レベル</td>
			</tr>

			<tr class="">
				<th scope="row" class="bg-skyblue white">１人部屋３人家族留学コース</th>
				<td>６時間</td>
				<td>２時間</td>
				<td>初級〜全レベル</td>
			</tr>

			<tr class="">
				<th scope="row" class="bg-skyblue white">付き添い留学コース</th>
				<td>６時間</td>
				<td>２時間</td>
				<td>初級〜全レベル</td>
			</tr>

		</tbody>
	</table>
</div>

					<!-- CV button -->
					<?php get_template_part( 'button/cv-button' ); ?>

					<h2 id="class" class="detail-h2 detail-h2-sp top40"><span id="number" class="spnone">03</span><?php echo $school_name; ?>のカリキュラム</h2>

					<h3 class="top30 point"><i class="fa fa-check-circle"></i> マンツーマン授業</h3>
					<p class="detail">
英語教育で最も評価の高い教科書を用いて、トピック毎に分けられた授業が行われます。学生それぞれの弱点やニーズに合わせて、リーディング、ライティング、リスニング、スピーキングの基本となる4スキルをバランスよく学習していきます。中級～上級レベルの方にも対応できるよう、ビジネス英語、TOEICやTOEFLの試験対策も要望に応じて授業を提供しています。
					</p>

					<h3 class="top30 point"><i class="fa fa-check-circle"></i> グループ授業</h3>
					<p class="detail">
2人から4人のグループで、ディスカッション、プレゼンテーション、スピーチライティングを中心に行います。自分に意見を述べることでスピーキング力を向上させるだけではなく、他の学生の意見も聞くことで自らの英語力アップにもつながります。
					</p>

					<h3 class="top30 point"><i class="fa fa-check-circle"></i> 付き添い留学コースの注意点</h3>
					<p class="detail">以下の、２パターンからお選びください。
											※付き添い者への授業提供はありません。</p>
						<ul>
							<li>付き添い留学Aコース…学生1名と保護者1名</li>
							<li>付き添い留学Bコース…学生2名と保護者1名</li>
						</ul>

					<!-- CV button -->
					<?php get_template_part( 'button/cv-button' ); ?>

					<h2 id="price" class="detail-h2 detail-h2-sp top40"><span id="number" class="spnone">04</span><?php echo $school_name; ?>の料金表</h2>

					<h3 class="top30 point"><i class="fa fa-check-circle"></i> レギュラーコース</h3>

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
				<td>89,000</td>
				<td>169,000</td>
				<td>276,000</td>
				<td>540,000</td>
				<td>792,000</td>
				<td>1,032,000</td>
				<td>1,488,000</td>
			</tr>

			<tr class="active">
				<td>２人部屋</td>
				<td>82,000</td>
				<td>155,000</td>
				<td>248,000</td>
				<td>484,000</td>
				<td>708,000</td>
				<td>920,000</td>
				<td>1,320,000</td>
			</tr>

			<tr class="">
				<td>エコノミー</td>
				<td>86,500</td>
				<td>164,000</td>
				<td>266,000</td>
				<td>520,000</td>
				<td>762,000</td>
				<td>992,000</td>
				<td>1,428,000</td>
			</tr>
		</tbody>
	</table>
</div>

					<h3 class="top30 point"><i class="fa fa-check-circle"></i> マンツーマン6レッスンコース</h3>

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
				<td>86,000</td>
				<td>163,000</td>
				<td>264,000</td>
				<td>516,000</td>
				<td>756,000</td>
				<td>984,000</td>
				<td>1,416,000</td>
			</tr>

			<tr class="active">
				<td>２人部屋</td>
				<td>79,000</td>
				<td>149,000</td>
				<td>236,000</td>
				<td>460,000</td>
				<td>672,000</td>
				<td>872,000</td>
				<td>1,248,000</td>
			</tr>

			<tr class="">
				<td>エコノミー</td>
				<td>83,500</td>
				<td>158,000</td>
				<td>254,000</td>
				<td>496,000</td>
				<td>726,000</td>
				<td>944,000</td>
				<td>1,356,000</td>
			</tr>
		</tbody>
	</table>
</div>

					<h3 class="top30 point"><i class="fa fa-check-circle"></i> ビジネス英語８レッスンコース（※ビジネス英語コース利用者は、1人部屋のみのご利用となります）</h3>

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
				<td>95,000</td>
				<td>181,000</td>
				<td>300,000</td>
				<td>588,000</td>
				<td>864,000</td>
				<td>1,128,000</td>
				<td>1,632,000</td>
			</tr>

			<tr class="active">
				<td>エコノミー</td>
				<td>92,500</td>
				<td>176,000</td>
				<td>290,000</td>
				<td>568,000</td>
				<td>834,000</td>
				<td>1,088,000</td>
				<td>1,572,000</td>
			</tr>

		</tbody>
	</table>
</div>

					<h3 class="top30 point"><i class="fa fa-check-circle"></i> ビジネス英語６レッスンコース（※ビジネス英語コース利用者は、1人部屋のみのご利用となります）</h3>

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
				<td>92,000</td>
				<td>175,000</td>
				<td>288,000</td>
				<td>564,000</td>
				<td>828,000</td>
				<td>1,080,000</td>
				<td>1,560,000</td>
			</tr>

			<tr class="active">
				<td>エコノミー</td>
				<td>89,500</td>
				<td>170,000</td>
				<td>278,000</td>
				<td>544,000</td>
				<td>798,000</td>
				<td>1,040,000</td>
				<td>1,500,000</td>
			</tr>

		</tbody>
	</table>
</div>

					<h3 class="top30 point"><i class="fa fa-check-circle"></i> 医療プロフェッショナル英語８レッスンコース（※医療プロフェッショナル英語コース利用者は、1人部屋のみのご利用となります）</h3>

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
				<td>97,000</td>
				<td>185,000</td>
				<td>308,000</td>
				<td>604,000</td>
				<td>888,000</td>
				<td>1,160,000</td>
				<td>1,680,000</td>
			</tr>

			<tr class="active">
				<td>エコノミー</td>
				<td>94,500</td>
				<td>180,000</td>
				<td>298,000</td>
				<td>584,000</td>
				<td>858,000</td>
				<td>1,120,000</td>
				<td>1,620,000</td>
			</tr>

		</tbody>
	</table>
</div>

					<h3 class="top30 point"><i class="fa fa-check-circle"></i> 医療プロフェッショナル英語６レッスンコース（※医療プロフェッショナル英語コース利用者は、1人部屋のみのご利用となります）</h3>

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
				<td>94,000</td>
				<td>179,000</td>
				<td>296,000</td>
				<td>580,000</td>
				<td>852,000</td>
				<td>1,112,000</td>
				<td>1,608,000</td>
			</tr>

			<tr class="active">
				<td>エコノミー</td>
				<td>91,500</td>
				<td>174,000</td>
				<td>286,000</td>
				<td>560,000</td>
				<td>822,000</td>
				<td>1,072,000</td>
				<td>1,548,000</td>
			</tr>

		</tbody>
	</table>
</div>

					<h3 class="top30 point"><i class="fa fa-check-circle"></i> 1部屋3人家族留学コース (※1人当たりの金額です)</h3>

<div class="table-responsive">
	<table class="table">
		<tbody>
			<tr class="bg-skyblue white">
				<td>単位：円</td>
				<td>１週間</td>
				<td>２週間</td>
				<td>３週間</td>
				<td>４週間</td>
				<td>８週間</td>
			</tr>

			<tr class="">
				<td>８レッスン</td>
				<td>73,000</td>
				<td>132,000</td>
				<td>186,000</td>
				<td>224,000</td>
				<td>442,000</td>
			</tr>

			<tr class="active">
				<td>６レッスン</td>
				<td>70,000</td>
				<td>126,000</td>
				<td>177,000</td>
				<td>212,000</td>
				<td>420,000</td>
			</tr>
			
		</tbody>
	</table>
</div>

					<h3 class="top30 point"><i class="fa fa-check-circle"></i> 付き添い留学Aコース（※学生1名と保護者1名の金額です）</h3>

<div class="table-responsive">
	<table class="table">
		<tbody>
			<tr class="bg-skyblue white">
				<td>単位：円</td>
				<td>１週間</td>
				<td>２週間</td>
				<td>３週間</td>
				<td>４週間</td>
				<td>８週間</td>
			</tr>

			<tr class="">
				<td>８レッスン</td>
				<td>102,000</td>
				<td>195,400</td>
				<td>264,600</td>
				<td>328,800</td>
				<td>645,600</td>
			</tr>

			<tr class="active">
				<td>６レッスン</td>
				<td>99,200</td>
				<td>189,400</td>
				<td>255,600</td>
				<td>316,800</td>
				<td>621,600</td>
			</tr>

		</tbody>
	</table>
</div>

					<h3 class="top30 point"><i class="fa fa-check-circle"></i> 付き添い留学Bコース（※学生2名と保護者1名の金額です）</h3>

<div class="table-responsive">
	<table class="table">
		<tbody>
			<tr class="bg-skyblue white">
				<td>単位：円</td>
				<td>１週間</td>
				<td>２週間</td>
				<td>３週間</td>
				<td>４週間</td>
				<td>８週間</td>
			</tr>

			<tr class="">
				<td>８レッスン</td>
				<td>177,200</td>
				<td>336,400</td>
				<td>447,600</td>
				<td>548,800</td>
				<td>1,073,600</td>
			</tr>

			<tr class="active">
				<td>６レッスン</td>
				<td>171,200</td>
				<td>324,400</td>
				<td>429,600</td>
				<td>524,800</td>
				<td>1,025,600</td>
			</tr>
		</tbody>
	</table>
</div>


					<!-- CV button -->
					<?php get_template_part( 'button/cv-button' ); ?>

					<h2 id="picture" class="detail-h2 detail-h2-sp top40"><span id="number" class="spnone">05</span><?php echo $school_name; ?>の学校写真</h2>

					<a class="venobox col-sm-4 col-xs-6 padding5" href="<?php bloginfo('stylesheet_directory'); ?>/images/school">
						<img src="<?php bloginfo('stylesheet_directory'); ?>/images/school/" alt="image alt" class="img-responsive max-width" />
					</a>
					<a class="venobox col-sm-4 col-xs-6 padding5" href="<?php bloginfo('stylesheet_directory'); ?>/images/school">
						<img src="<?php bloginfo('stylesheet_directory'); ?>/images/school/" alt="image alt" class="img-responsive max-width" />
					</a>
					<a class="venobox col-sm-4 col-xs-6 padding5" href="<?php bloginfo('stylesheet_directory'); ?>/images/school">
						<img src="<?php bloginfo('stylesheet_directory'); ?>/images/school/" alt="image alt" class="img-responsive max-width" />
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
				#11 Don Jose Avila St. Capitol site 6000, Cebu, Phillipines
				</td>
			</tr>
			<tr class="">
				<th scope="row" class="bg-skyblue white">アクセス</th>
				<td colspan="3" class="active">セブ・マクタン空港から車で約30分</td>
			</tr>
			<tr class="">
				<th scope="row" class="bg-skyblue white">設立年度</th>
				<td colspan="3">2012年</td>
			</tr>
			<tr class="">
				<th scope="row" class="bg-skyblue white">講師数</th>
				<td colspan="3" class="active">16名 スタッフ80名</td>
			</tr>
			<tr class="">
				<th scope="row" class="bg-skyblue white">学生定員</th>
				<td colspan="3">50名</td>
			</tr>
			<tr class="">
				<th scope="row" class="bg-skyblue white">日本人比率</th>
				<td colspan="3" class="active">100％</td>
			</tr>
			<tr class="">
				<th scope="row" class="bg-skyblue white">学校施設</th>
				<td colspan="3">日本食レストラン、売店、マッサージ、屋上バー、など</td>
			</tr>
			<tr class="">
				<th scope="row" class="bg-skyblue white">宿泊形態</th>
				<td colspan="3" class="active">学校寮・・・1人部屋、２人部屋</td>
			</tr>
			<tr class="">
				<th scope="row" class="bg-skyblue white">宿泊設備</th>
				<td colspan="3">
					バスタブ、ウォシュレット付トイレ、Wi-Fi、電気ポット、ドライヤー <br />
					ケーブルテレビ、冷蔵庫、勉強机、クローゼット、エアコン、セーフティボックス、など
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
