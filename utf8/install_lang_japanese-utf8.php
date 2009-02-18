<?php
/*
 * Nucleus: PHP/MySQL Weblog CMS (http://nucleuscms.org/)
 * Copyright (C) 2002-2009 The Nucleus Group
 *
 * This program is free software; you can redistribute it and/or
 * modify it under the terms of the GNU General Public License
 * as published by the Free Software Foundation; either version 2
 * of the License, or (at your option) any later version.
 * (see nucleus/documentation/index.html#license for more info)
 */

/**
 * @license http://nucleuscms.org/license.txt GNU General Public License
 * @copyright Copyright (C) 2002-2009 The Nucleus Group
 * @version $Id$
 */
define('_CHARSET',				'UTF-8');

define('_ERROR1',				'使用中のPHPはMySQLをサポートしていません :(');
define('_ERROR2',				'データベース名が見つかりません');
define('_ERROR3',				'｢データベースプリフィックスを使用する｣が選択されていますが、プリフィックスが設定されていません。');
define('_ERROR4',				'プリフィックスに使用できる文字は A-Z、a-z、0-9 と _(アンダーバー)のみです。');
define('_ERROR5',				'URLのいづれかが｢/(スラッシュ)｣で終わっていないか、または機能決定ファイルのURLが｢action.php｣で終わっていません。');
define('_ERROR6',				'管理エリアのディレクトリパスが｢/(スラッシュ)｣で終わっていません。');
define('_ERROR7',				'アップロードしたファイルが格納されるディレクトリパスが｢/(スラッシュ)｣で終わっていません。');
define('_ERROR8',				'テーマファイルのディレクトリパスが｢/(スラッシュ)｣で終わっていません。');
define('_ERROR9',				'管理エリアのディレクトリパスがサーバ上に存在しません。');
define('_ERROR9_2',				'<tt>action.php</tt>ファイルへのURLが別のサーバを指しています。');
define('_ERROR9_3',				'<tt>action.php</tt>ファイルへのURLにファイルが存在しません。');
define('_ERROR10',				'メールアドレスが不正です。');
define('_ERROR11',				'｢表示される名前｣に使用できない文字が含まれています。(使用できる文字：a-z と 0-9、最初と最後以外の空白)');
define('_ERROR12',				'パスワードが入力されていません。');
define('_ERROR13',				'入力された二つのパスワードが一致しませんでした。');
define('_ERROR14',				'｢ブログの短縮名(略称)｣に使用できない文字が含まれています。(使用できる文字：a-z と 0-9。空白は使用できません)');
define('_ERROR15',				'mySQL serverに接続できませんでした。');
define('_ERROR16',				'データベースを作成できませんでした。作成の権限があるかどうか確認してください。SQL エラーの内容：');
define('_ERROR17',				'データベースを見つけられませんでした。データベースが存在するか確認してください。');
define('_ERROR18',				'次のクエリの実行中にエラーが発生しました：');
define('_ERROR19',				'｢メンバー設定｣の実行中にエラーが発生しました：');
define('_ERROR20',				'｢blog設定｣の実行中にエラーが発生しました：');
define('_ERROR21',				'次のクエリの実行中にエラーが発生しました：');
define('_ERROR22',				'プラグイン「%s」をインストールできませんでした。');
define('_ERROR23_1',			'テーマファイル｢%s｣が読み込めませんでした。');
define('_ERROR23_2',			'ファイルが見つかりません。');
define('_ERROR24',				'テーマ｢%s｣をインポート出来ませんでした。');
define('_ERROR25_1',			'プログラムのコアファイル <b>');
define('_ERROR25_2',			'</b> が見つからない、もしくは読み出し禁止になっています。');
define('_ERROR26',				'設定の更新中にエラーが発生しました。実行したクエリは次の通りです：');
define('_ERROR27',				'エラー！');
define('_ERROR28',				'エラーメッセージは次の通りです：');
define('_ERROR29',				'複数のエラーを発見しました');
define('_ERROR30',				'クエリの実行中にエラーが発生しました：');

define('_NOTIFICATION1',		'判別不能');

define('_TITLE',				'Nucleusのインストール');
define('_TITLE2',				'テーマ・プラグインのインストールエラー');
define('_TITLE3',				'インストールはほぼ完了しました！');
define('_TITLE4',				'インストールは完了しました！');
define('_TITLE5',				'スパムとの戦い');

define('_HEADER1',				'Nucleusのインストール');
define('_TEXT1',				'<p>このスクリプトはNucleusのインストールを手助けします。MySQLテーブルのセットアップと、<i>config.php</i>に入力するための情報を表示します（config.phpのパーミッションを0666にしておけば、後者の作業は自動的に行われます）。これをなす為に、いくつかの情報を入力する必要があります。</p><p>すべての欄の入力が必要です。オプション情報は、インストールが完了後Nucleusの管理領域から設定可能です。</p>');

define('_HEADER2',				'PHP と MySQL のバージョン');
define('_TEXT2',				'<p>以下はあなたのウェブホストにおけるPHPとMySQLサーバーのバージョンです。Nucleusのサポートフォーラムに問題を報告する時は、この情報を書き添えてください。</p>');
define('_TEXT2_WARN',			' 注意: Nucleusの動作には少なくともバージョン %s が必要です');
define('_TEXT2_WARN2',			' 注意: Nucleusの動作には少なくともバージョン %s が必要です');
define('_TEXT2_WARN3',			'警告！ 動作しているPHPのバージョンが古いようです！次にリリースされるNucleusCMSではPHP4はサポートされません！早急にPHP5にアップグレードしてください！');

define('_HEADER3',				'<i>config.php</i>の自動設定');
define('_TEXT3',				'<em>config.php</em>のパーミッションを<strong>666</strong>にしておけば、スクリプトが自動で設定情報を書き込みます。ただし、Nucleusのインストール完了後、<strong><em style="font-color:#f00;">必ず</em></strong>パーミッションを<strong>444</strong>に変更してください(<a href="nucleus/documentation/tips.html#filepermissions">パーミッション変更の簡易ガイド</a>)。</p><p>スクリプトに書き込み権限を与えなくても、インストール中に<em>config.php</em>に書き込むべき内容が表示されるので、内容を書き換えてFTP等でアップロードすれば問題ありません。');

define('_HEADER4',				'MySQLのログインデータ');
define('_TEXT4',				'<p>MySQLのデータを以下に入力してください。それらはデータベース・テーブルを作成し情報を入力するために必要なものです。後で、<i>config.php</i>にも記入する必要があります（上記の自動設定を利用する場合、その手順は省略されます）。</p><p>もしこの情報がわからなければ、システム管理者かホスティング元に連絡をとってください。ほとんどの場合、ホスト名は｢localhost｣です。もしNucleusがあなたのサーバのPHP設定から｢default MySQL host｣を検知したなら、｢ホスト名｣に既に記入されているはずです。もっとも、この情報が正確であるという保証はありません。</p>');
define('_TEXT4_TAB_HEAD',		'基本のデータベース設定');
define('_TEXT4_TAB_FIELD1',		'ホスト名：');
define('_TEXT4_TAB_FIELD2',		'ユーザー名：');
define('_TEXT4_TAB_FIELD3',		'パスワード：');
define('_TEXT4_TAB_FIELD4',		'データベース名：');
define('_TEXT4_TAB_FIELD4_ADD',	'データベースを作成する必要がある');

define('_TEXT4_TAB2_HEAD',		'高度なデータベース設定');
define('_TEXT4_TAB2_FIELD',		'テーブル・プリフィックスを使用する：');
define('_TEXT4_TAB2_ADD',		'<p>一つのデータベースに複数のNucleusをインストールし、自分が何をやっているのか理解している場合を除き、<strong>これを変更する必要はありません</strong>。</p><p>Nucleusによって生成されたすべてのデータベーステーブルは、このプリフィックスが頭につきます。</p>');

define('_HEADER5',				'ディレクトリとURL');
define('_TEXT5',				'<p>このインストールスクリプトはNucleusがインストールされているディレクトリとURLを見つけようとしました。下の値をチェックして必要なら訂正してください。ファイルへのパスとURLはスラッシュ\'/\'で終わらなくてはなりません。</p>');

define('_TEXT5_TAB_HEAD',		'ディレクトリとURL');
define('_TEXT5_TAB_FIELD1',		'サイトの<strong>URL</strong>：');
define('_TEXT5_TAB_FIELD2',		'管理エリアの<strong>URL</strong>：');
define('_TEXT5_TAB_FIELD3',		'管理エリアの<strong>ディレクトリ</strong>：');
define('_TEXT5_TAB_FIELD4',		'アップロードしたファイルが格納される<strong>URL</strong>：');
define('_TEXT5_TAB_FIELD5',		'アップロードしたファイルが格納される<strong>ディレクトリ</strong>：');
define('_TEXT5_TAB_FIELD6',		'スキンファイルの<strong>URL</strong>：');
define('_TEXT5_TAB_FIELD7',		'スキンファイルの<strong>ディレクトリ</strong>：');
define('_TEXT5_TAB_FIELD7_2',	'インポートしたスキンで使用するファイル');
define('_TEXT5_TAB_FIELD8',		'プラグインが格納されている<strong>URL</strong>：');
define('_TEXT5_TAB_FIELD9',		'機能決定ファイルの<strong>URL</strong>：');
define('_TEXT5_TAB_FIELD9_2',	'<tt>action.php</tt>ファイルへのhttp://から始まるURL：');
define('_TEXT5_2',				'<p class="note"><strong>付記:</strong> 相対パスではなく<strong>絶対パスを使用してください</strong>。絶対パスはほとんどの場合、<tt>/home/username/public_html/</tt>のようにスラッシュから始まります。よく解らない場合はサーバ管理者に質問してください。</p>');

define('_HEADER6',				'管理権限をもつユーザー');
define('_TEXT6',				'<p>以下に、サイトの最初のユーザーを作成するための情報を入力してください。</p>');
define('_TEXT6_TAB_HEAD',		'サイトの管理者：');
define('_TEXT6_TAB_FIELD1',		'表示される名前(ログインID)：');
define('_TEXT6_TAB_FIELD1_2',	'使用できる文字：a-z と 0-9、最初と最後以外の空白');
define('_TEXT6_TAB_FIELD2',		'本名(ハンドル名)：');
define('_TEXT6_TAB_FIELD3',		'パスワード：');
define('_TEXT6_TAB_FIELD4',		'パスワード(確認の為にもういちど入力してください)：');
define('_TEXT6_TAB_FIELD5',		'メールアドレス：');
define('_TEXT6_TAB_FIELD5_2',	'利用可能なメールアドレスを入れてください');

define('_HEADER7',				'ブログのデータ');
define('_TEXT7',				'<p>以下に、デフォルトのWeblogを作成するための情報を入力してください。このWeblogの名前は、サイト名としても利用されます。</p>');
define('_TEXT7_TAB_HEAD',		'ブログのデータ');
define('_TEXT7_TAB_FIELD1',		'ブログの名前：');
define('_TEXT7_TAB_FIELD2',		'ブログの短縮名(略称)：');
define('_TEXT7_TAB_FIELD2_2',	'使用できる文字：a-z と 0-9、空白は不可');

define('_HEADER8',				'更新Ping');
//define('_HEADER8',				'インストールするプラグインとテーマの選択');
define('_TEXT8_TAB_HEADER',		'更新Ping');
define('_TEXT8_TAB_PLUGINDEP', '以下のプラグインに依存します。%s'); //<addsatona date="2008-09-03" />
//define('_TEXT8_TAB_HEADER',		'プラグインの選択');
define('_TEXT8_TAB_HEADER2',	'テーマの選択');
define('_TEXT8_TAB_FIELD1',		'更新Ping送信のために、NP_Pingをインストールしますか？(このプラグインをインストールしなくても、他のプラグインで更新Pingを送信する事は出来ます)');

define('_HEADER9',				'データの送信');
define('_TEXT9',				'<p>上に書いてきたデータが正しいか確かめてください。よければデータベース・テーブルと最初のデータを設定するために下のボタンを押してください。少し時間がかかるかもしれませんがご辛抱を。<strong>ボタンをクリックするのは一回だけにしてください。</strong></p>');

define('_TEXT10',				'<p>データベーステーブルの初期値入力が成功しました。後は<i>config.php</i>を書き換えるだけです。以下に書き換えるべき内容を表示します（mysqlのパスワードはマスクされています。ここは実際のものに書き換えてください）</p>');
define('_TEXT11',				'<p>あなたのコンピュータ上のファイルを書き換えたら、FTPを使ってウェブサーバにアップロードしてください。ASCIIモードで送信してファイルを上書きします。</p>');
define('_TEXT12',				'<b>付記:</b> <i>config.php</i>の最初や終わりにスペースを空けないようにしましょう。実行時にエラーを引き起こす原因となります。<br />したがって、config.phpの最初の文字は "&lt;"で最後の文字は"&gt;"としなければなりません。');
define('_TEXT13',				'<p>Nucleusはインストールされ、<code>config.php</code>はアップデートされました。</p><p>セキュリティのため<code>config.php</code>のパーミッションを444に戻すことを忘れないでください(<a href="nucleus/documentation/tips.html#filepermissions">パーミッション変更の簡易ガイド</a>)。</p>');
define('_TEXT14',				'<p>Nucleusは誰でもブログにコメントを残す事が出来る様になっているので、このままではスパマーの温床になる危険があります。以下の方法のによってブログを保護することをお勧めします：</p>');
define('_TEXT14_L1',			'あなたがコメントを必要としないのであれば、管理エリアから｢あなたのブログ｣ &gt; ｢ブログ設定｣ とたどり、 ｢コメントを許可しますか?｣ の設定を｢いいえ｣にする事で、コメント投稿フォームを非表示にする事が出来ます。');
define('_TEXT14_L2',			'スパムを撃退・管理する為のプラグインをインストールすることも可能です：<a href="http://japan.nucleuscms.org/wiki/plugins_by_category#section4">Nucleus Japan wiki</a> (ブックマークをお勧めします)');
define('_HEADER10',				'インストールファイルの削除');
define('_TEXT15',				'<p>ウェブサーバから次のファイルを削除してください：</p>');
define('_TEXT15_L1',			'<b>install.sql</b>：テーブルの構造を内包するファイル');
define('_TEXT15_L2',			'<b>install.php</b>：このファイル');

define('_TEXT14_EX',			'<p>もしこれらのファイルを削除していなければ、管理領域を開くことが出来ません。</p>');

define('_HEADER11',				'ウェブサイトの確認');
define('_TEXT16',				'ウェブサイトを使う準備が整いました。');
define('_TEXT16_L1',			'管理領域にログインしてサイトの設定を行う');
define('_TEXT16_L2',			'すぐにサイトへ行ってみる');

define('_TEXT17',				'戻る');

define('_BUTTON1',				'Nucleus CMSのインストール');

// General category
define('_GENERALCAT_NAME',		'総合');
define('_GENERALCAT_DESC',		'投稿した記事に合うカテゴリが無い時にこのカテゴリを使用すると良いでしょう');

define('_1ST_POST_TITLE',		'Nucleus CMS バージョン3.4へようこそ');
define('_1ST_POST',				'ウェブページの作成を補助する積み木がここにあります。それは心躍るblogになるかもしれませんし、観るものを和ませる家族のページになるかもしれませんし、実り多き趣味のサイトになるかもしれません。あるいは現在のあなたには想像がつかないものになることだってあるでしょう。<br />
<br />用途が思いつきませんでしたか？　それならここへ来て正解です。なぜならあなた同様私たちにもわからないのですから。');
define('_1ST_POST2',			'これはサイトにおける最初のエントリーです。スタートを切りやすいように、リンクと情報を入れておきました。<br />
<br />
この記事を削除することもできますが、どちらにせよ記事を追加していくことによってやがてメインページからは見えなくなります。Nucleusを扱ううちに生じたメモをコメントとして追加し、将来アクセスできるようにこのページをブックマークしておくのも手です。<br />
<br />
<b>リンク</b><br />
<br />
Nucleus CMSの<a href="http://nucleuscms.org">本家</a>と<a href="http://japan.nucleuscms.org">日本語公式</a>ページ。<br />
<br />
Nucleus CMSのSourceForge<a href="http://sourceforge.net/projects/nucleuscms/">プロジェクト</a>（<a href="http://sourceforge.jp/projects/nucleus-jp/">日本版</a>）ページ。<br />
<br />
Nucleus CMSのプラグイン<a href="http://wakka.xiffy.nl/Plugin/">倉庫</a>と<a href="http://japan.nucleuscms.org/wiki/plugins">日本語のリスト</a>ページ。<br />
<br />
<b>ドキュメント - <a href="http://docs.nucleuscms.org/">docs.nucleuscms.org</a></b><br />
<br />
Nucleusの<a href="http://japan.nucleuscms.org/faq.php">FAQ（よくある質問集）</a>（<a href="http://nucleuscms.org/faq.php">原文</a>）ページ。<br />
<br />
インストール方法等は<a href="nucleus/documentation/">ユーザー向け</a>と<a href="nucleus/documentation/devdocs/">開発者向け</a>文書がファイルに含まれています。<br />
<br />
ポップアップ<a href="./nucleus/documentation/help.html">ヘルプ</a>が管理エリアのいたるところにあり、サイトのカスタマイズやデザインを手助けしてくれることでしょう。<br />
<br />
一度用意されているドキュメントに目を通したら、<a href="http://wiki.nucleuscms.org/">Wiki</a>（<a href="http://japan.nucleuscms.org/wiki/">日本版</a>）を訪れてください。ユーザーの書いたハウツーや小技が掲載されています。<br />
<br />
<b>サポート</b><br />
<br />
<a href="http://forum.nucleuscms.org/">forum.nucleuscms.org</a>（本家）<br />
<a href="http://japan.nucleuscms.org/bb/">japan.nucleuscms.org/bb/</a>（日本版）<br />
<br />
<a href="http://forum.nucleuscms.org/groupcp.php?g=3">moderators</a>とサポートフォーラムで活動する全てのボランティアに感謝します。<br />
<br />
- <a href="http://edmondhui.homeip.net/blog/">admun</a> - Ottawa, ON, Canada 	  	<br />
- <a href="http://www.tamizhan.com/">anand</a> - Bangalore, India<br />
- <a href="http://hcgtv.com">hcgtv</a> - Miami, Florida, USA<br />
- <a href="http://www.adrenalinsports.nl/">ikeizer</a> - Maastricht<br />
- <a href="http://www.tipos.com.br/">moraes</a> - Brazil<br />
- <a href="http://roelg.nl/">roel </a>- The Netherlands<br />
- <a href="http://budts.be/weblog/">TeRanEX </a>- Ekeren, Antwerp, Belgium<br />
- <a href="http://www.trentadams.com/">Trent </a>- Alberta, Canada<br />
- <a href="http://xiffy.nl/weblog/">xiffy </a>- Deventer<br />
<br />
もし手助けが必要なら、1400を超える登録ユーザーのいる私たちのフォーラムに参加してください。23,000を超える投稿された記事を検索できるようになっておりますので、求める答えに数回のクリックでたどり着けるかもしれません。<br />
<br />
<b>Personalization - <a href="http://skins.nucleuscms.org/">skins.nucleuscms.org</a></b><br />
<br />
マルチウェブログとスキン/テンプレートの組み合わせは強力な相乗効果を生み出します。個人的なサイト作成、友人や親戚あるいはクライアントに対するサイトデザインいずれに対してもです。<br />
<br />
636の登録された<a href="http://nucleuscms.org/sites.php">Nucleusで運用されているサイト</a>（<a href="http://japan.nucleuscms.org/sites.php">日本版</a>）の中から特色あるサイトをサンプルとしてご紹介します。<br />
<br />
The Zen of Nucleus<br />
- <a href="http://beefcake.nl/">beefcake.nl</a> - Beefcake | Nuke the whales!<br />
- <a href="http://www.leng-lui.com//">leng-lui.com</a> - Leng-Lui.com - v7.0: "Memento"<br />
<br />
Personal blogs<br />
- <a href="http://bloggard.com/">bloggard.com</a> - The Adventures of Bloggard<br />
- <a href="http://battleangel.org/">battleangel.org</a> - Giving meaning to the meaningless<br />
- <a href="http://www.yetanotherblog.de/">yetanotherblog.de</a> - Yet Another Blog<br />
<br />
Multi user blogs<br />
- <a href="http://tipos.com.br/">tipos.com.br</a> - Blogging community<br />
<br />
Hobby, Travel and News sites<br />
- <a href="http://adrenalinsports.nl/">adrenalinsports.nl</a> - Extreme sports<br />
- <a href="http://hsbluebird.com/">hsbluebird.com</a> - Hot Springs, Montana\'\'s Online Resource <br />
- <a href="http://groningen-info.de/">groningen-info.de</a> - Neues aus Groningen. Fr Leute aus Duitsland.<br />
- <a href="http://www.americandaily.com/">americandaily.com</a> - American Daily - Home<br />
<br />
<b>Nucleus Developer Network - <a href="http://dev.nucleuscms.org/">dev.nucleuscms.org</a></b><br />
<br />
The NUDN is a hub for developer sites and programming resources.<br />
<br />
NUDN satellite sites, handles, location and UTC offset:<br />
- <a href="http://karma.nucleuscms.org/">karma</a> - Izegem +02<br />
- <a href="http://hcgtv.net/">hcgtv</a> - Miami -05<br />
- <a href="http://edmondhui.homeip.net/blog/nudn.php">admun</a> - Ottawa -04<br />
- <a href="http://dev.budts.be/nucleus/">TeRanEX</a> - Ekeren +02<br />
<br />
Sourceforge.net graciously hosts our <a href="http://sourceforge.net/projects/nucleuscms/">CVS repository</a>.<br />
<br />
Want to play around or test changes, visit our demo site at <a href="http://demo.nucleuscms.org/">demo.nucleuscms.org</a>.<br />
<br />
Not sure what plugins to use, visit the <a href="http://showcase.trentadams.com/">showcase site</a> where you can see plugins at play in their native habitat.<br />
<br />
Then visit the plugin repository at <a href="http://plugins.nucleuscms.org/">plugins.nucleuscms.org</a> for download and installation instructions.<br />
<br />
<b>寄付者一覧</b><br />
<br />
以下の<a href="http://nucleuscms.org/donators.php">素晴らしい人々</a>による<a href="http://nucleuscms.org/donate.php">援助</a>感謝を捧げます。<em>ありがとう！</em><br />
<br />
- <a href="http://reddustrec.net/">dkex</a><br />
- <a href="http://www.uncoverthenet.com/">Uncover the Net</a><br />
- <a href="http://www.webatlas.org/">Web Atlas</a><br />
- <a href="http://www.ipnlighting.com/">IPN Lighting</a><br />
- <a href="http://blog.datoka.jp/">Yu (blog.datoka.jp)</a><br />
- <a href="http://www.thegadgetreview.com/">Sony Gadgets and Reviews</a><br />
- <a href="http://sites.proliphus.com/blueZhift/blog/">Thomas McKibben</a><br />
- <a href="http://cheapweb.us/">CheapWeb.us</a><br />
- Robert Seyfriedsberger<br />
- <a href="http://www.toxicologie.nl/">Toxicologie.nl</a><br />
- Gordon Shum<br />
- <a href="http://www.subsim.com/">Neal Stevens</a><br />
- <a href="http://www.GamblingHelper.com/">GamblingHelper</a><br />
- Oliver Kirstein<br />
- <a href="http://www.dominiek.be/">Dominiek</a><br />
- <a href="http://www.aardschok.net/">Aardschok</a><br />
- <a href="http://www.nieuwevoordeur.be/">nieuwevoordeur.be</a><br />
- <a href="http://www.scene24.net/">Scene24</a><br />
- <a href="http://www.eug.be/">Eug\'\'s Weblog</a><br />
- <a href="http://www.bloggard.com/">The Adventures of Bloggard</a><br />
- <a href="http://www.voltos.com/">Arthur Cronos from Voltos</a><br />
- <a href="http://www.webmaster-toolkit.com/">Free Webmaster Tools and Resources</a><br />
- <a href="http://www.domilog.be/">Domi\'\'s Weblog</a><br />
- Infodoma		<br />
- <a href="http://carvingcode.com/">carvingCode.com</a><br />
- <a href="http://www.traweb.com/">Traweb</a><br />
- <a href="http://gene.mm2u.com/">Gene\'\'s MoBlog</a><br />
- <a href="http://interfacethis.com/">InterfaceThis</a><br />
- <a href="http://www.thefinsters.com/flog/">The Finster Log</a><br />
- <a href="http://www.mrhop.com/">Hop Nguyen</a><br />
- <a href="http://www.zwavel.com/~zwavelaars" title="Zwavelaars">Zwavelaars</a><br />
- <a href="http://beefcake.nl/">Joaquin Scholten</a>	<br />
- <a href="http://www.roelgroeneveld.com/">Roel Groeneveld</a><br />
- <a href="http://lvb.net/">LVBlog</a><br />
- <a href="http://xandermol.com/">Xander Mol</a><br />
- Danilo Massa<br />
- <a href="http://01FTP.com/">01FTP.com</a><br />
- <a href="http://www.adrenalinsports.nl/">Irmo Keizer</a><br />
- <a href="http://www.jasonkrogh.com/">Jason Krogh</a><br />
- <a href="http://www.higuchi.com/">Osamu Higuchi</a><br />
- <a href="http://www.trentadams.com/">Trent Adams</a><br />
- <a href="http://www.ppcw.net/">Arne Hess</a><br />
- <a href="http://hsbluebird.com/">The Bluebird</a><br />
- Rainer Bickel<br />
- Fritz Elfers<br />
- <a href="http://www.european-wall-tapestries.com/">European Wall Tapestries</a><br />
- <a href="http://www.jamier.net/">Jamie R. Rytlewski</a><br />
- Madolyn Piper<br />
- <a href="http://www.batteryvalues.com/">Battery Values</a><br />
- <a href="http://www.mixburnrip.de/">Janko Roettgers</a><br />
- Lukas Loesche<br />
- <a href="http://www.seobook.com/">SEO Book</a><br />
- <a href="http://www.brandweerdematen.nl/">Brandweer de Maten</a><br />
- Andy Fuchs<br />
- <a href="http://www.sumoforce.com/">Sumoforce</a><br />
- <a href="http://love.silverindigo.com/">Al\'\'ky\'\'mie</a><br />
- <a href="http://www.pejo.us/">Peter Johnson</a><br />
- <a href="http://www.triv.nl/">TriV Internet Solutions</a><br />
- <a href="http://www.torontomusicians.org/nucleus/">Margaret Stowe</a><br />
- <a href="http://www.zenkey.org/">zenkey dot org</a><br />
- <a href="http://www.golb.org/">Blots of Info</a><br />
- <a href="http://www.zonderpartij.be/">Rudi De Kerpel</a><br />
- <a href="http://staylorx.com/">Steve Taylor</a><br />
- <a href="http://lmhcave.com/">Malcolm Farnsworth</a><br />
- Birgit Kellner<br />
- <a href="http://www.tobiasly.com/">Toby Johnson</a><br />
- <a href="http://www.kapingamarangi.be/">Kapingamarangi</a><br />
- <a href="http://www.pallalink.net/">Pallalink</a><br />
- <a href="http://publiustx.net/">PubliusTX Weblog</a><br />
- <a href="http://www.reductioadabsurdum.net/">Reductio Ad Absurdum</a><br />
- <a href="http://www.gagaweb.org/">GagaWeb</a><br />
- <a href="http://www.videokid.be/">Videokid</a><br />
- Jon Marr<br />
- <a href="http://www.docblog.org/">Luigi Cristiano</a><br />
- J Keith Lehman<br />
- Bohemian Cachet<br />
- Jesus Mourazos<br />
- <a href="http://ltp-design.com/">Stephen Jones</a><br />
- <a href="http://oha.nu/">One-Handed Apps</a><br />
- Alwin Hawkins<br />
- <a href="http://jstigall.bloomington.in.us">Justin Stigall</a><br />
- <a href="http://www.itismylife.com/">It is my life</a><br />
- Greg Morrill<br />
- <a href="http://www.dutchsubmarines.com/">Dutch Submarines</a><br />
- <a href="http://www.7thwatch.com/">Seventh Watch Design Studios</a>		<br />
- <a href="http://www.macnet2.com/">MacNetv2</a>	<br />
- Richard Noordhof<br />
- <a href="http://www.jamier.net/">Jamie Rytlewski</a><br />
<br />
Nucleusが気に入りましたか？　<a href="http://www.hotscripts.com/Detailed/13368.html?RID=nucleus@demuynck.org">HotScripts</a>や<a href="http://www.opensourcecms.com/index.php?option=content&task=view&id=145">opensourceCMS</a>での投票をお願いします。<br />
<br />
<b>ライセンス</b><br />
<br />
私たちがフリー・ソフトウェアについて口にする場合は自由のことに言及しているのであって、価格のことではありません。私たちの<a href="http://www.gnu.org/licenses/gpl.html">一般公有使用許諾書</a>（<a href="http://www.gnu.org/licenses/gpl.ja.html">日本語訳</a>と<a href="http://www.atmarkit.co.jp/aig/03linux/gpl.html">概要</a>）は、フリー・ソフトウェアの複製物を自由に頒布できること(そして、望むならこのサービスに対して対価を請求できること)、ソース・コードを実際に受け取るか希望しさえすれば入手することが可能であること、入手したソフトウェアを変更したり新しいフリー・プログラムの一部として使用できること、以上の各内容を行なうことができるということをユーザ自身が知っていることを実現できるようにデザインされています。');

?>