<?php

declare(strict_types=1);

namespace PackageVersions;

/**
 * This class is generated by ocramius/package-versions, specifically by
 * @see \PackageVersions\Installer
 *
 * This file is overwritten at every run of `composer install` or `composer update`.
 */
final class Versions
{
    public const ROOT_PACKAGE_NAME = 'chamilo/chamilo-lms';
    public const VERSIONS          = array (
  'aferrandini/phpqrcode' => '1.0.1@3c1c0454d43710ab5bbe19a51ad4cb41c22e3d46',
  'alchemy/binary-driver' => '1.6.0@80c6633890afb71d2417ae851d0ad167d8b00b95',
  'alchemy/ghostscript' => '0.4.0@a5d40c29efa4c4e4016a1f83cd5645300ad602d7',
  'alchemy/mediavorus' => '0.4.9@1a96dc4142ff8474c11285cab9eab11df9683255',
  'alchemy/phpexiftool' => '0.7.2@ba1cb51eceb6562d7996023478977a8739de188b',
  'alchemy/zippy' => '0.4.9@59fbeefb9a249122867ef25e53addfcce31850d7',
  'behat/transliterator' => 'v1.2.0@826ce7e9c2a6664c0d1f381cbb38b1fb80a7ee2c',
  'brumann/polyfill-unserialize' => 'v1.0.3@844d7e44b62a1a3d5c68cfb7ebbd59c17ea0fd7b',
  'chamilo/chash' => 'v0.1.1@d4f57db1af296e84a91c168b19a591cb788d8638',
  'chamilo/pclzip' => 'v2.8.4@b94b7a190e186a31bd37f21be3a83a48c7d6b49a',
  'clue/graph' => 'v0.9.0@0336a4d5229fa61a20ccceaeab25e52ac9542700',
  'cocur/slugify' => 'v3.2@d41701efe58ba2df9cae029c3d21e1518cc6780e',
  'composer/composer' => '1.0.3@a4a0546ece469cae984219f920c75437820064ff',
  'composer/semver' => '1.5.0@46d9139568ccb8d9e7cdd4539cab7347568a5e2e',
  'composer/spdx-licenses' => '1.5.1@a1aa51cf3ab838b83b0867b14e56fc20fbd55b3d',
  'container-interop/container-interop' => '1.2.0@79cbf1341c22ec75643d841642dd5d6acd83bdb8',
  'culqi/culqi-php' => 'v1.3.4@fe7e2743439661bab1751d2e45a03b83e400f515',
  'ddeboer/data-import' => '0.20.0@8fe7e731bb52df0298707eb8fb8b9b8098395437',
  'doctrine/annotations' => 'v1.6.1@53120e0eb10355388d6ccbe462f1fea34ddadb24',
  'doctrine/cache' => 'v1.8.0@d768d58baee9a4862ca783840eca1b9add7a7f57',
  'doctrine/collections' => 'v1.6.1@d2ae4ef05e25197343b6a39bae1d3c427a2f6956',
  'doctrine/common' => 'v2.10.0@30e33f60f64deec87df728c02b107f82cdafad9d',
  'doctrine/data-fixtures' => 'dev-master@71592a19ec7c6122e3a1df6b18dc4d15097d895f',
  'doctrine/dbal' => 'v2.9.2@22800bd651c1d8d2a9719e2a3dc46d5108ebfcc9',
  'doctrine/event-manager' => 'v1.0.0@a520bc093a0170feeb6b14e9d83f3a14452e64b3',
  'doctrine/inflector' => 'v1.3.0@5527a48b7313d15261292c149e55e26eae771b0a',
  'doctrine/lexer' => 'v1.0.1@83893c552fd2045dd78aef794c31e694c37c0b8c',
  'doctrine/migrations' => 'v1.5.0@c81147c0f2938a6566594455367e095150547f72',
  'doctrine/orm' => 'v2.4.8@5aedac1e5c5caaeac14798822c70325dc242d467',
  'doctrine/persistence' => '1.1.1@3da7c9d125591ca83944f477e65ed3d7b4617c48',
  'doctrine/reflection' => 'v1.0.0@02538d3f95e88eb397a5f86274deb2c6175c2ab6',
  'emojione/emojione' => 'v1.3.0@2a34acf3771a219045e133063aa759035d4f842c',
  'essence/essence' => '2.6.1@ed08afc5c2936c4d03f8c58dc54d5aff752cb9fd',
  'evenement/evenement' => 'v1.1.0@e24176d20f6dab44dd4768b32c897f63b6f2b7c3',
  'ezyang/htmlpurifier' => 'v4.9.3@95e1bae3182efc0f3422896a3236e991049dac69',
  'facebook/php-sdk-v4' => '5.7.0@2d8250638b33d73e7a87add65f47fabf91f8ad9b',
  'friendsofsymfony/user-bundle' => 'v1.3.7@113cc4e48fac19d20fc039cfecae9b41103be706',
  'gedmo/doctrine-extensions' => 'v2.4.37@5dd471f656e46d815f063bf3f12c667649ec7ffb',
  'graphp/algorithms' => 'v0.8.1@81db4049c35730767ec8f97fb5c4844234b86cef',
  'graphp/graphviz' => 'v0.2.1@2676522dfcd907fd3cb52891ea64a052c4ac4c2a',
  'guzzlehttp/guzzle' => '6.3.3@407b0cb880ace85c9b63c5f9551db498cb2d50ba',
  'guzzlehttp/promises' => 'v1.3.1@a59da6cf61d80060647ff4d3eb2c03a2bc694646',
  'guzzlehttp/psr7' => '1.5.2@9f83dded91781a01c63574e387eaa769be769115',
  'imagine/imagine' => 'v0.6.3@149041d2a1b517107bfe270ca2b1a17aa341715d',
  'ircmaxell/password-compat' => 'v1.0.4@5c5cde8822a69545767f7c7f3058cb15ff84614c',
  'ircmaxell/security-lib' => 'v1.1.0@f3db6de12c20c9bcd1aa3db4353a1bbe0e44e1b5',
  'jbroadway/urlify' => '1.1.0-stable@99bb78cd9002d0e9ce479bb81635eb665e37e981',
  'jeroendesloovere/vcard' => '1.7.2@21a7341a589d80196a55e1f6317468a93e57c104',
  'jimmiw/php-time-ago' => '0.4.15@2bd8b75d3034b9ce996f96bee8c38e79525f6758',
  'justinrainbow/json-schema' => '1.6.1@cc84765fb7317f6b07bd8ac78364747f95b86341',
  'kigkonsult/icalcreator' => 'v2.24@d0eee5cf7fb86225de01756b7261456698c3388a',
  'knplabs/doctrine-behaviors' => '1.6.0@9cc036ee32483c306fb32b4efbf33014ddfb654f',
  'knplabs/gaufrette' => 'v0.8.1@80cc42e1c5f008a8fc9d02e856c60140c7d1ea19',
  'knplabs/knp-components' => 'v1.3.10@fc1755ba2b77f83a3d3c99e21f3026ba2a1429be',
  'knplabs/knp-menu' => '2.3.0@655630a1db0b72108262d1a844de3b1ba0885be5',
  'knplabs/knp-menu-bundle' => 'v2.2.1@6bea43eb84fc67c43ab2b43709194efffa8a8ac0',
  'league/csv' => '8.2.3@d2aab1e7bde802582c3879acf03d92716577c76d',
  'media-alchemyst/media-alchemyst' => '0.5.2@5d2fe6dd95215804202ecf0466fd9cfaeedd0140',
  'michelf/php-markdown' => '1.8.0@01ab082b355bf188d907b9929cd99b2923053495',
  'monolog/monolog' => '1.24.0@bfc9ebb28f97e7a24c45bdc3f0ff482e47bb0266',
  'mpdf/mpdf' => 'v6.1.3@7f138bf7508eac895ac2c13d2509b056ac7e7e97',
  'neutron/temporary-filesystem' => '2.3.0@694aa3885f653dd429584e825ffbab79441d285f',
  'ocramius/package-versions' => '1.4.0@a4d4b60d0e60da2487bd21a2c6ac089f85570dbb',
  'ocramius/proxy-manager' => '2.0.4@a55d08229f4f614bf335759ed0cf63378feeb2e6',
  'onelogin/php-saml' => '3.1.1@c9026b26395a65184550055d9a01bdf9dbd30861',
  'paragonie/random-lib' => 'v2.0.0@b73a1cb8eae7a346824ccee42298046dedbf2415',
  'paragonie/random_compat' => 'v2.0.18@0a58ef6e3146256cc3dc7cc393927bcc7d1b72db',
  'paragonie/sodium_compat' => 'v1.9.1@87125d5b265f98c4d1b8d83a1f0726607c229421',
  'patchwork/utf8' => 'v1.3.1@30ec6451aec7d2536f0af8fe535f70c764f2c47a',
  'php-ffmpeg/php-ffmpeg' => '0.5.1@c8949fe3df89edd7692368cc110a51a27971f28a',
  'php-mp4box/php-mp4box' => '0.3.0@baa466be3f6d0b46d27bc0e255e958a95cb7738c',
  'php-unoconv/php-unoconv' => '0.3.0@6d1e14a7467b5d637741396549529dc4d5f9f355',
  'phpexiftool/exiftool' => '10.10@0833cab894c890353192a83011428525a318bedf',
  'phpoffice/common' => '0.2.9@edb5d32b1e3400a35a5c91e2539ed6f6ce925e4d',
  'phpoffice/phpexcel' => '1.8.2@1441011fb7ecdd8cc689878f54f8b58a6805f870',
  'phpoffice/phpword' => '0.16.0@7b7d4e4936014544aa706f4c03d3ac925d74beb9',
  'pimple/pimple' => 'v1.1.1@2019c145fe393923f3441b23f29bbdfaa5c58c4d',
  'psr/cache' => '1.0.1@d11b50ad223250cf17b86e38383413f5a6764bf8',
  'psr/container' => '1.0.0@b7ce3b176482dbbc1245ebf52b181af44c2cf55f',
  'psr/http-message' => '1.0.1@f6561bf28d520154e4b0ec72be95418abe6d9363',
  'psr/log' => '1.1.0@6c001f1daafa3a3ac1d8ff69ee4db8e799a654dd',
  'psr/simple-cache' => '1.0.1@408d5eafb83c57f6365a3ca330ff23aa4a5fa39b',
  'ralouphie/getallheaders' => '2.0.5@5601c8a83fbba7ef674a7369456d12f1e0d0eafa',
  'rmccue/requests' => 'v1.7.0@87932f52ffad70504d93f04f15690cf16a089546',
  'robrichards/xmlseclibs' => '3.0.3@406c68ac9124db033d079284b719958b829cb830',
  'sabre/vobject' => '3.5.3@129d80533a9ec0d9cacfb50b51180c34edb6874c',
  'seld/cli-prompt' => '1.0.3@a19a7376a4689d4d94cab66ab4f3c816019ba8dd',
  'seld/jsonlint' => '1.7.1@d15f59a67ff805a44c50ea0516d2341740f81a38',
  'seld/phar-utils' => '1.0.1@7009b5139491975ef6486545a39f3e6dad5ac30a',
  'setasign/fpdi' => '1.6.2@a6ad58897a6d97cc2d2cd2adaeda343b25a368ea',
  'sonata-project/admin-bundle' => '3.48.1@97a2c6304bc0f9b73c2a516f01e09f462b992665',
  'sonata-project/block-bundle' => '3.15.0@d0a67fcd6873e234467cd58b35aa3feb5b54a6ff',
  'sonata-project/cache' => '2.0.1@2e2fdabf40bfe566c68406aae238a721cddabf74',
  'sonata-project/core-bundle' => '3.17.0@af8ba4f76eef8c855302af8b26713cf33be4103d',
  'sonata-project/datagrid-bundle' => '2.4.0@aa0923768b705dbdab6b751f667a03ba6c5fd05a',
  'sonata-project/doctrine-extensions' => '1.3.0@aab1ede164095afcb1f40253c5d97258b930a433',
  'sonata-project/easy-extends-bundle' => '2.5.0@c62fb4f7e74f7fc5f32f122ffa8131d7cf05a1db',
  'sonata-project/exporter' => '1.11.1@a4925e3569fb3fa710fa7c6fecd85b6281c55f57',
  'sonata-project/google-authenticator' => '2.2.0@feda53899b26af24e3db2fe7a3e5f053ca483762',
  'sonata-project/user-bundle' => '3.3.0@530494e52ca1d762766336a2da3fa3ffb26e2e09',
  'studio-42/elfinder' => '2.1.49@8669ee276693177e2c288d852923f4a0371d1b96',
  'sunra/php-simple-html-dom-parser' => 'v1.5.2@75b9b1cb64502d8f8c04dc11b5906b969af247c6',
  'swftools/swftools' => '0.3.2@ad135893d55bffaa71de2f3f7febd0b3e455368a',
  'sylius/attribute' => 'v0.13.0@cadb69fa4bc7c6f61bda2ddbdbbd154921f4c907',
  'sylius/resource' => 'v0.13.0@656be14add63fe333cf81d9c7305c95240c9c0e3',
  'sylius/translation' => 'v0.13.0@ff0dd157c31d543fd78517b23053e974d3728489',
  'symfony/asset' => 'v2.8.50@63950b69e47b0f54c1cb70a54523007a8c8f8409',
  'symfony/cache' => 'v4.1.12@399ddbf0ff98f42593827141b5fcd95d51c36b28',
  'symfony/class-loader' => 'v2.8.50@8194721a1e2768cfb95079581889c41eec7a5959',
  'symfony/config' => 'v2.8.50@7dd5f5040dc04c118d057fb5886563963eb70011',
  'symfony/console' => 'v2.8.50@cbcf4b5e233af15cd2bbd50dee1ccc9b7927dc12',
  'symfony/contracts' => 'v1.1.0@d3636025e8253c6144358ec0a62773cae588395b',
  'symfony/debug' => 'v2.8.50@74251c8d50dd3be7c4ce0c7b862497cdc641a5d0',
  'symfony/dependency-injection' => 'v2.8.50@c306198fee8f872a8f5f031e6e4f6f83086992d8',
  'symfony/doctrine-bridge' => 'v2.8.50@b3a1a048020bea1ea69d31e35c01e2d927fa3ba8',
  'symfony/dom-crawler' => 'v3.4.27@d40023c057393fb25f7ca80af2a56ed948c45a09',
  'symfony/event-dispatcher' => 'v2.8.50@a77e974a5fecb4398833b0709210e3d5e334ffb0',
  'symfony/expression-language' => 'v4.2.8@a69b153996a13ffdb05395e8724c7217a8448e9e',
  'symfony/filesystem' => 'v2.8.50@7ae46872dad09dffb7fe1e93a0937097339d0080',
  'symfony/finder' => 'v2.8.50@1444eac52273e345d9b95129bf914639305a9ba4',
  'symfony/form' => 'v2.8.50@74382a47aa97496d181fbb598822fdfb9e1744e4',
  'symfony/framework-bundle' => 'v2.8.50@07b6056e3a84861fa8a54c33f70b189cf18a1aad',
  'symfony/http-foundation' => 'v2.8.50@746f8d3638bf46ee8b202e62f2b214c3d61fb06a',
  'symfony/http-kernel' => 'v2.8.51@a01e2b4b267fda24dba9b06cd1c575ca87a51ad2',
  'symfony/intl' => 'v3.2.14@3fd98dde8e7d1c34c974d65b09e9c32abe88dafe',
  'symfony/options-resolver' => 'v2.8.50@7aaab725bb58f0e18aa12c61bdadd4793ab4c32b',
  'symfony/polyfill-apcu' => 'v1.11.0@a502face1da6a53289480166f24de2c3c68e5c3c',
  'symfony/polyfill-ctype' => 'v1.11.0@82ebae02209c21113908c229e9883c419720738a',
  'symfony/polyfill-intl-icu' => 'v1.11.0@999878a3a09d73cae157b0cf89bb6fb2cc073057',
  'symfony/polyfill-mbstring' => 'v1.11.0@fe5e94c604826c35a32fa832f35bd036b6799609',
  'symfony/polyfill-php54' => 'v1.11.0@2964b17ddc32dba7bcba009d5501c84d3fba1452',
  'symfony/polyfill-php55' => 'v1.11.0@96fa25cef405ea452919559a0025d5dc16e30e4c',
  'symfony/polyfill-php56' => 'v1.11.0@f4dddbc5c3471e1b700a147a20ae17cdb72dbe42',
  'symfony/polyfill-php70' => 'v1.11.0@bc4858fb611bda58719124ca079baff854149c89',
  'symfony/polyfill-util' => 'v1.11.0@b46c6cae28a3106735323f00a0c38eccf2328897',
  'symfony/process' => 'v3.4.27@a9c4dfbf653023b668c282e4e02609d131f4057a',
  'symfony/property-access' => 'v2.8.50@c8f10191183be9bb0d5a1b8364d3891f1bde07b6',
  'symfony/routing' => 'v2.8.50@8b0df6869d1997baafff6a1541826eac5a03d067',
  'symfony/security' => 'v2.8.50@b9e9130cf348d4e85e37ba1d0d27263e33b97534',
  'symfony/security-acl' => 'v3.0.2@22928f6be80a37f301500c67e50f57f5b25ffaa8',
  'symfony/security-bundle' => 'v2.8.50@4590b89b5e9b04944988f9d3b8c866abc7ff9423',
  'symfony/serializer' => 'v3.1.10@f6c70e2ca70d4d0b4be0ccc0b3c7dfa8672afbad',
  'symfony/stopwatch' => 'v3.0.9@49c0ea2f3d3a779df4780927671332edc406ea84',
  'symfony/templating' => 'v2.8.50@7e64705b32855ebce87eff8cc5fbe6bf240c8e44',
  'symfony/translation' => 'v2.8.50@fc58c2a19e56c29f5ba2736ec40d0119a0de2089',
  'symfony/twig-bridge' => 'v3.3.2@7f1bc6676396441dc938dc4dacb49ae91f56b930',
  'symfony/twig-bundle' => 'v3.2.1@6d79d8af97c6d77a87657c6d00d299b0de073c0c',
  'symfony/validator' => 'v2.8.50@d5d2090bba3139d8ddb79959fbf516e87238fe3a',
  'symfony/yaml' => 'v2.8.50@02c1859112aa779d9ab394ae4f3381911d84052b',
  'szymach/c-pchart' => 'v3.0.6@a4b77475e09de1a37a4d0d9361112c26719739e6',
  'toin0u/digitalocean' => '1.4.2@fb460785207fa4029217eef489508b9ed6c61b00',
  'toin0u/http-adapter' => '1.0.3@29253948d446bc3afc29897ac67b4cd01f56cd10',
  'twig/extensions' => 'v1.5.4@57873c8b0c1be51caa47df2cdb824490beb16202',
  'twig/twig' => 'v1.40.1@35889516bbd6bbe46a600c2c33b03515df4a076e',
  'webit/eval-math' => '1.0.1@0e7c3a1e0f536b826f04553726c112996b52ded6',
  'winzou/state-machine' => '0.3.3@37f03a316b9a461ed443906e158bab8d358542df',
  'yuloh/bccomp-polyfill' => 'dev-master@62813e0841a92e8bf409869a3ba10cdaf88e120e',
  'zendframework/zend-code' => '3.3.1@c21db169075c6ec4b342149f446e7b7b724f95eb',
  'zendframework/zend-config' => '2.6.0@2920e877a9f6dca9fa8f6bd3b1ffc2e19bb1e30d',
  'zendframework/zend-escaper' => '2.6.0@31d8aafae982f9568287cb4dce987e6aff8fd074',
  'zendframework/zend-eventmanager' => '3.2.1@a5e2583a211f73604691586b8406ff7296a946dd',
  'zendframework/zend-feed' => '2.10.3@6641f4cf3f4586c63f83fd70b6d19966025c8888',
  'zendframework/zend-http' => '2.8.4@d160aedc096be230af0fe9c31151b2b33ad4e807',
  'zendframework/zend-hydrator' => '1.1.0@22652e1661a5a10b3f564cf7824a2206cf5a4a65',
  'zendframework/zend-loader' => '2.6.0@78f11749ea340f6ca316bca5958eef80b38f9b6c',
  'zendframework/zend-server' => '2.8.0@23a2e9a5599c83c05da831cb7c649e8a7809595e',
  'zendframework/zend-soap' => '2.6.0@2d6012e7231cce550219eccfc80836a028d20bf1',
  'zendframework/zend-stdlib' => '2.7.7@0e44eb46788f65e09e077eb7f44d2659143bcc1f',
  'zendframework/zend-uri' => '2.7.0@b2785cd38fe379a784645449db86f21b7739b1ee',
  'zendframework/zend-validator' => '2.11.1@3c28dfe4e5951ba38059cea895244d9d206190b3',
  'behat/behat' => 'v3.5.0@e4bce688be0c2029dc1700e46058d86428c63cab',
  'behat/gherkin' => 'v4.6.0@ab0a02ea14893860bca00f225f5621d351a3ad07',
  'behat/mink' => 'v1.7.1@e6930b9c74693dff7f4e58577e1b1743399f3ff9',
  'behat/mink-browserkit-driver' => '1.3.3@1b9a7ce903cfdaaec5fb32bfdbb26118343662eb',
  'behat/mink-extension' => '2.3.1@80f7849ba53867181b7e412df9210e12fba50177',
  'behat/mink-goutte-driver' => 'v1.2.1@8b9ad6d2d95bc70b840d15323365f52fcdaea6ca',
  'behat/mink-selenium2-driver' => 'v1.3.1@473a9f3ebe0c134ee1e623ce8a9c852832020288',
  'fabpot/goutte' => 'v3.2.3@3f0eaf0a40181359470651f1565b3e07e3dd31b8',
  'instaclick/php-webdriver' => '1.4.5@6fa959452e774dcaed543faad3a9d1a37d803327',
  'symfony/browser-kit' => 'v4.2.8@c09c18cca96d7067152f78956faf55346c338283',
  'symfony/css-selector' => 'v3.4.27@8ca29297c29b64fb3a1a135e71cb25f67f9fdccf',
  'chamilo/chamilo-lms' => 'dev-1.11.10-releases@16fa62b050953b9696ef4ae240d0a1ba2f5e05c6',
);

    private function __construct()
    {
    }

    /**
     * @throws \OutOfBoundsException If a version cannot be located.
     */
    public static function getVersion(string $packageName) : string
    {
        if (isset(self::VERSIONS[$packageName])) {
            return self::VERSIONS[$packageName];
        }

        throw new \OutOfBoundsException(
            'Required package "' . $packageName . '" is not installed: cannot detect its version'
        );
    }
}
