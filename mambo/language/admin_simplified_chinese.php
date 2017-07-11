<?php
/**
* @version $Id: admin_english.php,v 1.30 2004/10/13 09:07:52 dappa Exp $
* @package adminLanguage 1.0
* @license http://www.gnu.org/copyleft/gpl.html GNU/GPL
* Mambo is Free Software
* Mambo�й� http://www.mambochina.net
*/

/*
 admin_simplified_chinese.php for Mambo4.5.1a pro
 Mambo4.5.1a pro ��̨�������İ�
 Mambo�й� http��//www.mambochina.net
 2004-10-16
*/

defined( '_VALID_MOS' ) or die( '��ֱֹ�ӷ��ʱ��ļ���' );

DEFINE('_A_CANCEL','ȡ��'); // needed for $alt text in toolbar item
DEFINE('_A_SAVE','����'); // needed for $alt text in toolbar item

/**
* @location /../includes/mambo.php
* @desc Includes translations of several droplists and non-translated stuff
*/

//Droplist
DEFINE('_A_TOP','����');
DEFINE('_A_ALL','ȫ��');
DEFINE('_A_NONE','��');
DEFINE('_A_SELECT_IMAGE','ѡ��ͼƬ');
DEFINE('_A_NO_USER','û���û�');
DEFINE('_A_CREATE_CAT','�����ȴ���һ������');
DEFINE('_A_PARENT_BROWSER_NAV','�����ڣ������������');
DEFINE('_A_NEW_BROWSER_NAV','�´��ڣ������������');
DEFINE('_A_NEW_W_BROWSER_NAV','�´��ڣ��������������');

//Main Texts
DEFINE('_A_PUBLISHED_PEND','�ѷ���������<u>������</u>');
DEFINE('_A_PUBLISHED_CURRENT','�ѷ�����<u>��ǰ����</u>');
DEFINE('_A_PUBLISHED_EXPIRED','�ѷ���������<u>����</u>');
DEFINE('_A_PUBLISHED_NOT','δ����');
DEFINE('_A_TOGGLE_STATE','����ͼ�����л�״̬��');

//Alt Hover
DEFINE('_A_PENDING','������');
DEFINE('_A_VISIBLE','���ӵ�');
DEFINE('_A_FINISHED','�ѽ���');

/**
* @desc Includes the main adminLanguage class which refers to var's for translations
*/
class adminLanguage {

//templates/mambo_admin_blue/login.php
var $A_USERNAME = '�û���';
var $A_PASSWORD = '����';
var $A_WELCOME_MAMBO = '<p>��ӭʹ��Mambo��</p><p>��ʹ����Ч���û�������������¼�����̨</p>';
var $A_WARNING_JAVASCRIPT = '�����棡 Javascript ���ܱ���򿪣����ܽ��������Ĺ��������';

//templates/mambo_admin_blue/index.php
var $A_GENERATE_TIME = 'ҳ������ʱ�䣺%f ��';
var $A_LOGOUT = '�˳�';

//popups/contentwindow.php
var $A_TITLE_CPRE = '����Ԥ��';
var $A_CLOSE = '�ر�';
var $A_PRINT = '��ӡ';

//popups/modulewindow.php
var $A_TITLE_MPRE = 'ģ��Ԥ��';

//popups/pollwindow.php
var $A_TITLE_PPRE = '���ߵ���Ԥ��';
var $A_VOTE = 'ͶƱ';
var $A_RESULTS = '���';

//popups/uploadimage.php
var $A_TITLE_UPLOAD = '�ϴ��ļ�';
var $A_FILE_UPLOAD = '�ļ��ϴ�';
var $A_UPLOAD = '�ϴ�';

//modules/mod_components.php
var $A_ERROR = '����';

//modules/mod_fullmenu.php
var $A_MENU_HOME = '��ҳ';
var $A_MENU_HOME_PAGE = '�����̨��ҳ';
var $A_MENU_SITE = '��վ';
var $A_MENU_CONFIGURATION = '����';
var $A_MENU_LANGUAGES = '����';
var $A_MENU_MANAGE_LANG = '��������';
var $A_MENU_LANG_MANAGE = '���Թ���';
var $A_MENU_INSTALL = '��װ';
var $A_MENU_INSTALL_LANG = '��װ����';
var $A_MENU_MEDIA_MANAGE = 'ý�����';
var $A_MENU_MANAGE_MEDIA = '����ý���ļ�';
var $A_MENU_PREVIEW = 'Ԥ��';
var $A_MENU_NEW_WINDOW = '���´��ڴ�';
var $A_MENU_INLINE = 'Ƕ�봰��';
var $A_MENU_INLINE_POS = 'Ƕ�봰�ڣ�λ�ã�';
var $A_MENU_STATISTICS = 'ͳ��';
var $A_MENU_STATISTICS_SITE = '��վͳ��';
var $A_MENU_BROWSER = '�����������ϵͳ����';
var $A_MENU_PAGE_IMP = 'ҳ�����';
var $A_MENU_SEARCH_TEXT = '�����ı�';
var $A_MENU_TEMP_MANAGE = 'ģ�����';
var $A_MENU_TEMP_CHANGE = '������վģ��';
var $A_MENU_SITE_TEMP = '��վģ��';
var $A_MENU_ADMIN_TEMP = '�����̨ģ��';
var $A_MENU_ADMIN_CHANGE_TEMP = '���������̨ģ��';
var $A_MENU_MODUL_POS = 'ģ��λ��';
var $A_MENU_TEMP_POS = 'ģ��λ��';
var $A_MENU_TRASH_MANAGE = '����վ����';
var $A_MENU_MANAGE_TRASH = '�������վ';
var $A_MENU_USER_MANAGE = '�û�����';
var $A_MENU_MANAGE_USER = '�����û�';
var $A_MENU_ADD_EDIT = '����/�༭�û�';
var $A_MENU_MASS_MAIL = 'Ⱥ���ʼ�';
var $A_MENU_MAIL_USERS = '�����ʼ���һ���û���һ���û�';
var $A_MENU_MANAGE_STR = '������վ�ṹ';
var $A_MENU_CONTENT = '����';
var $A_MENU_CONTENT_MANAGE = '���ݹ���';
var $A_MENU_CONTENT_MANAGERS = '���ݹ���';
var $A_MENU_MANAGE_CONTENT = '����������Ŀ';
var $A_MENU_ITEMS = '��Ŀ';
var $A_MENU_ADDNEDIT = '����/�༭';
var $A_MENU_ARCHIVE = '�浵';
var $A_MENU_OTHER_MANAGE = '��������';
var $A_MENU_ITEMS_FRONT = '������ҳ��Ŀ';
var $A_MENU_ITEMS_CONTENT = '����̬������Ŀ';
var $A_MENU_ITEMS_ARCHIVE = '����浵��Ŀ';
var $A_MENU_ARCHIVE_MANAGE = '�浵����';
var $A_MENU_CONTENT_SEC = '�������ݵ�Ԫ';
var $A_MENU_CONTENT_CAT = '�������ݷ���';
var $A_MENU_COMPONENTS = '���';
var $A_MENU_INST_UNST = '��װ/ж��';
var $A_MENU_MORE_COMP = '�������';
var $A_MENU_MODULES = 'ģ��';
var $A_MENU_INSTALL_CUST = '��װ/ж��ģ��';
var $A_MENU_SITE_MOD = '��վģ��';
var $A_MENU_SITE_MOD_MANAGE = '������վģ��';
var $A_MENU_ADMIN_MOD = '��̨ģ��';
var $A_MENU_ADMIN_MOD_MANAGE = '�����̨ģ��';
var $A_MENU_MAMBOTS = 'Mambots';
var $A_MENU_CUSTOM_MAMBOT = '��װ/ж��mambot';
var $A_MENU_SITE_MAMBOTS = '��վMambots';
var $A_MENU_MAMBOT_MANAGE = '������վMambots';
var $A_MENU_MESSAGES = '����';
var $A_MENU_INBOX = '�ռ���';
var $A_MENU_PRIV_MSG = 'վ�ڶ���';
var $A_MENU_GLOBAL_CHECK = 'ȫ���Ż�';
var $A_MENU_CHECK_INOUT = '�Ż�����ȡ������Ŀ';
var $A_MENU_SYSTEM_INFO = 'ϵͳ��Ϣ';
var $A_MENU_CLEAN_CACHE = '��ջ���';
var $A_MENU_CLEAN_CACHE_ITEMS = '���������Ŀ����';
var $A_MENU_BIG_THANKS = '���ĸ�л������';
var $A_MENU_SUPPORT = '֧��';
var $A_MENU_SYSTEM = 'ϵͳ';

//modules/mod_latest.php
var $A_LATEST_ADDED = '�������������';

//modules/mod_online.php
var $A_ONLINE_USERS = '�����û�';

//modules/mod_popular.php
var $A_POPULAR_MOST = '������Ŀ';
var $A_CREATED = '����';
var $A_HITS = '���';

//modules/mod_quickicon.php
var $A_MENU_MANAGER = '�˵�����';
var $A_FRONTPAGE_MANAGER = '��ҳ����';
var $A_STATIC_MANAGER = '��̬���ݹ���';
var $A_SECTION_MANAGER = '��Ԫ����';
var $A_CATEGORY_MANAGER = '�������';
var $A_ALL_MANAGER = '����������Ŀ';
var $A_TRASH_MANAGER = '����վ����';
var $A_GLOBAL_CONF = 'ȫ������';
var $A_HELP = '����';

//includes/menubar.html.php
var $A_NEW = '����';
var $A_PUBLISH = '����';
var $A_DEFAULT = 'Ĭ��';
var $A_ASSIGN = '����';
var $A_UNPUBLISH = 'ȡ������';
var $A_UNARCHIVE = 'ȡ���浵';
var $A_EDIT = '�༭';
var $A_DELETE = 'ɾ��';
var $A_TRASH = '����վ';
var $A_SAVE = '����';
var $A_BACK = '����';
var $A_CANCEL = 'ȡ��';

//Alerts
var $A_ALERT_SELECT_TO = '����б���ѡ����Ŀ��';
var $A_ALERT_SELECT_PUB = '����б���ѡ����Ŀ������';
var $A_ALERT_SELECT_PUB_LIST = '����б���ѡ����Ŀ����ΪĬ��';
var $A_ALERT_ITEM_ASSIGN = '��ѡ����Ŀ������';
var $A_ALERT_SELECT_UNPUBLISH = '����б���ѡ����Ŀ��ȡ������';
var $A_ALERT_SELECT_ARCHIVE = '����б���ѡ����Ŀ���浵';
var $A_ALERT_SELECT_UNARCHIVE = '����б���ѡ����Ŀ��ȡ���浵';
var $A_ALERT_SELECT_EDIT = '����б���ѡ����Ŀ���༭';
var $A_ALERT_SELECT_DELETE = '����б���ѡ����Ŀ��ɾ��';
var $A_ALERT_CONFIRM_DELETE = 'ȷ��ɾ��ѡ�е���Ŀ��';

//Alerts
var $A_ALERT_ENTER_PASSWORD = '����������'; 
var $A_ALERT_INCORRECT = '��Ч���û������������ʼ���������';
var $A_ALERT_INCORRECT_TRY = '��Ч���û��������룬������';
var $A_ALERT_ALPHA = '�ļ���ֻ�ܰ�����ĸ�����֣������пո�';
var $A_ALERT_IMAGE_UPLOAD = '��ѡ��ͼƬ���ϴ�';
var $A_ALERT_IMAGE_EXISTS = 'ͼƬ $userfile_name �Ѿ����ڡ�';
var $A_ALERT_IMAGE_FILENAME = '�ļ����ͱ����� gif, png, jpg, bmp, swf, doc, xls �� ppt';
var $A_ALERT_UPLOAD_FAILED = '�ϴ� $userfile_name ʧ��';
var $A_ALERT_UPLOAD_SUC = '�ϴ� $userfile_name �� $media_path �ɹ�';
var $A_ALERT_UPLOAD_SUC2 = '�ϴ� $userfile_name �� $base_Dir �ɹ�';

//includes/pageNavigation.php
var $A_OF = '/'; 
var $A_NO_RECORD_FOUND = 'û���ҵ���¼';
var $A_FIRST_PAGE = '��һҳ';
var $A_PREVIOUS_PAGE = '��һҳ';
var $A_NEXT_PAGE = '��һҳ';
var $A_END_PAGE = '���һҳ';
var $A_PREVIOUS = '��һҳ';
var $A_NEXT = '��һҳ';
var $A_END = '���һҳ';
var $A_DISPLAY = '��ʾ';
var $A_MOVE_UP = '����';
var $A_MOVE_DOWN = '����';

//DIRECTORY COMPONENTS ALL FILES
var $A_COMP_CHECKED_OUT = 'ȡ��';
var $A_COMP_TITLE = '����';
var $A_COMP_IMAGE = 'ͼƬ';
var $A_COMP_FRONT_PAGE = '��ҳ';
var $A_COMP_IMAGE_POSITION = 'ͼƬλ��';
var $A_COMP_FILTER = 'ɸѡ';
var $A_COMP_ORDERING = '��ʾ����';
var $A_COMP_ACCESS_LEVEL = '���ʼ���';
var $A_COMP_PUBLISHED = '����';
var $A_COMP_UNPUBLISHED = 'δ����';
var $A_COMP_REORDER = '��������';
var $A_COMP_ACCESS = '����';
var $A_COMP_SECTION = '��Ԫ';
var $A_COMP_NB = '���';
var $A_COMP_ACTIVE = '���Ŀ';
var $A_COMP_TRASH = '����վ��Ŀ';
var $A_COMP_DESCRIPTION = '����';
var $A_COMP_SELECT_MENU_TYPE = '��ѡ��˵�����';
var $A_COMP_ENTER_MENU_NAME = '������˵�������';
var $A_COMP_CREATE_MENU_LINK = 'ȷ�ϴ������ӵ��˵��� \n�κζ�δ����ĸ��Ľ���ʧ��';
var $A_COMP_LINK_TO_MENU = '���ӵ��˵�';
var $A_COMP_CREATE_MENU = '������ѡ��Ĳ˵��ϴ����µĲ˵���';
var $A_COMP_SELECT_MENU = 'ѡ��˵�';
var $A_COMP_MENU_TYPE_SELECT = 'ѡ��˵�����';
var $A_COMP_MENU_NAME_ITEM = '�˵�������';
var $A_COMP_MENU_LINKS = '���еĲ˵�����';
var $A_COMP_NONE = '��';
var $A_COMP_MENU = '�˵�';
var $A_COMP_TYPE = '����';
var $A_COMP_EDIT = '�༭';
var $A_COMP_ADD = '����';
var $A_COMP_ITEM_NAME = '��Ŀ����';
var $A_COMP_STATE = '״̬';
var $A_COMP_TRASHED = '�ѻ���';
var $A_COMP_NAME = '����';
var $A_COMP_DEFAULT = 'Ĭ��';
var $A_COMP_CATEG = '����';
var $A_COMP_LINK_USER = '�����û�';
var $A_COMP_CONTACT = '��ϵ��';
var $A_COMP_EMAIL = 'E-mail';
var $A_COMP_PREVIEW = 'Ԥ��';
var $A_COMP_ITEMS = '��Ŀ';
var $A_COMP_ID = '����';
var $A_COMP_EXPIRED = '����';
var $A_COMP_YES = '��';
var $A_COMP_NO = '��';
var $A_COMP_EDITING = '�༭';
var $A_COMP_ADDING = '����';
var $A_COMP_ARCHIVED = '�浵';
var $A_COMP_HITS = '���';
var $A_COMP_SOURCE = 'Դ�ļ�';
var $A_COMP_SEL_ITEM = 'ѡ����Ŀ��';
var $A_COMP_DATE = '����';
var $A_COMP_AUTHOR = '����';
var $A_COMP_ANOTHER_ADMIN = '���ڱ���������Ա�༭��';

//components/com_admin/admin.admin.html.php
var $A_COMP_ADMIN_TITLE = '�������';
var $A_COMP_ADMIN_INFO = '��Ϣ';
var $A_COMP_ADMIN_SYSTEM = 'ϵͳ��Ϣ';

var $A_COMP_ADMIN_PHP_BUILT_ON = 'PHPϵͳ������';
var $A_COMP_ADMIN_DB = '���ݿ�汾��';
var $A_COMP_ADMIN_PHP_VERSION = 'PHP�汾��';
var $A_COMP_ADMIN_SERVER = 'Web��������';
var $A_COMP_ADMIN_SERVER_TO_PHP = 'Web��������PHP�Ľӿڣ�';
var $A_COMP_ADMIN_AGENT = '�ͻ��ˣ�';
var $A_COMP_ADMIN_SETTINGS = '��ص�PHP���ã�';
var $A_COMP_ADMIN_MODE = 'Safe Mode:';
var $A_COMP_ADMIN_BASEDIR = 'Open basedir:';
var $A_COMP_ADMIN_ERRORS = 'Display Errors:';
var $A_COMP_ADMIN_OPEN_TAGS = 'Short Open Tags:';
var $A_COMP_ADMIN_FILE_UPLOADS = 'File Uploads:';
var $A_COMP_ADMIN_QUOTES = 'Magic Quotes:';
var $A_COMP_ADMIN_REG_GLOBALS = 'Register Globals:';
var $A_COMP_ADMIN_OUTPUT_BUFF = 'Output Buffering:';
var $A_COMP_ADMIN_S_SAVE_PATH = 'Session save path:';
var $A_COMP_ADMIN_S_AUTO_START = 'Session auto start:';
var $A_COMP_ADMIN_XML = 'XML enabled:';
var $A_COMP_ADMIN_ZLIB = 'Zlib enabled:';
var $A_COMP_ADMIN_DISABLED = 'Disabled Functions:';
var $A_COMP_ADMIN_WYSIWYG = '���ӻ��༭��:';
var $A_COMP_ADMIN_CONF_FILE = 'Mambo�����ļ���';
var $A_COMP_ADMIN_PHP_INFO2 = 'PHP��Ϣ';
var $A_COMP_ADMIN_PHP_INFO = 'PHP��Ϣ';
var $A_COMP_ADMIN_PERMISSIONS='Ŀ¼Ȩ��';
var $A_COMP_ADMIN_DIR_PERM = 'Ŀ¼Ȩ��';
var $A_COMP_ADMIN_FOR_ALL = 'Ϊ��ȫ����Mambo�Ĺ��ܺ����ԣ��뽫����Ŀ¼��Ϊ��д��';
var $A_COMP_ADMIN_CREDITS = '����';
var $A_COMP_ADMIN_APP = 'Ӧ��ϵͳ';
var $A_COMP_ADMIN_URL = '��ַ';
var $A_COMP_ADMIN_VERSION = '�汾';
var $A_COMP_ADMIN_LICENSE = '���';
var $A_COMP_ADMIN_CALENDAR = '����';
var $A_COMP_ADMIN_PUB_DOMAIN = '������';
var $A_COMP_ADMIN_ICONS = 'ͼ��';
var $A_COMP_ADMIN_INDEX = '����';
var $A_COMP_ADMIN_OPEN_NEW_WIN = '���´��ڴ�';

//components/com_admin/admin.admin.php
var $A_COMP_ALERT_NO_LINK = '����Ŀû�й���������';

//components/com_banners/admin.banners.html.php
var $A_COMP_BANNERS_MANAGER = '���������';
var $A_COMP_BANNERS_NAME = '����������';
var $A_COMP_BANNERS_IMPRESS_MADE = '�������';
var $A_COMP_BANNERS_IMPRESS_LEFT = 'ʣ�������';
var $A_COMP_BANNERS_CLICKS = '���';
var $A_COMP_BANNERS_CLICKS2 = '���%';
var $A_COMP_BANNERS_PUBLISHED = '����';
var $A_COMP_BANNERS_LOCK = 'ȡ��';
var $A_COMP_BANNERS_PROVIDE = '��������������ơ�';
var $A_COMP_BANNERS_SELECT_IMAGE = '��ѡ��ͼƬ��';
var $A_COMP_BANNERS_FILL_URL = '��������������ַ��';
var $A_COMP_BANNERS_BANNER = '������';
var $A_COMP_BANNERS_CLIENT = '�ͻ�����';
var $A_COMP_BANNERS_PURCHASED = '������������';
var $A_COMP_BANNERS_UNLIMITED = '������';
var $A_COMP_BANNERS_URL = '��������ַ��';
var $A_COMP_BANNERS_SHOW = '��ʾ�����棺';
var $A_COMP_BANNERS_CLICK_URL = 'Ŀ����ַ��';
var $A_COMP_BANNERS_CUSTOM = '���ƺ�������룺';
var $A_COMP_BANNERS_IMAGE = '������ͼƬ��';
var $A_COMP_BANNERS_CLIENT_MANAGER = '������ͻ�����';
var $A_COMP_BANNERS_NO_ACTIVE = '����ĺ�������';
var $A_COMP_BANNERS_FILL_CL_NAME = '������ͻ����ơ�';
var $A_COMP_BANNERS_FILL_CO_NAME = '��������ϵ�ˡ�';
var $A_COMP_BANNERS_FILL_CO_EMAIL = '������Email��';
var $A_COMP_BANNERS_TITLE_CLIENT = '������ͻ�';
var $A_COMP_BANNERS_CONTACT_NAME = '��ϵ��';
var $A_COMP_BANNERS_CONTACT_EMAIL = 'Email';
var $A_COMP_BANNERS_EXTRA = '��ע';

//components/com_banners/admin.banners.php
var $A_COMP_BANNERS_SELECT_CLIENT = 'ѡ��ͻ�';
var $A_COMP_BANNERS_COMP = '���';
var $A_COMP_BANNERS_EDITED = '���ڱ���������Ա�༭��';
var $A_COMP_BANNERS_DEL_CLIENT = '�޷�ɾ���ͻ�����Ϊ�������������ĺ�����';

//components/com_categories/admin.categories.html.php
var $A_COMP_CATEG_MANAGER = '�������';
var $A_COMP_CATEG_CATEGS = '����';
var $A_COMP_CATEG_NAME = '��������';
var $A_COMP_CATEG_ID = '�������';
var $A_COMP_CATEG_MUST_NAME = '�������������';
var $A_COMP_CATEG_DETAILS = '������ϸ';
var $A_COMP_CATEG_TITLE = '������⣺';
var $A_COMP_CATEG_TABLE = '�����б�';
var $A_COMP_CATEG_BLOG = '����Blog���';
var $A_COMP_CATEG_BLOG_ARCHIVE = '�浵����Blog���';
var $A_COMP_CATEG_MESSAGE = '����';
var $A_COMP_CATEG_MESSAGE2 = '���ڱ���������Ա�༭��';
var $A_COMP_CATEG_MOVE = '�ƶ�����';
var $A_COMP_CATEG_MOVE_TO_SECTION = '�ƶ�����Ԫ';
var $A_COMP_CATEG_BEING_MOVED = '�ƶ��ķ���';
var $A_COMP_CATEG_CONTENT = '�ƶ���������Ŀ';
var $A_COMP_CATEG_MOVE_CATEG = '���ƶ����еķ���';
var $A_COMP_CATEG_ALL_ITEMS = '�Լ������е�������Ŀ��Ҳ�������еģ�';
var $A_COMP_CATEG_TO_SECTION = '��ָ���ĵ�Ԫ��';
var $A_COMP_CATEG_COPY = '���Ʒ���';
var $A_COMP_CATEG_COPY_TO_SECTION = '���Ƶ���Ԫ';
var $A_COMP_CATEG_BEING_COPIED = '���Ƶķ���';
var $A_COMP_CATEG_ITEMS_COPIED = '���Ƶ�������Ŀ';
var $A_COMP_CATEG_COPY_CATEGS = '���������еķ���';

//components/com_categories/admin.categories.php
var $A_COMP_CATEG_DELETE = 'ѡ��Ҫɾ���ķ���';
var $A_COMP_CATEG_CATEG_S = '����';
var $A_COMP_CATEG_CANNOT_REMOVE = '�޷�ɾ����������������¼';
var $A_COMP_CATEG_SELECT = 'ѡ�������';
var $A_COMP_CATEG_ITEM_MOVE = 'ѡ����Ŀ���ƶ�';
var $A_COMP_CATEG_MOVED_TO = '�����ƶ���';
var $A_COMP_CATEG_COPY_OF = '����';
var $A_COMP_CATEG_COPIED_TO = '���ิ�Ƶ�';
var $A_COMP_CATEG_SELECT_TYPE = 'ѡ������';

//components/com_categories/admin.checkin.php
var $A_COMP_CHECK_TITLE = 'ȫ���Ż�';
var $A_COMP_CHECK_DB_T = '���ݿ���';
var $A_COMP_CHECK_NB_ITEMS = '��Ŀ��';
var $A_COMP_CHECK_IN = '�Ż�';
var $A_COMP_CHECK_TABLE = '�����';
var $A_COMP_CHECK_DONE = 'ȡ������Ŀ��ȫ���Ż�';

//components/com_categories/admin.config.html.php
var $A_COMP_CONF_GC = 'ȫ������';
var $A_COMP_CONF_IS = 'Ϊ';
var $A_COMP_CONF_WRT = '��д';
var $A_COMP_CONF_UNWRT = '����д';
//var $A_COMP_CONF_SITE_PAGE = 'site-page';
var $A_COMP_CONF_OFFLINE = '��վ����';
var $A_COMP_CONF_OFFMESSAGE = '������Ϣ';
var $A_COMP_CONF_ERR_MESSAGE = 'ϵͳ������Ϣ';
var $A_COMP_CONF_SITE_NAME = '��վ����';
var $A_COMP_CONF_UN_LINKS = '��ʾδ��Ȩ������';
var $A_COMP_CONF_USER_REG = '�����û�ע��';
var $A_COMP_CONF_AC_ACT = 'ʹ���ʻ�����';
var $A_COMP_CONF_REQ_EMAIL = 'Ҫ��Ψһ��Email';
var $A_COMP_CONF_DEBUG = '������վ';
var $A_COMP_CONF_EDITOR = '���ӻ��༭��';
var $A_COMP_CONF_LENGTH = '�б���Ŀ��';
//var $A_COMP_CONF_LOCAL_PG = 'Locale-page';
var $A_COMP_CONF_LOCALE = '����';
var $A_COMP_CONF_LANG = 'ǰ̨����';
var $A_COMP_CONF_ALANG = '��̨����';
var $A_COMP_CONF_TIME_SET = 'ʱ��';
var $A_COMP_CONF_DATE = '��ǰ����/ʱ��';
var $A_COMP_CONF_LOCAL = '���Ҵ���';
//var $A_COMP_CONF_CONT_PAGE = 'content-page';
var $A_COMP_CONF_CONTROL = '* ���в����������ݵ���� *';
var $A_COMP_CONF_LINK_TITLES = '���ӱ���';
var $A_COMP_CONF_MORE_LINK = '��������';
var $A_COMP_CONF_RATE_VOTE = '��Ŀ����/ͶƱ';
var $A_COMP_CONF_AUTHOR = '��������';
var $A_COMP_CONF_CREATED = '�������ں�ʱ��';
var $A_COMP_CONF_MOD_DATE = '�޸����ں�ʱ��';
var $A_COMP_CONF_HITS = '���';
var $A_COMP_CONF_PDF = 'PDFͼ��';
var $A_COMP_CONF_OPT_MEDIA = 'ѡ����ã���Ϊ/media Ŀ¼����д';
var $A_COMP_CONF_PRINT_ICON = '��ӡͼ��';
var $A_COMP_CONF_EMAIL_ICON = 'Emailͼ��';
var $A_COMP_CONF_ICONS = 'ͼ��';
var $A_COMP_CONF_USE_OR_TEXT = '��ӡ������PDF�ͷ���Email ��ͼ����ı�';
var $A_COMP_CONF_TBL_CONTENTS = '��ҳ������Ŀ���';
var $A_COMP_CONF_BACK_BUTTON = '���ذ�ť';
var $A_COMP_CONF_CONTENT_NAV = '������Ŀ����';
var $A_COMP_CONF_HYPER = 'ʹ�ó����ӱ���';
//var $A_COMP_CONF_DB_PAGE = 'db-page';
var $A_COMP_CONF_HOSTNAME = '������';
var $A_COMP_CONF_DB_USERNAME = '�û���';
var $A_COMP_CONF_DB_PW = '����';
var $A_COMP_CONF_DB_NAME = '���ݿ�';
var $A_COMP_CONF_DB_PREFIX = '���ݱ�ǰ׺';
var $A_COMP_CONF_NOT_CH = '���� ��Ҫ�ı䣡�������Ѿ��ֹ��������������ݿ���ǰ׺�� ����';
//Svar $A_COMP_CONF_S_PAGE = 'server-page';
var $A_COMP_CONF_ABS_PATH = '����·��';
var $A_COMP_CONF_LIVE = '��վ��ַ';
var $A_COMP_CONF_SECRET = '�����ı�';
var $A_COMP_CONF_GZIP = '�� GZIP ѹ��ҳ��';
var $A_COMP_CONF_CP_BUFFER = '���ϵͳ֧�ֵĻ���ѹ���������';
var $A_COMP_CONF_SESSION_TIME = 'session�Ựʱ��';
var $A_COMP_CONF_SEC = '��';
var $A_COMP_CONF_AUTO_LOGOUT = '��ʱ�������û�л���Զ��˳���¼';
var $A_COMP_CONF_ERR_REPORT = '���󱨸�';
var $A_COMP_CONF_META_PAGE = 'Ԫ����';
var $A_COMP_CONF_META_DESC = 'ȫ�ֵ���վԪ����';
var $A_COMP_CONF_META_KEY = 'ȫ�ֵ���վԪ�ؼ���';
var $A_COMP_CONF_META_TITLE = '��ʾ�����Ԫ��ǩ';
var $A_COMP_CONF_META_ITEMS = '���������Ŀʱ��ʾ����Ԫ��ǩ';
var $A_COMP_CONF_META_AUTHOR = '��ʾ���ߵ�Ԫ��ǩ';
//var $A_COMP_CONF_MAIL_PAGE = 'mail-page';
var $A_COMP_CONF_MAIL = '�ʼ�����';
var $A_COMP_CONF_MAIL_FROM = '������Email��ַ';
var $A_COMP_CONF_MAIL_FROM_NAME = '����������';
var $A_COMP_CONF_MAIL_SMTP_AUTH = 'SMTP��֤';
var $A_COMP_CONF_MAIL_SMTP_USER = 'SMTP�û�';
var $A_COMP_CONF_MAIL_SMTP_PASS = 'SMTP����';
var $A_COMP_CONF_MAIL_SMTP_HOST = 'SMTP����';
//var $A_COMP_CONF_CACHE_PAGE = 'cache-page';
var $A_COMP_CONF_CACHE = 'ʹ�û���';
var $A_COMP_CONF_CACHE_FOLDER = '����Ŀ¼';
var $A_COMP_CONF_CACHE_DIR = '��ǰ����Ŀ¼Ϊ';
var $A_COMP_CONF_CACHE_DIR_UNWRT = '����Ŀ¼Ϊ����д����ʹ�û��湦��֮ǰ�����ô�Ŀ¼ΪCHMOD755';
var $A_COMP_CONF_CACHE_TIME = '����ʱ��';
//var $A_COMP_CONF_STATS_PAGE = 'stats-page';
var $A_COMP_CONF_STATS = 'ͳ��';
var $A_COMP_CONF_STATS_ENABLE = '����/��ֹ�ռ���վͳ����Ϣ';
var $A_COMP_CONF_STATS_LOG_HITS = '�����ڷ����¼���ݵ��';
var $A_COMP_CONF_STATS_WARN_DATA = '���棺�������ݽ����ռ�';
var $A_COMP_CONF_STATS_LOG_SEARCH = '��¼�����ı�';
//var $A_COMP_CONF_SEO_PAGE = 'seo-page';
var $A_COMP_CONF_SEO_LBL = '���������Ż�';
var $A_COMP_CONF_SEO = '���������Ż�';
var $A_COMP_CONF_SEO_SEFU = '���������Ѻ�����';
var $A_COMP_CONF_SEO_APACHE = 'ֻ������Apache������! ����ǰ�Ȱ� htaccess.txt ����Ϊ .htaccess';
var $A_COMP_CONF_SEO_DYN = '��̬ҳ�����';
var $A_COMP_CONF_SEO_DYN_TITLE = '��̬����ҳ����⣬�����ñ��ֵ�ǰ������';
var $A_COMP_CONF_SERVER = '������';
var $A_COMP_CONF_METADATA = 'Ԫ����';
var $A_COMP_CONF_EMAIL = '�ʼ�';
var $A_COMP_CONF_CACHE_TAB = '����';

//components/com_categories/admin.config.php
var $A_COMP_CONF_HIDE = '����';
var $A_COMP_CONF_SHOW = '��ʾ';
var $A_COMP_CONF_DEFAULT = 'ϵͳĬ��';
var $A_COMP_CONF_NONE = '��';
var $A_COMP_CONF_SIMPLE = '��';
var $A_COMP_CONF_MAX = '���';
var $A_COMP_CONF_MAIL_FC = 'PHP�ʼ�����';
var $A_COMP_CONF_SEND = 'Sendmail';
var $A_COMP_CONF_SMTP = 'SMTP������';
var $A_COMP_CONF_UPDATED = '�����ѱ����£�';
var $A_COMP_CONF_ERR_OCC = '���������޷��������ļ���д�룡';

//components/com_categories/admin.contact.html.php
var $A_COMP_CONT_MANAGER = '��ϵ�˹���';
var $A_COMP_CONT_FILTER = 'ɸѡ';
var $A_COMP_CONT_YOUR_NAME = '�����������ơ�';
var $A_COMP_CONT_CATEG = '��ѡ����ࡣ';
var $A_COMP_CONT_DETAILS = '��ϵ����ϸ';
var $A_COMP_CONT_POSITION = 'ְλ';
var $A_COMP_CONT_ADDRESS = '��ַ';
var $A_COMP_CONT_TOWN = '����';
var $A_COMP_CONT_STATE = 'ʡ��';
var $A_COMP_CONT_COUNTRY = '����';
var $A_COMP_CONT_POSTAL_CODE = '�ʱ�';
var $A_COMP_CONT_TEL = '�绰';
var $A_COMP_CONT_FAX = '����';
var $A_COMP_CONT_INFO = '��ע';
//var $A_COMP_CONT_PUBLISH = 'publish-page';
var $A_COMP_CONT_PUBLISHING = '����';
var $A_COMP_CONT_SITE_DEFAULT = '��վĬ��';
//var $A_COMP_CONT_IMG_PAGE = 'images-page';
var $A_COMP_CONT_IMG_INFO = 'ͼƬ';
var $A_COMP_CONT_PARAMS = '����';
var $A_COMP_CONT_PARAMETERS = '����';
var $A_COMP_CONT_PARAM_MESS = '* ���в���������ϵ�˵���ϸ��ʾ *';
var $A_COMP_CONT_PUB_TAB = '����';
var $A_COMP_CONT_IMG_TAB = 'ͼƬ';

//components/com_categories/admin.contact.php
var $A_COMP_CONT_SELECT_REC = 'ѡ���¼��';

//components/com_categories/admin.content.html.php
var $A_COMP_CONTENT_ALL_ITEMS = '����������Ŀ';
var $A_COMP_CONTENT_START_ALWAYS = '��ʼ������';
var $A_COMP_CONTENT_START = '��ʼ';
var $A_COMP_CONTENT_FIN_NOEXP = '������û�й���';
var $A_COMP_CONTENT_FINISH = '����';
var $A_COMP_CONTENT_PUBLISH_INFO = '����';
var $A_COMP_CONTENT_TRASH = '����б���ѡ����Ŀ���������վ';
var $A_COMP_CONTENT_TRASH_MESS = 'ȷ��Ҫ��ѡ�е���Ŀ�������վ�� \n�Ⲣ������ɾ����Ŀ��';
var $A_COMP_CONTENT_ARCHIVE = '�浵';
var $A_COMP_CONTENT_MANAGER = '����';
var $A_COMP_CONTENT_ZERO = 'ȷ�����õ����Ϊ0��\n�κ�δ����ĸ��Ľ���ʧ��';
var $A_COMP_CONTENT_MUST_TITLE = '������Ŀ�����������';
var $A_COMP_CONTENT_MUST_SECTION = '����ѡ��Ԫ��';
var $A_COMP_CONTENT_MUST_CATEG = '����ѡ����ࡣ';
var $A_COMP_CONTENT_IN = '������';
var $A_COMP_CONTENT_TITLE_ALIAS = '�������';
var $A_COMP_CONTENT_ITEM_DETAILS = '��Ŀ��ϸ';
var $A_COMP_CONTENT_INTRO = 'ժҪ��(����)';
var $A_COMP_CONTENT_MAIN = '���ģ�(��ѡ)';
var $A_COMP_CONTENT_PUB_INFO = '����';
var $A_COMP_CONTENT_FRONTPAGE = '��ʾ����ҳ';
var $A_COMP_CONTENT_AUTHOR = '���߱���';
var $A_COMP_CONTENT_CREATOR = '���Ĵ�����';
var $A_COMP_CONTENT_OVERRIDE = '���Ĵ���ʱ��';
var $A_COMP_CONTENT_START_PUB = '��ʼ����ʱ��';
var $A_COMP_CONTENT_FINISH_PUB = '��������ʱ��';
var $A_COMP_CONTENT_DRAFT_UNPUB = 'δ�����Ĳݸ�';
var $A_COMP_CONTENT_RESET_HIT = '���õ����';
var $A_COMP_CONTENT_REVISED = '�޸�';
var $A_COMP_CONTENT_TIMES = '����';
var $A_COMP_CONTENT_CREATED = '����';
var $A_COMP_CONTENT_BY = '��';
var $A_COMP_CONTENT_NEW_DOC = '���ĵ�';
var $A_COMP_CONTENT_LAST_MOD = '�����޸�';
var $A_COMP_CONTENT_NOT_MOD = 'δ�޸�';
var $A_COMP_CONTENT_MOSIMAGE = 'MamboͼƬ����';
var $A_COMP_CONTENT_SUB_FOLDER = '��Ŀ¼';
var $A_COMP_CONTENT_GALLERY = 'ͼ��ͼƬ';
var $A_COMP_CONTENT_IMAGES = '����ͼƬ';
var $A_COMP_CONTENT_UP = '����';
var $A_COMP_CONTENT_DOWN = '����';
var $A_COMP_CONTENT_REMOVE = 'ɾ��';
var $A_COMP_CONTENT_EDIT_IMAGE = '�༭ѡ���ͼƬ';
var $A_COMP_CONTENT_ALIGN = '����';
var $A_COMP_CONTENT_ALT = '����ı�';
var $A_COMP_CONTENT_BORDER = '�߿�';
var $A_COMP_CONTENT_APPLY = 'Ӧ��';
var $A_COMP_CONTENT_PARAM = '��������';
var $A_COMP_CONTENT_PARAM_MESS = '* ���в���ֻ������Ŀ��ϸ��ʾ *';
var $A_COMP_CONTENT_META_DATA = 'Ԫ����';
var $A_COMP_CONTENT_KEYWORDS = '�ؼ���';
//var $A_COMP_CONTENT_LINK_PAGE = 'link-page';
var $A_COMP_CONTENT_LINK_CI = '�⽫��ѡ��Ĳ˵��д���һ�� \'�˵��� - ������Ŀ\' ������';
var $A_COMP_CONTENT_LINK_NAME = '��������';
var $A_COMP_CONTENT_SOMETHING = '��ѡ��';
var $A_COMP_CONTENT_MOVE_ITEMS = '�ƶ���Ŀ';
var $A_COMP_CONTENT_MOVE_SECCAT = '�ƶ�����Ԫ/����';
var $A_COMP_CONTENT_ITEMS_MOVED = '�ƶ�����Ŀ';
var $A_COMP_CONTENT_SECCAT = '��ѡ��Ԫ/����';
var $A_COMP_CONTENT_COPY_ITEMS = '����������Ŀ';
var $A_COMP_CONTENT_COPY_SECCAT = '���Ƶ���Ԫ/����';
var $A_COMP_CONTENT_ITEMS_COPIED = '���Ƶ���Ŀ';
var $A_COMP_CONTENT_PUBLISHING = '����';
var $A_COMP_CONTENT_IMAGES2 = 'ͼƬ';
var $A_COMP_CONTENT_META_INFO = 'Ԫ����';
var $A_COMP_CONTENT_ADD_ETC = '���뵥Ԫ/����/����';
var $A_COMP_CONTENT_LINK_TO_MENU = '���ӵ��˵�';

//components/com_categories/admin.content.php
var $A_COMP_CONTENT_CACHE = '���������';
var $A_COMP_CONTENT_CANNOT = '���ܱ༭�浵��Ŀ';
var $A_COMP_CONTENT_MODULE = 'ģ��';
var $A_COMP_CONTENT_ANOTHER = '���ڱ���������Ա�༭��';
var $A_COMP_CONTENT_ARCHIVED = '��Ŀ�ɹ��浵';
var $A_COMP_CONTENT_PUBLISHED = '��Ŀ�ɹ�����';
var $A_COMP_CONTENT_UNPUBLISHED = '��Ŀ�ɹ�ȡ������';
var $A_COMP_CONTENT_SEL_TOG = 'ѡ����Ŀ����';
var $A_COMP_CONTENT_SEL_DEL = 'ѡ����Ŀ��ɾ��';
var $A_COMP_CONTENT_SEL_MOVE = 'ѡ����Ŀ���ƶ�';
var $A_COMP_CONTENT_MOVED = '��Ŀ�ɹ��ƶ�����Ԫ';
var $A_COMP_CONTENT_ERR_OCCURRED = '��������';
var $A_COMP_CONTENT_COPIED = '��Ŀ�ɹ����Ƶ���Ԫ';
var $A_COMP_CONTENT_RESET_HIT_COUNT = '�ɹ����õ����';
var $A_COMP_CONTENT_IN_MENU = '(�˵��� - ��̬����) ����';
var $A_COMP_CONTENT_SUCCESS = '�ɹ�����';
var $A_COMP_CONTENT_SELECT_CAT = 'ѡ�����';
var $A_COMP_CONTENT_SELECT_SEC = 'ѡ��Ԫ';

//components/com_categories/toolbar.content.html.php
var $A_COMP_CONTENT_BAR_TRASH = '����վ';
var $A_COMP_CONTENT_BAR_MOVE = '�ƶ�';
var $A_COMP_CONTENT_BAR_COPY = '����';
var $A_COMP_CONTENT_BAR_SAVE = '����';

//components/com_categories/admin.frontpage.html.php
var $A_COMP_FRONT_PAGE_ITEMS = '��ҳ��Ŀ';
var $A_COMP_FRONT_ORDER = '���';

//components/com_categories/admin.frontpage.php
var $A_COMP_FRONT_COUNT_NUM = '���� count ����������';
var $A_COMP_FRONT_INTRO_NUM = '���� intro ����������';
var $A_COMP_FRONT_WELCOME = '��ӭ����';
var $A_COMP_FRONT_IDONOT = 'û������';

//components/com_categories/admin.languages.html.php
var $A_COMP_LANG_INSTALL = '�Ѱ�װ����';
var $A_COMP_LANG_LANG = '����';
var $A_COMP_LANG_EMAIL = '���� Email';
var $A_COMP_LANG_EDITOR = '���Ա༭��';
var $A_COMP_LANG_FILE = '�ļ� language';

//components/com_categories/admin.languages.php
var $A_COMP_LANG_UPDATED = '���óɹ����£�';
var $A_COMP_LANG_M_SURE = '���� ��ȷ�� configuration.php Ϊ��д��';
var $A_COMP_LANG_CANNOT = '����ɾ������ʹ�õ����ԡ�';
var $A_COMP_LANG_FAILED_OPEN = '����ʧ�ܣ��޷���';
var $A_COMP_LANG_FAILED_SPEC = '����ʧ�ܣ�û��ָ�������ԡ�';
var $A_COMP_LANG_FAILED_EMPTY = '����ʧ�ܣ�û������';
var $A_COMP_LANG_FAILED_UNWRT = '����ʧ�ܣ��ļ�����д��';
var $A_COMP_LANG_FAILED_FILE = '����ʧ�ܣ��޷����ļ���д�롣';

//components/com_categories/admin.mambots.html.php
var $A_COMP_MAMB_ADMIN = '����';
var $A_COMP_MAMB_SITE = '��վ';
var $A_COMP_MAMB_MANAGER = 'Mambot����';
var $A_COMP_MAMB_NAME = 'Mambot����';
var $A_COMP_MAMB_FILE = '�ļ�';
var $A_COMP_MAMB_MUST_NAME = 'Mambot������������';
var $A_COMP_MAMB_MUST_FNAME = 'Mambot���������ļ�����';
var $A_COMP_MAMB_DETAILS = 'Mambot��ϸ';
var $A_COMP_MAMB_FOLDER = 'Ŀ¼';
var $A_COMP_MAMB_MFILE = 'Mambot�ļ�';
var $A_COMP_MAMB_ORDER = 'Mambot����';

//components/com_categories/admin.mambots.php
var $A_COMP_MAMB_EDIT = '���ڱ���������Ա�༭��';
var $A_COMP_MAMB_DEL = 'ѡ��mambot��ɾ��';
var $A_COMP_MAMB_TO = 'ѡ��mambot';
var $A_COMP_MAMB_PUB = '����';
var $A_COMP_MAMB_UNPUB = 'ȡ������';

//components/com_categories/admin.massmail.html.php
var $A_COMP_MASS_SUBJECT = '����������';
var $A_COMP_MASS_SELECT_GROUP = '��ѡ��Ⱥ��';
var $A_COMP_MASS_MESSAGE = '����������';
var $A_COMP_MASS_MAIL = 'Ⱥ���ʼ�';
var $A_COMP_MASS_GROUP = 'Ⱥ��';
var $A_COMP_MASS_CHILD = '���ʼ�����Ⱥ��';
var $A_COMP_MASS_SUB = '����';
var $A_COMP_MASS_MESS = '����';

//components/com_categories/admin.massmail.php
var $A_COMP_MASS_ALL = '- �����û�Ⱥ�� -';
var $A_COMP_MASS_FILL = '����ȷ��д��';
var $A_COMP_MASS_SENT = '�ռ���E-mail';
var $A_COMP_MASS_USERS = '�û�';

//components/com_media/admin.media.html.php
var $A_COMP_MEDIA_MG = 'ý�����';
var $A_COMP_MEDIA_DIR = 'Ŀ¼';
var $A_COMP_MEDIA_UP = '����';
var $A_COMP_MEDIA_UPLOAD = '�ϴ�';
var $A_COMP_MEDIA_CODE = '����';
var $A_COMP_MEDIA_CDIR = '����Ŀ¼';
var $A_COMP_MEDIA_PROBLEM = '��������';
var $A_COMP_MEDIA_EXIST = '�����ڡ�';
var $A_COMP_MEDIA_DEL = 'ɾ��';
var $A_COMP_MEDIA_INSERT = '�ڴ������ı�';
var $A_COMP_MEDIA_DEL_FILE = "ɾ���ļ� \"+file+\"?";
var $A_COMP_MEDIA_DEL_ALL = "�� \"+numFiles+\" ���ļ�/Ŀ¼�� \"+folder+\"������ɾ�� \"+folder+\"�е������ļ�/Ŀ¼  ��";
var $A_COMP_MEDIA_DEL_FOLD = "ɾ��Ŀ¼ \"+folder+\"?";
var $A_COMP_MEDIA_NO_IMG = 'û��ͼƬ��';

//components/com_media/admin.media.php
var $A_COMP_MEDIA_NO_HACK = '�벻Ҫ�޸�';
var $A_COMP_MEDIA_DIR_SAFEMODE = 'Ŀ¼��ֹ������ϵͳ����ΪSAFE MODEģʽ���ᵼ�����⡣';
var $A_COMP_MEDIA_ALPHA = 'Ŀ¼����ֻ�ܰ�����ĸ�����֣������пո�';
var $A_COMP_MEDIA_FAILED = '�ϴ�ʧ�ܡ��ļ��Ѿ�����';
var $A_COMP_MEDIA_ONLY = 'ֻ������Ϊ gif, png, jpg, bmp, pdf, swf, doc, xls ���� ppt ���ļ������ϴ�';
var $A_COMP_MEDIA_UP_FAILED = '�ϴ�ʧ��';
var $A_COMP_MEDIA_UP_COMP = '�ϴ����';

//components/com_media/toolbar.media.html.php
var $A_COMP_MEDIA_CREATE = '����';

//components/com_categories/admin.menumanager.html.php
var $A_COMP_MENU_NAME = '�˵�����';
var $A_COMP_MENU_TYPE = '�˵�����';
var $A_COMP_MENU_ID = 'ģ�����';
var $A_COMP_MENU_ASSIGN = 'û��ģ����䵽�˵�';
var $A_COMP_MENU_ENTER = '������˵�����';
var $A_COMP_MENU_ENTER_TYPE = '������˵�����';
var $A_COMP_MENU_DETAILS = '�˵���ϸ';
var $A_COMP_MENU_MAINMENU = '���˵�ģ�飬����˲˵�ʱ����ͬ�����ƽ��Զ�����/���¡�';
var $A_COMP_MENU_DEL = 'ɾ���˵�';
var $A_COMP_MENU_MODULE_DEL = 'ɾ���Ĳ˵�/ģ��';
var $A_COMP_MENU_ITEMS_DEL = 'ɾ���Ĳ˵���';
var $A_COMP_MENU_WILL = '* ��';
var $A_COMP_MENU_WILL2 = '�˲˵���<br />�������в˵���͹�����ģ�� *';
var $A_COMP_MENU_YOU_SURE = 'ȷ��ɾ���˲˵���\n��ɾ���˵����˵����ģ�顣';
var $A_COMP_MENU_NAME_MENU = '�����븴�Ʋ˵�������';
var $A_COMP_MENU_COPY = '���Ʋ˵�';
var $A_COMP_MENU_NEW = '�²˵�����';
var $A_COMP_MENU_COPIED = '���ƵĲ˵�';
var $A_COMP_MENU_ITEMS_COPIED = '���ƵĲ˵���';
var $A_COMP_MENU_MOD_MENU = '���˵�ģ�飬����˲˵�ʱ����ͬ�����ƽ��Զ�����/���ġ�';

//components/com_categories/admin.menumanager.php
var $A_COMP_MENU_CREATED = '�²˵�������';
var $A_COMP_MENU_UPDATED = '�˵�������';
var $A_COMP_MENU_DETECTED = '�˵�ɾ����';
var $A_COMP_MENU_COPY_OF = '�˵��ĸ���';
var $A_COMP_MENU_CONSIST = '�����ˣ�����';

//components/com_categories/toolbar.menumanager.html.php
var $A_COMP_MENU_BAR_DEL = 'ɾ��';

//components/com_categories/admin.messages.html.php
var $A_COMP_MESS_PRIVATE = 'վ�ڶ���';
var $A_COMP_MESS_SEARCH = '����';
var $A_COMP_MESS_FROM = '������';
var $A_COMP_MESS_READ = '�Ѷ�';
var $A_COMP_MESS_UNREAD = 'δ��';
var $A_COMP_MESS_CONF = 'վ�ڶ�������';
var $A_COMP_MESS_GENERAL = '����';
var $A_COMP_MESS_SURE = '��ȷ��';
var $A_COMP_MESS_INBOX = '�����ռ���';
var $A_COMP_MESS_MAILME = '���¶��ŷ��ʼ�֪ͨ��';
var $A_COMP_MESS_VIEW = '���Ķ���';
var $A_COMP_MESS_POSTED = '�ѷ�����';
var $A_COMP_MESS_PROVIDE_SUB = '����������';
var $A_COMP_MESS_PROVIDE_MESS = '����������';
var $A_COMP_MESS_PROVIDE_REC = '��ѡ���ռ���';
var $A_COMP_MESS_NEW = '�¶���';
var $A_COMP_MESS_TO = '�ռ���';

//components/com_categories/admin.modules.html.php
var $A_COMP_MOD_MANAGER = 'ģ�����';
var $A_COMP_MOD_NAME = 'ģ������';
var $A_COMP_MOD_POSITION = 'λ��';
var $A_COMP_MOD_PAGES = '����ҳ��';
var $A_COMP_MOD_VARIES = '����';
var $A_COMP_MOD_ALL = 'ȫ��';
var $A_COMP_MOD_USER = '�û�';
var $A_COMP_MOD_MUST_TITLE = 'ģ������б���';
var $A_COMP_MOD_MODULE = 'ģ��';
var $A_COMP_MOD_DETAILS = 'ģ����ϸ';
var $A_COMP_MOD_SHOW_TITLE = '��ʾ����';
var $A_COMP_MOD_ORDER = 'ģ������';
var $A_COMP_MOD_CONTENT = '����';
var $A_COMP_MOD_MOD_POSITION = 'ģ��λ��';
var $A_COMP_MOD_ITEM_LINK = '�˵�������';
var $A_COMP_MOD_TAB_LBL = '����';

//components/com_categories/admin.modules.php
var $A_COMP_MOD_MODULES = 'ģ��';
var $A_COMP_MOD_CANNOT = '����ɾ����ֻ��ж�أ���Ϊ��Mambo����ģ�顣';
var $A_COMP_MOD_SELECT_TO = 'ѡ��ģ����';

//components/com_categories/admin.newsfeeds.html.php
var $A_COMP_FEED_TITLE = '���ŵ������';
var $A_COMP_FEED_NEWS = '���ŵ���';
var $A_COMP_FEED_ARTICLES = '����';
var $A_COMP_FEED_CACHE = '����ʱ��(��)';
var $A_COMP_FEED_FILL_NAME = '���������ŵ������ơ�';
var $A_COMP_FEED_SEL_CATEG = '��ѡ����ࡣ';
var $A_COMP_FEED_FILL_LINK = '���������ŵ������ӡ�';
var $A_COMP_FEED_FILL_NB = '������������ʾ������';
var $A_COMP_FEED_FILL_REFRESH = '�����뻺�����ʱ�䡣';
var $A_COMP_FEED_LINK = '����';
var $A_COMP_FEED_NB_ARTICLE = '������';
var $A_COMP_FEED_IN_SEC = '����ʱ��(��)';

//components/com_categories/admin.poll.html.php
var $A_COMP_POLL_MANAGER = '���ߵ������';
var $A_COMP_POLL_TITLE = '���ߵ������';
var $A_COMP_POLL_OPTIONS = 'ѡ��';
var $A_COMP_POLL_MUST_TITLE = '���ߵ�������б���';
var $A_COMP_POLL_NON_ZERO = 'ͶƱ�����м��ʱ��';
var $A_COMP_POLL_POLL = '���ߵ���';
var $A_COMP_POLL_SHOW = '�ڲ˵�����ʾ';
var $A_COMP_POLL_LAG = '���ʱ��';
var $A_COMP_POLL_BETWEEN = '(ͶƱ֮���ʱ����)';

//components/com_categories/admin.poll.php
var $A_COMP_POLL_THE = '���ߵ���';
var $A_COMP_POLL_BEING = '���ڱ���������Ա�༭��';

//components/com_categories/poll.class.php
var $A_COMP_POLL_TRY_AGAIN = 'ģ�������Ѵ��ڣ������ԡ�';

//components/com_categories/admin.sections.html.php
var $A_COMP_SECT_MANAGER = '��Ԫ����';
var $A_COMP_SECT_NAME = '��Ԫ����';
var $A_COMP_SECT_ID = '��Ԫ����';
var $A_COMP_SECT_NB_CATEG = '����';
var $A_COMP_SECT_NEW = '�µ�Ԫ';
var $A_COMP_SECT_SEL_MENU = '��ѡ��˵�';
var $A_COMP_SECT_MUST_NAME = '��Ԫ����������';
var $A_COMP_SECT_MUST_TITLE = '��Ԫ�����б���';
var $A_COMP_SECT_DETAILS = '��Ԫ��ϸ';
var $A_COMP_SECT_SCOPE = '��Χ';
var $A_COMP_SECT_SHORT_NAME = '�ڲ˵���ʾ�ļ��';
var $A_COMP_SECT_LONG_NAME = '�ڱ�����ʾ��ȫ��';
var $A_COMP_SECT_COPY = '���Ƶ�Ԫ';
var $A_COMP_SECT_COPY_TO = '���Ƶ���Ԫ';
var $A_COMP_SECT_NEW_NAME = '�µ�Ԫ����';
var $A_COMP_SECT_WILL_COPY = '���������з���<br />�Լ������е�������Ŀ��Ҳ�������еģ�<br />���µ�Ԫ��';

//components/com_categories/admin.sections.php
var $A_COMP_SECT_THE = '��Ԫ';
var $A_COMP_SECT_LIST = '��Ԫ�б�';
var $A_COMP_SECT_BLOG = '��ԪBlog���';
var $A_COMP_SECT_ARCHIVE_BLOG = '�浵��ԪBlog���';
var $A_COMP_SECT_DELETE = 'ѡ��Ԫ��ɾ��';
var $A_COMP_SECT_SEC = '��Ԫ';
var $A_COMP_SECT_CANNOT = '����ɾ���������л��з���';
var $A_COMP_SECT_SUCCESS_DEL = '�ɹ�ɾ��';
var $A_COMP_SECT_TO = 'ѡ��Ԫ��';
var $A_COMP_SECT_CANNOT_PUB = '���ܷ����յ�Ԫ';
var $A_COMP_SECT_AND_ALL = '�������з������Ŀ�Ѹ���';
var $A_COMP_SECT_IN_MENU = '�ڲ˵�';

//components/com_categories/admin.statistics.html.php
var $A_COMP_STAT_OS = '�����������ϵͳ����ͳ��';
var $A_COMP_STAT_BR_PAGE = '�����ͳ��';
var $A_COMP_STAT_BROWSER = '�����';
var $A_COMP_STAT_OS_PAGE = '����ϵͳͳ��';
var $A_COMP_STAT_OP_SYST = '����ϵͳ';
var $A_COMP_STAT_URL_PAGE = '��ͳ��';
var $A_COMP_STAT_URL = '��';
var $A_COMP_STAT_IMPR = 'ҳ�����ͳ��';
var $A_COMP_STAT_PG_IMPR = 'ҳ�����';
var $A_COMP_STAT_SCH_ENG = '�����ı�ͳ��';
var $A_COMP_STAT_LOG_IS = '��¼';
var $A_COMP_STAT_ENABLED = '����';
var $A_COMP_STAT_DISABLED = '����';
var $A_COMP_STAT_SCH_TEXT = '�����ı�';
var $A_COMP_STAT_T_REQ = '��������';
var $A_COMP_STAT_R_RETURN = '���ؽ��';

//components/com_categories/admin.syndicate.html.php
var $A_COMP_SYND_SET = '������������';

//components/com_categories/admin.syndicate.php
var $A_COMP_SYND_SAVED = '���óɹ�����';

//components/com_categories/admin.templates.html.php
var $A_COMP_TEMP_NO_PREVIEW = 'û�п��õ�Ԥ��';
var $A_COMP_TEMP_INSTALL = '��װ';
var $A_COMP_TEMP_TP = 'ģ��';
var $A_COMP_TEMP_PREVIEW = 'Ԥ��ģ��';
var $A_COMP_TEMP_ASSIGN = '����';
var $A_COMP_TEMP_AUTHOR_URL = '������ַ';
var $A_COMP_TEMP_EDITOR = 'ģ��༭��';
var $A_COMP_TEMP_PATH = '·����templates';
var $A_COMP_TEMP_WRT = ' - ��д';
var $A_COMP_TEMP_UNWRT = ' - ����д';
var $A_COMP_TEMP_ST_EDITOR = 'ģ�� CSS �༭��';
var $A_COMP_TEMP_NAME = '·��';
var $A_COMP_TEMP_ASSIGN_TP = '����ģ��';
var $A_COMP_TEMP_TO_MENU = '���˵���';
var $A_COMP_TEMP_PAGES = 'ҳ��';
var $A_COMP_TEMP_ = 'λ��';

//components/com_categories/admin.templates.php
var $A_COMP_TEMP_CANNOT = '�޷�ɾ������ʹ�õ�ģ�档';
var $A_COMP_TEMP_NOT_OPEN = '����ʧ�ܣ��޷���';
var $A_COMP_TEMP_FLD_SPEC = '����ʧ�ܣ�û��ָ����ģ�档';
var $A_COMP_TEMP_FLD_EMPTY = '����ʧ�ܣ�������';
var $A_COMP_TEMP_FLD_WRT = '����ʧ�ܣ��޷����ļ���д�롣';
var $A_COMP_TEMP_FLD_NOT = '����ʧ�ܣ��ļ�����д��';
var $A_COMP_TEMP_SAVED = 'λ�ñ�����';

//components/com_trash/admin.trash.html.php
var $A_COMP_TRASH_MANAGER = '����վ����';
var $A_COMP_TRASH_ITEMS = '������Ŀ';
var $A_COMP_TRASH_MENU_ITEMS = '�˵���';
var $A_COMP_TRASH_DEL_ITEMS = 'ɾ����Ŀ';
var $A_COMP_TRASH_NB_ITEMS = '��Ŀ��';
var $A_COMP_TRASH_ITEM_DEL = 'ɾ������Ŀ';
var $A_COMP_TRASH_PERM_DEL = '�����ݿ��г���ɾ��';
var $A_COMP_TRASH_THESE = '��Щ��Ŀ *';
var $A_COMP_TRASH_YOU_SURE = 'ȷ��ɾ��������Ŀ�� \n�����״����ݿ���ɾ����';
var $A_COMP_TRASH_RESTORE = '�ָ���Ŀ';
var $A_COMP_TRASH_NUMBER = '��Ŀ��';
var $A_COMP_TRASH_ITEM_REST = '�ָ�����Ŀ';
var $A_COMP_TRASH_REST = '�ָ�';
var $A_COMP_TRASH_RETURN = '��Щ��Ŀ��<br />���ǽ���Ϊδ��������Ŀ���ָ���ԭ��λ�� *';
var $A_COMP_TRASH_ARE_YOU = 'ȷ�ϻָ�������Ŀ��';

//components/com_trash/admin.trash.php
var $A_COMP_TRASH_SUCCESS_DEL = '��Ŀ�ɹ�ɾ��';
var $A_COMP_TRASH_SUCCESS_REST = '��Ŀ�ɹ��ָ�';

//components/com_trash/toolbar.trash.html.php
var $A_COMP_TRASH_DEL = 'ɾ��';

//components/com_categories/admin.typedcontent.html.php
var $A_COMP_TYPED_STATIC = '��̬���ݹ���';
var $A_COMP_TYPED_LINKS = '����';
var $A_COMP_TYPED_ARE_YOU = 'ȷ�ϴ����˵����ӵ���̬������Ŀ�� \n�κ�δ����ĸ��Ľ���ʧ��';
var $A_COMP_TYPED_CONTENT = '��̬����';
var $A_COMP_TYPED_TEXT = '���ģ�(����)';
var $A_COMP_TYPED_EXPIRES = '����';
var $A_COMP_TYPED_WILL = '����ѡ�еĲ˵����� \'�˵��� - ��̬����\' ������';

//components/com_categories/admin.typedcontent.php
var $A_COMP_TYPED_SAVED = '��̬������Ŀ������';
var $A_COMP_TYPED_TRASHED = '��Ŀ�������վ';

//components/com_categories/admin.users.html.php
var $A_COMP_USERS_ID = '�û�����';
var $A_COMP_USERS_LOG_IN = '��¼';
var $A_COMP_USERS_LAST = '�������';
var $A_COMP_USERS_BLOCKED = '����';
var $A_COMP_USERS_YOU_MUST = '���������û�����';
var $A_COMP_USERS_YOU_LOGIN = '�û���������Ч�ַ����򳤶Ȳ�����';
var $A_COMP_USERS_MUST_EMAIL = '��������Email��ַ��';
var $A_COMP_USERS_ASSIGN = '��������û���һ��Ⱥ�顣';
var $A_COMP_USERS_NO_MATCH = '���벻ƥ��';
var $A_COMP_USERS_DETAILS = '�û���ϸ';
var $A_COMP_USERS_EMAIL = 'Email';
var $A_COMP_USERS_PASS = '����';
var $A_COMP_USERS_VERIFY = '����ȷ��';
var $A_COMP_USERS_BLOCK = '�����û�';
var $A_COMP_USERS_SUBMI = '����֪ͨ�ʼ�';
var $A_COMP_USERS_REG_DATE = 'ע������';
var $A_COMP_USERS_VISIT_DATE = '�����������';
var $A_COMP_USERS_CONTACT = '��ϵ����Ϣ';
var $A_COMP_USERS_NO_DETAIL = 'û�д��û���������ϵ����Ϣ��<br />�뵽 \'��� -> ��ϵ�� -> ��ϵ�˹���\' ������ϸ��Ϣ��';
var $A_COMP_USERS_CHANGE_INFO = 'Ҫ���Ĵ���Ϣ��<br />�뵽 \'��� -> ��ϵ�� -> ��ϵ�˹���\'��';

//components/com_categories/admin.users.php
var $A_COMP_USERS_SUPER_ADMIN = 'Super Administrator';
var $A_COMP_USERS_CANNOT = '����ɾ����������Ա';

//components/com_categories/toolbar.users.html.php
var $A_COMP_USERS_LOGOUT = 'ǿ���˳�';

//components/com_categories/admin.weblinks.html.php
var $A_COMP_WEBL_MANAGER = '��վ���ӹ���';
var $A_COMP_WEBL_APPROVED = '��׼';
var $A_COMP_WEBL_MUST_TITLE = '��վ������Ŀ�����������';
var $A_COMP_WEBL_MUST_CATEG = '��ѡ�����.';
var $A_COMP_WEBL_MUST_URL = '����������ַ';
var $A_COMP_WEBL_WL = '��վ����';

//components/com_installer/admin.installer.php
var $A_INSTALL_NOT_FOUND = "Ԫ���İ�װ�ļ�δ�ҵ�";
var $A_INSTALL_NOT_AVAIL = "Ԫ���İ�װ�ļ�������";
var $A_INSTALL_ENABLE_MSG = "�ļ��ϴ�����δ���ã���װ�޷���������ʹ�á���Ŀ¼��װ���ķ�������װ��";
var $A_INSTALL_ERROR_MSG_TITLE = '��װ - ����';
var $A_INSTALL_ZLIB_MSG = "zlibδ��װ������װ�޷�������";
var $A_INSTALL_NOFILE_MSG = '��δѡ���ļ�';
var $A_INSTALL_NEWMODULE_ERROR_MSG_TITLE = '�ϴ���ģ�� - ����';
var $A_INSTALL_UPLOAD_PRE = '�ϴ� ';
var $A_INSTALL_UPLOAD_POST = ' - �ϴ�ʧ��';
var $A_INSTALL_UPLOAD_POST2 = ' -  �ϴ�����';
var $A_INSTALL_SUCCESS = '�ɹ�';
var $A_INSTALL_ERROR = '����';
var $A_INSTALL_FAILED = 'ʧ��';
var $A_INSTALL_SELECT_DIR = '��ѡ��Ŀ¼';
var $A_INSTALL_UPLOAD_NEW = '�ϴ���';
var $A_INSTALL_FAIL_PERMISSION = '�޷��ı��ϴ��ļ���Ȩ�ޡ�';
var $A_INSTALL_FAIL_MOVE = '�޷��ƶ��ϴ��ļ���<code>/media</code>Ŀ¼��';
var $A_INSTALL_FAIL_WRITE = '�ϴ�ʧ�� - <code>/media</code> Ŀ¼����д��';
var $A_INSTALL_FAIL_EXIST = '�ϴ�ʧ�� - <code>/media</code> Ŀ¼�����ڡ�';

//components/com_installer/admin.installer.html.php
var $A_INSTALL_WRITABLE = '��д';
var $A_INSTALL_UNWRITABLE = '����д';
var $A_INSTALL_CONTINUE = '���� ...';
var $A_INSTALL_UPLOAD_PACK_FILE = '�ϴ���װ��';
var $A_INSTALL_PACK_FILE = '��װ����';
var $A_INSTALL_UPL_INSTALL = "�ϴ��ļ� &amp; ��װ";
var $A_INSTALL_FROM_DIR = '��Ŀ¼��װ';
var $A_INSTALL_DIR = '��װĿ¼��';
var $A_INSTALL_DO_INSTALL = '��װ';

//components/com_installer/component/component.html.php
var $A_INSTALL_COMP_INSTALLED = '�Ѱ�װ���';
var $A_INSTALL_COMP_CURRENT = '��ǰ�Ѱ�װ';
var $A_INSTALL_COMP_MENU = '����˵�����';
var $A_INSTALL_COMP_AUTHOR = '����';
var $A_INSTALL_COMP_VERSION = '�汾';
var $A_INSTALL_COMP_DATE = '����';
var $A_INSTALL_COMP_AUTH_MAIL = '����Email';
var $A_INSTALL_COMP_AUTH_URL = '������ַ';
var $A_INSTALL_COMP_NONE = '��δ��װ���������';

//components/com_installer/component/component.php
var $A_INSTALL_COMP_UPL_NEW = '�ϴ������';

//components/com_installer/language/language.php
var $A_INSTALL_LANG = '�ϴ�������';
var $A_INSTALL_BACK_LANG_MGR = '�������Թ���';

//components/com_installer/language/language.class.php
var $A_INSTALL_LANG_NOREMOVE = '���Դ���Ϊ�գ��޷�ɾ���ļ���';
var $A_INSTALL_LANG_UN_ERR = 'ж�� - ����';
var $A_INSTALL_LANG_DELETING = 'ɾ��';

//components/com_installer/mambot/mambot.html.php
var $A_INSTALL_MAMB_MAMBOTS = 'Mambots';
var $A_INSTALL_MAMB_CORE = 'ֻ��ʾ��Щ����ж�ص�Mambots - һЩ����Mambots����ɾ����';
var $A_INSTALL_MAMB_MAMBOT = 'Mambot';
var $A_INSTALL_MAMB_TYPE = '����';
var $A_INSTALL_MAMB_AUTHOR = '����';
var $A_INSTALL_MAMB_VERSION = '�汾';
var $A_INSTALL_MAMB_DATE = '����';
var $A_INSTALL_MAMB_AUTH_MAIL = '����Email';
var $A_INSTALL_MAMB_AUTH_URL = '������ַ';
var $A_INSTALL_MOD_NO_MAMBOTS = '��δ�зǺ��ġ�������mambots��װ��';

//components/com_installer/mambot/mambot.php
var $A_INSTALL_MAMB_INSTALL_MAMBOT = '��װMambot';

//components/com_installer/module/module.html.php
var $A_INSTALL_MOD_MODS = 'ģ��';
var $A_INSTALL_MOD_FILTER = 'ɸѡ��';
var $A_INSTALL_MOD_CORE = 'ֻ��ʾ��Щ����ж�ص�ģ�� - һЩ����ģ�鲻��ɾ����';
var $A_INSTALL_MOD_MOD = 'ģ���ļ�';
var $A_INSTALL_MOD_CLIENT = '�ͻ�';
var $A_INSTALL_MOD_AUTHOR = '����';
var $A_INSTALL_MOD_VERSION = '�汾';
var $A_INSTALL_MOD_DATE = '����';
var $A_INSTALL_MOD_AUTH_MAIL = '����Email';
var $A_INSTALL_MOD_AUTH_URL = '������ַ';
var $A_INSTALL_MOD_NO_CUSTOM = '��δ�е�����ģ�鰲װ��';

//components/com_installer/module/module.php
var $A_INSTALL_MOD_INSTALL_MOD = '��װģ��';
var $A_INSTALL_MOD_ADMIN_MOD = '����ģ��';

//components/com_install/template/template.php
var $A_INSTALL_TEMPL_INSTALL = '��װ ';
var $A_INSTALL_TEMPL_SITE_TEMPL = '��վģ��';
var $A_INSTALL_TEMPL_ADMIN_TEMPL = '��̨ģ��';
var $A_INSTALL_TEMPL_BACKTTO_TEMPL = '����ģ��';
//components/com_menus/admin.menus.html.php
var $A_COMP_MENUS_MAX_LVLS = '�����';
var $A_COMP_MENUS_MENU_ITEM = '�˵���';
var $A_COMP_MENUS_ADD_ITEM = '�����˵���';
var $A_COMP_MENUS_SELECT_ADD = 'ѡ�����������';
var $A_COMP_MENUS_MOVE_ITEMS = '�ƶ��˵���';
var $A_COMP_MENUS_MOVE_MENU = '�ƶ����˵�';
var $A_COMP_MENUS_BEING_MOVED = '�ƶ��Ĳ˵���';
var $A_COMP_MENUS_NEXT = '��һ��';
var $A_COMP_MENUS_COPY_MENU = '���Ƶ��˵�';
var $A_COMP_MENUS_BEING_COPIED = '���ƵĲ˵���';

//components/com_menus/admin.menus.php
var $A_COMP_MENUS_MOVED_TO = ' �˵����ƶ���';
var $A_COMP_MENUS_COPIED_TO = ' �˵���Ƶ�';
var $A_COMP_MENUS_WRAPPER = 'Ƕ��ҳ��';
var $A_COMP_MENUS_SEPERATOR = '�ָ���/ռλ��';
var $A_COMP_MENUS_LINK = '���� - ';
var $A_COMP_MENUS_STATIC = '��̬����';
var $A_COMP_MENUS_URL = '��ַ';
var $A_COMP_MENUS_CONTENT_ITEM = '������Ŀ';
var $A_COMP_MENUS_COMP_ITEM = '�����Ŀ';
var $A_COMP_MENUS_CONT_ITEM = '��ϵ����Ŀ';
var $A_COMP_MENUS_NEWSFEED = '���ŵ���';
var $A_COMP_MENUS_COMP = '���';
var $A_COMP_MENUS_LIST = '�б�';
var $A_COMP_MENUS_TABLE = '���';
var $A_COMP_MENUS_BLOG = 'Blog���';
var $A_COMP_MENUS_CONT_SEC = '���ݵ�Ԫ';
var $A_COMP_MENUS_CONT_CAT = '���ݷ���';
var $A_COMP_MENUS_CONT_SEC_MULTI = '���ݵ�Ԫ����';
var $A_COMP_MENUS_CONT_CAT_MULTI = '���ݷ��ಢ��';
var $A_COMP_MENUS_CONT_SEC_ARCH = '�浵���ݵ�Ԫ';
var $A_COMP_MENUS_CONT_CAT_ARCH = '�浵���ݷ���';
var $A_COMP_MENUS_CONTACT_CAT = '��ϵ�˷���';
var $A_COMP_MENUS_WEBLINK_CAT = '��վ���ӷ���';
var $A_COMP_MENUS_NEWS_CAT = '���ŵ������';

//components/com_menus/component_item_link/component_item_link.menu.html.php
var $A_COMP_MENUS_CIL_LINK_NAME = '���ӱ�����������';
var $A_COMP_MENUS_CIL_SELECT_COMP = '����ѡ�����������';
var $A_COMP_MENUS_CIL_LINK_COMP = '���';
var $A_COMP_MENUS_CIL_ON_CLICK = '����򿪷�ʽ';
var $A_COMP_MENUS_CIL_PARENT = '���˵���';
var $A_DETAILS = '��ϸ';

//components/com_menus/components/components.menu.html.php
var $A_COMP_MENUS_CMP_ITEM_NAME = '������������';
var $A_COMP_MENUS_CMP_SELECT_CMP = '��ѡ�����';
var $A_COMP_MENUS_PARAMETERS_AVAILABLE = 'һ��������µĲ˵�����в����Ϳ�����';
var $A_COMP_MENUS_CMP_ITEM_COMP = '�˵��� :: ���';

//components/com_menus/contact_category_table/contact_category_table.menu.html.php
var $A_COMP_MENUS_CMP_CCT_CATEG = '����ѡ�����';
var $A_COMP_MENUS_CMP_CCT_TITLE = '�˵�������б���';
var $A_COMP_MENUS_CMP_CCT_BLANK = '������գ����Զ�ʹ�÷������ơ�';
var $A_COMP_MENUS_CMP_CCT_THETITLE = '���⣺';
var $A_COMP_MENUS_CMP_CCT_THECAT = '���ࣺ';

//components/com_menus/contact_item_link/contact_item_link.menu.html.php
var $A_COMP_MENUS_CMP_CIL_LINK_NAME = '���ӱ���������';
var $A_COMP_MENUS_CMP_CIL_SEL_CONT = '����ѡ��һ����ϵ�������ӡ�';
var $A_COMP_MENUS_CMP_CIL_CONTACT = '������ϵ��';
var $A_COMP_MENUS_CMP_CIL_ONCLICK = '����򿪷�ʽ';
var $A_COMP_MENUS_CMP_CIL_HDR = '�˵��� :: ���� - ��ϵ��';

//components/com_menus/wrapper/wrapper.menu.html.php
var $A_COMP_MENUS_WRAPPER_LINK = 'Ƕ��ҳ������';

//components/com_menus/separator/separator.menu.html.php
var $A_COMP_MENUS_SEPARATOR_PATTERN = 'ģʽ';

//components/com_menus/content_typed/content_typed.menu.html.php
var $A_COMP_MENUS_TYPED_CONTENT_TO_LINK = '���Ӿ�̬����';

//components/com_menus/content_item_link/content_item_link.menu.html.php
var $A_COMP_MENUS_CONTENT_TO_LINK = '��������';

//components/com_menus/newsfeed_link/newsfeed_link.menu.html.php
var $A_COMP_MENUS_NEWSFEED_TO_LINK = '�������ŵ���';

}

?>
