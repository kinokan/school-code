<?php
/*
Template Name: First English
*/
?>
<?php get_header(); ?>
<?php
$school_name ="First English";
?>
			<!-- パンくずリスト -->
			<?php get_template_part( 'breadcrumb-page' ); ?>

			<div class="col-sm-9 sp-padding10"> <!-- main col-9 -->

			<h1 class="detail"  itemprop="name headline">
				<a href="<?php the_permalink(); ?>" title="<?php printf(the_title_attribute('echo=0') ); ?>" itemprop="url"><?php echo $school_name; ?>（セブ島）の学校情報</a>
			</h1>

			<h2 id="balloon-2-bottom">日本人が最も苦手とする分野に重点を置いたカリキュラムや、キッズプログラム、ベビーシッターサービスも充実している日本人資本の経営校</h2>

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
『First English Global College』は、2013年にに開校した日本人資本、経営の語学学校です。語学学校オーナーは日本で学習塾（明光義塾）を経営しており、授業カリキュラムの中に、日本人学生が苦手とする分野の克服や日本人特有の学習システムを用いた内容になっており、他校のカリキュラムに比べて目新しいシステムが多く採用されております。当校の教材は日本語表記のあるものを使用し、日本人の不得意分野である発音やスピード訳を中心に、スピーキングに重点を置いた授業が行われています。独自のスタイルとして、マンツーマンレッスンでは明光義塾でも採用しているオープンスペース型個別ブースを採用しており、他校のように個室タイプの教室ではなくより自然に近い形でのレッスンとなっております。
					</p>
					<p class="detail">
塾経営のノウハウを活かし、個別学生のカルテの作成とバディティーチャーシステムの導入、日本人スタッフによるフォローアップなどバックアップ体制には定評があり、お子様向けのキッズプログラムや未就学児のベビーシッターサービスも充実しているため、親子留学や赤ちゃん連れでの留学も可能となっております。校内ではEOP（English Only Policy：母国語禁止ルール）を推奨しており、EOPバッチやカフェテリアには「English ZONE」テーブルが用意されている為、日本人同士でも英語を使ってコミュニケーションを取ることにより日常から英語環境に身を置くことができます。
					</p>
					<p class="detail">
当校の最大の特徴として、クリスマスやお正月などの特別な祝日以外であっても通常授業を実施しています。その為、祝日の多いフィリピンですが、祝日の固まっている時期でもしっかりと授業時間を確保することができます。特に短期留学の方で特定の時期にしか渡航できない方にとっては、当校の祝日対応は大変融通の利く学校と言えるでしょう。日本人資本、経営校であることから、海外経験が豊富な日本人スタッフが生活面と学習面の両面からしっかりとサポートしてくれます。
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
				<th scope="row" class="bg-skyblue white">Generalコース</th>
				<td>４時間</td>
				<td>４時間</td>
				<td>初級〜全レベル</td>
			</tr>

			<tr class="">
				<th scope="row" class="bg-skyblue white">Perfect 9 Man to Manコース</th>
				<td>９時間</td>
				<td>-</td>
				<td>初級〜全レベル</td>
			</tr>

			<tr class="">
				<th scope="row" class="bg-skyblue white">TOEICコース</th>
				<td>５時間</td>
				<td>４時間</td>
				<td>初級〜全レベル</td>
			</tr>

			<tr class="">
				<th scope="row" class="bg-skyblue white">TOEFLコース</th>
				<td>５時間</td>
				<td>４時間</td>
				<td>中級〜全レベル</td>
			</tr>

			<tr class="">
				<th scope="row" class="bg-skyblue white">IELTSコース</th>
				<td>５時間</td>
				<td>４時間</td>
				<td>中級〜全レベル</td>
			</tr>

			<tr class="">
				<th scope="row" class="bg-skyblue white">Businessコース</th>
				<td>５時間</td>
				<td>４時間</td>
				<td>中級〜全レベル</td>
			</tr>

			<tr class="">
				<th scope="row" class="bg-skyblue white">Kids Generalコース</th>
				<td>６時間</td>
				<td>-</td>
				<td>初級〜全レベル</td>
			</tr>

		</tbody>
	</table>
</div>

					<!-- CV button -->
					<?php get_template_part( 'button/cv-button' ); ?>

					<h2 id="class" class="detail-h2 detail-h2-sp top40"><span id="number" class="spnone">03</span><?php echo $school_name; ?>のカリキュラム</h2>

					<h3 class="top30 point"><i class="fa fa-check-circle"></i> Pronunciation(発音)</h3>
					<p class="detail">
日本人の苦手な発音を重点的に練習します。すべての母音と子音をチェックし、どの発音が苦手かを確認します。特に苦手とする発音を何度も反復練習を行うため、しっかりとした発音を身に着けることができます。
					</p>

					<h3 class="top30 point"><i class="fa fa-check-circle"></i> Instant Translation (瞬間翻訳)</h3>
					<p class="detail">
自分の意思をすらすらと伝えられるように、英語ですぐに答えられる訓練を行います。日本語訳を見て頂き、その内容をすぐに英語で答えられる反復練習を行います。
					</p>

					<h3 class="top30 point"><i class="fa fa-check-circle"></i> VOA L/S (リスニング&スピーキング)</h3>
					<p class="detail">
VOA（ボイス・オブ・アメリカ）は、アメリカで報道されているニュースを中学や高校で出てくる基本的な1,500単語で表現した学習教材です。日常会話のみならず日常で起きている最新の題材を取り上げ、時事問題にも対応できる英語力を養います。ニュース内容をきちんと理解し要点をまとめて話す訓練と、記事の内容について講師とディスカッションを行います。
					</p>

					<h3 class="top30 point"><i class="fa fa-check-circle"></i> Situation Based Training (状況別実践英会話)</h3>
					<p class="detail">
ホテル、レストラン、病院の予約など日常の様々なシーンを想定して、実践で使える表現を学びます。それぞれのシーンで良く使う典型的なパターン英語が存在するため、ロールプレイを通して必要表現をマスターしていきます。
					</p>

					<h3 class="top30 point"><i class="fa fa-check-circle"></i> Review & Summary (復習と要約)</h3>
					<p class="detail">
バディティーチャーと授業の復習や宿題の確認などを毎日行います。学習成果の確認や、どこに問題があるのかを抽出し足りない部分を補い、得意とする分野を伸ばしていきます。
					</p>

					<h3 class="top30 point"><i class="fa fa-check-circle"></i> Debate Class (討論クラス)</h3>
					<p class="detail">
グループクラス内で様々なテーマについて討論します。その中で、自分の意見を述べる力と他の学生の主張を正しく解釈する力を身に着けていきます。英語で理論的に自分の考えを伝える技術を学び、実践の場でも自己主張ができるように訓練します。
					</p>

					<h3 class="top30 point"><i class="fa fa-check-circle"></i> Presentation (プレゼンテーション)</h3>
					<p class="detail">
様々なトピックを基に、人前で自信をもって自分の意見を述べられるようにする練習を行います。プレゼンテーションを行う中で効果的に伝えられる資料の作成など、単に英語を人前で話すだけではないプレゼンテーション全体の技術を身に着けます。
					</p>

					<h3 class="top30 point"><i class="fa fa-check-circle"></i> Useful Expression (イディオム強化)</h3>
					<p class="detail">
英語ならではの表現、イディオムを学習します。ネイティブが良く使う表現を学び、ネイティブのみのパーティーやビジネスの場に参加した時にでも対応できる対応力を強化します。
					</p>

					<h3 class="top30 point"><i class="fa fa-check-circle"></i> Business</h3>
					<p class="detail">
ビジネスシーンで必要となる英語力を身付けるために様々な英語表現を学習します。
					</p>

					<h3 class="top30 point"><i class="fa fa-check-circle"></i> TOEIC</h3>
					<p class="detail">
TOEICの過去問題を多く解くことで、TOEICの問題に慣れていきます。その中で高得点獲得に繋がるコツやポイントを身に付けます。
					</p>

					<h3 class="top30 point"><i class="fa fa-check-circle"></i> TOEFL／IELTS</h3>
					<p class="detail">
アメリカやオーストラリアなどの英語圏での大学進学を希望している人向けのクラスです。海外での大学進学に必要な英語力を図るためのTOEFL、IELTSの試験対策を行います。
					</p>

					<h3 class="top30 point"><i class="fa fa-check-circle"></i> キッズプログラム</h3>
					<ul class="">
						<li class="bold">Phonics</li>
							<p>英語の基本となるフォニックス（発音）のルールを学び、単語がスラスラと読めるように勉強します。</p>
						<li class="bold">Useful Expression</li>
							<p>英語ならではの表現、イディオムを学習します。お子様でも理解できる内容で構成されています。</p>
						<li class="bold">Vocabulary & Writing</li>
							<p>語彙力を増やしていきながら、各お子様の年齢に応じたライティング力も身につけていきます。</p>
						<li class="bold">Music & Arts</li>
							<p>講師とダンスをしたり、工作をしたり、遊びながら英語を学んでいきます。英語に親しみを持ってもらい、英語を使う楽しさを感じて頂く内容になっています。</p>
						<li class="bold">Grammar</li>
							<p>子供が使う表現を抽出し、正しい構文で文章を組み立てられるように、英語のルールを学んでいきます。</p>
						<li class="bold">Review</li>
							<p>毎日バディティーチャーとコミュニケーションを取り、レッスンの中での不安や相談、効果的な復習や宿題確認を行います。</p>
					</ul>

					<!-- CV button -->
					<?php get_template_part( 'button/cv-button' ); ?>

					<h2 id="price" class="detail-h2 detail-h2-sp top40"><span id="number" class="spnone">04</span><?php echo $school_name; ?>の料金表</h2>

					<h3 class="top30 point"><i class="fa fa-check-circle"></i> General コース</h3>

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

					<h3 class="top30 point"><i class="fa fa-check-circle"></i> Perfect 9 Man to Manコース</h3>

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

					<h3 class="top30 point"><i class="fa fa-check-circle"></i> TOEIC / ビジネス英語コース</h3>

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

					<h3 class="top30 point"><i class="fa fa-check-circle"></i> TOEFL / IELTSコース</h3>

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

					<h3 class="top30 point"><i class="fa fa-check-circle"></i> Kids Generalコース</h3>

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

					<h3 class="top30 point"><i class="fa fa-check-circle"></i> ベビーシッターサービス</h3>

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
				Lot 3 and 4, Vistamar Subd. DapdapLapu-lapu city, Cebu
				</td>
			</tr>
			<tr class="">
				<th scope="row" class="bg-skyblue white">アクセス</th>
				<td colspan="3" class="active">セブ・マクタン空港より車で約15分。</td>
			</tr>
			<tr class="">
				<th scope="row" class="bg-skyblue white">設立年度</th>
				<td colspan="3">2003年6月</td>
			</tr>
			<tr class="">
				<th scope="row" class="bg-skyblue white">講師数</th>
				<td colspan="3" class="active">40名 スタッフ24名</td>
			</tr>
			<tr class="">
				<th scope="row" class="bg-skyblue white">学生定員</th>
				<td colspan="3">70名</td>
			</tr>
			<tr class="">
				<th scope="row" class="bg-skyblue white">日本人比率</th>
				<td colspan="3" class="active">100％</td>
			</tr>
			<tr class="">
				<th scope="row" class="bg-skyblue white">学校施設</th>
				<td colspan="3">自習室、売店、食堂、学生ラウンジ、保育ルーム、など</td>
			</tr>
			<tr class="">
				<th scope="row" class="bg-skyblue white">宿泊形態</th>
				<td colspan="3" class="active">学校寮・・・1人部屋、２人部屋、３人部屋</td>
			</tr>
			<tr class="">
				<th scope="row" class="bg-skyblue white">宿泊設備</th>
				<td colspan="3">
					机、椅子、クローゼット、ベッド、エアコン、シャワー、トイレ、など
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