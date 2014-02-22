<?php

    return array(

    // ---------------------------------------------------
    //  Administration tools
    // ---------------------------------------------------

    'administration tool name test_mail_settings' => 'メールの設定をテスト',
    'administration tool desc test_mail_settings' => 'Feng Officeのメーラーが適切に設定されていることを確認するテストメールを、この簡単なツールを使用して送信できます。',
    'administration tool name mass_mailer' => 'マスメーラー',
    'administration tool desc mass_mailer' => 'システムに登録された複数のユーザーに、テキストのメールを送信する簡単なツールです。',

    // ---------------------------------------------------
    //  Configuration categories and options
    // ---------------------------------------------------

    'configuration' => '構成',

    'mail transport mail()' => 'デフォルトのPHP設定',
    'mail transport smtp' => 'SMTPサーバー',

    'secure smtp connection no' => 'いいえ',
    'secure smtp connection ssl' => 'SSLを使用',
    'secure smtp connection tls' => 'TLSを使用',

    'file storage file system' => 'ファイルシステム',
    'file storage mysql' => 'データベース(MySQL)',

    // Categories
    'config category name general' => '概要',
    'config category desc general' => 'Feng Officeの全般的な設定です。',
    'config category name mailing' => 'メール',
    'config category desc mailing' => 'Feng Officeが電子メールの送信を処理する方法をこれらの設定で指定します。php.iniによる構成オプションを使用するか、別に他のSMTPサーバーを使用するように設定できます。',
    'config category name modules' => 'モジュール',
    'config category desc modules' => 'Feng Officeのモジュールを使用するかどうかを設定します。無効に設定するとグラフィカルなインターフェイスに表示されませんが、ユーザーに設定した作成・編集等の権限は削除しません。',
    'config category name passwords' => 'パスワード',
    'config category desc passwords' => 'パスワードのオプションの管理をこれらの設定で指定します。',

    //--------------------------------------------------
    // Validate Password
    // ---------------------------------------------------

    'autentify password title' => 'パスワード認証',
    'autentify password desc' => '管理パネルに入ろうとしています。<br/>あなたのパスワードを再入力してください。',

    // ---------------------------------------------------
    //  Options
    // ---------------------------------------------------

    // General
    'config option name site_name' => 'サイト名',
    'config option desc site_name' => 'この値はダッシュボードのページにサイト名として表示されます。',
    'config option name file_storage_adapter' => 'ファイルの保管場所',
    'config option desc file_storage_adapter' => 'アップロードしたドキュメントを保管する場所を選択してください。 警告: 保管場所を切り替えると、以前にアップロードされたファイルはすべて利用できなくなります。',
    'config option name default_project_folders' => 'デフォルトのフォルダー',
    'config option desc default_project_folders' => 'ワークスペースを作成した時に自動的に作成するフォルダーです。各フォルダーの名前は1行に1つ記述します。重複した行や、空の行は無視されます。',
    'config option name theme' => 'テーマ',
    'config option desc theme' => 'テーマを使用するとFeng Officeのデザインを変更できます。変更を反映させるには再読み込みが必要です。',
    'config option name days_on_trash' => 'ゴミ箱に置く日数',
    'config option desc days_on_trash' => 'ゴミ箱に保管しているオブジェクトが自動的に削除されるまでの日数。0にするとゴミ箱から自動的に削除されません。',
    'config option name checkout_notification_dialog' => 'ドキュメントのチェックアウト通知のダイアログ',
    'config option desc checkout_notification_dialog' => 'これをセットすると、ユーザーはファイルをダウンロードするときに編集するか読み込み専用か選択を求められます。',
    'config option name time_format_use_24' => '24時間の書式を使用',
    'config option desc time_format_use_24' => 'これをセットすると、12時間の書式の表示に代えて24時間の書式を時刻の表示に使用します。',
    'config option name file_revision_comments_required' => 'ファイルのリビジョンにコメントが要求',
    'config option desc file_revision_comments_required' => 'これをセットすると、新しいファイルのリビジョンを追加するときに、ユーザーは各リビジョンに新しいコメントを書くことが必要となります。',
    'config option name show_feed_links' => 'フィードのリンクを表示',
    'config option desc show_feed_links' => 'これを使用するとRSSまたはiCalのフィードへのリンクをシステムにログインしたユーザーに表示して、ユーザーが購読できるようにします。警告: このリンクは、そのユーザーでシステムにログインできるかもしれない情報を含みます。このリンクをユーザーが第三者と不用意に共有すると、そのユーザーのすべての情報を漏洩する可能性があります。',

    'config option name ask_administration_autentification' => '管理作業を認証',
    'config option desc ask_administration_autentification' => '「はい」を選択すると、管理パネルのアクセス時にパスワードを認証のダイアログを表示します。',

    'config option name enable_notes_module' => 'ノートのモジュールを使用',
    'config option name enable_email_module' => 'メールのモジュールを使用',
    'config option name enable_contacts_module' => '連絡先のモジュールを使用',
    'config option name enable_calendar_module' => 'カレンダーのモジュールを使用',
    'config option name enable_documents_module' => 'ドキュメントのモジュールを使用',
    'config option name enable_tasks_module' => 'タスクのモジュールを使用',
    'config option name enable_weblinks_module' => 'ウェブリンクのモジュールを使用',
    'config option name enable_time_module' => '時間のモジュールを使用',
    'config option name enable_reporting_module' => 'レポートのモジュールを使用',

    'config option name upgrade_check_enabled' => '更新の確認を使用',
    'config option desc upgrade_check_enabled' => '「はい」を選択すると、ダウンロードして利用できるFeng Officeの新しいバージョンの有無をシステムは一日に一度確認します。',
    'config option name work_day_start_time' => '就業日の開始時刻',
    'config option desc work_day_start_time' => '就業日の開始時刻を指定します。',

    'config option name use_minified_resources' => '最小のリソースを使用',
    'config option desc use_minified_resources' => '性能を向上させるために、圧縮されたJavaスクリプトとCSSを使用します。この場合、JavaスクリプトやCSSを変更した場合は、public/toolsを使用して再コンパイルする必要があります。',

    'config option name currency_code' => '通貨',
    'config option desc currency_code' => '通貨記号',
    'config option name use_owner_company_logo_at_header' => 'アプリケーションロゴとしてオーナー会社のロゴを使用',
    'config option desc use_owner_company_logo_at_header' => '画面の右上端にオーナー会社のロゴを置きます。変更を適用するには再読み込み(F5キー)しなければなりません。推奨するサイズ: 50x50 ピクセル',

    // Mailing
    'config option name exchange_compatible' => 'Microsoft Exchange互換モード',
    'config option desc exchange_compatible' => 'Microsoft Exchange Serverを使用している場合は、このオプションを有効して既知のメールの問題を回避してください。',
    'config option name mail_transport' => 'メール配送',
    'config option desc mail_transport' => 'メールの送信はデフォルトのPHPの設定か、SMTPサーバーを指定して行えます。',
    'config option name smtp_server' => 'SMTPサーバー',
    'config option name smtp_address' => 'SMTPアドレス',
    'config option desc smtp_address' => '必須ではありません。空にするとユーザーのメールアドレスをメールの送信に使用します。メールの送信に、そのサーバー上の電子メールアドレスだけ許可しているサーバーで指定します。',
    'config option name smtp_port' => 'SMTPサーバーのポート',
    'config option name smtp_authenticate' => 'SMTP認証を使用',
    'config option name smtp_username' => 'SMTP認証のユーザー名',
    'config option name smtp_password' => 'SMTP認証のパスワード',
    'config option name smtp_secure_connection' => '暗号化したSMTP接続を使用',
    'config option name user_email_fetch_count' => 'メールを取り出す限度',
    'config option desc user_email_fetch_count' => 'ユーザーが「メールを確認」のボタンをクリックして取り出すメールの数です。大きな値を指定すると、タイムアウトのエラーがユーザーに起きるかもしれません。0を指定すると制限しません。但し、この値はcronを通したメールの取り込みには適用されません。',

    // Passwords
    'config option name min_password_length' => 'パスワードの最小の長さ',
    'config option desc min_password_length' => 'パスワードに必要な最小の文字数です。',
    'config option name password_numbers' => 'パスワードに含める数字',
    'config option desc password_numbers' => 'パスワードに含めることが必要な数字の数です。',
    'config option name password_uppercase_characters' => 'パスワードに含める大文字',
    'config option desc password_uppercase_characters' => 'パスワードに含めることが必要な大文字の数です。',
    'config option name password_metacharacters' => 'パスワードに含めるメタ文字',
    'config option desc password_metacharacters' => 'パスワードに含めることが必要なメタ文字(例えば . や $ や *)の数です。',
    'config option name password_expiration' => 'パスワードの有効期限(日)',
    'config option desc password_expiration' => '新しいパスワードを使用な日数です。(このオプションは0にすると無効にできます。)',
    'config option name password_expiration_notification' => 'パスワードの有効期限の事前通知(何日前)',
    'config option desc password_expiration_notification' => 'パスワードの有効期限が来る前に、ユーザーに通知する日数です。(このオプションは0にすると無効にできます。)',
    'config option name account_block' => '有効期限の切れたパスワードのアカウントを停止',
    'config option desc account_block' => 'パスワードの有効期限が切れたときにアカウントを停止します。(ユーザーのアカウントを有効にするには管理者権限が必要です。)',
    'config option name new_password_char_difference' => '過去のパスワードと新しいパスワードの文字を履歴で確認',
    'config option desc new_password_char_difference' => '新しいパスワードが、ユーザーが使用した過去の10個のパスワードと比べて3文字以上の異なる文字を使用しているかどうか確認します。',
    'config option name validate_password_history' => '過去のパスワードと履歴で比較',
    'config option desc validate_password_history' => '新しいパスワードが、ユーザーが使用した過去の10個のパスワードと一致するかどうか確認します。',
    'config option name checkout_for_editing_online' => 'オンラインの編集で自動的にチェックアウト',
    'config option desc checkout_for_editing_online' => 'ユーザーがドキュメントをオンラインで編集するときにチェックアウトを行い、他のユーザーが同時に編集できなくします。',
	'config option name block_login_after_x_tries' => '5回の失敗の後はログインを遮断',
	'config option desc block_login_after_x_tries' => '10分間にユーザーが5回ログインの失敗を繰り返すと、アカウントは10分間は使用できなくなります。',

    'can edit company data' => 'オーナー会社の情報を変更可能',
    'can manage security' => 'セキュリティを管理可能',
    'can manage workspaces' => 'ワークスペースを管理可能',
    'can manage configuration' => '構成を管理可能',
    'can manage contacts' => 'すべての連絡先を管理可能',
    'can manage reports' => 'レポートを管理可能',
    'group users' => 'グループのユーザー',


    'user ws config category name dashboard' => 'ダッシュボードのオプション',
    'user ws config category name task panel' => 'タスクのオプション',
    'user ws config category name general' => '一般的なオプション',
    'user ws config category name calendar panel' => 'カレンダーのオプション',
    'user ws config category name mails panel' => '電子メールのオプション',
    'user ws config option name show pending tasks widget' => '未完了のタスクのウィジェットを表示',
    'user ws config option name pending tasks widget assigned to filter' => '担当しているタスクのウィジェットを表示',
    'user ws config option name show late tasks and milestones widget' => '遅れているタスクとマイルストーンのウィジェットを表示',
    'user ws config option name show messages widget' => 'ノートのウィジェットを表示',
    'user ws config option name show comments widget' => 'コメントのウィジェットを表示',
    'user ws config option name show documents widget' => 'ドキュメントのウィジェットを表示',
    'user ws config option name show calendar widget' => 'ミニカレンダーのウィジェットを表示',
    'user ws config option name show charts widget' => 'チャートのウィジェットを表示',
    'user ws config option name show emails widget' => 'メールのウィジェットを表示',
    'user ws config option name show dashboard info widget' => 'ダッシュボードの説明のウィジェットを表示',
    'user ws config option name show activity widget' => '活動状況のウィジェットを表示',
    'user ws config option name show getting started widget' => '「始めましょう」のウィジェットを表示',
    'user ws config option name localization' => '地域設定',
    'user ws config option desc localization' => 'このロケールでラベルや日付は表示されます。設定を反映させるにはページの再読み込みが必要です。',
    'user ws config option name initialWorkspace' => '最初のワークスペース',
    'user ws config option desc initialWorkspace' => 'この設定でログイン直後のワークスペースを選択しておいたワークスペースにするか、最後に表示していたワークスペースにするか選択できます。',
    'user ws config option name rememberGUIState' => 'ユーザーインターフェイスの状態を記憶',
    'user ws config option desc rememberGUIState' => 'これを有効にすると、グラフィカルインタフェースの状態(パネルのサイズ、広げられたか縮めているかなど)を保存して、次にログインした時に復元します。警告: この機能はベータ版です。',
    'user ws config option name time_format_use_24' => '時刻の表示に24時間の書式を使用',
    'user ws config option desc time_format_use_24' => 'これを有効にすると時刻の表示の\'hh:mm\'は、00:00から 23:59のように表示されます。無効の場合はAMやPMを使用した1から12の時間とします。',
    'user ws config option name work_day_start_time' => '就業日の開始時間',
    'user ws config option desc work_day_start_time' => '就業日の開始時間を指定します',
//  'user ws config option name show dashboard info widget' => 'ダッシュボードの説明のウィジェットを表示', オリジナルで重複
//   'user ws config option name show activity widget' => '活動状況のウィジェットを表示', オリジナルで重複

    'user ws config option name my tasks is default view' => '担当しているタスクをデフォルトで表示',
    'user ws config option desc my tasks is default view' => '選択しないとタスクパネルのデフォルトの表示にはすべてのタスクが表示されます。',
    'user ws config option name show tasks in progress widget' => '「進行中のタスク」のウィジェットを表示',
    'user ws config option name can notify from quick add' => 'タスクの通知のチェックボックスをデフォルトでオン',
    'user ws config option desc can notify from quick add' => 'タスクの通知(「ユーザーに通知メールを送信」)のチェックボックスは、タスクが追加や更新されると担当しているユーザーに通知を有効にします。',
    'user ws config option name show_tasks_context_help' => 'タスクの状況に応じたヘルプを表示',
    'user ws config option desc show_tasks_context_help' => 'これを有効にすると、タスクのパネルで状況に応じたヘルプボックスが表示されます。',
    'user ws config option name start_monday' => '月曜日から週を開始',
    'user ws config option desc start_monday' => 'カレンダーの週の最初を月曜日から表示します。(変更を適用するには再読み込みしなければなりません。)',
    'user ws config option name show_week_numbers' => '週番号を表示',
    'user ws config option desc show_week_numbers' => '月表示と週表示で週番号を表示します。',

    'user ws config option name date_format' => '日付の書式',
    'user ws config option desc date_format' => '日付の値に適用する雛形の書式です。ここで、d = 日、m = 月、y = 年です。設定を適用するにはページの再読み込みが必要です。',
    'user ws config option name descriptive_date_format' => '詳しい日付書式',
    'user ws config option desc descriptive_date_format' => '詳しい日付の値に適用する雛形の書式です。コードの説明: d = (ゼロから始まることがある数字2桁の)日、D = (3文字の省略名の)曜日、j = (1桁または2桁の数字の)日、l = (完全な名前の)曜日、m = (ゼロから始まることがある数字2桁の)月、M = (3文字の省略名の)月。3 文字形式。n = (数字の)月、F = (完全な名前の)月、Y = (数字4桁の)年、y = (数字2桁の)年。再読み込みが必要です。',

    'user ws config option name show_context_help' => '状況に応じたヘルプ',
    'user ws config option desc show_context_help' => 'ヘルプの表示方法をヘルプを常に表示する、常に表示しない、各ボックスを閉じるまで表示する、から選択します。',
    'user ws config option name view deleted accounts emails' => '削除したアカウントのメールを表示',
    'user ws config option desc view deleted accounts emails' => '削除したメールアカウントのメールを表示できるようにします。(このオプションを使用するにはアカウントを削除するときに電子メールを削除してはなりません。)',
    'user ws config option name block_email_images' => 'メールの画像を遮断',
    'user ws config option desc block_email_images' => 'メールのオブジェクトに埋め込まれた画像を表示しません。',
    'user ws config option name draft_autosave_timeout' => '下書きの自動保存の間隔',
    'user ws config option desc draft_autosave_timeout' => 'メールの下書きを自動保存する処理の間隔を秒で指定します。(自動保存を無効にするには0にします。)',

	'user ws config option name classify_mail_with_conversation' => 'スレッドでメールを分類',
	'user ws config option desc classify_mail_with_conversation' => '受信したメール(がスレッドに含まれているならメール)をスレッドでワークスペースに分類します。',

    'user ws config option name detect_mime_type_from_extension' => '拡張子でMIMEタイプを判断',
    'user ws config option desc detect_mime_type_from_extension' => 'ファイルの拡張子でMIMEタイプを検知するには、このオプションを有効にします。',

  	'user ws config option name displayed events amount' => '表示するイベントの数',
  	'user ws config option desc displayed events amount' => '月表示で一日に表示するイベントの和です。',

    'show context help always' => '常に表示',
    'show context help never' => '常に非表示',
    'show context help until close' => '閉じるまで表示',

    'user ws config option name always show unread mail in dashboard' => 'ダッシュボードに常に未読メールを表示',
    'user ws config option desc always show unread mail in dashboard' => '「いいえ」を選択すると、アクティブなワークスペースのメールが表示されます。',
    'workspace emails' => 'ワークスペースのメール',
    'user ws config option name tasksShowWorkspaces' => 'ワークスペースを表示',
    'user ws config option name tasksShowTime' => '時間を表示',
    'user ws config option name tasksShowDates' => '日付を表示',
    'user ws config option name tasksShowTags' => 'タグを表示',
    'user ws config option name tasksGroupBy' => 'グループ',
    'user ws config option name tasksOrderBy' => '順序',
    'user ws config option name task panel status' => '状態',
    'user ws config option name task panel filter' => 'フィルター',
    'user ws config option name task panel filter value' => 'フィルター値',

    'templates' => 'テンプレート',
    'add template' => 'テンプレートを追加',
    'confirm delete template' => 'このテンプレートを本当に削除しますか?',
    'no templates' => 'テンプレートはありません。',
    'template name required' => 'テンプレートの名前が必要です。',
    'can manage templates' => 'テンプレートを管理可能',
    'can manage time' => '時間を管理可能',
    'can add mail accounts' => 'メールアカウントを追加可能',
    'new template' => '新しいテンプレート',
    'edit template' => 'テンプレートを編集',
    'template dnx' => '指定したテンプレートは存在しません。',
    'success edit template' => 'テンプレートの更新しました。',
    'log add cotemplates' => '{0}を追加しました。',
    'log edit cotemplates' => '{0}を変更しました。',
    'success delete template' => 'テンプレートの削除しました。',
    'error delete template' => 'テンプレートの削除中にエラー',
    'objects' => 'オブジェクト',
    'objects in template' => 'テンプレートに含まれるオブジェクト',
    'no objects in template' => 'このテンプレートにオブジェクトはありません。',
    'add to a template' => 'テンプレートに追加',
    'add an object to template' => 'このテンプレートにオブジェクトを追加',
    'add a parameter to template' => 'このテンプレートにパラメーターを追加',
    'you are adding object to template' => '{0}\'{1}\'をテンプレートに追加しようとしています。テンプレートを以下から選択するか、新しく作成してください。',
    'success add object to template' => 'テンプレートにオブジェクトを追加しました。',
    'object type not supported' => 'このオブジェクトのタイプをテンプレートはサポートしていません。',
    'assign template to workspace' => 'テンプレートをワークスペースに割り当て',
    'parameters' => 'パラメーター',

    'cron events' => 'Cronイベント',
    'about cron events' => 'Cronイベントについて学ぶ...',
    'cron events info' => 'Cronイベントを使用すると、システムにログインせずにFeng Officeのタスクを定期的に実行させることができます。Cronイベントを有効にするには、Feng Officeのディレクトリ直下にある"cron.php"ファイルを定期的にcronのジョブとして実行するように設定しなければなりません。cronのジョブを実行する周期は、これらのcronのイベントをどの程度の細かさで実行するかを決めることになります。例えば、5分毎にcronのジョブを設定して、アップグレードの有無のチェックを1分毎に確認するようにしたなら、実際のチェックは5分毎に実行されます。cronのジョブを設定する方法について学ぶには、システム管理者かホスティングサービスの提供者に問い合わせてください。',
    'cron event name check_mail' => 'メールの確認',
    'cron event desc check_mail' => 'このCronイベントはシステムのすべてのメールアカウントの新着メールを確認します。',
    'cron event name purge_trash' => 'ゴミ箱の消去',
    'cron event desc purge_trash' => 'このCronイベントは「ゴミ箱の保存日数」の設定で指定された日数を超えた古いオブジェクトを削除します。',
    'cron event name send_reminders' => 'リマインダーの送信',
    'cron event desc send_reminders' => 'このCronイベントはリマインダーのメールを送信します。',
    'cron event name check_upgrade' => '更新の確認',
    'cron event desc check_upgrade' => 'このCronイベントはFeng Officeの新しいバージョンを確認します。',
    'cron event name send_notifications_through_cron' => 'cronによって通知を送信',
    'cron event desc send_notifications_through_cron' => 'このイベントを有効にすると、メールによる通知はFeng Officeで生成された時点ではなく、cronの処理を通して送るようにします。',
    'next execution' => '次の実行',
    'delay between executions' => '実行の間隔',
    'enabled' => '有効',
    'no cron events to display' => '表示するCronのイベントはありません。',
    'success update cron events' => 'Cronのイベントを更新しました。',

    'manual upgrade' => '手動更新',
    'manual upgrade desc' => 'Feng Officeの手動更新はFeng Officeの最新バージョンをダウンロードし、インストールするルートにそのファイルを展開してから、ブラウザを使用して <a href="public/upgrade">\'public/upgrade\'</a>を実行します。',
    'automatic upgrade' => '自動更新',
    'automatic upgrade desc' => '自動更新は、自動的に新しいバージョンのダウンロードとファイルの展開を行い、アップグレードの処理を実行します。ウェブサーバーはすべてのフォルダーに書き込みアクセスの権限がなければなりません。',
    'start automatic upgrade' => '自動更新を開始',

    'select object type' => 'オブジェクトの型を選択',
    'select one' => '選択してください',
    'email type' => 'メール',
    'custom properties updated' => '更新されたカスタム属性',
    'user ws config option name noOfTasks' => 'デフォルトで表示するタスクの数を設定',

    'user ws config option name amount_objects_to_show' => 'リンクしたオブジェクトの表示数',
    'user ws config option desc amount_objects_to_show' => 'オブジェクトの表示に一覧する、リンクしているオブジェクトの個数を設定します。',
    'user ws config option name show_two_weeks_calendar' => '2週間のカレンダーのウィジェットを表示',
    'user ws config option desc show_two_weeks_calendar' => '2週間のカレンダーのウィジェットの表示を指定します。',
    'user ws config option name attach_docs_content' => 'ファイルの内容を添付',
    'user ws config option desc attach_docs_content' => 'このオプションを「はい」に設定すると通常のメールにファイルを添付します。「いいえ」にすると選択したファイルは、ファイルへのリンクとして送信します!。',
    'user ws config option name max_spam_level' => '許容する最大のspamレベル',
    'user ws config option desc max_spam_level' => '電子メールを取り出すときに、この値より大きいspamの評価値のメッセージは"Junk"フォルダーに送ります。0にすると最大のフィルタリングを行い、10にすると行いません。このオプションはspamフィルターのツールがサーバーにインストールされているときだけ動作します。',

    'user ws config option name hide_quoted_text_in_emails' => 'メールの表示時に引用部分を表示しない',
    'user ws config option desc hide_quoted_text_in_emails' => '有効にすると、メールを表示するときに引用されたテキストの部分を表示しません。メールを読んでいるときに表示するオプションが用意されています。',

    'edit default user preferences' => 'デフォルトのユーザー設定を編集',
    'default user preferences' => 'デフォルトのユーザー設定',
    'default user preferences desc' => 'ユーザー設定のデフォルトの値を選択します。この値は、ユーザーがオプションを選択していない場合の値となります。',

    'mail accounts' => '電子メールのアカウント',
    'incoming server' => '受信サーバー',
    'outgoing server' => '送信サーバー',
    'no email accounts' => '電子メールのアカウントなし',
    'user ws config option name create_contacts_from_email_recipients' => '電子メールの宛先から連絡先を作成',
    'user ws config option desc create_contacts_from_email_recipients' => 'このオプションが「はい」に設定すると、電子メールを送った宛先のメールアドレスに対応した連絡先を自動的に作成します。「すべての連絡先の管理を可能」な権限が必要です。',
    'user ws config option name drag_drop_prompt' => 'ワークスペースにドラッグ&ドロップしたときの動作',
    'user ws config option desc drag_drop_prompt' => 'オブジェクトをワークスペースにドラッグしたときの処理を選択してください。',
    'drag drop prompt option' => 'ユーザーに処理方法を確認',
    'drag drop move option' => '新しいワークスペースに移動して、以前のワークスペースから移動',
    'drag drop keep option' => '以前のワークスペースに留まったまま、新しいワークスペースに追加',
    'user ws config option name mail_drag_drop_prompt' => 'ドラッグ&ドロップで電子メールの添付ファイルを分類しますか?',
    'user ws config option desc mail_drag_drop_prompt' => '電子メールの添付ファイルをワークスペースにドラッグしたときの処理を選択してください。',
    'mail drag drop prompt option' => 'ユーザーに処理方法を確認',
    'mail drag drop classify option' => '添付ファイルを分類',
    'mail drag drop dont option' => '添付ファイルを分類しない',

    'user ws config option name show_emails_as_conversations' => 'メールをスレッド表示',
    'user ws config option desc show_emails_as_conversations' => '「はい」を選択すると電子メールの一覧を話し合いにまとめて、同じスレッド(返答、転送等)を1つの項目に含めて表示します。',
    'user ws config option name autodetect_time_zone' => 'タイムゾーンを自動検出',
    'user ws config option desc autodetect_time_zone' => '「はい」を選択すると、ユーザーのタイムゾーンをブラウザから自動的に検出します。',
    'user ws config option name search_engine' => '検索エンジン',
    'user ws config option desc search_engine' => '使用する検索エンジンを選択してください。「完全」はより網羅的な検索を行いますが、「高速」よりも時間がかかります。負荷の高いサイトでは「完全」はお勧めしません。',
    'user ws config option name activity widget elements' => '活動状況ウィジェットのサイズ',
    'user ws config option desc activity widget elements' => '活動状況ウィジェットに表示する項目数です。',
	'user ws config option name mail_account_err_check_interval' => '電子メールのアカウントのエラー確認の間隔',
	'user ws config option desc mail_account_err_check_interval' => '電子メールのアカウントを検証する時間間隔です。(0にすると検証しません。)',

    'search engine mysql like' => '完全',
    'search engine mysql match' => '高速',

    'user ws config option name task_display_limit' => '表示するタスクの最大数',
    'user ws config option desc task_display_limit' => '性能上の理由のため、この値はあまり大きくすべきではありません。0を使用すると制限なしとなります。',

  	'user ws config option name show_file_revisions_search' => '検索を実行するときにファイルのリビジョンも対象にします。',	

  	'sync' => '同期',
  	'mails on imap acc already sync' => 'このアカウントに同期が必要な電子メールはありません。',
  	'cant sync account' => 'このアカウントと同期できません。IMAPの設定を確認してください。',
  	'config option name sent_mails_sync' => 'Feng Officeから電子メールを送信時にIMAPの同期します。',
	'config option name check_spam_in_subject' => '件名にspamの文字列(**spam**)の有無を確認します。',

  	'succes save object subtypes' => 'オブジェクトのサブタイプを保存しました。',

  ); // array

?>
