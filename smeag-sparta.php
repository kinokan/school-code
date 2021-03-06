<?php
/*
Template Name: SMEAG Sparta
*/
?>
<?php get_header(); ?>
<?php
$school_name ="SMEAG Sparta（スパルタ）";
?>

			<!-- パンくずリスト -->
			<?php get_template_part( 'breadcrumb-page' ); ?>

			<div class="col-sm-9 sp-padding10"> <!-- main col-9 -->

			<h1 class="detail"  itemprop="name headline">
				<a href="<?php the_permalink(); ?>" title="<?php printf(the_title_attribute('echo=0') ); ?>" itemprop="url"><?php echo $school_name; ?>（セブ島）の学校情報</a>
			</h1>

			<h2 id="balloon-2-bottom">フィリピンでは珍しいケンブリッジ検定対策が受けられるスパルタ規定の語学学校</h2>

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
					このページは<span class="bold">SMEAG Sparta（スパルタ）</span>の学校情報ページです。
					</p>

					<ul>
						<li class="bold">SMEAG Capital（キャピタル）</li>
						<p class="no-space">基礎英語中心。幅広いニーズに対応したコース設定。</p>
						<a href="http://philippines-cebu-ryugaku.com/all-school/smeag-capital/">&raquo; SMEAG Capital（キャピタル）キャンパスの詳細情報ページ</a>
						<br />
						<br />
						<li class="bold">SMEAG Classic（クラシック）</li>
						<p class="no-space">フィリピン唯一の公認IELTSセンターでしっかりとしたIELTS対策が受けられる学校</p>
						<a href="http://philippines-cebu-ryugaku.com/all-school/smeag-classic/">&raquo; SMEAG Classic（クラシック）キャンパスの詳細情報ページ</a>
						<br />
						<br />
						<li class="bold">SMEAG Sparta（スパルタ）</li>
						<p>フィリピンでは珍しいケンブリッジ検定対策が受けられるスパルタ規定の語学学校</p>
					</ul>

					<h2 class="top30 point"><i class="fa fa-check-circle"></i> <?php echo $school_name; ?>の５つの要点まとめ</h2>
					<ol class="point-list">
						<li>ケンブリッジESOL認定の試験センター</li>
						<li>厳しい規則学習に専念できる環境を提供（スパルタ）</li>
						<li>日本、韓国以外の国籍も多数在籍し、国籍ミックスも充実</li>
						<li>フィリピン人講師常駐のプレミアム寮を設置</li>
						<li>学食のメニューは日本人シェフが担当し質の高い食事を提供"</li>
					</ol>

					<h2 id="feature" class="detail-h2 detail-h2-sp top30"><span id="number" class="spnone">01</span><?php echo $school_name; ?>の特徴</h2>
					<p class="detail">
『SMEAG Global Education, Sparta Campus（SMEAG Sparta）』はセブにある日韓共同資本の語学学校です。
					</p>
					<p class="detail">
SMEAG Sparta（スパルタ）キャンパスはセブの中心地から車で20分程度のタランバンという地域にあり、高級住宅や教育機関の多い静かなロケーションとなっています。学校周辺には病院やショッピングモールなどがあり、SMEAG以外にも複数の学校がキャンパスを構えている、安全かつ快適に学習できるエリアとなっております。
					</p>
					<p class="detail">
SMEAG Sparta（スパルタ）キャンパスのコースはESL（一般英語）コースに加え、フィリピンでは珍しいケンブリッジ検定対策コースを開講しております。ESLコースでは、会話を中心に基本的な英語力を身に付けていきます。ケンブリッジ検定のコースはKET(基礎)、PET(初級)、FCE(中級)、CAE(上級)、CPE(最上級)全てのレベルのコースを開講しており、欧米圏の学校よりも充実しております。特にコースは一生有効かつ国際的な英語力を証明できる試験である為、海外での就職や大学進学を考えているより上級の英語力取得を目指す人に是非受講して頂きたいコースです。
					</p>
					<p class="detail">
キャンパス名にある通り勉強のみに集中できる環境を重視したカリキュラム設定となっており、とにかく誘惑されずに勉強をしたいという真面目な学生が集まる環境の学校です。
					</p>
					<p class="detail">
学生が生活する寮はプレミアム寮と通常の学生寮の設定があり、プレミアム寮には母国語禁止のルールになっており、住み込みのフィリピン人教師との夜間クラスなども開講されているので、一日中しっかり勉強できる環境が特徴です。
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
				<th scope="row" class="bg-skyblue white" id="t-middle" >ケンブリッジ検定KETコース</th>
				<td>２コマ</td>
				<td>６コマ</td>
				<td>２コマ</td>
				<td>170分<br />（早朝+夜間）</td>
			</tr>

			<tr class="">
				<th scope="row" class="bg-skyblue-light white" id="t-middle">ケンブリッジ検定 PET/FCE/CAE/CPE</th>
				<td class="active">２コマ</td>
				<td class="active">４コマ</td>
				<td class="active">１コマ</td>
				<td class="active">170分<br />（早朝+夜間）</td>
			</tr>

		</tbody>
	</table>
</div>

					<!-- CV button -->
					<?php get_template_part( 'button/cv-button' ); ?>

					<h2 id="class" class="detail-h2 detail-h2-sp top40"><span id="number" class="spnone">03</span><?php echo $school_name; ?>のカリキュラム紹介</h2>

					<h3 class="top30 point"><i class="fa fa-check-circle"></i> ESLコース</h3>
					<p class="detail">
マンツーマン授業ではリスニング＆スピーキングとライティング＆リーディングのパート別に、専門的にトレーニングを受けた講師によって授業が行われ、英語の基礎となる主要科目を集中的に学習します。1:4のグループ授業では、ディスカッションなどを通じて自分に意見を伝える練習を行います。
					</p>

					<h3 class="top30 point"><i class="fa fa-check-circle"></i> ケンブリッジ検定コース</h3>
					<p class="detail">
ケンブリッジ検定対策の専門教育を受けた講師がリーディング、リスニング、スピーキング、実践英語などの科目別に授業を行います。SMEAGのスパルタキャンパスではケンブリッジ試験会場となっているため、学生は慣れている会場で試験を受けることができます。
<span class="bold">ケンブリッジ検定コースには入学基準が設けられております。条件は変動がありますので、詳しくは資料請求をお願いたします。<a href="">&raquo; 資料請求ページ</a></span>
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
				<td>内部寮１人部屋</td>
				<td> - </td>
				<td>115,960</td>
				<td>178,400</td>
				<td>356,800</td>
				<td>535,200</td>
				<td>713,600</td>
				<td>1,070,400</td>
			</tr>

			<tr class="active">
				<td>内部寮２人部屋</td>
				<td> - </td>
				<td>106,340</td>
				<td>163,600</td>
				<td>327,200</td>
				<td>490,800</td>
				<td>654,400</td>
				<td>981,600</td>
			</tr>

			<tr class="">
				<td>内部寮３人部屋</td>
				<td> - </td>
				<td>99,580</td>
				<td>153,200</td>
				<td>306,400</td>
				<td>459,600</td>
				<td>612,800</td>
				<td>919,200</td>
			</tr>
			
			<tr class="active">
				<td>外部プレミアム２人部屋A</td>
				<td> - </td>
				<td>108,500</td>
				<td>167,920</td>
				<td>335,840</td>
				<td>503,760</td>
				<td>671,680</td>
				<td>1,007,520</td>
			</tr>

			<tr class="">
				<td>外部プレミアム２人部屋B</td>
				<td> - </td>
				<td>106,340</td>
				<td>163,600</td>
				<td>327,200</td>
				<td>490,800</td>
				<td>654,400</td>
				<td>981,600</td>
			</tr>
			
			<tr class="active">
				<td>外部プレミアム３人部屋A</td>
				<td> - </td>
				<td>101,740</td>
				<td>157,520</td>
				<td>315,040</td>
				<td>472,560</td>
				<td>630,080</td>
				<td>945,120</td>
			</tr>

			<tr class="">
				<td>外部プレミアム３人部屋B</td>
				<td> - </td>
				<td>99,580</td>
				<td>153,200</td>
				<td>306,400</td>
				<td>459,600</td>
				<td>612,800</td>
				<td>919,200</td>
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
				<td>内部寮１人部屋</td>
				<td> - </td>
				<td>128,440</td>
				<td>197,600</td>
				<td>395,200</td>
				<td>592,800</td>
				<td>790,400</td>
				<td>1,185,600</td>
			</tr>

			<tr class="active">
				<td>内部寮２人部屋</td>
				<td> - </td>
				<td>118,820</td>
				<td>182,800</td>
				<td>365,600</td>
				<td>548,400</td>
				<td>731,200</td>
				<td>1,096,800</td>
			</tr>

			<tr class="">
				<td>内部寮３人部屋</td>
				<td> - </td>
				<td>112,060</td>
				<td>172,400</td>
				<td>344,800</td>
				<td>517,200</td>
				<td>689,600</td>
				<td>1,034,400</td>
			</tr>
			
			<tr class="active">
				<td>外部プレミアム２人部屋A</td>
				<td> - </td>
				<td>120,980</td>
				<td>187,120</td>
				<td>374,240</td>
				<td>561,360</td>
				<td>748,480</td>
				<td>1,122,720</td>
			</tr>

			<tr class="">
				<td>外部プレミアム２人部屋B</td>
				<td> - </td>
				<td>118,820</td>
				<td>182,800</td>
				<td>365,600</td>
				<td>548,400</td>
				<td>731,200</td>
				<td>1,096,800</td>
			</tr>
			
			<tr class="active">
				<td>外部プレミアム３人部屋A</td>
				<td> - </td>
				<td>114,220</td>
				<td>176,720</td>
				<td>353,440</td>
				<td>530,160</td>
				<td>706,880</td>
				<td>1,060,320</td>
			</tr>

			<tr class="">
				<td>外部プレミアム３人部屋B</td>
				<td> - </td>
				<td>112,060</td>
				<td>172,400</td>
				<td>344,800</td>
				<td>517,200</td>
				<td>689,600</td>
				<td>1,034,400</td>
			</tr>
			
		</tbody>
	</table>
</div>





<h3 class="top30 point"><i class="fa fa-check-circle"></i> ケンブリッジ検定KETコース</h3>

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
				<td>内部寮１人部屋</td>
				<td> - </td>
				<td>126,880</td>
				<td>195,200</td>
				<td>390,400</td>
				<td>585,600</td>
				<td>780,800</td>
				<td>1,171,200</td>
			</tr>

			<tr class="active">
				<td>内部寮２人部屋</td>
				<td> - </td>
				<td>117,260</td>
				<td>180,400</td>
				<td>360,800</td>
				<td>541,200</td>
				<td>721,600</td>
				<td>1,082,400</td>
			</tr>

			<tr class="">
				<td>内部寮３人部屋</td>
				<td> - </td>
				<td>110,500</td>
				<td>170,000</td>
				<td>340,000</td>
				<td>510,000</td>
				<td>680,000</td>
				<td>1,020,000</td>
			</tr>
			
			<tr class="active">
				<td>外部プレミアム２人部屋A</td>
				<td> - </td>
				<td>119,420</td>
				<td>183,640</td>
				<td>367,280</td>
				<td>550,920</td>
				<td>734,560</td>
				<td>1,101,840</td>
			</tr>

			<tr class="">
				<td>外部プレミアム２人部屋B</td>
				<td> - </td>
				<td>117,260</td>
				<td>180,400</td>
				<td>360,800</td>
				<td>541,200</td>
				<td>721,600</td>
				<td>1,082,400</td>
			</tr>
			
			<tr class="active">
				<td>外部プレミアム３人部屋A</td>
				<td> - </td>
				<td>112,660</td>
				<td>174,320</td>
				<td>348,640</td>
				<td>522,960</td>
				<td>697,280</td>
				<td>1,045,920</td>
			</tr>

			<tr class="">
				<td>外部プレミアム３人部屋B</td>
				<td> - </td>
				<td>110,500</td>
				<td>170,000</td>
				<td>340,000</td>
				<td>510,000</td>
				<td>680,000</td>
				<td>1,020,000</td>
			</tr>
			
		</tbody>
	</table>
</div>





<h3 class="top30 point"><i class="fa fa-check-circle"></i> ケンブリッジ検定PET / FCE / CAE / CPEコース</h3>

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
				<td>内部寮１人部屋</td>
				<td> - </td>
				<td>131,040</td>
				<td>201,600</td>
				<td>403,200</td>
				<td>604,800</td>
				<td>806,400</td>
				<td>1,209,600</td>
			</tr>

			<tr class="active">
				<td>内部寮２人部屋</td>
				<td> - </td>
				<td>121,420</td>
				<td>186,800</td>
				<td>373,600</td>
				<td>560,400</td>
				<td>747,200</td>
				<td>1,120,800</td>
			</tr>

			<tr class="">
				<td>内部寮３人部屋</td>
				<td> - </td>
				<td>114,660</td>
				<td>176,400</td>
				<td>352,800</td>
				<td>529,200</td>
				<td>705,600</td>
				<td>1,058,400</td>
			</tr>
			
			<tr class="active">
				<td>外部プレミアム２人部屋A</td>
				<td> - </td>
				<td>123,580</td>
				<td>191,120</td>
				<td>382,240</td>
				<td>573,360</td>
				<td>764,480</td>
				<td>1,146,720</td>
			</tr>

			<tr class="">
				<td>外部プレミアム２人部屋B</td>
				<td> - </td>
				<td>121,420</td>
				<td>186,800</td>
				<td>373,600</td>
				<td>560,400</td>
				<td>747,200</td>
				<td>1,120,800</td>
			</tr>
			
			<tr class="active">
				<td>外部プレミアム３人部屋A</td>
				<td> - </td>
				<td>116,820</td>
				<td>180,720</td>
				<td>361,440</td>
				<td>542,160</td>
				<td>722,880</td>
				<td>1,084,320</td>
			</tr>

			<tr class="">
				<td>外部プレミアム３人部屋B</td>
				<td> - </td>
				<td>114,660</td>
				<td>176,400</td>
				<td>352,800</td>
				<td>529,200</td>
				<td>705,600</td>
				<td>1,058,400</td>
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
				<td colspan="3">Tigbao St., Talamban, Cebu City Philippines</td>
			</tr>
			<tr class="">
				<th scope="row" class="bg-skyblue white">アクセス</th>
				<td colspan="3" class="active">マクタン・セブ国際空港より車で約45分</td>
			</tr>
			<tr class="">
				<th scope="row" class="bg-skyblue white">設立年度</th>
				<td colspan="3">2006年</td>
			</tr>
			<tr class="">
				<th scope="row" class="bg-skyblue white">講師数</th>
				<td colspan="3" class="active">180名 スタッフ40名</td>
			</tr>
			<tr class="">
				<th scope="row" class="bg-skyblue white">学生定員</th>
				<td colspan="3">330名</td>
			</tr>
			<tr class="">
				<th scope="row" class="bg-skyblue white">日本人比率</th>
				<td colspan="3" class="active">20％</td>
			</tr>
			<tr class="">
				<th scope="row" class="bg-skyblue white">学校施設</th>
				<td colspan="3">自習室、カフェテリア、売店、プール、学生ラウンジ、スポーツジム、バスケットボールコート、バドミントンコート、バレーボールコート、など</td>
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
