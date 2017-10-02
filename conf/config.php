<?php if (!defined('APPLICATION')) exit();

// Conversations
$Configuration['Conversations']['Version'] = '2.3.1';

// Database
$Configuration['Database']['Name'] = 'koi_forum';
$Configuration['Database']['Host'] = 'localhost';
$Configuration['Database']['User'] = 'root';
$Configuration['Database']['Password'] = '';

// EnabledApplications
$Configuration['EnabledApplications']['Conversations'] = 'conversations';
$Configuration['EnabledApplications']['Vanilla'] = 'vanilla';

// EnabledLocales
$Configuration['EnabledLocales']['indonesia'] = 'id_ID';

// EnabledPlugins
$Configuration['EnabledPlugins']['GettingStarted'] = 'GettingStarted';
$Configuration['EnabledPlugins']['HtmLawed'] = 'HtmLawed';
$Configuration['EnabledPlugins']['Twitter'] = true;
$Configuration['EnabledPlugins']['Facebook'] = true;
$Configuration['EnabledPlugins']['Flagging'] = true;
$Configuration['EnabledPlugins']['VanillaStats'] = true;
$Configuration['EnabledPlugins']['cleditor'] = false;
$Configuration['EnabledPlugins']['ButtonBar'] = false;
$Configuration['EnabledPlugins']['Emotify'] = false;
$Configuration['EnabledPlugins']['FileUpload'] = false;
$Configuration['EnabledPlugins']['editor'] = true;
$Configuration['EnabledPlugins']['EmojiExtender'] = true;

// Garden
$Configuration['Garden']['Title'] = 'Koi Forum';
$Configuration['Garden']['Cookie']['Salt'] = 'JSUjdIrZ6duBRJ6v';
$Configuration['Garden']['Cookie']['Domain'] = '';
$Configuration['Garden']['Registration']['ConfirmEmail'] = true;
$Configuration['Garden']['Registration']['Method'] = 'Basic';
$Configuration['Garden']['Email']['SupportName'] = 'Koi Forum';
$Configuration['Garden']['Email']['Format'] = 'text';
$Configuration['Garden']['SystemUserID'] = '1';
$Configuration['Garden']['InputFormatter'] = 'Markdown';
$Configuration['Garden']['Version'] = '2.3.1';
$Configuration['Garden']['Cdns']['Disable'] = false;
$Configuration['Garden']['CanProcessImages'] = true;
$Configuration['Garden']['Installed'] = true;
$Configuration['Garden']['Theme'] = 'bittersweet';
$Configuration['Garden']['EditContentTimeout'] = '3600';
$Configuration['Garden']['Embed']['Allow'] = true;
$Configuration['Garden']['Locale'] = 'id_ID';
$Configuration['Garden']['DefaultAvatar'] = 'defaultavatar/F2NNEUQ7WB88.jpg';
$Configuration['Garden']['MobileInputFormatter'] = 'TextEx';
$Configuration['Garden']['AllowFileUploads'] = true;
$Configuration['Garden']['Analytics']['AllowLocal'] = true;
$Configuration['Garden']['InstallationID'] = 'DB64-EC1E2CA8-4D3DD647';
$Configuration['Garden']['InstallationSecret'] = '64201ca143bc9f726d84ccbb71d58c83ae4d904b';

// Plugins
$Configuration['Plugins']['GettingStarted']['Dashboard'] = '1';
$Configuration['Plugins']['GettingStarted']['Plugins'] = '1';
$Configuration['Plugins']['GettingStarted']['Categories'] = '1';
$Configuration['Plugins']['Twitter']['ConsumerKey'] = 'dQFpb8Q1QINPAcgPe62L9kd5r';
$Configuration['Plugins']['Twitter']['Secret'] = 'Wv14ts4ozKXRd5rNGqqpiOu36s3tZfxogRiALsU7vjH7pBWNpG';
$Configuration['Plugins']['Twitter']['SocialSignIn'] = false;
$Configuration['Plugins']['Twitter']['SocialReactions'] = '1';
$Configuration['Plugins']['Twitter']['SocialSharing'] = false;
$Configuration['Plugins']['editor']['ForceWysiwyg'] = false;

// Routes
$Configuration['Routes']['DefaultController'] = array('categories', 'Internal');

// Vanilla
$Configuration['Vanilla']['Version'] = '2.3.1';
$Configuration['Vanilla']['Discussions']['PerPage'] = '30';
$Configuration['Vanilla']['Discussions']['Layout'] = 'modern';
$Configuration['Vanilla']['Comments']['AutoRefresh'] = NULL;
$Configuration['Vanilla']['Comments']['PerPage'] = '30';
$Configuration['Vanilla']['Archive']['Date'] = '';
$Configuration['Vanilla']['Archive']['Exclude'] = false;
$Configuration['Vanilla']['Comment']['MaxLength'] = '8000';
$Configuration['Vanilla']['Comment']['MinLength'] = '15';
$Configuration['Vanilla']['AdminCheckboxes']['Use'] = false;
$Configuration['Vanilla']['Categories']['Layout'] = 'modern';

// Last edited by admin (127.0.0.1)2017-10-01 12:03:12