<?php
/*
Template Name: 3D Academy
*/
?>
<?php get_header(); ?>
<?php
$school_name ="3D Academy";
?>

			<!-- パンくずリスト -->
			<?php get_template_part( 'breadcrumb-page' ); ?>

			<div class="col-sm-9 sp-padding10"> <!-- main col-9 -->

			<h1 class="detail"  itemprop="name headline">
				<a href="<?php the_permalink(); ?>" title="<?php printf(the_title_attribute('echo=0') ); ?>" itemprop="url"><?php echo $school_name; ?>（セブ島）の学校情報</a>
			</h1>

			<h2 id="balloon-2-bottom">学生の夢や目標を実現できるように完全サポート、スピーキングに力を入れた語学学校！</h2>

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
						<li>暗記授業は無く、スピーキングを重視したカリキュラム。</li>
						<li>ショッピングモール内にある便利な立地。</li>
						<li>経験ある教師の指導の元で安心できる親子留学を提供。</li>
						<li>月1回の旅行企画や学校主催の社会奉仕プログラム有り。</li>
						<li>学食は日本人調理師免許保持者によるメニューで美味しく安心。</li>
						<li>ホテル外部寮は新築で快適さと清潔感◎。</li>
					</ol>

					<h2 id="feature" class="detail-h2 detail-h2-sp top30"><span id="number" class="spnone">01</span><?php echo $school_name; ?>の特徴</h2>
					<p class="detail">
					『3D Academy』は、2013年より『MTM CEBU Language Institute』からノウハウと人材を受け継ぎ、名称を新しく変更致しました。当校はセブ振興エリアのITパーク付近に位置し、ショッピングセンターの敷地内に学校があるという大変便利なロケーションになっております。学校名称と共にオーナーが変わり、日本人資本のスクールへと生まれ変わりました。<br />
					</p>
					<p class="detail">
					カリキュラムはスピーキングの強化がメインで構成されております。英文の丸暗記学習をできるだけ無くし、「アウトプット後にインプット」という英語に慣れる方法でレッスンが行われます。マンツーマン授業でスピーキングを中心に勉強し、グループ授業では学生の目的に合った分野を学習します。会話強化をメインとしたESLコースのみならず、IELTSコース、TOEICコース、マンツーマン特化コース、TOEFLコース、そしてビジネス英語コースも開講しマンツーマン授業を受けながら目標点数に向けて学習することができます。学校内外で何か困ったことがある場合や緊急事態の場合は、経験豊富な日本人スタッフが対応してくれます。
					</p>
					<p class="detail">
					当校は学生同士の交流も重視しアクティビティも豊富に企画しており孤児院や高齢者施設、小学校などを訪問して寄付活動を行うなど様々なボランティアが月1度のペースで開催されております。また、講師によって企画＆実施される旅行アクティビティは人気があり、英語に積極的な学生達が毎回多く参加しております。勉強だけでなく学生同士の交流も深めることにより、生活面をさらに充実させた時間を過ごすことができます。フィリピンの生活や文化に触れる絶好のチャンスとなっていることも、当校の人気の理由の一つです。他にも平日午後の空いた時間に英語でダンスを習う企画や、夜には英語字幕での映画鑑賞会に参加など、気分転換をしながら楽しく学習できるアクティビティが用意されております
					</p>

					<!-- CV button -->
					<?php get_template_part( 'button/cv-button' ); ?>

					<h2 id="course" class="detail-h2 detail-h2-sp top40"><span id="number" class="spnone">02</span><?php echo $school_name; ?>のコース紹介</h2>

<div class="table-responsive">
	<table class="table">
		<thead class="t-head">
			<tr>
				<th>プログラム</th>
				<th>コマ数</th>
				<th>形態</th>
			</tr>
		</thead>

		<tbody>
			<tr>
				<th scope="row" class="bg-skyblue white"  id="t-middle">ESLコース</th>
				<td class="active">７コマ</td>
				<td>
				<i class="fa fa-check"></i> 1:1授業4コマ＋グループ授業3コマの構成<br />
				<i class="fa fa-check"></i> 1:5授業は次の中から1コマを選択制<br />
				&nbsp;&nbsp;&nbsp;（小グループ、アカデミックスパルタ）<br />
				<i class="fa fa-check"></i> ネィティブスピーカーによる発音授業1コマ<br />
				</td>
			</tr>

			<tr class="">
				<th scope="row" class="bg-skyblue-light white" id="t-middle">マンツーマン特化コース</th>
				<td class="active">９コマ</td>
				<td class="active"><i class="fa fa-check"></i> 1:1授業7コマ＋オプション授業2コマの構成</td>
			</tr>

			<tr class="">
				<th scope="row" class="bg-skyblue white" id="t-middle" >TOEICコース</th>
				<td>９コマ</td>
				<td>
				<i class="fa fa-check"></i> 1:1TOEIC授業2コマ＋ESL授業2コマの構成<br />
				<i class="fa fa-check"></i> グループ授業はTOEICグループ2コマ＋ESLグループ1コマ<br />
				<i class="fa fa-check"></i> オプション授業2コマ<br />
				</td>
			</tr>

			<tr class="">
				<th scope="row" class="bg-skyblue-light white" id="t-middle">IELTSコース</th>
				<td>９コマ</td>
				<td>
				<i class="fa fa-check"></i> 1:1IELTSL授業2コマ＋ESL授業2コマの構成<br />
				<i class="fa fa-check"></i> グループ授業はIELTSグループ2コマ＋ESLグループ1コマ<br />
				<i class="fa fa-check"></i> オプション授業2コマ<br />
				</td>
			</tr>

			<tr class="">
				<th scope="row" class="bg-skyblue white" id="t-middle" >TOEFLコース</th>
				<td>９コマ</td>
				<td>
				<i class="fa fa-check"></i> 1:1TOEFL授業2コマ＋ESL授業2コマの構成 <br />
				<i class="fa fa-check"></i> グループ授業はTOEFLグループ2コマ＋ESLグループ1コマ<br />
				<i class="fa fa-check"></i> オプション授業2コマ<br />
				</td>
			</tr>
			<tr class="">
				<th scope="row" class="bg-skyblue-light white" id="t-middle">ビジネスコース</th>
				<td>９コマ</td>
				<td>
				<i class="fa fa-check"></i> 1:1ビジネスマンツーマン授業2コマ＋ESL授業2コマの構成<br />
				<i class="fa fa-check"></i> グループ授業はビジネスグループ１コマ<br />
				&nbsp;&nbsp;&nbsp;&nbsp;＋ESLグループ1コマ＋ネイティブグループ1コマ <br />
				<i class="fa fa-check"></i> オプション授業2コマ<br />
				</td>
			</tr>

		</tbody>
	</table>
</div>
					<!-- CV button -->
					<?php get_template_part( 'button/cv-button' ); ?>

					<h2 id="class" class="detail-h2 detail-h2-sp top40"><span id="number" class="spnone">03</span><?php echo $school_name; ?>のカリキュラム紹介</h2>

					<h3 class="top30 point"><i class="fa fa-check-circle"></i> 1:1 授業</h3>
					<p class="detail">
					会話力の強化、ネイティブの良く使う表現力の習得。
					</p>

					<h3 class="top30 point"><i class="fa fa-check-circle"></i> 1:5授業</h3>
					<p class="detail">
					ビジネスシーンでのコミュニケーション力強化、人前で効果的に自分の意志を伝える表現力。
					</p>

					<h3 class="top30 point"><i class="fa fa-check-circle"></i> Multimedia Understanding</h3>
					<p class="detail">
					実務書、ニュースやWEBなどの英語メディアを通して自然な表現の理解、メッセージ内容の奥底にある意味を汲み取る理解。
					</p>

					<h3 class="top30 point"><i class="fa fa-check-circle"></i> Speech Practice</h3>
					<p class="detail">
					同じ文章や単語をスムーズに発音できるまで繰り返し練習、人前でのスピーチを流暢に行う訓練。
					</p>

					<h3 class="top30 point"><i class="fa fa-check-circle"></i> English Demo</h3>
					<p class="detail">
					プレゼンテーションなどのスピーチ練習、表現を相手に正しく伝えるためのプログラムの組み立てを学習。
					</p>

					<h3 class="top30 point"><i class="fa fa-check-circle"></i> Movie Understanding Practice</h3>
					<p class="detail">
					映画を利用して、発音や表現を練習。日常生活やフォーマルな場で良く使われる表現を抽出し、実践で使われる口語表現を習得。
					</p>

					<h3 class="top30 point"><i class="fa fa-check-circle"></i> Native Communication</h3>
					<p class="detail">
					ネイティブ独特の表現、言い回し、発音を練習。ネイティブ講師とフィリピン人講師の言い回しや発音の違いを学習。
					</p>

					<h3 class="top30 point"><i class="fa fa-check-circle"></i> TOEIC Practice</h3>
					<p class="detail">
					TOEICのスコアアップに必要とされるリスニング強化、文法強化、語彙の強化を総合的に学習。
					</p>

					<h3 class="top30 point"><i class="fa fa-check-circle"></i> IELTS Practice</h3>
					<p class="detail">
					IELTSのテクニックを学びながらリスニング、ライティング、リーディング、スピーキングをバランスよく学習。
					</p>

					<h3 class="top30 point"><i class="fa fa-check-circle"></i> TOEFL Practice</h3>
					<p class="detail">
					リスニング、ライティング、リーディング、スピーキングの総合的に4つの技能スキルを総合的に強化。
					</p>


					<!-- CV button -->
					<?php get_template_part( 'button/cv-button' ); ?>

					<h2 id="price" class="detail-h2 detail-h2-sp top40"><span id="number" class="spnone">04</span><?php echo $school_name; ?>の料金表</h2>

					<h3 class="top30 point"><i class="fa fa-check-circle"></i> ESLコース</h3>

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
				<td>74,000</td>
				<td>96,000</td>
				<td>157,000</td>
				<td>309,000</td>
				<td>461,000</td>
				<td>613,000</td>
				<td>917,000</td>
			</tr>

			<tr class="active">
				<td>２人部屋</td>
				<td>74,000</td>
				<td>96,000</td>
				<td>157,000</td>
				<td>309,000</td>
				<td>461,000</td>
				<td>613,000</td>
				<td>917,000</td>
			</tr>

			<tr class="">
				<td>３人部屋</td>
				<td>74,000</td>
				<td>96,000</td>
				<td>157,000</td>
				<td>309,000</td>
				<td>461,000</td>
				<td>613,000</td>
				<td>917,000</td>
			</tr>
		</tbody>
	</table>
</div>

					<h3 class="top30 point"><i class="fa fa-check-circle"></i> マンツーマン特化コース / TOEIC / IELTS / TOEFL / Businessコース</h3>

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
				<td>74,000</td>
				<td>96,000</td>
				<td>157,000</td>
				<td>309,000</td>
				<td>461,000</td>
				<td>613,000</td>
				<td>917,000</td>
			</tr>

			<tr class="active">
				<td>２人部屋</td>
				<td>74,000</td>
				<td>96,000</td>
				<td>157,000</td>
				<td>309,000</td>
				<td>461,000</td>
				<td>613,000</td>
				<td>917,000</td>
			</tr>

			<tr class="">
				<td>３人部屋</td>
				<td>74,000</td>
				<td>96,000</td>
				<td>157,000</td>
				<td>309,000</td>
				<td>461,000</td>
				<td>613,000</td>
				<td>917,000</td>
			</tr>
		</tbody>
	</table>
</div>

					<h3 class="top30 point"><i class="fa fa-check-circle"></i> Juniorコース</h3>

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
				<td>74,000</td>
				<td>96,000</td>
				<td>157,000</td>
				<td>309,000</td>
				<td>461,000</td>
				<td>613,000</td>
				<td>917,000</td>
			</tr>

			<tr class="active">
				<td>２人部屋</td>
				<td>74,000</td>
				<td>96,000</td>
				<td>157,000</td>
				<td>309,000</td>
				<td>461,000</td>
				<td>613,000</td>
				<td>917,000</td>
			</tr>

			<tr class="">
				<td>３人部屋</td>
				<td>74,000</td>
				<td>96,000</td>
				<td>157,000</td>
				<td>309,000</td>
				<td>461,000</td>
				<td>613,000</td>
				<td>917,000</td>
			</tr>
		</tbody>
	</table>
</div>

					<h3 class="top30 point"><i class="fa fa-check-circle"></i> Parents Generalコース</h3>

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
				<td>74,000</td>
				<td>96,000</td>
				<td>157,000</td>
				<td>309,000</td>
				<td>461,000</td>
				<td>613,000</td>
				<td>917,000</td>
			</tr>

			<tr class="active">
				<td>２人部屋</td>
				<td>74,000</td>
				<td>96,000</td>
				<td>157,000</td>
				<td>309,000</td>
				<td>461,000</td>
				<td>613,000</td>
				<td>917,000</td>
			</tr>

			<tr class="">
				<td>３人部屋</td>
				<td>74,000</td>
				<td>96,000</td>
				<td>157,000</td>
				<td>309,000</td>
				<td>461,000</td>
				<td>613,000</td>
				<td>917,000</td>
			</tr>
		</tbody>
	</table>
</div>

					<h3 class="top30 point"><i class="fa fa-check-circle"></i> Parents Vacationコース</h3>

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
				<td>74,000</td>
				<td>96,000</td>
				<td>157,000</td>
				<td>309,000</td>
				<td>461,000</td>
				<td>613,000</td>
				<td>917,000</td>
			</tr>

			<tr class="active">
				<td>２人部屋</td>
				<td>74,000</td>
				<td>96,000</td>
				<td>157,000</td>
				<td>309,000</td>
				<td>461,000</td>
				<td>613,000</td>
				<td>917,000</td>
			</tr>

			<tr class="">
				<td>３人部屋</td>
				<td>74,000</td>
				<td>96,000</td>
				<td>157,000</td>
				<td>309,000</td>
				<td>461,000</td>
				<td>613,000</td>
				<td>917,000</td>
			</tr>
		</tbody>
	</table>
</div>

					<!-- CV button -->
					<?php get_template_part( 'button/cv-button' ); ?>

					<h2 id="picture" class="detail-h2 detail-h2-sp top40"><span id="number" class="spnone">05</span><?php echo $school_name; ?>の学校写真</h2>

					<a class="venobox col-sm-4 col-xs-6 padding5" href="<?php bloginfo('stylesheet_directory'); ?>/images/school/3d/3d_activity_01.jpg">
						<img src="<?php bloginfo('stylesheet_directory'); ?>/images/school/3d/3d_activity_01.jpg" alt="image alt" class="img-responsive max-width" />
					</a>
					<a class="venobox col-sm-4 col-xs-6 padding5" href="<?php bloginfo('stylesheet_directory'); ?>/images/school/3d/3d_cafeteria_01.jpg">
						<img src="<?php bloginfo('stylesheet_directory'); ?>/images/school/3d/3d_cafeteria_01.jpg" alt="image alt" class="img-responsive max-width" />
					</a>
					<a class="venobox col-sm-4 col-xs-6 padding5" href="<?php bloginfo('stylesheet_directory'); ?>/images/school/3d/3d_cafeteria_02.jpg">
						<img src="<?php bloginfo('stylesheet_directory'); ?>/images/school/3d/3d_cafeteria_02.jpg" alt="image alt" class="img-responsive max-width" />
					</a>

					<a class="venobox col-sm-4 col-xs-6 padding5" href="<?php bloginfo('stylesheet_directory'); ?>/images/school/3d/3d_dormitory_01.jpg">
						<img src="<?php bloginfo('stylesheet_directory'); ?>/images/school/3d/3d_dormitory_01.jpg" alt="image alt" class="img-responsive max-width" />
					</a>
					<a class="venobox col-sm-4 col-xs-6 padding5 " href="<?php bloginfo('stylesheet_directory'); ?>/images/school/3d/3d_dormitory_02.jpg">
						<img src="<?php bloginfo('stylesheet_directory'); ?>/images/school/3d/3d_dormitory_02.jpg" alt="image alt" class="img-responsive max-width" />
					</a>
					<a class="venobox col-sm-4 col-xs-6 padding5" href="<?php bloginfo('stylesheet_directory'); ?>/images/school/3d/3d_food_01.jpg">
						<img src="<?php bloginfo('stylesheet_directory'); ?>/images/school/3d/3d_food_01.jpg" alt="image alt" class="img-responsive max-width" />
					</a>

					<a class="venobox col-sm-4 col-xs-6 padding5" href="<?php bloginfo('stylesheet_directory'); ?>/images/school/3d/3d_food_02.jpg">
						<img src="<?php bloginfo('stylesheet_directory'); ?>/images/school/3d/3d_food_02.jpg" alt="image alt" class="img-responsive max-width" />
					</a>
					<a class="venobox col-sm-4 col-xs-6 padding5" href="<?php bloginfo('stylesheet_directory'); ?>/images/school/3d/3d_food_03.jpg">
						<img src="<?php bloginfo('stylesheet_directory'); ?>/images/school/3d/3d_food_03.jpg" alt="image alt" class="img-responsive max-width" />
					</a>
					<a class="venobox col-sm-4 col-xs-6 padding5" href="<?php bloginfo('stylesheet_directory'); ?>/images/school/3d/3d_hotel_01.jpg">
						<img src="<?php bloginfo('stylesheet_directory'); ?>/images/school/3d/3d_hotel_01.jpg" alt="image alt" class="img-responsive max-width" />
					</a>

					<a class="venobox col-sm-4 col-xs-6 padding5" href="<?php bloginfo('stylesheet_directory'); ?>/images/school/3d/3d_hotel_02.jpg">
						<img src="<?php bloginfo('stylesheet_directory'); ?>/images/school/3d/3d_hotel_02.jpg" alt="image alt" class="img-responsive max-width" />
					</a>
					<a class="venobox col-sm-4 col-xs-6 padding5" href="<?php bloginfo('stylesheet_directory'); ?>/images/school/3d/3d_lesson_01.jpg">
						<img src="<?php bloginfo('stylesheet_directory'); ?>/images/school/3d/3d_lesson_01.jpg" alt="image alt" class="img-responsive max-width" />
					</a>
					<a class="venobox col-sm-4 col-xs-6 padding5" href="<?php bloginfo('stylesheet_directory'); ?>/images/school/3d/3d_lesson_02.jpg">
						<img src="<?php bloginfo('stylesheet_directory'); ?>/images/school/3d/3d_lesson_02.jpg" alt="image alt" class="img-responsive max-width" />
					</a>

					<a class="venobox col-sm-4 col-xs-6 padding5" href="<?php bloginfo('stylesheet_directory'); ?>/images/school/3d/3d_lesson_03.jpg">
						<img src="<?php bloginfo('stylesheet_directory'); ?>/images/school/3d/3d_lesson_03.jpg" alt="image alt" class="img-responsive max-width" />
					</a>
					<a class="venobox col-sm-4 col-xs-6 padding5" href="<?php bloginfo('stylesheet_directory'); ?>/images/school/3d/3d_spot_01.jpg">
						<img src="<?php bloginfo('stylesheet_directory'); ?>/images/school/3d/3d_spot_01.jpg" alt="image alt" class="img-responsive max-width" />
					</a>
					<a class="venobox col-sm-4 col-xs-6 padding5" href="<?php bloginfo('stylesheet_directory'); ?>/images/school/3d/3d_spot_02.jpg">
						<img src="<?php bloginfo('stylesheet_directory'); ?>/images/school/3d/3d_spot_02.jpg" alt="image alt" class="img-responsive max-width" />
					</a>

					<a class="venobox col-sm-4 col-xs-6 padding5" href="<?php bloginfo('stylesheet_directory'); ?>/images/school/3d/3d_spot_03.jpg">
						<img src="<?php bloginfo('stylesheet_directory'); ?>/images/school/3d/3d_spot_04.jpg" alt="image alt" class="img-responsive max-width" />
					</a>
					<a class="venobox col-sm-4 col-xs-6 padding5 bottom20" href="<?php bloginfo('stylesheet_directory'); ?>/images/school/3d/3d_volunteer_01.jpg">
						<img src="<?php bloginfo('stylesheet_directory'); ?>/images/school/3d/3d_volunteer_01.jpg" alt="image alt" class="img-responsive max-width" />
					</a>

					<div style="clear: both;" class="top50"></div>

					<!-- CV button -->
					<?php get_template_part( 'button/cv-button' ); ?>

					<h2 id="data" class="detail-h2 detail-h2-sp top40"><span id="number" class="spnone">06</span><?php echo $school_name; ?>の学校データ</h2>

<div class="table-responsive">

	<table class="table">
		<tbody>
			<tr class="">
				<th scope="row" class="bg-skyblue white">住所</th>
				<td colspan="3">2F,　La Nivel Hotel, JY　Square, Lahug, Cebu City,6000, Philippines</td>
			</tr>
			<tr class="">
				<th scope="row" class="bg-skyblue white">アクセス</th>
				<td colspan="3" class="active">セブ・マクタン空港から車で約40分</td>
			</tr>
			<tr class="">
				<th scope="row" class="bg-skyblue white">設立年度</th>
				<td colspan="3">2012年4月</td>
			</tr>
			<tr class="">
				<th scope="row" class="bg-skyblue white">講師数</th>
				<td colspan="3" class="active">45名 スタッフ6名</td>
			</tr>
			<tr class="">
				<th scope="row" class="bg-skyblue white">学生定員</th>
				<td colspan="3">80名</td>
			</tr>
			<tr class="">
				<th scope="row" class="bg-skyblue white">日本人比率</th>
				<td colspan="3" class="active">約40〜50％</td>
			</tr>
			<tr class="">
				<th scope="row" class="bg-skyblue white">学校施設</th>
				<td colspan="3">自習室、休憩室、共有PC、保健室、卓球、隣接のショッピングモールのジム無料使用、など</td>
			</tr>
			<tr class="">
				<th scope="row" class="bg-skyblue white">宿泊形態</th>
				<td colspan="3" class="active">学校寮・・・1人部屋、２人部屋、３人部屋<br />ホテル寮・・・1人部屋、2人部屋　コンドミニアム</td>
			</tr>
			<tr class="">
				<th scope="row" class="bg-skyblue white">宿泊設備</th>
				<td colspan="3">
					TV、ベッド、トイレ、冷蔵庫、エアコン、温水シャワー、机、 椅子、など
				</td>
			</tr>
			<tr class="">
				<th scope="row" class="bg-skyblue white">日本語スタッフ</th>
				<td colspan="3" class="active">あり</td>
			</tr>
			<tr>
				<th scope="row" class="bg-skyblue white">代表電話</th>
				<td>01-1234-1234</td>
				<th class="bg-skyblue-light white">FAX</th>
				<td>00-0000-9090</td>
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