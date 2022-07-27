<?php
/**
 * Settings text strings
 * Contains all text strings used in the general settings sections of BookStack
 * including users and roles.
 */
return [

    // Common Messages
    'settings' => 'Настройки',
    'settings_save' => 'Запази настройките',
    'settings_save_success' => 'Настройките са записани',
    'system_version' => 'System Version',
    'categories' => 'Categories',

    // App Settings
    'app_customization' => 'Персонализиране',
    'app_features_security' => 'Екстри и Сигурност',
    'app_name' => 'Име на приложението',
    'app_name_desc' => 'Това име е включено във всяка шапка и във всеки имейл изпратен от системата.',
    'app_name_header' => 'Покажи името в шапката',
    'app_public_access' => 'Публичен достъп',
    'app_public_access_desc' => 'Активирането на тази настройка, ще позволи на гости, които не са влезли в системта, да имат достъп до съдържанието на вашето приложение.',
    'app_public_access_desc_guest' => 'Достъпа на гостите може да бъде контролиран от "Guest" потребителя.',
    'app_public_access_toggle' => 'Позволяване на публичен достъп',
    'app_public_viewing' => 'Позволване на публичен достъп?',
    'app_secure_images' => 'По-висока сигурност при качване на изображения',
    'app_secure_images_toggle' => 'Активиране на по-висока сигурност при качване на изображения',
    'app_secure_images_desc' => 'С цел производителност, всички изображения са публични. Тази настройка добавя случаен, труден за отгатване низ от символи пред линка на изображението. Подсигурете, че индексите на директорията не са включени за да предотвратите лесен достъп.',
    'app_default_editor' => 'Default Page Editor',
    'app_default_editor_desc' => 'Select which editor will be used by default when editing new pages. This can be overridden at a page level where permissions allow.',
    'app_custom_html' => 'Персонализирано съдържание на HTML шапката',
    'app_custom_html_desc' => 'Всяко съдържание, добавено тук, ще бъде поставено в долната част на секцията <head> на всяка страница. Това е удобно за преобладаващи стилове или добавяне на код за анализ.',
    'app_custom_html_disabled_notice' => 'Съдържанието на персонализираната HTML шапка е деактивирано на страницата с настройки, за да се гарантира, че евентуални лоши промени могат да бъдат върнати.',
    'app_logo' => 'Лого на приложението',
    'app_logo_desc' => 'Това изображение трябва да е с 43px височина. <br> Големите изображения ще бъдат намалени.',
    'app_primary_color' => 'Основен цвят на приложението',
    'app_primary_color_desc' => 'Изберете основния цвят на приложението, включително на банера, бутоните и линковете.',
    'app_homepage' => 'Начлна страница на приложението',
    'app_homepage_desc' => 'Изберете начална страница, която ще замени изгледа по подразбиране. Дефинираните права на страницата, която е избрана ще бъдат игнорирани.',
    'app_homepage_select' => 'Избери страница',
    'app_footer_links' => 'Футър линкове',
    'app_footer_links_desc' => 'Добави линк в съдържанието на футъра. Добавените линкове ще се показват долу в повечето страници, включително и в страниците, в които логването не е задължително. Можете да използвате заместител "trans::<key>", за да използвате дума дефинирана от системата. Пример: Използването на "trans::common.privacy_policy" ще покаже "Лични данни" или на "trans::common.terms_of_service" ще покаже "Общи условия".',
    'app_footer_links_label' => 'Надпис на връзката',
    'app_footer_links_url' => 'Линк URL',
    'app_footer_links_add' => 'Добави футър линк',
    'app_disable_comments' => 'Изключи коментарите',
    'app_disable_comments_toggle' => 'Изключи коментарите',
    'app_disable_comments_desc' => 'Изключва коментарите във всички на страници на приложението. <br> Съществуващите коментари няма да се показват.',

    // Color settings
    'content_colors' => 'Цвят на съдържанието',
    'content_colors_desc' => 'Настройва цветовете за всички елементи на йерархията за организацията на страницата. Избор на цвят с яркост, близка до цветовете по подразбиране, се препоръчва за четимостта.',
    'bookshelf_color' => 'Цвят на рафта',
    'book_color' => 'Цвят на книгата',
    'chapter_color' => 'Цвят на главата',
    'page_color' => 'Цвят на страницата',
    'page_draft_color' => 'Цвят на черновата за страница',

    // Registration Settings
    'reg_settings' => 'Регистрация',
    'reg_enable' => 'Включи регистрацията',
    'reg_enable_toggle' => 'Включи регистрацията',
    'reg_enable_desc' => 'Когато регистрацията е включена, потребителите ще могат да се регистрират като потребители на приложението. След регистрация на тях им се дава роля по подразбиране.',
    'reg_default_role' => 'Роля по подразбиране след регистрация',
    'reg_enable_external_warning' => 'Опцията отгоре се игнорира при активно външно LDAP или SAML удостоверяване. Ако удостоверяването от външната система е успешно, автоматично ще се създават потребителски профили за несъществуващи членове.',
    'reg_email_confirmation' => 'Имейл потвърждение',
    'reg_email_confirmation_toggle' => 'Изисквай имейл потвърждение',
    'reg_confirm_email_desc' => 'Ако се използват ограничения за домейна, ще се изисква имейл потвърждение и тази настройка ще бъде игнорирана.',
    'reg_confirm_restrict_domain' => 'Ограничения за домейна',
    'reg_confirm_restrict_domain_desc' => 'Въведи разделен със запетаи списък от имейл домейни, до които да бъде ограничена регистрацията. На потребителите ще им бъде изпратен имейл, за да потвърдят адреса, преди да могат да използват приложението. <br> Имай предвид, че потребителите ще могат да сменят имейл адресите си след успешна регистрация.',
    'reg_confirm_restrict_domain_placeholder' => 'Няма наложени ограничения',

    // Maintenance settings
    'maint' => 'Поддръжка',
    'maint_image_cleanup' => 'Разчисти изображения',
    'maint_image_cleanup_desc' => 'Сканира съдържанието на страници и ревизиите, за да провери кои изображения и рисунки се използват и кои се повтарят. Увери се, че имаш пълни резервни копия на базата данни и на изображенията, преди да пуснеш това.',
    'maint_delete_images_only_in_revisions' => 'Също изтрий изображенията, които съществуват само в стари ревизии на страниците',
    'maint_image_cleanup_run' => 'Пусни разчистване',
    'maint_image_cleanup_warning' => 'Намерени са :count потенциално неизползвани изображения. Сигурен/на ли си, че искаш да изтриеш тези изображения?',
    'maint_image_cleanup_success' => 'Намерени и изтрити са :count потенциално неизползвани изображения!',
    'maint_image_cleanup_nothing_found' => 'Не са намерени неизползвани изображения и нищо не е изтрито!',
    'maint_send_test_email' => 'Изпрати тестови имейл',
    'maint_send_test_email_desc' => 'Това изпраща тестови имейл на имейл адреса, посочен в профила ти.',
    'maint_send_test_email_run' => 'Изпрати тестов имейл',
    'maint_send_test_email_success' => 'Имейл изпратен на :address',
    'maint_send_test_email_mail_subject' => 'Тестов Имейл',
    'maint_send_test_email_mail_greeting' => 'Изпращането на Имейл работи!',
    'maint_send_test_email_mail_text' => 'Поздравления! След като получихте този имейл, Вашите имейл настройки са конфигурирани правилно.',
    'maint_recycle_bin_desc' => 'Изтрити рафти, книги, глави и страници се преместват в кошчето, откъдето можете да ги възстановите или изтриете завинаги. Стари съдържания в кошчето ще бъдат изтрити автоматично след време, в зависимост от настройките на системата.',
    'maint_recycle_bin_open' => 'Отвори Кошчето',

    // Recycle Bin
    'recycle_bin' => 'Кошче',
    'recycle_bin_desc' => 'Тук може да възстановиш изтрити обекти или да ги премахнеш завинаги от системата. Този списък не е филтриран, за разлика от подобни списъци с активност в системата, където са приложени списъци за привилегии.',
    'recycle_bin_deleted_item' => 'Изтрит предмет',
    'recycle_bin_deleted_parent' => 'Родител',
    'recycle_bin_deleted_by' => 'Изтрит от',
    'recycle_bin_deleted_at' => 'Час на изтриване',
    'recycle_bin_permanently_delete' => 'Изтрий завинаги',
    'recycle_bin_restore' => 'Възстанови',
    'recycle_bin_contents_empty' => 'Кошчето е празно',
    'recycle_bin_empty' => 'Изпразни кочшето',
    'recycle_bin_empty_confirm' => 'Това ще унищожи завинаги всички обекти в кошчето, включително съдържанието във всеки обект. Сигурен/на ли си, че искаш да изпразниш кошчето?',
    'recycle_bin_destroy_confirm' => 'Това действие завинаги ще изтрие от системата този обект, както и всички негови поделементи, и няма да можеш да го възстановиш. Сигурен/на ли си, че искаш да изтриеш този обект завинаги?',
    'recycle_bin_destroy_list' => 'Обекти за унищожение',
    'recycle_bin_restore_list' => 'Обекти за възстановяване',
    'recycle_bin_restore_confirm' => 'Това действие ще възстанови изтрития обект, както и всички негови поделементи, в оригиналното им местоположение. Ако оригиналното им местоположение също е изтрито и сега се намира в кошчето, то също ще трябва да бъде възстановено.',
    'recycle_bin_restore_deleted_parent' => 'Родителският елемент на този обект също е бил изтрит. Тези ще останат изтрити, докато родителят също бъде възстановен.',
    'recycle_bin_restore_parent' => 'Възстанови родителския елемент',
    'recycle_bin_destroy_notification' => 'Изтрити общо :count обекта от кошчето.',
    'recycle_bin_restore_notification' => 'Възстановени общо :count обекта от кошчето.',

    // Audit Log
    'audit' => 'Ревизорен журнал',
    'audit_desc' => 'Ревизорният журнал показва списък с всички дейности, следенив системата. Това е нефилтриран списък, за разлика от подобни списъци с дейности в системата, където са приложени филтри за привилегии.',
    'audit_event_filter' => 'Филтър на събитията',
    'audit_event_filter_no_filter' => 'Без филтър',
    'audit_deleted_item' => 'Изтрит предмет',
    'audit_deleted_item_name' => 'Име: :name',
    'audit_table_user' => 'Потребител',
    'audit_table_event' => 'Събитие',
    'audit_table_related' => 'Свързан обект или детайл',
    'audit_table_ip' => 'IP адрес',
    'audit_table_date' => 'Дата на активност',
    'audit_date_from' => 'Време от',
    'audit_date_to' => 'Време до',

    // Role Settings
    'roles' => 'Роли',
    'role_user_roles' => 'Потребителски роли',
    'role_create' => 'Създай нова роля',
    'role_create_success' => 'Ролята беше успешно създадена',
    'role_delete' => 'Изтрий роля',
    'role_delete_confirm' => 'Това ще изтрие ролята \':roleName\'.',
    'role_delete_users_assigned' => 'В тази роля се намират :userCount потребители. Ако искате да преместите тези потребители в друга роля, моля изберете нова роля отдолу.',
    'role_delete_no_migration' => "Не премествай потребителите в нова роля",
    'role_delete_sure' => 'Сигурни ли сте, че искате да изтриете тази роля?',
    'role_delete_success' => 'Ролята беше успешно изтрита',
    'role_edit' => 'Редактиране на роля',
    'role_details' => 'Детайли на роля',
    'role_name' => 'Име на ролята',
    'role_desc' => 'Кратко описание на ролята',
    'role_mfa_enforced' => 'Изисква многофакторно удостоверяване',
    'role_external_auth_id' => 'Външни ауторизиращи ID-a',
    'role_system' => 'Настойки за достъп на системата',
    'role_manage_users' => 'Управление на потребители',
    'role_manage_roles' => 'Управление роли и права',
    'role_manage_entity_permissions' => 'Управление на правата за достъп всички книги, глави и страници',
    'role_manage_own_entity_permissions' => 'Управление на правата за достъп на собствени книги, глави и страници',
    'role_manage_page_templates' => 'Управление на шаблони на страници',
    'role_access_api' => 'Достъп до API на системата',
    'role_manage_settings' => 'Управление на настройките на приложението',
    'role_export_content' => 'Експортирай съдържанието',
    'role_editor_change' => 'Change page editor',
    'role_asset' => 'Настройки за достъп до активи',
    'roles_system_warning' => 'Важно: Добавянето на потребител в някое от горните три роли може да му позволи да промени собствените си права или правата на другите в системата. Възлагайте тези роли само на доверени потребители.',
    'role_asset_desc' => 'Тези настройки за достъп контролират достъпа по подразбиране до активите в системата. Настройките за достъп до книги, глави и страници ще отменят тези настройки.',
    'role_asset_admins' => 'Администраторите автоматично получават достъп до цялото съдържание, но тези опции могат да показват или скриват опциите за потребителския интерфейс.',
    'role_all' => 'Всички',
    'role_own' => 'Собствени',
    'role_controlled_by_asset' => 'Контролирани от актива, към който са качени',
    'role_save' => 'Запази ролята',
    'role_update_success' => 'Ролята беше успешно актуализирана',
    'role_users' => 'Потребители в тази роля',
    'role_users_none' => 'В момента няма потребители, назначени за тази роля',

    // Users
    'users' => 'Потребители',
    'user_profile' => 'Потребителски профил',
    'users_add_new' => 'Добави нов потребител',
    'users_search' => 'Търси Потребители',
    'users_latest_activity' => 'Последна активност',
    'users_details' => 'Потребителски детайли',
    'users_details_desc' => 'Настрой име и имейл адрес за този потребител. Имейл адресът ще се използва за вписване в приложението.',
    'users_details_desc_no_email' => 'Настрой име за този потребител, за да могат другите да го разпознават.',
    'users_role' => 'Потребителски роли',
    'users_role_desc' => 'Настрой ролите, които ще бъдат присвоени на този потребител. Ако му бъдат присвоени няколко роли, привилегиите от тях ще се насложат и потребителят ще получи всички привилегии на зададените роли.',
    'users_password' => 'Потребителска парола',
    'users_password_desc' => 'Настрой парола за вписване в приложението. Тя трябва да бъде дълга поне 8 знака.',
    'users_send_invite_text' => 'Можеш да изпратиш на потребителя покана по имейл, след което той ще може да настрои своя собствена парола. В противен случай, ти също можеш да настроиш паролата му.',
    'users_send_invite_option' => 'Изпрати на потребителя имейл покана',
    'users_external_auth_id' => 'Външен номер за удостоверяване',
    'users_external_auth_id_desc' => 'Това е номерът, използван за сверяване на потребители при комуникация с конфигурираната външна система за удостоверяване.',
    'users_password_warning' => 'Попълни отдолу само ако желаеш да смениш паролата си.',
    'users_system_public' => 'Този потребител представлява всеки гост, който посещава това приложение. Потребителят не може да се използва за вписване, а вместо това се присвоява автоматично.',
    'users_delete' => 'Изтрий потребител',
    'users_delete_named' => 'Изтрий потребителя :userName',
    'users_delete_warning' => 'Това изцяло ще изтрие този потребител с името \':userName\' от системата.',
    'users_delete_confirm' => 'Сигурни ли сте, че искате да изтриете този потребител?',
    'users_migrate_ownership' => 'Мигрирайте собствеността на сайта',
    'users_migrate_ownership_desc' => 'Тук избери потребител, ако желаеш друг да стане собственик на всички обекти, които към момента са притежавани от този потребител.',
    'users_none_selected' => 'Няма избрани потребители',
    'users_edit' => 'Редактирай потребител',
    'users_edit_profile' => 'Редактирай профил',
    'users_avatar' => 'Потребителски аватар',
    'users_avatar_desc' => 'Избери изображение, което да представлява този потребител. То трябва да бъде квадрат с размер приблизително 256 пиксела.',
    'users_preferred_language' => 'Предпочитан език',
    'users_preferred_language_desc' => 'Тази настройка ще промени езика за потребителския интерфейс на приложението. Това няма да се отрази на създаденото от потребителите съдържание.',
    'users_social_accounts' => 'Социални профили',
    'users_social_accounts_info' => 'Тук можеш да свържеш другите си профили за по-бързо и лесно вписване. Отвързването на профил тук няма да анулира предишно удостоверен достъп. Вместо това, спри достъпа от настройките на профила си в свързаната социална мрежа.',
    'users_social_connect' => 'Свържи профил',
    'users_social_disconnect' => 'Отвържи профил',
    'users_social_connected' => 'Профилът :socialAccount беше успешно свързан с профила ти.',
    'users_social_disconnected' => 'Профилът :socialAccount беше успешно отвързан от профила ти.',
    'users_api_tokens' => 'API маркери',
    'users_api_tokens_none' => 'Няма създадени API маркери за този потребител',
    'users_api_tokens_create' => 'Създай маркер',
    'users_api_tokens_expires' => 'Изтича на',
    'users_api_tokens_docs' => 'Документация на API',
    'users_mfa' => 'Многофакторно удостоверяване',
    'users_mfa_desc' => 'Настрой многофакторно удостверяване като втори слой сигурност на твоя профил.',
    'users_mfa_x_methods' => ':count метод е настроен|:count методи са настроени',
    'users_mfa_configure' => 'Конфигурирай методи',

    // API Tokens
    'user_api_token_create' => 'Създай API маркер',
    'user_api_token_name' => 'Име',
    'user_api_token_name_desc' => 'Дай на маркера си четимо име като бъдещо напомняне за предназначението му.',
    'user_api_token_expiry' => 'Дата на изтичане',
    'user_api_token_expiry_desc' => 'Настрой дата на изтичане на този маркер. След тази дата, заявки направени с този маркер вече няма да работят. Ако оставиш това поле празно, маркерът ще изтече след 100 години.',
    'user_api_token_create_secret_message' => 'Веднага след създаването на този маркер ще се генерират и покажат "Номер на маркер" и "Тайна на маркер". Тайната ще бъде показана само веднъж, така че се увери, че си я копирал на сигурно място, преди да продължиш.',
    'user_api_token_create_success' => 'API маркерът е създаден успешно',
    'user_api_token_update_success' => 'API маркерът е редактиран успешно',
    'user_api_token' => 'API маркер',
    'user_api_token_id' => 'Номер на маркер',
    'user_api_token_id_desc' => 'Това е нередактируем, системно генериран идентификатор за този маркер, който ще бъде необходимо да бъде предоставян в API заявките.',
    'user_api_token_secret' => 'Тайна на маркер',
    'user_api_token_secret_desc' => 'Това е системно генерирана тайна за този маркер, която ще бъде необходимо да бъде предоставяна в API заявки. Тайната ще бъде показана само веднъж, така че се увери, че си я копирал на сигурно място.',
    'user_api_token_created' => 'Маркерът е създаден :timeAgo',
    'user_api_token_updated' => 'Маркерът е редактиран :timeAgo',
    'user_api_token_delete' => 'Изтрий маркер',
    'user_api_token_delete_warning' => 'Това ще изтрие напълно API маркерът с име \':tokenName\' от системата.',
    'user_api_token_delete_confirm' => 'Сигурен/на ли си, че искаш да изтриеш този API маркер?',
    'user_api_token_delete_success' => 'API маркерът е изтрит успешно',

    // Webhooks
    'webhooks' => 'Уебкука',
    'webhooks_create' => 'Създай нова уебкука',
    'webhooks_none_created' => 'Няма създадени уебкуки.',
    'webhooks_edit' => 'Редактирай уебкука',
    'webhooks_save' => 'Запази уебкука',
    'webhooks_details' => 'Подробности за уебкука',
    'webhooks_details_desc' => 'Въведи име и POST крайна точка като местоположение, на което уебкуката да изпраща данни.',
    'webhooks_events' => 'Събития на уебкуката',
    'webhooks_events_desc' => 'Избери всички събития, които ще задействат съответната уебкука.',
    'webhooks_events_warning' => 'Имай предвид, че тези събития ще се задействат за всички избрани събития, дори при приложени специфични привилегии. Увери се, че употребата на тази уебкука няма да разкрие чувствително съдържание.',
    'webhooks_events_all' => 'Всички системни събития',
    'webhooks_name' => 'Име на уебкука',
    'webhooks_timeout' => 'Време за изтичане на заявката не уебкуката (в секунди)',
    'webhooks_endpoint' => 'Крайна точка на уебкуката',
    'webhooks_active' => 'Уебкуката е активна',
    'webhook_events_table_header' => 'Събития',
    'webhooks_delete' => 'Изтрий уебкуката',
    'webhooks_delete_warning' => 'Това ще изтрие изцяло уебкуката с име \':webhookName\' от системата.',
    'webhooks_delete_confirm' => 'Сигурен/на ли си, че искаш да изтриеш тази уебкука?',
    'webhooks_format_example' => 'Примерен формат на уебкука',
    'webhooks_format_example_desc' => 'Данните на уебкуката се изпращат като POST заявки към конфигурираната крайна точка като JSON, следвайки формата отдолу. Свойствата "related_item" и "url" са по желание и зависят от типа на задействаното събитие.',
    'webhooks_status' => 'Статус на уебкука',
    'webhooks_last_called' => 'Последно извикан на:',
    'webhooks_last_errored' => 'Последна грешка на:',
    'webhooks_last_error_message' => 'Последно съобщение за грешка:',


    //! If editing translations files directly please ignore this in all
    //! languages apart from en. Content will be auto-copied from en.
    //!////////////////////////////////
    'language_select' => [
        'en' => 'English',
        'ar' => 'العربية',
        'bg' => 'Bǎlgarski',
        'bs' => 'Bosanski',
        'ca' => 'Català',
        'cs' => 'Česky',
        'da' => 'Dansk',
        'de' => 'Deutsch (Sie)',
        'de_informal' => 'Deutsch (Du)',
        'es' => 'Español',
        'es_AR' => 'Español Argentina',
        'et' => 'Eesti keel',
        'eu' => 'Euskara',
        'fa' => 'فارسی',
        'fr' => 'Français',
        'he' => 'עברית',
        'hr' => 'Hrvatski',
        'hu' => 'Magyar',
        'id' => 'Bahasa Indonesia',
        'it' => 'Italian',
        'ja' => '日本語',
        'ko' => '한국어',
        'lt' => 'Lietuvių Kalba',
        'lv' => 'Latviešu Valoda',
        'nl' => 'Nederlands',
        'nb' => 'Norsk (Bokmål)',
        'pl' => 'Polski',
        'pt' => 'Português',
        'pt_BR' => 'Português do Brasil',
        'ru' => 'Русский',
        'sk' => 'Slovensky',
        'sl' => 'Slovenščina',
        'sv' => 'Svenska',
        'tr' => 'Türkçe',
        'uk' => 'Українська',
        'vi' => 'Tiếng Việt',
        'zh_CN' => '简体中文',
        'zh_TW' => '繁體中文',
    ],
    //!////////////////////////////////
];
