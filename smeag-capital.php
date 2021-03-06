<?php
/*
Template Name: SMEAG Capital
*/
?>
<?php get_header(); ?>
<?php
$school_name ="SMEAG Capital（キャピタル）";
?>

			<!-- パンくずリスト -->
			<?php get_template_part( 'breadcrumb-page' ); ?>

			<div class="col-sm-9 sp-padding10"> <!-- main col-9 -->

			<h1 class="detail"  itemprop="name headline">
				<a href="<?php the_permalink(); ?>" title="<?php printf(the_title_attribute('echo=0') ); ?>" itemprop="url"><?php echo $school_name; ?>（セブ島）の学校情報</a>
			</h1>

			<h2 id="balloon-2-bottom">基礎英語中心で作りこまれたカリキュラムが人気のSME Capital（キャピタル）</h2>

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
					このページは<span class="bold">SMEAG Capital（キャピタル）</span>の学校情報ページです。
					</p>

					<ul>
						<li class="bold">SMEAG Capital（キャピタル）</li>
						<p>基礎英語中心。幅広いニーズに対応したコース設定。</p>
						<br />
						<li class="bold">SMEAG Classic（クラシック）</li>
						<p class="no-space">フィリピン唯一の公認IELTSセンターでしっかりとしたIELTS対策が受けられる学校</p>
						<a href="http://philippines-cebu-ryugaku.com/all-school/smeag-classic/">&raquo; SMEAG Classic（クラシック）キャンパスの詳細情報ページ</a>
						<br />
						<br />
						<li class="bold">SMEAG Sparta（スパルタ）</li>
						<p class="no-space">フィリピンでは珍しいケンブリッジ検定対策が受けられるスパルタ規定の語学学校</p>
						<a href="http://philippines-cebu-ryugaku.com/all-school/smeag-sparta/">&raquo; SMEAG Sparta（スパルタ）キャンパスの詳細情報ページ</a>
					</ul>

					<h2 class="top30 point"><i class="fa fa-check-circle"></i> <?php echo $school_name; ?>の５つの要点まとめ</h2>
					<ol class="point-list">
						<li>ETS公認のTOEIC＆TOEFLの公式試験会場の学校</li>
						<li>独自作成されたTOEICのテキストで高得点獲得が実現</li>
						<li>様々な施設を取り入れ、広く綺麗で快適な環境</li>
						<li>ビジネスコース受講者向けのホテル寮を提供</li>
						<li>治安と立地条件の良い絶好のロケーション"</li>
					</ol>

					<h2 id="feature" class="detail-h2 detail-h2-sp top30"><span id="number" class="spnone">01</span><?php echo $school_name; ?>の特徴</h2>
					<p class="detail">
					『SMEAG Global Education, Capital Campus（SMEAG Capital）』はセブの政治の中心となるセブ市庁舎がある地域に位置しております。
					</p>
					<p class="detail">
					学校周辺にはコンビニエンスストア、レストラン、薬局などが有り、交通の便と治安が整っております。当校はセブ市内にある3つのキャンパスの中で最も新しく、テレビルームやおしゃれなカフェなどの最新の施設が整った環境です。また立地は市内中心部にあるので、勉強だけではなくセブならではの生活も楽しみたい人向けの学校です。
					</p>
					<p class="detail">
					当校のカリキュラムでは、ESL（一般英会話）コースとTOEICコース、ビジネスコースを受講することができます。TOEICコースでは、入門コースからTOEIC900点を目指す上級コースまで開講しています。
					</p>
					<p class="detail">
					当校の生活、食事面では、外部寮1人部屋の準備や日本人シェフによる日本食メニューや多国籍メニューの提供を行っているので、食事も安心です。フィリピン留学では日本、韓国からの学生が中心ですが、同校には台湾、中国、ベトナム、ウクライナからの留学生も在籍しており、休憩時間や放課後休日を利用して異文化交流をすることも可能です。
					</p>
					<p class="detail">
					また、世界でTOEICとTOEFL試験を主催するETSによる認定を受けており、セブで唯一のTOEIC/TOEFL公式試験会場となっています。講師たちは経験豊富なマネージャーによる定期的なトレーニングを受けている為、授業の質も高いものに維持されております。TOEICの授業で使われる教材も傾向を把握して独自で作成されている為、より確実なスコアアップが期待できます。さらに点数保証制度を設けており、個々の目標スコア獲得に力を入れておるのも当校の強みの一つです。
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
				<th scope="row" class="bg-skyblue white" id="t-middle" >TOEIC入門コース</th>
				<td>４コマ</td>
				<td>２コマ</td>
				<td>４コマ</td>
				<td>170分<br />（早朝+夜間）</td>
			</tr>

			<tr class="">
				<th scope="row" class="bg-skyblue-light white" id="t-middle">TOEIC 600/700/800/900</th>
				<td class="active">４コマ</td>
				<td class="active">２コマ</td>
				<td class="active">４コマ</td>
				<td class="active">170分<br />（早朝+夜間）</td>
			</tr>

			<tr class="">
				<th scope="row" class="bg-skyblue white" id="t-middle" >TOEFL入門コース</th>
				<td>４コマ</td>
				<td>４コマ</td>
				<td>２コマ</td>
				<td>４コマ</td>
			</tr>

			<tr class="">
				<th scope="row" class="bg-skyblue-light white" id="t-middle">TOEFL 60/80/100/110</th>
				<td class="active">４コマ</td>
				<td class="active">４コマ</td>
				<td class="active">２コマ</td>
				<td class="active">170分<br />（早朝+夜間）</td>
			</tr>

			<tr class="">
				<th scope="row" class="bg-skyblue white" id="t-middle" >ビジネスコース</th>
				<td>８コマ</td>
				<td>２コマ</td>
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
マンツーマン授業では、英語の基礎となる主要4スキルのリスニング＆スピーキングとライティング＆リーディングに重点を置いて学習します。専門的にトレーニングを受けた講師によって授業が行われるため、短期間で最大の効果を期待できます。1:4のグループ授業では、ディスカッションを通じて自分に意見を伝える練習を行います。
					</p>

					<h3 class="top30 point"><i class="fa fa-check-circle"></i> TOEICコース</h3>
					<p class="detail">
TOEICコースは、TOEICの教育に関して経験の豊富なマネージャーが管理しており、訓練された講師陣による質の高い授業を提供しています。傾向と対策を把握し、しっかりと対策された独自のテキストを使用しています。TOEICの勉強を始めたばかりの方から、高い目標スコア獲得のために、難易度の高い問題に関して正答率を上げる実践力やスキルを身につけたい方まで幅広く対応しています。
					</p>

					<h3 class="top30 point"><i class="fa fa-check-circle"></i> TOEFLコース</h3>
					<p class="detail">
欧米圏での大学（院）進学を必要とする学生向けに、TOEFL試験で必要となるよりアカデミックなリスニング、リーディング、ライティング、スピーキングの4技能を総合的に学習してくコースです。TOEFL入門者から海外での進学を目標とした確実なスコアアップが必要な方まで、しっかり学習できるカリキュラム設定となっています。<br />
<span class="bold">TOEFLコースには入学基準が設けられております。条件は変動がありますので、詳しくは資料請求をお願いたします。<a href="">&raquo; 資料請求ページ</a></span>
					</p>

					<h3 class="top30 point"><i class="fa fa-check-circle"></i> ビジネスコース</h3>
					<p class="detail">
ビジネスコースではビジネスシーンで必要なメールの書き方や電話対応、ビジネス文書の書き方などのスキル習得を通してビジネスで求められる英語力を学ぶコースです。様々なシチュエーションを想定し、どのような場面でもワンランク上のビジネスコミュニケーション対応できるよう学習していきます。
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
				<td>80,280</td>
				<td>115,960</td>
				<td>178,400</td>
				<td>356,800</td>
				<td>535,200</td>
				<td>713,600</td>
				<td>1,070,400</td>
			</tr>

			<tr class="active">
				<td>２人部屋</td>
				<td>73,620</td>
				<td>106,340</td>
				<td>163,600</td>
				<td>327,200</td>
				<td>490,800</td>
				<td>654,400</td>
				<td>981,600</td>
			</tr>

			<tr class="">
				<td>３人部屋</td>
				<td>68,940</td>
				<td>99,580</td>
				<td>153,200</td>
				<td>306,400</td>
				<td>459,600</td>
				<td>612,800</td>
				<td>919,200</td>
			</tr>
			
			<tr class="active">
				<td>４人部屋</td>
				<td>65,160</td>
				<td>94,120</td>
				<td>144,800</td>
				<td>289,600</td>
				<td>434,400</td>
				<td>579,200</td>
				<td>868,800</td>
			</tr>
			
			<tr class="">
				<td>５人部屋</td>
				<td>62,280</td>
				<td>89,960</td>
				<td>138,400</td>
				<td>276,800</td>
				<td>415,200</td>
				<td>553,600</td>
				<td>830,400</td>
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
				<td>88,920</td>
				<td>128,440</td>
				<td>197,600</td>
				<td>395,200</td>
				<td>592,800</td>
				<td>790,400</td>
				<td>1,185,600</td>
			</tr>

			<tr class="active">
				<td>２人部屋</td>
				<td>82,260</td>
				<td>118,820</td>
				<td>182,800</td>
				<td>365,600</td>
				<td>548,400</td>
				<td>731,200</td>
				<td>1,096,800</td>
			</tr>

			<tr class="">
				<td>３人部屋</td>
				<td>77,580</td>
				<td>112,060</td>
				<td>172,400</td>
				<td>344,800</td>
				<td>517,200</td>
				<td>689,600</td>
				<td>1,034,400</td>
			</tr>
			
			<tr class="active">
				<td>４人部屋</td>
				<td>73,800</td>
				<td>106,600</td>
				<td>164,000</td>
				<td>328,000</td>
				<td>492,000</td>
				<td>656,000</td>
				<td>984,000</td>
			</tr>
			
			<tr class="">
				<td>５人部屋</td>
				<td>70,920</td>
				<td>102,440</td>
				<td>157,600</td>
				<td>315,200</td>
				<td>472,800</td>
				<td>630,400</td>
				<td>945,600</td>
			</tr>
		</tbody>
	</table>
</div>





<h3 class="top30 point"><i class="fa fa-check-circle"></i> TOEIC入門コース</h3>

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
				<td>86,040</td>
				<td>124,280</td>
				<td>191,200</td>
				<td>382,400</td>
				<td>573,600</td>
				<td>764,800</td>
				<td>1,147,200</td>
			</tr>

			<tr class="active">
				<td>２人部屋</td>
				<td>79,380</td>
				<td>114,660</td>
				<td>176,400</td>
				<td>352,800</td>
				<td>529,200</td>
				<td>705,600</td>
				<td>1,058,400</td>
			</tr>

			<tr class="">
				<td>３人部屋</td>
				<td>74,700</td>
				<td>107,900</td>
				<td>166,000</td>
				<td>332,000</td>
				<td>498,000</td>
				<td>664,000</td>
				<td>996,400</td>
			</tr>
			
			<tr class="active">
				<td>４人部屋</td>
				<td>70,920</td>
				<td>102,440</td>
				<td>157,600</td>
				<td>315,200</td>
				<td>472,800</td>
				<td>630,400</td>
				<td>945,600</td>
			</tr>
			
		</tbody>
	</table>
</div>





<h3 class="top30 point"><i class="fa fa-check-circle"></i> TOEIC 600 / 700 / 800 / 900コース・TOEFL入門コース</h3>

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
				<td>88,920</td>
				<td>128,440</td>
				<td>197,600</td>
				<td>395,200</td>
				<td>592,800</td>
				<td>790,400</td>
				<td>1,185,600</td>
			</tr>

			<tr class="active">
				<td>２人部屋</td>
				<td>82,260</td>
				<td>118,820</td>
				<td>182,800</td>
				<td>365,600</td>
				<td>548,400</td>
				<td>731,200</td>
				<td>1,096,800</td>
			</tr>

			<tr class="">
				<td>３人部屋</td>
				<td>77,580</td>
				<td>112,060</td>
				<td>172,400</td>
				<td>344,800</td>
				<td>517,200</td>
				<td>689,600</td>
				<td>1,034,400</td>
			</tr>
			
			<tr class="active">
				<td>４人部屋</td>
				<td>73,800</td>
				<td>106,600</td>
				<td>164,000</td>
				<td>328,000</td>
				<td>492,000</td>
				<td>656,000</td>
				<td>984,000</td>
			</tr>
			
		</tbody>
	</table>
</div>



<h3 class="top30 point"><i class="fa fa-check-circle"></i> TOEFL 60 / 80 / 100 / 110 コース</h3>

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
				<td>93,600</td>
				<td>135,200</td>
				<td>208,000</td>
				<td>416,000</td>
				<td>624,000</td>
				<td>832,000</td>
				<td>1,248,000</td>
			</tr>

			<tr class="active">
				<td>２人部屋</td>
				<td>86,940</td>
				<td>125,580</td>
				<td>193,200</td>
				<td>386,400</td>
				<td>579,600</td>
				<td>772,800</td>
				<td>1,159,200</td>
			</tr>

			<tr class="">
				<td>３人部屋</td>
				<td>82,260</td>
				<td>118,820</td>
				<td>182,800</td>
				<td>365,600</td>
				<td>548,400</td>
				<td>731,200</td>
				<td>1,096,800</td>
			</tr>
			
			<tr class="active">
				<td>４人部屋</td>
				<td>78,480</td>
				<td>113,360</td>
				<td>174,400</td>
				<td>348,800</td>
				<td>523,200</td>
				<td>697,600</td>
				<td>1,046,400</td>
			</tr>
			
		</tbody>
	</table>
</div>

<h3 class="top30 point"><i class="fa fa-check-circle"></i> ビジネスコース</h3>

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
				<td>110,300</td>
				<td>180,300</td>
				<td>310,300</td>
				<td>620,600</td>
				<td>930,900</td>
				<td>1,241,200</td>
				<td>1,861,800</td>
			</tr>

			<tr class="active">
				<td>２人部屋</td>
				<td>99,300</td>
				<td>164,300</td>
				<td>284,300</td>
				<td>568,600</td>
				<td>852,900</td>
				<td>1,137,200</td>
				<td>1,705,800</td>
			</tr>

			<tr class="">
				<td>３人部屋</td>
				<td>93,800</td>
				<td>153,800</td>
				<td>263,800</td>
				<td>527,600</td>
				<td>791,400</td>
				<td>1,055,200</td>
				<td>1,582,800</td>
			</tr>
			
			<tr class="active">
				<td>４人部屋</td>
				<td>88,200</td>
				<td>143,200</td>
				<td>248,200</td>
				<td>496,400</td>
				<td>744,600</td>
				<td>992,800</td>
				<td>1,489,200</td>
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
				<td colspan="3">E.Osmena St. Corner, Battan., Guadalupe, Cebu City, Philippines</td>
			</tr>
			<tr class="">
				<th scope="row" class="bg-skyblue white">アクセス</th>
				<td colspan="3" class="active">マクタン・セブ国際空港より車で約20分</td>
			</tr>
			<tr class="">
				<th scope="row" class="bg-skyblue white">設立年度</th>
				<td colspan="3">2012年</td>
			</tr>
			<tr class="">
				<th scope="row" class="bg-skyblue white">講師数</th>
				<td colspan="3" class="active">77名 スタッフ42名</td>
			</tr>
			<tr class="">
				<th scope="row" class="bg-skyblue white">学生定員</th>
				<td colspan="3">400名</td>
			</tr>
			<tr class="">
				<th scope="row" class="bg-skyblue white">日本人比率</th>
				<td colspan="3" class="active">40％</td>
			</tr>
			<tr class="">
				<th scope="row" class="bg-skyblue white">学校施設</th>
				<td colspan="3">自習室、カフェテリア、売店、スポーツジム、シアタールーム、卓球スペース、学生ラウンジ、など</td>
			</tr>
			<tr class="">
				<th scope="row" class="bg-skyblue white">宿泊形態</th>
				<td colspan="3" class="active">学校寮・・・1人部屋、２人部屋、３人部屋、4人部屋、5人部屋</td>
			</tr>
			<tr class="">
				<th scope="row" class="bg-skyblue white">宿泊設備</th>
				<td colspan="3">
					ベッド、冷蔵庫、クローゼット、エアコン、温水シャワー、トイレ、机、イス、など
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
