<?php
/*
Template Name: SMEAG Classic
*/
?>
<?php get_header(); ?>
<?php
$school_name ="SMEAG Classic（クラシック）";
?>

			<!-- パンくずリスト -->
			<?php get_template_part( 'breadcrumb-page' ); ?>

			<div class="col-sm-9 sp-padding10"> <!-- main col-9 -->

			<h1 class="detail"  itemprop="name headline">
				<a href="<?php the_permalink(); ?>" title="<?php printf(the_title_attribute('echo=0') ); ?>" itemprop="url"><?php echo $school_name; ?>（セブ島）の学校情報</a>
			</h1>

			<h2 id="balloon-2-bottom">フィリピン唯一の公認IELTSセンターでしっかりとしたIELTS対策が受けられるSMEAG Classic（クラシック）</h2>

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

					<h2 class="top30 point"><i class="fa fa-exclamation-circle"></i> SMEAGのキャンパスに関して</h2>
					<p class="detail">
					SMEAGは３つのキャンパスがあります。以下が各キャンパスの特徴となります。<br />
					このページは<span class="bold">SMEAG Classic（クラシック）</span>の学校情報ページです。
					</p>

					<ul>
						<li class="bold">SMEAG Capital（キャピタル）</li>
						<p>基礎英語中心。幅広いニーズに対応したコース設定。</p>
						<a href="http://philippines-cebu-ryugaku.com/all-school/smeag-capital/">&raquo; SMEAG Capital（キャピタル）キャンパスの詳細情報ページ</a>
						<br />
						<br />
						<li class="bold">SMEAG Classic（クラシック）</li>
						<p class="no-space">フィリピン唯一の公認IELTSセンターでしっかりとしたIELTS対策が受けられる学校</p>
						<br />
						<br />
						<li class="bold">SMEAG Sparta（スパルタ）</li>
						<p class="no-space">フィリピンでは珍しいケンブリッジ検定対策が受けられるスパルタ規定の語学学校</p>
						<a href="http://philippines-cebu-ryugaku.com/all-school/smeag-sparta/">&raquo; SMEAG Sparta（スパルタ）キャンパスの詳細情報ページ</a>
					</ul>

					<h2 class="top30 point"><i class="fa fa-check-circle"></i> <?php echo $school_name; ?>の５つの要点まとめ</h2>
					<ol class="point-list">
						<li>ブリティッシュ・カウンシルによる定期的なセミナーを開催</li>
						<li>IELTS点数保証制度で目標スコア獲得達成が可能</li>
						<li>定期的な講師トレーニングでハイクオリティな授業を提供</li>
						<li>海外の大学進学者向けのアカデミックプログラムをご用意</li>
						<li>便利で落ち着いた生活環境で学習できる好立地条件</li>
					</ol>

					<h2 id="feature" class="detail-h2 detail-h2-sp top30"><span id="number" class="spnone">01</span><?php echo $school_name; ?>の特徴</h2>
					<p class="detail">
『SMEAG Global Education, Classic Campus（SMEAG Classic）』は、セブ中心地へのアクセスが便利なロケーションですが、大通りから少し離れた住宅地の中にある為騒々しくなく落ち着いて勉強できる環境です。また学校は大型ショッピングモールのSMモール、アヤラモールに隣接しており、大変利便性に優れた環境です。
					</p>
					<p class="detail">
当校では、ESL（一般英会話）コースと海外での大学進学を目指す人向けのEAPコース、IELTSコースを開講しております。IELTSコースは中上級者向けのカリキュラムとなっており、イギリス、オーストラリアの大学などへの進学に向けIELTS必須の学生には最適なコース内容となっております。IELTSが初心者の方からでも無理なく学習できるように、入門コースからIELTS7.0を目指す保証コースまで幅広いコース設定に定評があります。
					</p>
					<p class="detail">
当校は、フィリピン国内の語学学校で唯一のブリティッシュ・カウンシル（公的な国際文化交流機関）公認のIELTSの公式試験会場に認定されている為、学生達は日々慣れている会場での試験受講が可能であるのも当キャンパスの魅力です。また、3ヶ月に1回のブリティッシュ・カウンシルによる講師向けのセミナーが開催されています。その為講師陣はIELTSに精通しており、質の高い授業の提供されています。さらに当校はIELTS取得後に欧米の専門学校や大学に進学を考えている方向けに、学生が様々な教育機関への進学を選択ができるパスウェイプログラムをご用意しているのも強みの一つです。
					</p>

					<!-- CV button -->
					<?php get_template_part( 'button/cv-button' ); ?>

					<h2 id="course" class="detail-h2 detail-h2-sp top40"><span id="number" class="spnone">02</span><?php echo $school_name; ?>のコース紹介</h2>
					<p class="bold">1コマ = ９０分</p>

<div class="table-responsive">
	<table class="table">
		<thead class="t-head">
			<tr>
				<th>コース</th>
				<th>マンツーマン</th>
				<th>グループ</th>
				<th>スペシャルクラス</th>
				<th>早朝／夜間クラス</th>
			</tr>
		</thead>

		<tbody>

			<tr class="">
				<th scope="row" class="bg-skyblue white" id="t-middle">ESLコース１</th>
				<td>４コマ</td>
				<td>２コマ</td>
				<td>４コマ</td>
				<td>170分<br />（早朝+夜間）</td>
			</tr>

			<tr class="">
				<th scope="row" class="bg-skyblue-light white" id="t-middle">ESLコース２</th>
				<td class="active">６コマ</td>
				<td class="active">２コマ</td>
				<td class="active">２コマ</td>
				<td class="active">170分<br />（早朝+夜間）</td>
			</tr>

			<tr class="">
				<th scope="row" class="bg-skyblue white" id="t-middle" >IELTS入門コース</th>
				<td>４コマ</td>
				<td>２コマ</td>
				<td>４コマ</td>
				<td>170分<br />（早朝+夜間）</td>
			</tr>

			<tr class="">
				<th scope="row" class="bg-skyblue-light white" id="t-middle">IELTS 5.5/6.0/6.5/7.0</th>
				<td class="active">４コマ</td>
				<td class="active">２コマ</td>
				<td class="active">４コマ</td>
				<td class="active">170分<br />（早朝+夜間）</td>
			</tr>

			<tr class="">
				<th scope="row" class="bg-skyblue white" id="t-middle" >EAPコース</th>
				<td>４コマ</td>
				<td>４コマ</td>
				<td>２コマ</td>
				<td>170分<br />（早朝+夜間）</td>
			</tr>

		</tbody>
	</table>
</div>

					<!-- CV button -->
					<?php get_template_part( 'button/cv-button' ); ?>

					<h2 id="class" class="detail-h2 detail-h2-sp top40"><span id="number" class="spnone">03</span><?php echo $school_name; ?>のカリキュラム紹介</h2>

					<h3 class="top30 point"><i class="fa fa-check-circle"></i> ESLコース</h3>
					<p class="detail">
ESLコースでは、短期間での最大の効果を出すことを目的にカリキュラムが組まれています。マンツーマン授業では英語の基礎となるリスニング＆スピーキングとライティング＆リーディングをバランスよく学習していきます。1:4のグループ授業ではディスカッションなどを通じて自分に意見を的確に伝え、相手の意見を聞き取るという練習を行います。
					</p>

					<h3 class="top30 point"><i class="fa fa-check-circle"></i> IELTSコース</h3>
					<p class="detail">
IELTSの試験に必要なリスニング、リーディング、スピーキング、ライティングの統合的な英語力を身に付けていきます。SMEAGのIELTSコースでは、専門によって分けられた講師と緻密な教育システムを提供しています。初級レベルの方がIELTSの学習を始めるためのコースから、IELTSの問題を解く際のコツやポイントを学習するコース、確実なスコア獲得のための実践力を身に付けるコースに分かれています。
<span class="bold">IELTSコースには入学基準が設けられております。条件は変動がありますので、詳しくは資料請求をお願いたします。<a href="">&raquo; 資料請求ページ</a></span>
					</p>

					<h3 class="top30 point"><i class="fa fa-check-circle"></i> EAPコース</h3>
					<p class="detail">
海外での大学、専門学校への進学を考えている方向けのコースです。基本的な英語の学習に加え、プレゼンテーションやディスカッション、論文の書き方などよりアカデミックな英語を学習しながら、大学進学後に必要となる実践的な英語力を身に付けていきます
					</p>

					<h3 class="top30 point"><i class="fa fa-check-circle"></i> スペシャルクラス</h3>
					<p class="detail no-space">スペシャルクラス（選択授業）内容は以下のとおりとなります。</p>

					<p class="detail">
					実践英語、ストーリテリング、発音＆アクセント矯正、音楽、スピークアップ、
					語彙＆イディオム、文法＆パターン英語、CNNニュース、 ケンブリッジ試験準備、ドラマ英語など。<br />
					<span class="bold">※スペシャルクラスと早朝・夜間スパルタクラスの内容はコースによって異なり、開講科目も時期により変わる場合があります。</span>
					</p>

					<!-- CV button -->
					<?php get_template_part( 'button/cv-button' ); ?>

					<h2 id="price" class="detail-h2 detail-h2-sp top40"><span id="number" class="spnone">04</span><?php echo $school_name; ?>の料金表</h2>

<h3 class="top30 point"><i class="fa fa-check-circle"></i> ESLコース１</h3>

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
				<td>68,500</td>
				<td>85,000</td>
				<td>135,000</td>
				<td>265,000</td>
				<td>395,000</td>
				<td>525,000</td>
				<td>785,000</td>
			</tr>

			<tr class="">
				<td>３人部屋</td>
				<td>65,500</td>
				<td>79,000</td>
				<td>116,500</td>
				<td>226,000</td>
				<td>334,000</td>
				<td>442,000</td>
				<td>658,000</td>
			</tr>
		</tbody>
	</table>
</div>








<h3 class="top30 point"><i class="fa fa-check-circle"></i> ESLコース２</h3>

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
				<td>84,000</td>
				<td>107,000</td>
				<td>181,800</td>
				<td>358,600</td>
				<td>535,400</td>
				<td>712,200</td>
				<td>1,065,800</td>
			</tr>

			<tr class="active">
				<td>２人部屋</td>
				<td>79,500</td>
				<td>98,000</td>
				<td>163,800</td>
				<td>322,600</td>
				<td>481,400</td>
				<td>640,200</td>
				<td>957,800</td>
			</tr>

			<tr class="">
				<td>３人部屋</td>
				<td>75,000</td>
				<td>89,000</td>
				<td>145,800</td>
				<td>286,600</td>
				<td>427,400</td>
				<td>568,200</td>
				<td>849,800</td>
			</tr>
		</tbody>
	</table>
</div>





<h3 class="top30 point"><i class="fa fa-check-circle"></i> EAPコース</h3>

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
				<td>115,000</td>
				<td>201,000</td>
				<td>397,000</td>
				<td>593,000</td>
				<td>789,000</td>
				<td>1,181,000</td>
			</tr>

			<tr class="active">
				<td>２人部屋</td>
				<td>90,000</td>
				<td>107,000</td>
				<td>185,000</td>
				<td>365,000</td>
				<td>545,000</td>
				<td>725,000</td>
				<td>1,085,000</td>
			</tr>

			<tr class="">
				<td>３人部屋</td>
				<td>85,500</td>
				<td>98,000</td>
				<td>167,000</td>
				<td>329,000</td>
				<td>491,000</td>
				<td>653,000</td>
				<td>977,000</td>
			</tr>
		</tbody>
	</table>
</div>





<h3 class="top30 point"><i class="fa fa-check-circle"></i> IELTS入門コース</h3>

<div class="table-responsive">
	<table class="table">
		<tbody>
			<tr class="bg-skyblue white">
				<td>単位：円</td>
				<td>１週間</td>
				<td>２週間</td>
				<td>３週間</td>
				<td>１ヶ月</td>
			</tr>

			<tr class="">
				<td>レッスン１日４時間</td>
				<td>20,000</td>
				<td>36,000</td>
				<td>48,000</td>
				<td>52,000</td>
			</tr>

			<tr class="active">
				<td>レッスン１日６時間</td>
				<td>30,000</td>
				<td>54,000</td>
				<td>72,000</td>
				<td>78,000</td>
			</tr>

			<tr class="">
				<td>レッスン１日８時間</td>
				<td>40,000</td>
				<td>72,000</td>
				<td>96,000</td>
				<td>104,000</td>
			</tr>
		</tbody>
	</table>
</div>



<h3 class="top30 point"><i class="fa fa-check-circle"></i> IELTS 5.5 / 6.0 / 6.5 / 7.0コース</h3>

<div class="table-responsive">
	<table class="table">
		<tbody>
			<tr class="bg-skyblue white">
				<td>単位：円</td>
				<td>１週間</td>
				<td>２週間</td>
				<td>３週間</td>
				<td>１ヶ月</td>
			</tr>

			<tr class="">
				<td>レッスン１日４時間</td>
				<td>20,000</td>
				<td>36,000</td>
				<td>48,000</td>
				<td>52,000</td>
			</tr>

			<tr class="active">
				<td>レッスン１日６時間</td>
				<td>30,000</td>
				<td>54,000</td>
				<td>72,000</td>
				<td>78,000</td>
			</tr>

			<tr class="">
				<td>レッスン１日８時間</td>
				<td>40,000</td>
				<td>72,000</td>
				<td>96,000</td>
				<td>104,000</td>
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
				<td colspan="3">2815, S. Cabahug conner, F. Gochan St., Mabolo, Cebu City, Philippines</td>
			</tr>
			<tr class="">
				<th scope="row" class="bg-skyblue white">アクセス</th>
				<td colspan="3" class="active">マクタン・セブ国際空港より車で約25分</td>
			</tr>
			<tr class="">
				<th scope="row" class="bg-skyblue white">設立年度</th>
				<td colspan="3">2008年</td>
			</tr>
			<tr class="">
				<th scope="row" class="bg-skyblue white">講師数</th>
				<td colspan="3" class="active">130名 スタッフ275名</td>
			</tr>
			<tr class="">
				<th scope="row" class="bg-skyblue white">学生定員</th>
				<td colspan="3">275名</td>
			</tr>
			<tr class="">
				<th scope="row" class="bg-skyblue white">日本人比率</th>
				<td colspan="3" class="active">30％</td>
			</tr>
			<tr class="">
				<th scope="row" class="bg-skyblue white">学校施設</th>
				<td colspan="3">自習室、カフェテリア、売店、スポーツジム、卓球、バスケットボールコート、バドミントンコート、バレーボールコート、ゴルフ練習場、学生ラウンジ、野外休憩所、など</td>
			</tr>
			<tr class="">
				<th scope="row" class="bg-skyblue white">宿泊形態</th>
				<td colspan="3" class="active">学校寮・・・1人部屋、２人部屋、３人部屋、4人部屋、5人部屋</td>
			</tr>
			<tr class="">
				<th scope="row" class="bg-skyblue white">宿泊設備</th>
				<td colspan="3">
					ベッド、冷蔵庫、エアコン、温水シャワー、机、イス、など
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