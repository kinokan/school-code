<?php
/*
Template Name: IDEA CEBU
*/
?>
<?php get_header(); ?>
<?php
$school_name ="IDEA CEBU";
?>
			<!-- パンくずリスト -->
			<?php get_template_part( 'breadcrumb-page' ); ?>

			<div class="col-sm-9 sp-padding10"> <!-- main col-9 -->

			<h1 class="detail"  itemprop="name headline">
				<a href="<?php the_permalink(); ?>" title="<?php printf(the_title_attribute('echo=0') ); ?>" itemprop="url"><?php echo $school_name; ?>（セブ島）の学校情報</a>
			</h1>

			<h2 id="balloon-2-bottom">フィリピン留学エージェントを長年運営した経営者が運営するからこそ『かゆい所に手が届く学校』。スピーキング重視のカリキュラムが人気の学校！</h2>

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
						<li>１日マンツーマン最大５コマのスピーキング重視カリキュラム</li>
						<li>授業時間数ごとに分けられた学生の希望に合うコースを用意</li>
						<li>教科目別に形成された段階的かつ体系的カリキュラム</li>
						<li>IDEA CEBUの自慢の食事・日本食トレーニングを受けた調理人による食事提供</li>
						<li>100％日本資本の語学学校</li>
					</ol>

					<h2 id="feature" class="detail-h2 detail-h2-sp top30"><span id="number" class="spnone">01</span><?php echo $school_name; ?>の特徴</h2>
					<p class="detail">
『IDEA ENGLISH ACADEMY』のセブ校『IDEA CEBU』は2012年2月に設立。そして、100%日本資本で日本の英語事情の変化に対応することが目的で設立されました。合計200名定員のフィリピン国内で日本資本最大級の語学学校グループであり、 変化の激しい日本国内における英語事情に精通し、日常生活はもちろん、海外留学・進学、ビジネス等、活用の効く英語教育を目的とし、韓国やアメリカ資本には真似できない日本人にマッチングしたカリキュラムを軸に、日本資本だからこその英語教育環境を提供しています。
					</p>
					<p class="detail">
IDEA CEBU校はセミスパルタシステムとなります。 また、学生ラウンジやガーデンカフェを学内に併設しているので、リラックス空間も確保出来ます。また、実践英語ACT授業を毎日実施（ヨガ、ダンス、発音、TOEICなど）しているので、楽しみながら授業を受け続けれます。
セブ最大級のショッピングモールSMモールから徒歩5分程度、コンビニエンスストアは徒歩1分程度の距離に位置し、手軽にカフェや日本食を楽しめたり、ショッピングも可能で、セブ市内へのアクセスも抜群の立地です。
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
				<th>実践英語ACT授業</th>
			</tr>
		</thead>

		<tbody>

			<tr class="">
				<th scope="row" class="bg-skyblue white" id="t-middle" rowspan="4">ESL</th>
				<td>Intensive Sparta</td>
				<td>５コマ</td>
				<td>１コマ</td>
				<td>２コマ</td>
			</tr>

			<tr class="">
				<td>Intensive</td>
				<td>４コマ</td>
				<td>１コマ</td>
				<td>１コマ</td>
			</tr>

			<tr class="">
				<td>Specific Speaking</td>
				<td>４コマ</td>
				<td>１コマ</td>
				<td>２コマ</td>
			</tr>

			<tr class="">
				<td>Power Man to Man</td>
				<td>６コマ</td>
				<td>-</td>
				<td>１コマ</td>
			</tr>

			<tr class="">
				<th scope="row" class="bg-skyblue-light white" id="t-middle" rowspan="4">TOEIC</th>
				<td class="active">Bridge</td>
				<td class="active">４コマ</td>
				<td class="active">１コマ</td>
				<td class="active">２コマ</td>
			</tr>

			<tr class="">
				<td class="active">Master 600</td>
				<td class="active">５コマ</td>
				<td class="active">１コマ</td>
				<td class="active">２コマ</td>
			</tr>

			<tr class="">
				<td class="active">Master 700</td>
				<td class="active">５コマ</td>
				<td class="active">１コマ</td>
				<td class="active">２コマ</td>
			</tr>

			<tr class="">
				<td class="active">Master 800</td>
				<td class="active">５コマ</td>
				<td class="active">１コマ</td>
				<td class="active">２コマ</td>
			</tr>

			<tr class="">
				<th scope="row" class="bg-skyblue white" id="t-middle" rowspan="3">TOEFL</th>
				<td>Bridge</td>
				<td>４コマ</td>
				<td>１コマ</td>
				<td>２コマ</td>
			</tr>

			<tr class="">
				<td>Master 60</td>
				<td>５コマ</td>
				<td>１コマ</td>
				<td>２コマ</td>
			</tr>

			<tr class="">
				<td>Master 80</td>
				<td>５コマ</td>
				<td>１コマ</td>
				<td>２コマ</td>
			</tr>

			<tr class="">
				<th scope="row" class="bg-skyblue-light white" id="t-middle" rowspan="3">BUSINESS</th>
				<td class="active">BIZ Target</td>
				<td class="active">４コマ</td>
				<td class="active">１コマ</td>
				<td class="active">２コマ</td>
			</tr>

			<tr class="">
				<td class="active">Power BIZ Target</td>
				<td class="active">５コマ</td>
				<td class="active">１コマ</td>
				<td class="active">２コマ</td>
			</tr>

			<tr class="">
				<td class="active">BULATS Target</td>
				<td class="active">４コマ</td>
				<td class="active">１コマ</td>
				<td class="active">２コマ</td>
			</tr>

		</tbody>
	</table>
</div>

					<!-- CV button -->
					<?php get_template_part( 'button/cv-button' ); ?>

					<h2 id="class" class="detail-h2 detail-h2-sp top40"><span id="number" class="spnone">03</span><?php echo $school_name; ?>のカリキュラム</h2>

					<h3 class="top30 point"><i class="fa fa-check-circle"></i> 実践英語ACT授業</h3>
					<p class="detail">
IDEA CEBUのもっとも特徴的な授業の一つで、英語で何かを学ぶ（ACTIVE）という視点から、より実践的かつ、スキル習得のできるアクティビティ科目と、 TOEIC、プレゼンテーションなどの専門的、実務的な実践英語となる以下の科目から選択していただけます。
					</p>

					<ul>
						<li class="bold">TOEIC対策</li>
						<p>TOEIC模試科目で、どんどん問題を解いて解説を得ながら、TOEICの問題傾向を知る。</p>
						<li class="bold">カランメソッド</li>
						<p>フレーズをスピードを持って反復練習し、自然に暗記していくメソッド。</p>
						<li class="bold">プレゼンテーション</li>
						<p>フレーズをスピードを持って反復練習し、自然に暗記していくメソッド。</p>
						<li class="bold">時事英語</li>
						<p>おもにニュースや雑誌記事などを基にタイムリーな話題を英語で学習。</p>
						<li class="bold">ビジネスプレゼン</li>
						<p>会社紹介、プロジェクト、製品紹介など実際にチームでディスカッションを行い、方向性を定めつつ、プレゼンへと発展していく限りなくOJT（On Job Training）に近い形で進行します。</p>
					</ul>


					<h3 class="top30 point"><i class="fa fa-check-circle"></i> デイリー単語テスト（全コース共通）</h3>
					<p class="detail">
月曜日～金曜日の毎朝AM7：00よりボキャブラリーテストが行われます。 ボキャブラリーの積み重ねこそ、英語力の幅を強化することにつながり、英語に厚みが増します。 前日に渡される15個の単語リストをしっかり自習し、翌朝に15問のテストを受講します。各レベル別に合格ラインが設定されております。
					</p>

					<h3 class="top30 point"><i class="fa fa-check-circle"></i> 義務自習（全コース共通／月曜～木曜のみ）</h3>
					<p class="detail">
月曜日～木曜日PM8：00-PM10：00までの2時間は自習時間として、学内に滞在しなければなりません。 この時間の間は学内で大きな声で話したりせず、お部屋、自習室、テラスカフェ等で、過ごして頂けます。 自習を強制する時間ではありませんが、他の学生に迷惑が掛からないよう過ごしていただきます。 語学力をアップするのに最も重要な要素として、受身の授業だけではなく、授業に対する準備をしっかり行うことが挙げられます。翌日のボキャブラリーテストの予習にも最適で、無駄のない自習時間を持つことが可能です。
					</p>

					<h3 class="top30 point"><i class="fa fa-check-circle"></i> TOEICコースの受講条件</h3>
					<ul>
						<li class="bold">TOEIC Master 600（受講条件）</li>
						<p>公式TOEIC400 、もしくはIELTS3.0以上、もしくはそれ相応の実力をお持ちの方。</p>
						<li class="bold">TOEIC Master 700（受講条件）</li>
						<p>公式TOEIC500 、もしくはIELTS4.0以上、もしくはそれ相応の実力をお持ちの方。</p>
						<li class="bold">TOEIC Master 800（受講条件）</li>
						<p>公式TOEIC650 、もしくはIELTS5.5以上、もしくはそれ相応の実力をお持ちの方。</p>
					</ul>

					<h3 class="top30 point"><i class="fa fa-check-circle"></i> TOEFLコースの受講条件</h3>
					<ul>
						<li class="bold">TOEFL Bridge（受講条件）</li>
						<p>High Beginner以上。</p>
						<li class="bold">TOEFL Master 60（受講条件）</li>
						<p>公式TOEIC550 、もしくはIELTS4.0以上、もしくはTOEFL40以上、もしくはそれ相応の実力をお持ちの方。</p>
						<li class="bold">TOEFL Master 80（受講条件）</li>
						<p>公式TOEIC750 、もしくはIELTS5.0以上、もしくはTOEFL0以上、もしくはそれ相応の実力をお持ちの方。</p>
					</ul>

					<h3 class="top30 point"><i class="fa fa-check-circle"></i> BUSINESSコースの受講条件</h3>
					<ul>
						<li class="bold">BIZ Target（受講条件）</li>
						<p>公式TOEIC550 、もしくはIELTS3.5以上、もしくはTOEFL40以上、もしくはそれ相応の実力をお持ちの方。</p>
						<li class="bold">Power BIZ Target（受講条件）</li>
						<p>公式TOEIC550 、もしくはIELTS3.5以上、もしくはTOEFL40以上、もしくはそれ相応の実力をお持ちの方。</p>
						<li class="bold">TOEFL Master 80（受講条件）</li>
						<p>公式TOEIC550 、もしくはIELTS3.5以上、もしくはTOEFL40以上、もしくはそれ相応の実力をお持ちの方</p>
					</ul>

					<!-- CV button -->
					<?php get_template_part( 'button/cv-button' ); ?>

					<h2 id="price" class="detail-h2 detail-h2-sp top40"><span id="number" class="spnone">04</span><?php echo $school_name; ?>の料金表</h2>

					<h3 class="top30 point"><i class="fa fa-check-circle"></i> Intensive Sparta English コース</h3>

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

					<h3 class="top30 point"><i class="fa fa-check-circle"></i> Intensive English コース</h3>

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

					<h3 class="top30 point"><i class="fa fa-check-circle"></i> Specific Speaking コース／TOEIC,TOEFL Brideコース／Business Targetコース</h3>

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

					<h3 class="top30 point"><i class="fa fa-check-circle"></i> Power Business Targetコース／BULATS Targetコース／TOEIC 600/700/800コース／TOEFL 60/80コース</h3>

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

					<h3 class="top30 point"><i class="fa fa-check-circle"></i> Power Man to Manコース</h3>

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
La Casita Bldg, F Cabahug St, North Reclamation Area, Mabolo, Cebu city
				</td>
			</tr>
			<tr class="">
				<th scope="row" class="bg-skyblue white">アクセス</th>
				<td colspan="3" class="active">セブ・マクタン空港より車で約40分。</td>
			</tr>
			<tr class="">
				<th scope="row" class="bg-skyblue white">設立年度</th>
				<td colspan="3">2013年2月</td>
			</tr>
			<tr class="">
				<th scope="row" class="bg-skyblue white">講師数</th>
				<td colspan="3" class="active">150名 スタッフ10名</td>
			</tr>
			<tr class="">
				<th scope="row" class="bg-skyblue white">学生定員</th>
				<td colspan="3">140名</td>
			</tr>
			<tr class="">
				<th scope="row" class="bg-skyblue white">日本人比率</th>
				<td colspan="3" class="active">80％</td>
			</tr>
			<tr class="">
				<th scope="row" class="bg-skyblue white">学校施設</th>
				<td colspan="3">食堂、売店、学生ラウンジ、自習室、WiFiラウンジ、Yogaルーム、ガーデンテラスカフェ</td>
			</tr>
			<tr class="">
				<th scope="row" class="bg-skyblue white">宿泊形態</th>
				<td colspan="3" class="active">学校寮(ドミトリー形式)・・・1～4人部屋</td>
			</tr>
			<tr class="">
				<th scope="row" class="bg-skyblue white">宿泊設備</th>
				<td colspan="3">
					ベッド、トイレ、シャワー、冷蔵庫、エアコン、クローゼット、個人金庫
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