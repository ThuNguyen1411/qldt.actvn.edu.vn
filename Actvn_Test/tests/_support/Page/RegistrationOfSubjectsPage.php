<?php
namespace Page;

/**
 * Class RegistrationOfSubjectsPage
 * @package Page
 */
class RegistrationOfSubjectsPage extends LoginPage
{
	/**
	 * @var string
	 */
	public static $URL1 = '/CMCSoft.IU.Web.info/StudyRegister/StudyRegister.aspx';

	/**
	 * @var string
	 */
	public static $mess = 'Đã hết hạn đăng ký học trực tuyến';
	/**
	 * @var string
	 */
	public static $chooseSub = '#drpCourse';

	/**
	 * @var string
	 */
	public static $chooseText = 'Chọn học phần để hiển thị các lớp học';

	/**
	 * @var string
	 */
	public static $subText = 'Thực tập cơ sở chuyên ngành (3 TC)';

	/**
	 * @var string
	 */
	public static $option = 'tbody:nth-child(1) tr:nth-child(1) td:nth-child(2) select:nth-child(1) > option:nth-child(9)';

	/**
	 * @var string
	 */
	public static $buttonShow = '#btnViewCourseClass';

	/**
	 * @var string
	 */
	public static $table = '#gridRegistration';

	/**
	 * @var string
	 */
	public static $sub = 'Thực tập cơ sở chuyên ngành-1-19 (AT13N-01)';

	/**
	 * @var string
	 */
	public static $buttonFilter = '#btnViewFilterCourseClass';

	/**
	 * @var string
	 */
	public static $buttonPrint = '#btnResult';

}
