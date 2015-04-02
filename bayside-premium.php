<?php
/*
Template Name: Bayside Premium
*/
?>
<?php get_header(); ?>
<?php
$school_name ="Bayside Premium";
?>

			<!-- パンくずリスト -->
			<?php get_template_part( 'breadcrumb-page' ); ?>

			<div class="col-sm-9 sp-padding10"> <!-- main col-9 -->

			<h1 class="detail"  itemprop="name headline">
				<a href="<?php the_permalink(); ?>" title="<?php printf(the_title_attribute('echo=0') ); ?>" itemprop="url"><?php echo $school_name; ?>（セブ島）の学校情報</a>
			</h1>

			<h2 id="balloon-2-bottom">海を目の前にバケーション気分が味わえながら、落ち着いた環境で学ぶ大人向けホテル型キャンパス。</h2>

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
						<li>1日最大10時間の授業の受講が可能。</li>
						<li>100%オーダーメイドのカリキュラム。</li>
						<li>セブらしさを味わえる海が目の前のロケーション。</li>
						<li>大人を対象としたリゾート感あるホテル型キャンパス。</li>
						<li>日本人スタッフによる充実のサポート体制。</li>
					</ol>

					<h2 id="feature" class="detail-h2 detail-h2-sp top30"><span id="number" class="spnone">01</span><?php echo $school_name; ?>の特徴</h2>
					<p class="detail">
					『Bayside English Cebu, Premium Campus（Bayside Premium）』はセブのリゾートエリアであるマクタン島にある日本資本の語学学校です。
					当校は2つのキャンパスが有り、目的に応じて『<a href="http://philippines-cebu-ryugaku.com/all-school/bayside-rpc/">RPCキャンパス</a>』と『Premiumキャンパス』から選択することができます。
					</p>
					<p class="detail">
					『Premiumキャンパス』は元リゾートホテルを改装し、20歳以上の方を対象とした大人向けのキャンパスとなっております。海が目の前に広がる光景は、まるでバケーションに来ているかのような気分を味わうことができる最高のロケーションとなっています。少人数制のためアットホームかつ、落ち着いて勉強に集中できる雰囲気となっており、またプライベートな時間をしっかりと確保したい方におすすめの学校です。
					</p>
					<p class="detail">
					コースは、<span class="keikou-yellow">1日最大10時間の授業数</span>を確保でき、基礎をしっかりと固めたい人向けの一般英語コースに加え、上級英語を学習したい人向けのビジネスコースが用意されています。一般英語コースのマンツーマン授業は全てオーダーメイドとなっており、学生それぞれの弱点やニーズに応じた授業内容を提供しております。ビジネスマンなどに人気のビジネスコースでは、仕事で求められる英語力の向上はもちろん、TOEIC対策も可能となっています。さらに、平日の自由時間だけではなく、土日や祝日にも1時間500ペソというリーズナブルな価格でマンツーマン授業を追加することができるのもBaysideの魅力の一つです。
					</p>
					<p class="detail">
					施設内にはジャグジー付のプールやバー、開放的なロビー、レストラン、さらにはプライベートビーチまであり、勉強の疲れを癒すことができる環境が整っています。当キャンパスは『RPCキャンパス』よりも設備が充実しているため割高な料金設定となりますが、落ち着いた環境で自分のペースでしっかり勉強したい方には最適です。
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
				<th scope="row" class="bg-skyblue white" rowspan="5" id="t-middle">ESLコース</th>
				<td>Generalコース</td>
				<td>５時間</td>
				<td>１時間</td>
				<td>１時間</td>
			</tr>

			<tr class="">
				<td>Intensiveコース</td>
				<td>６時間</td>
				<td>２時間</td>
				<td>１時間</td>
			</tr>

			<tr class="">
				<td>Absoluteマンツーマンコース</td>
				<td>８時間</td>
				<td>１時間</td>
				<td>-</td>
			</tr>

			<tr class="">
				<td>Groupコース</td>
				<td>３時間</td>
				<td>３時間</td>
				<td>１時間</td>
			</tr>

			<tr class="">
				<td>Relaxコース</td>
				<td>３時間</td>
				<td>１時間</td>
				<td>１時間</td>
			</tr>

			<tr class="">
				<th scope="row" class="bg-skyblue-light white" id="t-middle" rowspan="3">ビジネスコース</th>
				<td class="active">Generalコース</td>
				<td>４時間</td>
				<td>２時間</td>
				<td>１時間</td>
			</tr>

			<tr class="active">
				<td>Intensiveコース</td>
				<td>８時間</td>
				<td>-</td>
				<td>２時間</td>
			</tr>

			<tr class="active">
				<td>TOEICコース</td>
				<td>４時間</td>
				<td>２時間</td>
				<td>１時間</td>
			</tr>

		</tbody>
	</table>
</div>

					<!-- CV button -->
					<?php get_template_part( 'button/cv-button' ); ?>

					<h2 id="class" class="detail-h2 detail-h2-sp top40"><span id="number" class="spnone">03</span><?php echo $school_name; ?>のカリキュラム</h2>

					<h3 class="top30 point"><i class="fa fa-check-circle"></i> ESLコース</h3>
					<p class="detail">
					ESLコース（一般英語コース）では、レベル分けテストの結果を基に、自分に合ったレベルの授業を受けることができます。マンツーマン授業はスピーキング、リーディング、リスニング、ライティングをバランスよく学習することができ、授業内容はアレンジ可能となっているためそれぞれのニーズに応じた授業内容となっています。
					</p>

					<h3 class="top30 point"><i class="fa fa-check-circle"></i> ビジネスコース</h3>
					<p class="detail">
					ビジネス英語で使えるコミュニケーション能力を身に付けることができるコースです。営業やビジネスレター、プレゼンテーション、面接、電話対応など様々なシーンで役立つ表現を学習していきます。授業の中ではロールプレイングなどを通じて、ビジネスシーンで使われる表現を実践的に学んでいきます。
					</p>

					<!-- CV button -->
					<?php get_template_part( 'button/cv-button' ); ?>

					<h2 id="price" class="detail-h2 detail-h2-sp top40"><span id="number" class="spnone">04</span><?php echo $school_name; ?>の料金表</h2>

					<h3 class="top30 point"><i class="fa fa-check-circle"></i> Generalコース/Groupコース</h3>

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

					<h3 class="top30 point"><i class="fa fa-check-circle"></i> Relaxコース</h3>

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

					<a class="venobox col-sm-4 col-xs-6 padding5" href="<?php bloginfo('stylesheet_directory'); ?>/images/school/bayside-premium/baysidepremium_cafeteria_01.jpg">
						<img src="<?php bloginfo('stylesheet_directory'); ?>/images/school/bayside-premium/baysidepremium_cafeteria_01.jpg" alt="image alt" class="img-responsive max-width" />
					</a>
					<a class="venobox col-sm-4 col-xs-6 padding5" href="<?php bloginfo('stylesheet_directory'); ?>/images/school/bayside-premium/baysidepremium_dormitory_01.jpg">
						<img src="<?php bloginfo('stylesheet_directory'); ?>/images/school/bayside-premium/baysidepremium_dormitory_01.jpg" alt="image alt" class="img-responsive max-width" />
					</a>
					<a class="venobox col-sm-4 col-xs-6 padding5" href="<?php bloginfo('stylesheet_directory'); ?>/images/school/bayside-premium/baysidepremium_lesson_01.jpg">
						<img src="<?php bloginfo('stylesheet_directory'); ?>/images/school/bayside-premium/baysidepremium_lesson_01.jpg" alt="image alt" class="img-responsive max-width" />
					</a>

					<a class="venobox col-sm-4 col-xs-6 padding5" href="<?php bloginfo('stylesheet_directory'); ?>/images/school/bayside-premium/baysidepremium_school_01.jpg">
						<img src="<?php bloginfo('stylesheet_directory'); ?>/images/school/bayside-premium/baysidepremium_school_01.jpg" alt="image alt" class="img-responsive max-width" />
					</a>
					<a class="venobox col-sm-4 col-xs-6 padding5" href="<?php bloginfo('stylesheet_directory'); ?>/images/school/bayside-premium/baysidepremium_school_02.jpg">
						<img src="<?php bloginfo('stylesheet_directory'); ?>/images/school/bayside-premium/baysidepremium_school_02.jpg" alt="image alt" class="img-responsive max-width" />
					</a>
					<a class="venobox col-sm-4 col-xs-6 padding5" href="<?php bloginfo('stylesheet_directory'); ?>/images/school/bayside-premium/baysidepremium_school_03.jpg">
						<img src="<?php bloginfo('stylesheet_directory'); ?>/images/school/bayside-premium/baysidepremium_school_03.jpg" alt="image alt" class="img-responsive max-width" />
					</a>

					<a class="venobox col-sm-4 col-xs-6 padding5" href="<?php bloginfo('stylesheet_directory'); ?>/images/school/bayside-premium/baysidepremium_school_04.jpg">
						<img src="<?php bloginfo('stylesheet_directory'); ?>/images/school/bayside-premium/baysidepremium_school_04.jpg" alt="image alt" class="img-responsive max-width" />
					</a>
					<a class="venobox col-sm-4 col-xs-6 padding5 bottom30" href="<?php bloginfo('stylesheet_directory'); ?>/images/school/bayside-premium/baysidepremium_school_05.jpg">
						<img src="<?php bloginfo('stylesheet_directory'); ?>/images/school/bayside-premium/baysidepremium_school_05.jpg" alt="image alt" class="img-responsive max-width" />
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
				Premium： Punta Engaño, Lapu-Lapu City 6015 Cebu, Philippines
				</td>
			</tr>
			<tr class="">
				<th scope="row" class="bg-skyblue white">アクセス</th>
				<td colspan="3" class="active">マクタン・セブ国際空港より車で約25分</td>
			</tr>
			<tr class="">
				<th scope="row" class="bg-skyblue white">設立年度</th>
				<td colspan="3">2005年</td>
			</tr>
			<tr class="">
				<th scope="row" class="bg-skyblue white">講師数</th>
				<td colspan="3" class="active">30名 スタッフ10名</td>
			</tr>
			<tr class="">
				<th scope="row" class="bg-skyblue white">学生定員</th>
				<td colspan="3">50名</td>
			</tr>
			<tr class="">
				<th scope="row" class="bg-skyblue white">日本人比率</th>
				<td colspan="3" class="active">約90％</td>
			</tr>
			<tr class="">
				<th scope="row" class="bg-skyblue white">学校施設</th>
				<td colspan="3">自習室、カフェテリア、バー、売店、プライベートビーチ、プール、卓球台、バドミントンコート、など</td>
			</tr>
			<tr class="">
				<th scope="row" class="bg-skyblue white">宿泊形態</th>
				<td colspan="3" class="active">学校寮・・・1人部屋、２人部屋、３人部屋</td>
			</tr>
			<tr class="">
				<th scope="row" class="bg-skyblue white">宿泊設備</th>
				<td colspan="3">
					ベッド、机、椅子、冷蔵庫、棚、トイレ、シャワー、など <br />
					有料貸出： ドライヤー、携帯電話、デスクライト、延長コード
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