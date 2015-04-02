<?php
/*
Template Name: Philinter
*/
?>
<?php get_header(); ?>
<?php
$school_name ="Philinter";
?>

			<!-- パンくずリスト -->
			<?php get_template_part( 'breadcrumb-page' ); ?>

			<div class="col-sm-9 sp-padding10"> <!-- main col-9 -->

			<h1 class="detail"  itemprop="name headline">
				<a href="<?php the_permalink(); ?>" title="<?php printf(the_title_attribute('echo=0') ); ?>" itemprop="url"><?php echo $school_name; ?>（セブ島）の学校情報</a>
			</h1>

			<h2 id="balloon-2-bottom">リゾート地域に立地！バディティーチャーシステムが特徴のPhilinter！</h2>

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
						<li>しっかりと学生サポートする「バディティーチャーシステム」を採用</li>
						<li>アジア圏の学生も複数在籍する多国籍な学習環境</li>
						<li>学校はリゾート地域のマクタン島で開放的な環境</li>
						<li>自分の時間を大切にしたい方には自炊可能なホテルタイプの外部寮有り</li>
						<li>7歳から受講ができるジュニアコースがあり、親子留学に最適</li>
					</ol>

					<h2 id="feature" class="detail-h2 detail-h2-sp top30"><span id="number" class="spnone">01</span><?php echo $school_name; ?>の特徴</h2>
					<p class="detail">
					『Philinter』は、セブの有名なリゾートエリアであるマクタン島に位置する語学学校です。セブ空港からは車で約10分という大変便利なロケーションにあります。学校近辺にはショッピングモールや多くのレストランがあり、リゾートエリアにも近く生活面に関しても便利な立地となっております。
					</p>
					<p class="detail">
					当校の校長は日本文化にも理解が深く、日本人学生が快適に過ごせるよう心がけております。滞在する寮は内部寮と外部寮の2種類があり、外部寮は学校からシャトルバスで15～20分の距離にあります。共用キッチンが有る為、自炊をすることができ、施設は清潔感があり好評です。2人部屋のみの設定の為、同室希望のご夫婦や親子留学の方にお勧めです。
					</p>
					<p class="detail">
					当校で開講しているコースは7種類あり、7歳から受け入れ可能のジュニアコースも有る為、親子留学の方にも最適です。授業は1コマ45分の授業設定で、学生の特性を考え昼食後と最後の授業は1コマ40分の授業時間となっております。授業は各教科の専門講師が担当し、担当講師が学生一人ひとりに付く「バディーティーチャー」システムを導入し、学生がスムーズにフィリピンでの生活を送れるようにサポートしてくれます。
					</p>
					<p class="detail">
					フィリピン留学の多くの学校では日本人と韓国人のみが滞在していますが、同校には台湾、中国、ベトナムからの学生も在籍している為、アジア圏の多国籍環境で勉強することができます。『Philinter』はフィリピンでも屈指の長年の歴史と経験がある名門スクールの為、多国籍の環境の中でしっかりとサポート体制の整った環境を求めている方に最適です。
					</p>

					<!-- CV button -->
					<?php get_template_part( 'button/cv-button' ); ?>

					<h2 id="course" class="detail-h2 detail-h2-sp top40"><span id="number" class="spnone">02</span><?php echo $school_name; ?>のコース紹介</h2>

<div class="table-responsive">
	<table class="table">
		<thead class="t-head">
			<tr>
				<th>コース</th>
				<th>マンツーマン</th>
				<th>グループ</th>
				<th>オプション授業</th>
			</tr>
		</thead>

		<tbody>

			<tr class="">
				<th scope="row" class="bg-skyblue white" id="t-middle">Generalコース</th>
				<td>４時間</td>
				<td>２時間</td>
				<td>２時間</td>
			</tr>

			<tr class="">
				<th scope="row" class="bg-skyblue-light white" id="t-middle">Intensiveコース</th>
				<td class="active">５時間</td>
				<td class="active">２時間</td>
				<td class="active">２時間</td>
			</tr>

			<tr class="">
				<th scope="row" class="bg-skyblue white" id="t-middle" >Junior ESLコース</th>
				<td>４時間</td>
				<td>３時間</td>
				<td>-</td>
			</tr>

			<tr class="">
				<th scope="row" class="bg-skyblue-light white" id="t-middle">IELTSコース</th>
				<td class="active">４時間</td>
				<td class="active">２時間</td>
				<td class="active">２時間</td>
			</tr>

			<tr class="">
				<th scope="row" class="bg-skyblue white" id="t-middle" >TOEICコース</th>
				<td>４時間</td>
				<td>２時間</td>
				<td>２時間</td>
			</tr>

			<tr class="">
				<th scope="row" class="bg-skyblue-light white" id="t-middle">ビジネスコース</th>
				<td class="active">４時間</td>
				<td class="active">２時間</td>
				<td class="active">２時間</td>
			</tr>

			<tr class="">
				<th scope="row" class="bg-skyblue white" id="t-middle" >TESOLコース</th>
				<td>２時間</td>
				<td>５時間</td>
				<td>-</td>
			</tr>

		</tbody>
	</table>
</div>

<p>※注意<br />
TESOL12週間のお申込みの場合、2週間は実習授業、10週間は7時間授業となります。 <br />
Intensiveコースの方のみ、8週間のTOEIC、IELTS、ビジネスコースへ現地で追加料金なしで変更することができます。</p>

					<!-- CV button -->
					<?php get_template_part( 'button/cv-button' ); ?>

					<h2 id="class" class="detail-h2 detail-h2-sp top40"><span id="number" class="spnone">03</span><?php echo $school_name; ?>のカリキュラム紹介</h2>

					<h3 class="top30 point"><i class="fa fa-check-circle"></i> 概略</h3>
					<p class="detail">
PHILINTERのESLコースでは『 話・聞・書・読 ・文法・語彙・発音』の7つの分野で分けられた授業を通して、 弱点である部分を重点的に補強し、英語力の向上を図ります。 またPHILINTERでは、GeneralコースとINTENSIVEコースの２つのコースがあり、個人に似合った授業コースを受講することができます。
					</p>

					<h3 class="top30 point"><i class="fa fa-check-circle"></i> General Englishコース</h3>
					<p class="detail">
レベル試験結果（発音・語彙・文法 ・スピーキング・リスニング・ライティング・リーディング ）に 基づいてカスタマイズされたクラスです。グループクラスではレベルに合った様々なレッスンを通して英語のスキルアップが可能です。特別講義グループクラスではネイティブの教師、または専門講師が授業を行ないます。
					</p>

					<h3 class="top30 point"><i class="fa fa-check-circle"></i> Intensive Englishコース</h3>
					<p class="detail">
一般ESLコースと同様のプログラムを提供していますが、学生の弱点を改善する為にマンツーマンが一日５時間あるプログラムです。短期間で効果的な結果を希望している学生にお勧めのコースです。グループクラスではレベルに合った様々なレッスンを通して英語のスキルアップが可能です。特別講義グループクラスではネイティブの教師、または専門講師が授業を行ないます。
					</p>

					<h3 class="top30 point"><i class="fa fa-check-circle"></i> Junior ESLコース</h3>
					<p class="detail">
ジュニアESLコースは年齢が7～17歳、レベル301以上の学生が対象となります。レベル試験結果（発音・語彙・文法 ・スピーキング・リスニング・ライティング・リーディング）に基づいてカスタマイズされたクラスです。
一日に4つの個人レッスン、3つのグループレッスンを受講し、 休みの時期には保護者と先生と学校スタッフ3名で定期的に週に1度カウンセリングが実施されております。
特に正確でより自然な発音のスピーキングを集中的に学ぶクラスが開かれます。
					</p>

					<h3 class="top30 point"><i class="fa fa-check-circle"></i> IELTSコース</h3>
					<p class="detail">
IELTSコースはIELTSスコアアップを目的に、優秀な教師と10人未満の学生で構成されたコースです。 テスト・評価・フィードバックを通して徹底的な受験戦略と分析スキルを学びます。 現在、フィリンターはIDPオーストラリアから公認されており、コース修了後には、5.5 / 6.0 / 6.5の成績を保証します。
					</p>

					<h3 class="top30 point"><i class="fa fa-check-circle"></i> TOEICコース</h3>
					<p class="detail">
PhilinterのTOEICコースはTOEICの点数アップを目標として、優秀な教師と10人未満の学生で構成されています。学生は、リスニング・スピーキング・アカデミックリーディング・ライティングスキルをアップさせるために系統的で効果的な授業を受けます。 テスト・評価・フィードバックを通して徹底的な受験戦略と分析スキルを学び、毎週土曜日には模擬試験が実施されます。コース修了後に600 / 700 / 800の成績を保証します。
					</p>

					<h3 class="top30 point"><i class="fa fa-check-circle"></i> BUSINESSコース</h3>
					<p class="detail">
ビジネスコースではビジネス環境で英語を使用するためのコースです。 主に基本的なビジネスレポート、メール、またビジネス状況での重要な語彙と表現を学び知識を広めます。 このコースではネイティブスピーカーが個性的で専門的なビジネスグループクラスを行い、学生達のコミュニケーションスキル向上をサポートします。
					</p>

					<!-- CV button -->
					<?php get_template_part( 'button/cv-button' ); ?>

					<h2 id="price" class="detail-h2 detail-h2-sp top40"><span id="number" class="spnone">04</span><?php echo $school_name; ?>の料金表</h2>

<h3 class="top30 point"><i class="fa fa-check-circle"></i> Generalコース</h3>

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








<h3 class="top30 point"><i class="fa fa-check-circle"></i> Intensiveコース</h3>

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





<h3 class="top30 point"><i class="fa fa-check-circle"></i> Junior ESLコース</h3>

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





<h3 class="top30 point"><i class="fa fa-check-circle"></i> Foundation IELTS/ Foundation TOEICコース：マンツーマン（45分×4）、グループ（45分×2）、オプション（45分×2）</h3>

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



<h3 class="top30 point"><i class="fa fa-check-circle"></i> Full time IELTS(5.5-6.0)/Full time TOEICコース：マンツーマン（45分×4）、グループ（45分×2）、オプション（45分×2）</h3>

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

<h3 class="top30 point"><i class="fa fa-check-circle"></i> Full time IELTS(6.5)コース：マンツーマン（45分×4）、グループ（45分×2）、オプション（45分×2）</h3>

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

<h3 class="top30 point"><i class="fa fa-check-circle"></i> Foundation Businessコース：マンツーマン（45分×4）、グループ（45分×3）、オプション（45分×1）</h3>

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

<h3 class="top30 point"><i class="fa fa-check-circle"></i> Basic Businesshコース：マンツーマン（45分×4）、グループ（45分×3）、 オプション（45分×1）</h3>

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

<h3 class="top30 point"><i class="fa fa-check-circle"></i> Tesolコース：マンツーマン（45分×4）、グループ（45分×3）、 オプション（45分×1）</h3>

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
				<td colspan="3">Philinter Academy, Mustang, Ceniza Street Pusok, Lapu-lapu City, Philippines</td>
			</tr>
			<tr class="">
				<th scope="row" class="bg-skyblue white">アクセス</th>
				<td colspan="3" class="active">マクタン・セブ国際空港より車で約5~10分</td>
			</tr>
			<tr class="">
				<th scope="row" class="bg-skyblue white">設立年度</th>
				<td colspan="3">2003年6月</td>
			</tr>
			<tr class="">
				<th scope="row" class="bg-skyblue white">講師数</th>
				<td colspan="3" class="active">90名</td>
			</tr>
			<tr class="">
				<th scope="row" class="bg-skyblue white">学生定員</th>
				<td colspan="3">150名 + 外部寮40名</td>
			</tr>
			<tr class="">
				<th scope="row" class="bg-skyblue white">日本人比率</th>
				<td colspan="3" class="active">20~40％</td>
			</tr>
			<tr class="">
				<th scope="row" class="bg-skyblue white">学校施設</th>
				<td colspan="3">自習室、学生ラウンジ、食堂、売店、ジム、プール、映画室、など</td>
			</tr>
			<tr class="">
				<th scope="row" class="bg-skyblue white">宿泊形態</th>
				<td colspan="3" class="active">学校寮・・・1人部屋、２人部屋、３人部屋</td>
			</tr>
			<tr class="">
				<th scope="row" class="bg-skyblue white">宿泊設備</th>
				<td colspan="3">
					ベッド、エアコン、温水シャワー、机＆椅子など
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