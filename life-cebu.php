<?php
/*
Template Name: Life Cebu
*/
?>
<?php get_header(); ?>
<?php
$school_name ="Life Cebu";
?>
			<!-- パンくずリスト -->
			<?php get_template_part( 'breadcrumb-page' ); ?>

			<div class="col-sm-9 sp-padding10"> <!-- main col-9 -->

			<h1 class="detail"  itemprop="name headline">
				<a href="<?php the_permalink(); ?>" title="<?php printf(the_title_attribute('echo=0') ); ?>" itemprop="url"><?php echo $school_name; ?>（セブ島）の学校情報</a>
			</h1>

			<h2 id="balloon-2-bottom">セブ島中心部に立地した便利なロケーション。留学費用を抑え、スピーキング力を高めたい方に最適の学校！</h2>

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
						<li>宿泊施設は元コンドミニアムの為4人部屋でも広くて格安の料金設定</li>
						<li>学校はセブシティのアップダウンに位置する便利な環境</li>
						<li>日本人の苦手なスピーキングに重点を置いたカリキュラム</li>
						<li>講師と相性が悪い場合は講師変更が可能</li>
						<li>IDEA リスニング授業とCNN授業は生徒から好評</li>
					</ol>

					<h2 id="feature" class="detail-h2 detail-h2-sp top30"><span id="number" class="spnone">01</span><?php echo $school_name; ?>の特徴</h2>
					<p class="detail">
『LIFE CEBU』は、スピーキングが弱い日本人のために”話すこと”をメインにカリキュラム構成に力を入れてきた学校です。スピーキング強化を特に間がているた学生の満足度は、非常に高い学校となっております。
					</p>
					<p class="detail">
教室があるフロアは、勉強に集中できるように自習室やインターネットルーム、そして生徒たちがリラックスできる大きな学生ラウンジが設置されており、生徒がより快適に学生生活を送れるように考えられています。教師採用基準も厳しく、校長が直接講師や学校管理に関わっており、校内の秩序も保たれています。また、学生寮はセブのアップタウンの高級住宅街に位置し、コンドミニアム型なので非常に快適な宿泊施設です。
					</p>

					<!-- CV button -->
					<?php get_template_part( 'button/cv-button' ); ?>

					<h2 id="course" class="detail-h2 detail-h2-sp top40"><span id="number" class="spnone">02</span><?php echo $school_name; ?>のコース紹介（1コマ=70分）</h2>

<div class="table-responsive">
	<table class="table">
		<thead class="t-head">
			<tr>
				<th>コース</th>
				<th>マンツーマン</th>
				<th>グループ</th>
				<th>無料クラス</th>
			</tr>
		</thead>

		<tbody>

			<tr class="">
				<th scope="row" class="bg-skyblue white" id="t-middle">Power Speaking１コース</th>
				<td>３コマ</td>
				<td>２コマ</td>
				<td>１コマ</td>
			</tr>

			<tr class="">
				<th scope="row" class="bg-skyblue-light white" id="t-middle">Power Speaking２コース</th>
				<td class="active">４コマ</td>
				<td class="active">２コマ</td>
				<td class="active">１コマ</td>
			</tr>

			<tr class="">
				<th scope="row" class="bg-skyblue white" id="t-middle" >ビジネスコース</th>
				<td>３コマ</td>
				<td>２コマ</td>
				<td>１コマ</td>
			</tr>

			<tr class="">
				<th scope="row" class="bg-skyblue-light white" id="t-middle">TOEIC 集中コース</th>
				<td>３コマ</td>
				<td>２コマ</td>
				<td>１コマ</td>
			</tr>

			<tr class="">
				<th scope="row" class="bg-skyblue white" id="t-middle" >TOEIC Speakingコース</th>
				<td>４コマ</td>
				<td>２コマ</td>
				<td>１コマ</td>
			</tr>

			<tr class="">
				<th scope="row" class="bg-skyblue-light white" id="t-middle">OPIcコース</th>
				<td>４コマ</td>
				<td>２コマ</td>
				<td>１コマ</td>
			</tr>

			<tr class="">
				<th scope="row" class="bg-skyblue white" id="t-middle" >スパルタコース</th>
				<td>４コマ</td>
				<td>５コマ</td>
				<td>１コマ</td>
			</tr>

			<tr class="">
				<th scope="row" class="bg-skyblue-light white" id="t-middle">ワーキングホリデーコース</th>
				<td>３コマ</td>
				<td>２コマ</td>
				<td>１コマ</td>
			</tr>

		</tbody>
	</table>
</div>

					<!-- CV button -->
					<?php get_template_part( 'button/cv-button' ); ?>

					<h2 id="class" class="detail-h2 detail-h2-sp top40"><span id="number" class="spnone">03</span><?php echo $school_name; ?>のカリキュラム</h2>

					<h3 class="top30 point"><i class="fa fa-check-circle"></i> 授業概要</h3>
					<p class="detail">
1コマの授業時間数は平日70分、金曜日50分です。金曜日の午後はクラス分けテスト、卒業式、アクティビティが開催されるため、スペシャル授業または動画授業は開講されません。<br />
					</p>

					<p class="detail">
初日のレベルテストを基に時間割が決定します。
授業変更を行いたい場合は、毎週金曜日に行うことができます。
					</p>

					<p class="detail">
正規授業を週2回以上欠席した場合は、該当授業は自動的に取り消されます。そのため、授業を再開したい場合は、金曜日の授業変更時に行わなければ再開することができません。授業の出席率が90%以上と卒業試験の規定を満たした場合に修了証が発行されます。
					</p>

					<h3 class="top30 point"><i class="fa fa-check-circle"></i> 目的別の授業概要</h3>
					<ul>
						<li class="bold">マンツーマンレッスン </li>
						<p>生徒のレベル・ペースに合わせて授業が行われます。</p>
						<li class="bold">グループ授業（１：４）</li>
						<p>同レベルの生徒と討論、リスニング、スピーキング、リーディング、ライティングなど全てのスキルの学習を行います。</p>
						<li class="bold">グループ授業（１：８）</li>
						<p>カナダ人講師により、発音矯正、イディオム、言語表現などの授業が行われます。</p>
						<li class="bold">大グループ授業（１：１５）</li>
						<p>CNN、リスニング、ディクテーション、スピーチなどの中から自分の目的に合った科目を選択します。 Job Training）に近い形で進行します。</p>
					</ul>

					<!-- CV button -->
					<?php get_template_part( 'button/cv-button' ); ?>

					<h2 id="price" class="detail-h2 detail-h2-sp top40"><span id="number" class="spnone">04</span><?php echo $school_name; ?>の料金表</h2>

					<h3 class="top30 point"><i class="fa fa-check-circle"></i> Power Speaking１コース</h3>

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
				<td>$536</td>
				<td>$990</td>
				<td>$1,650</td>
				<td>$3,300</td>
				<td>$4,950</td>
				<td>$6,600</td>
				<td>$9,900</td>
			</tr>

			<tr class="active">
				<td>２人部屋</td>
				<td>$445</td>
				<td>$822</td>
				<td>$1,370</td>
				<td>$2,740</td>
				<td>$4,110</td>
				<td>$5,480</td>
				<td>$8,220</td>
			</tr>

			<tr class="">
				<td>３人部屋</td>
				<td>$410</td>
				<td>$756</td>
				<td>$1,260</td>
				<td>$2,520</td>
				<td>$3,780</td>
				<td>$5,040</td>
				<td>$7,560</td>
			</tr>
			
			<tr class="active">
				<td>４人部屋</td>
				<td>$387</td>
				<td>$714</td>
				<td>$1,190</td>
				<td>$2,380</td>
				<td>$3,570</td>
				<td>$4,760</td>
				<td>$7,140</td>
			</tr>
			
		</tbody>
	</table>
</div>

					<h3 class="top30 point"><i class="fa fa-check-circle"></i> Power Speaking２／OPIc／TOEIC Speakingコース</h3>

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
				<td>$575</td>
				<td>$1,062</td>
				<td>$1,770</td>
				<td>$3,540</td>
				<td>$5,310</td>
				<td>$7,080</td>
				<td>$10,620</td>
			</tr>

			<tr class="active">
				<td>２人部屋</td>
				<td>$484</td>
				<td>$894</td>
				<td>$1,490</td>
				<td>$2,980</td>
				<td>$4,470</td>
				<td>$5,960</td>
				<td>$8,940</td>
			</tr>

			<tr class="">
				<td>３人部屋</td>
				<td>$449</td>
				<td>$828</td>
				<td>$1,380</td>
				<td>$2,760</td>
				<td>$4,140</td>
				<td>$5,520</td>
				<td>$8,280</td>
			</tr>
			
			<tr class="active">
				<td>４人部屋</td>
				<td>$426</td>
				<td>$786</td>
				<td>$1,310</td>
				<td>$2,620</td>
				<td>$3,930</td>
				<td>$5,240</td>
				<td>$7,860</td>
			</tr>
		</tbody>
	</table>
</div>

					<h3 class="top30 point"><i class="fa fa-check-circle"></i> ビジネス／TOEIC集中／ワーキングホリデーコース</h3>

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
				<td>$553</td>
				<td>$1,020</td>
				<td>$1,700</td>
				<td>$3,400</td>
				<td>$5,100</td>
				<td>$6,800</td>
				<td>$10,200</td>
			</tr>

			<tr class="active">
				<td>２人部屋</td>
				<td>$462</td>
				<td>$852</td>
				<td>$1,420</td>
				<td>$2,840</td>
				<td>$4,260</td>
				<td>$5,680</td>
				<td>$8,520</td>
			</tr>

			<tr class="">
				<td>３人部屋</td>
				<td>$426</td>
				<td>$786</td>
				<td>$1,310</td>
				<td>$2,620</td>
				<td>$3,930</td>
				<td>$5,240</td>
				<td>$7,860</td>
			</tr>
			
			<tr class="active">
				<td>４人部屋</td>
				<td>$403</td>
				<td>$744</td>
				<td>$1,240</td>
				<td>$2,480</td>
				<td>$3,720</td>
				<td>$4,960</td>
				<td>$7,440</td>
			</tr>
		</tbody>
	</table>
</div>

					<h3 class="top30 point"><i class="fa fa-check-circle"></i> スパルタコース</h3>

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
				<td> - </td>
				<td>$1,032</td>
				<td>$1,720</td>
				<td>$3,440</td>
				<td>$5,160</td>
				<td>$6,880</td>
				<td>$10,320</td>
			</tr>

			<tr class="active">
				<td>２人部屋</td>
				<td> - </td>
				<td>$864</td>
				<td>$1,440</td>
				<td>$2,880</td>
				<td>$4,320</td>
				<td>$5,760</td>
				<td>$8,640</td>
			</tr>

			<tr class="">
				<td>３人部屋</td>
				<td> - </td>
				<td>$798</td>
				<td>$1,330</td>
				<td>$2,660</td>
				<td>$3,990</td>
				<td>$5,320</td>
				<td>$7,980</td>
			</tr>
			
			<tr class="active">
				<td>４人部屋</td>
				<td> - </td>
				<td>$756</td>
				<td>$1,260</td>
				<td>$2,520</td>
				<td>$3,780</td>
				<td>$5,040</td>
				<td>$7,560</td>
			</tr>
			
			<tr class="">
				<td>５人部屋</td>
				<td> - </td>
				<td>$714</td>
				<td>$1,190</td>
				<td>$2,380</td>
				<td>$3,570</td>
				<td>$4,760</td>
				<td>$7,140</td>
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
4th floor, Tower 2, Winland Towers, Juana Osmenia ext, Cebu city, Philippines
				</td>
			</tr>
			<tr class="">
				<th scope="row" class="bg-skyblue white">アクセス</th>
				<td colspan="3" class="active">セブ・マクタン空港より車で約45分。</td>
			</tr>
			<tr class="">
				<th scope="row" class="bg-skyblue white">設立年度</th>
				<td colspan="3">2004年6月</td>
			</tr>
			<tr class="">
				<th scope="row" class="bg-skyblue white">講師数</th>
				<td colspan="3" class="active">130名 スタッフ16名</td>
			</tr>
			<tr class="">
				<th scope="row" class="bg-skyblue white">学生定員</th>
				<td colspan="3">300名</td>
			</tr>
			<tr class="">
				<th scope="row" class="bg-skyblue white">日本人比率</th>
				<td colspan="3" class="active">20~50％</td>
			</tr>
			<tr class="">
				<th scope="row" class="bg-skyblue white">学校施設</th>
				<td colspan="3">食堂、ジム、プール、休憩室、PCルーム、売店、自習室、 映画鑑賞室等、など</td>
			</tr>
			<tr class="">
				<th scope="row" class="bg-skyblue white">宿泊形態</th>
				<td colspan="3" class="active">学校寮・・・1人部屋、２人部屋、３人部屋、4人部屋</td>
			</tr>
			<tr class="">
				<th scope="row" class="bg-skyblue white">宿泊設備</th>
				<td colspan="3">
					TV、ベッド、トイレ、シャワー、机、クローゼット、冷蔵庫、 エアコンなど
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
