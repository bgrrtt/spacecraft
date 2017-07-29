<?php
/**
 * General Configuration
 *
 * All of your system's general configuration settings go in here. You can see a
 * list of the available settings in vendor/craftcms/cms/src/config/GeneralConfig.php.
 */

return [

    '*' => [

      'siteUrl'  => getenv('SPACECRAFT_SITE_URL'),
      'craftEnv' => getenv('SPACECRAFT_ENVIRONMENT'),

      'allowAutoUpdates' => false,
      'omitScriptNameInUrls' => true,
      'usePathInfo' => true,
      'useEmailAsUsername' => true,
      'defaultWeekStartDay' => 0,
      'enableCsrfProtection' => true,
      'omitScriptNameInUrls' => true,
      'cpTrigger' => 'admin',

    ],

    'production' => [
      'devMode' => false,
    ],

    'local' => [
      'devMode' => true,
      'enableTemplateCaching' => false
    ],

];

/**
 * Default Configuration Options
 * =============================================================================
 * 'actionTrigger' => 'actions'
 * 'activateAccountSuccessPath' => ''
 * 'addTrailingSlashesToUrls' => false
 * 'allowAutoUpdates' => true
 * 'allowedFileExtensions' => [ '7z', 'aiff', 'asf', 'avi', 'bmp', 'csv', 'doc', 'docx', 'fla', 'flv', 'gif', 'gz', 'gzip', 'htm', 'html', 'jpeg', 'jpg', 'js', 'mid', 'mov', 'mp3', 'mp4', 'm4a', 'm4v', 'mpc', 'mpeg', 'mpg', 'ods', 'odt', 'ogg', 'ogv', 'pdf', 'png', 'potx', 'pps', 'ppsm', 'ppsx', 'ppt', 'pptm', 'pptx', 'ppz', 'pxd', 'qt', 'ram', 'rar', 'rm', 'rmi', 'rmvb', 'rtf', 'sdc', 'sitd', 'svg', 'swf', 'sxc', 'sxw', 'tar', 'tgz', 'tif', 'tiff', 'txt', 'vob', 'vsd', 'wav', 'webm', 'wma', 'wmv' 'xls', 'xlsx', 'zip']
 * 'allowSimilarTags' => false
 * 'allowUppercaseInSlug' => false
 * 'autoLoginAfterAccountActivation' => false
 * 'backupOnUpdate' => true
 * 'backupCommand'
 * 'baseCpUrl'
 * 'blowfishHashCost' => 13
 * 'cacheElementQueries' => true
 * 'cacheDuration' => 86400
 * 'cacheMethod' => self::CACHE_METHOD_FILE
 * 'convertFilenamesToAscii' => false
 * 'cooldownDuration' => 300
 * 'cpTrigger' => 'admin'
 * 'csrfTokenName' => 'CRAFT_CSRF_TOKEN'
 * 'customAsciiCharMappings' => []
 * 'defaultCookieDomain' => ''
 * 'defaultCpLanguage'
 * 'defaultDirMode' => 0775
 * 'defaultFileMode'
 * 'defaultImageQuality' => 82
 * 'defaultSearchTermOptions' => [
 *     'attribute' => null,
 *     'exact' => false,
 *     'exclude' => false,
 *     'subLeft' => false,
 *     'subRight' => true,
 * ]
 * 'defaultTemplateExtensions' => ['html', 'twig']
 * 'defaultTokenDuration' => 86400
 * 'defaultWeekStartDay' => 0
 * 'deferPublicRegistrationPassword' => false
 * 'devMode' => false
 * 'enableCsrfCookie' => true
 * 'elevatedSessionDuration' => 300
 * 'enableCsrfProtection' => true
 * 'enableTemplateCaching' => true
 * 'errorTemplatePrefix' => ''
 * 'extraAllowedFileExtensions'
 * 'filenameWordSeparator' => '-'
 * 'generateTransformsBeforePageLoad' => false
 * 'imageDriver' => self::IMAGE_DRIVER_AUTO
 * 'indexTemplateFilenames' => ['index']
 * 'invalidLoginWindowDuration' => 3600
 * 'invalidUserTokenPath' => ''
 * 'isSystemOn'
 * 'limitAutoSlugsToAscii' => false
 * 'loginPath' => 'login'
 * 'logoutPath' => 'logout'
 * 'maxCachedCloudImageSize' => 2000
 * 'maxInvalidLogins' => 5
 * 'maxSlugIncrement' => 100
 * 'maxUploadFileSize' => 16777216
 * 'omitScriptNameInUrls' => false
 * 'optimizeImageFilesize' => true
 * 'pageTrigger' => 'p'
 * 'pathParam' => 'p'
 * 'phpMaxMemoryLimit' => ''
 * 'phpSessionName' => 'CraftSessionId'
 * 'postCpLoginRedirect' => 'dashboard'
 * 'postLoginRedirect' => ''
 * 'postLogoutRedirect' => ''
 * 'preserveImageColorProfiles' => true
 * 'privateTemplateTrigger' => '_'
 * 'preventUserEnumeration' => false
 * 'purgePendingUsersDuration' => 0
 * 'rememberUsernameDuration' => 31536000
 * 'rememberedUserSessionDuration' => 1209600
 * 'requireMatchingUserAgentForSession' => true
 * 'requireUserAgentAndIpForSession' => true
 * 'resourceBasePath' => '@webroot/cpresources'
 * 'resourceBaseUrl' => '@web/cpresources'
 * 'resourceTrigger' => 'cpresources'
 * 'restoreCommand'
 * 'restoreOnUpdateFailure' => true
 * 'rotateImagesOnUploadByExifData' => true
 * 'runTasksAutomatically' => true
 * 'sendPoweredByHeader' => true
 * 'setPasswordPath' => 'setpassword'
 * 'setPasswordSuccessPath' => ''
 * 'showBetaUpdates' => false
 * 'siteUrl'
 * 'slugWordSeparator' => '-'
 * 'suppressTemplateErrors' => false
 * 'testToEmailAddress'
 * 'timezone'
 * 'translationDebugOutput' => false
 * 'tokenParam' => 'token'
 * 'useCompressedJs' => true
 * 'useEmailAsUsername' => false
 * 'usePathInfo' => false
 * 'useSecureCookies' => 'auto'
 * 'useSslOnTokenizedUrls' => 'auto'
 * 'userSessionDuration' => 3600
 * 'useFileLocks'
 * 'useXSendFile' => false
 * 'validationKey'
 * 'verificationCodeDuration' => 86400
 */
