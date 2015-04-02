<?php
/*
Template Name: Nils
*/
?>
<?php get_header(); ?>
<?php
$school_name ="Nils";
?>

			<!-- パンくずリスト -->
			<?php get_template_part( 'breadcrumb-page' ); ?>

			<div class="col-sm-9 sp-padding10"> <!-- main col-9 -->

			<h1 class="detail"  itemprop="name headline">
				<a href="<?php the_permalink(); ?>" title="<?php printf(the_title_attribute('echo=0') ); ?>" itemprop="url"><?php echo $school_name; ?>（セブ島）の学校情報</a>
			</h1>

			<h2 id="balloon-2-bottom">セブ島ではまだ少ない日本人経営の語学学校</h2>

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
						<li>全てマンツーマンレッスンの為、学生のレベルに応じた的確な授業が可能</li>
						<li>進捗によってカリキュラム内容の変更が可能</li>
						<li>日本人スタッフ在籍で留学生活・治安に不安がある方にも安心</li>
						<li>生活し易い立地で長期留学にも快適</li>
						<li>今なら1週間の無料体験留学も可能</li>
					</ol>

					<h2 id="feature" class="detail-h2 detail-h2-sp top30"><span id="number" class="spnone">01</span><?php echo $school_name; ?>の特徴</h2>
					<p class="detail">
					『NILS』はセブではまだ少ない日本人経営の語学学校です。<br />
					日本人スタッフが多数在籍している為、留学生活や治安に不安があってもサポートが非常に充実しております。</p>
					<p class="detail">
					また、寮には警備員が24時間駐在しており、新築寮なので安心、快適です。
					万が一具合が悪くなった場合には、NILS専属医が24時間学校や寮まで来てくれる為安心して留学生活を過ごして頂けます。</p>
					<p class="detail">カリキュラムは、今話題の「カランメソッド」を授業に組み込むことが可能です。「カランメソッド」とは、イギリスで生まれ通常350時間のレッスンが必要なケンブリッジ英検プレミナリーを、4分の1の80時間のレッスンで95%が合格したという脅威的なレッスンのことです。
					密度の高い英語指導を受けることで、「英語脳」を徹底的に鍛えることができます。</p>
					<p class="detail">カランメソッドは対象レベルはなく初心者でも全く問題なく受講でき、様々なレベルの方でも満足できるカリキュラムになっております。
					特に、ネイティブのように英語を話せるようになりたい、短期間で英会話をマスターしたい、レッスンを受けて話し足りないと感じた方々おすすめのレッスンです。</p>
					<p class="detail">NILSの講師陣には選び抜かれた優秀な講師が集まっており、授業のクオリティーの高さには定評があります。
					またTOEICコースでは、規定の点数に達しなかった場合に授業料を返却してもらえる点数保障制度があります。</p>
					<p class="detail">当校はセブ市内の中心部Lahugにキャンパスを構えており、周辺にはショッピングモール、セブの名所ITパークも徒歩距離にあるのでインフラが整っており治安もよく、買い物や食事に出かけることもとても便利です。</p>
					<p class="detail">2011年に出来たばかりの学校ですが生徒数も着実に増えてきており、人気急上昇中の学校です。</p>

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
				<th>対象レベル</th>
			</tr>
		</thead>

		<tbody>

			<tr class="">
				<th scope="row" class="bg-skyblue white" id="t-middle" rowspan="3">一般英語</th>
				<td>ゆっくりプラン</td>
				<td>４時間</td>
				<td>-</td>
				<td>初級〜全レベル</td>
			</tr>

			<tr class="">
				<td>標準プラン</td>
				<td>６時間</td>
				<td>-</td>
				<td>初級〜全レベル</td>
			</tr>

			<tr class="">
				<td>ガッチリプラン</td>
				<td>８時間</td>
				<td>-</td>
				<td>初級〜全レベル</td>
			</tr>

			<tr>
				<th scope="row" class="bg-skyblue-light white">TOEIC試験対策</th>
				<td class="active">TOEIC６００点保証</td>
				<td class="active">５時間</td>
				<td class="active">１時間</td>
				<td class="active">初級〜全レベル</td>
			</tr>

			<tr>
				<th scope="row" class="bg-skyblue white">インターンシップ</th>
				<td>インターンシップ英語留学</td>
				<td>５時間</td>
				<td>１時間</td>
				<td>初級〜全レベル</td>
			</tr>

			<tr class="">
				<th scope="row" class="bg-skyblue-light white" id="t-middle" rowspan="3">ホテル滞在プラン</th>
				<td class="active">ゆっくりプラン</td>
				<td class="active">４時間</td>
				<td class="active">-</td>
				<td class="active">初級〜全レベル</td>
			</tr>

			<tr class="active">
				<td>標準プラン</td>
				<td>６時間</td>
				<td>-</td>
				<td>初級〜全レベル</td>
			</tr>

			<tr class="active">
				<td>ガッチリプラン</td>
				<td>８時間</td>
				<td>-</td>
				<td>初級〜全レベル</td>
			</tr>

			<tr class="">
				<th scope="row" class="bg-skyblue white" id="t-middle" rowspan="3">親子留学プラン</th>
				<td>ゆっくりプラン</td>
				<td>４時間</td>
				<td>-</td>
				<td>初級〜全レベル</td>
			</tr>

			<tr class="">
				<td>標準プラン</td>
				<td>６時間</td>
				<td>-</td>
				<td>初級〜全レベル</td>
			</tr>

			<tr class="">
				<td>ガッチリプラン</td>
				<td>８時間</td>
				<td>-</td>
				<td>初級〜全レベル</td>
			</tr>

		</tbody>
	</table>
</div>

					<!-- CV button -->
					<?php get_template_part( 'button/cv-button' ); ?>

					<h2 id="class" class="detail-h2 detail-h2-sp top40"><span id="number" class="spnone">03</span><?php echo $school_name; ?>のカリキュラム紹介</h2>

					<h3 class="top30 point"><i class="fa fa-check-circle"></i> 一般英語コース</h3>
					<p class="detail">
1日の授業時間数（4時間、6時間、8時間）でコースが設定されています。 
授業はすべてマンツーマンで、初級者から上級者まで6つのレベルに分かれているため、一人ひとりに最適なカリキュラムで受講可能です。
また、4倍速で英語が身に付くと話題の「カランメソッド」を採用。
通常350時間のレッスンが必要なケンブリッジ英検プレミナリーをたった80時間のレッスンのみで95%が合格した 脅威的指導法です。
密度の高いで英語指導で「英語脳」を徹底的に鍛えます。
					</p>

					<h3 class="top30 point"><i class="fa fa-check-circle"></i> TOEIC試験対策コース（６００点保証）</h3>
					<p class="detail">
3ヶ月でTOEIC600点取得を保証する試験対策コース。
600点達成しなかった場合は、授業料が全額返金されます。
TOEICの内容を熟知した講師陣によるマンツーマンレッスンなので、弱点をその場で修正できます。
また、リスニング部分、リーディング部分に大きく分け、効率を重視した専用カリキュラムをご用意。
頻出単語、頻出文法、頻出慣用表現、リスニングテクニック、速読力など、TOEIC用テクニック全般が確実に身につきます。
					</p>

					<h3 class="top30 point"><i class="fa fa-check-circle"></i> インターンシップ英語留学</h3>
					<p class="detail">
1日4時間のマンツーマンレッスンとインターンシップを組み合わせたコース。現地企業での日本語を使ったお仕事を前提とした実習を行うことで、一定時間働いた分の賃金を滞在費や学費などの費用として相殺することで留学費用を抑えることが可能です。
インターンシップで参加できる業種・職種は多岐にわたりますので、一人ひとりのご希望、能力、経験によりポジションを決定いたします。
					</p>

					<h3 class="top30 point"><i class="fa fa-check-circle"></i> ホテル滞在プラン</h3>
					<p class="detail">
豪華なリゾートホテルからセブ市内のシティホテルまで、大手旅行代理店が提供する豊富なホテルのラインアップをご用意！
あなたの目的や好み、予算に合うホテルをお選びいただけます。
大手旅行代理店を通しますので一般料金よりお得な値段でご利用いただけます。
講師は全てNILSの研修を受けております。専属講師が伺いますので、学校に通わずご宿泊のホテル内で、安心かつ質の高いレッスンが受けられます。
一般の語学学校の寮の規則などに縛られず、自由な環境で学ぶ贅沢で新しい語学学習プランです。
					</p>

					<h3 class="top30 point"><i class="fa fa-check-circle"></i> 親子留学プラン</h3>
					<p class="detail">
親子留学プランは、お買い物やホテル内をお様と一緒に行動して、英会話が学べるホテル滞在型プランです。
なんと！お子様1名様の場合、ご家族も一緒に学べます！
宿泊のホテルにNILS専属の講師が伺いますので、通学の必要がなく質の高いレッスンが受けられます。
また、ご宿泊ホテルは大手旅行代理店が提供する豊富なラインナップをご用意。目的や好みご予算などに合わせて、コンシェルジュがあなたに最適なプランをご提案いたします。

					</p>

					<!-- CV button -->
					<?php get_template_part( 'button/cv-button' ); ?>

					<h2 id="price" class="detail-h2 detail-h2-sp top40"><span id="number" class="spnone">04</span><?php echo $school_name; ?>の料金表</h2>

<h3 class="top30 point"><i class="fa fa-check-circle"></i> 一般英語コース：ゆっくりプラン（寮・食事２食付き）</h3>

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








<h3 class="top30 point"><i class="fa fa-check-circle"></i> 一般英語コース：標準プラン（寮・食事２食付き）</h3>

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





<h3 class="top30 point"><i class="fa fa-check-circle"></i> 一般英語コース：ガッチリプラン（寮・食事２食付き）</h3>

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





<h3 class="top30 point"><i class="fa fa-check-circle"></i> ホテル滞在プラン</h3>

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




<h3 class="top30 point"><i class="fa fa-check-circle"></i> 親子留学プラン</h3>

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

					<a class="venobox col-sm-4 col-xs-6 padding5" href="<?php bloginfo('stylesheet_directory'); ?>/images/school/nils/nils_dormitory_01.jpg">
						<img src="<?php bloginfo('stylesheet_directory'); ?>/images/school/nils/nils_dormitory_01.jpg" alt="image alt" class="img-responsive max-width" />
					</a>
					<a class="venobox col-sm-4 col-xs-6 padding5" href="<?php bloginfo('stylesheet_directory'); ?>/images/school/nils/nils_dormitory_02.jpg">
						<img src="<?php bloginfo('stylesheet_directory'); ?>/images/school/nils/nils_dormitory_02.jpg" alt="image alt" class="img-responsive max-width" />
					</a>
					<a class="venobox col-sm-4 col-xs-6 padding5" href="<?php bloginfo('stylesheet_directory'); ?>/images/school/nils/nils_dormitory_03.jpg">
						<img src="<?php bloginfo('stylesheet_directory'); ?>/images/school/nils/nils_dormitory_03.jpg" alt="image alt" class="img-responsive max-width" />
					</a>

					<a class="venobox col-sm-4 col-xs-6 padding5 pc-bottom20" href="<?php bloginfo('stylesheet_directory'); ?>/images/school/nils/nils_school_01.jpg">
						<img src="<?php bloginfo('stylesheet_directory'); ?>/images/school/nils/nils_school_01.jpg" alt="image alt" class="img-responsive max-width" />
					</a>
					<a class="venobox col-sm-4 col-xs-6 padding5 pc-bottom20 sp-margin-bottom10" href="<?php bloginfo('stylesheet_directory'); ?>/images/school/nils/nils_school_02.jpg">
						<img src="<?php bloginfo('stylesheet_directory'); ?>/images/school/nils/nils_school_02.jpg" alt="image alt" class="img-responsive max-width" />
					</a>
					<a class="venobox col-sm-4 col-xs-6 padding5 pc-bottom20 sp-margin-bottom10" href="<?php bloginfo('stylesheet_directory'); ?>/images/school/nils/nils_school_03.jpg">
						<img src="<?php bloginfo('stylesheet_directory'); ?>/images/school/nils/nils_school_03.jpg" alt="image alt" class="img-responsive max-width" />
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
				<td colspan="3">Unit 714. TGU Tower, Asiatown, IT Park Salinas drive, Lahug, 6000 Cebu City Philippines</td>
			</tr>
			<tr class="">
				<th scope="row" class="bg-skyblue white">アクセス</th>
				<td colspan="3" class="active">マクタン・セブ国際空港より車で約25分</td>
			</tr>
			<tr class="">
				<th scope="row" class="bg-skyblue white">設立年度</th>
				<td colspan="3">2011年</td>
			</tr>
			<tr class="">
				<th scope="row" class="bg-skyblue white">講師数</th>
				<td colspan="3" class="active">150名</td>
			</tr>
			<tr class="">
				<th scope="row" class="bg-skyblue white">学生定員</th>
				<td colspan="3">180名</td>
			</tr>
			<tr class="">
				<th scope="row" class="bg-skyblue white">日本人比率</th>
				<td colspan="3" class="active">約100％</td>
			</tr>
			<tr class="">
				<th scope="row" class="bg-skyblue white">学校施設</th>
				<td colspan="3">マンツーマンルーム、カフェテリア、食堂、休憩所、自習デスク</td>
			</tr>
			<tr class="">
				<th scope="row" class="bg-skyblue white">宿泊形態</th>
				<td colspan="3" class="active">学校寮・・・1人部屋、２人部屋、３人部屋</td>
			</tr>
			<tr class="">
				<th scope="row" class="bg-skyblue white">宿泊設備</th>
				<td colspan="3">
					１F・・・・ロビー(お食事場所)、共有パソコンスペース、多目的教室<br />
					２～８F・・・部屋(1～3人部屋)<br />
					屋上・・・ 洗濯、物干しスペース<br />
				</td>
			</tr>
			<tr class="">
				<th scope="row" class="bg-skyblue white">日本語スタッフ</th>
				<td colspan="3" class="active">25名</td>
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