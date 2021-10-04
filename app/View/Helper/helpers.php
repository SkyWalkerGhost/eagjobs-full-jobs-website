<?php
	
	/*
	|--------------------------------------------------------------------------
	| Message Alerts
	|--------------------------------------------------------------------------
	|
	*/

	function successMessage()
	{
		return 'თქვენ წარმატებით გაიარეთ რეგისტრაცია, ანგარიშის გასააქტიურებლად შეამოწმეთ თქვენი ელ-ფოსტა';
	}

	/*
	|--------------------------------------------------------------------------
	| Index Page
	|--------------------------------------------------------------------------
	|
	*/

	function controlPanelTitle()
	{
		return 'სამართავი პანელი';
	}

	function dataTable()
	{
		return 'მონაცემთა ცხრილი';
	}

	/*
	|--------------------------------------------------------------------------
	| Category Page
	|--------------------------------------------------------------------------
	|
	*/

	function categoryPageTitle()
	{
		return 'კატეგორიების გვერდი';
	}

	function categoryTableTitle()
	{
		return 'კატეგორიების ცხრილი';
	}

	function addNewCategoryTitle()
	{
		return 'დაამატე ახალი კატეგორია';
	}

	function addCategory()
	{
		return 'კატეგორიის დამატება';
	}

	function categoryName()
	{
		return 'კატეგორიის სახელი';
	}

	function numberofVacanciesInThisCategory()
	{
		return 'ვაკანსიების რაოდენობა ამ კატეგორიაზე';
	}

	function categoryNotFound()
	{
		return 'კატეგორიები არ არის';
	}

	/*
	|--------------------------------------------------------------------------
	| Button Text
	|--------------------------------------------------------------------------
	|
	*/

	function successButton()
	{
		return 'დამატება';
	}

	function changeButton()
	{
		return 'სტატუსის შეცვლა';
	}

	function updateButton()
	{
		return 'ვაკანსიის განახლება';
	}
	
	/*
	|--------------------------------------------------------------------------
	| Vacancy Create/Read/Update/Delete
	|--------------------------------------------------------------------------
	|
	*/

	function vacancyTableTitle()
	{
		return 'ვაკანსიების ცხრილი';
	}

	function addNewVacancy()
	{
		return 'დაამატე ახალი ვაკანსია';
	}

	function updateVacancy()
	{
		return 'ვაკანსიის განახლება';
	}

	function vacancyName()
	{
		return 'ვაკანსიის სახელი';
	}

	function vacancyPlaceholder()
	{
		return 'ვაკანსიის სახელი: 150 სიმბოლო';
	}
	
	function vacancyTypeTitle()
	{
		return 'ვაკანსიის ტიპი';
	}

	function locationTitle()
	{
		return 'ადგილმდებარეობა';
	}

	function experienceTitle()
	{
		return 'სამუშაო გამოცდილება';
	}

	function languageTitle()
	{
		return 'სამუშაო ენა';
	}

	function educationTitle()
	{
		return 'განათლება';
	}

	function educationPlaceholder()
	{
		return 'მაგ: ბაკალავრი';
	}

	function categoryTitle()
	{
		return 'კატეგორია';
	}

	function salaryTitle()
	{
		return 'ანაზღაურება';
	}

	function workScheduleTitle()
	{
		return 'დასაქმების ფორმა';
	}

	function jobDescriptionAndFunctionDuties()
	{
		return 'აღწერეთ შესასრულებელი სამუშაო და ფუნქცია-მოვალეობები';
	}

	function qualificationRequirements()
	{
		return 'საკავალიფიკაციო მოთხოვნები';
	}

	function companyNameTitle()
	{
		return 'კომპანიის სახელი';
	}

	function companyEmailTitle()
	{
		return 'კომპანიის ელ-ფოსტა';
	}

	function addNewCompany()
	{
		return 'ახალი კომპანიის დამატება';
	}

	function aboutCompanyTitle()
	{
		return 'კომპანიის შესახებ';
	}

	function vacancyNotFound()
	{
		return 'ვაკანსიები არ მოიძებნა';
	}

	function companyNotFound()
	{
		return 'კომპანიები არ მოიძებნა';
	}

	/*
	|--------------------------------------------------------------------------
	| Vacancy Create/Read/Update/Delete
	|--------------------------------------------------------------------------
	|
	*/

	function paymentTableTitle()
	{
		return 'გადახდების ცხრილი';
	}

	function paymentNotFound()
	{
		return 'მონაცემები არ მოიძებნა';
	}

	function jobPostingPeriodHasExpired()
	{
		return 'დასრულდა';
	}

	function invoiceNotFound()
	{
		return 'Invoice-ბი არ მოიძებნა';
	}

	function currentPayableApplications ()
	{
		return 'მიმდინარე გადასახდელი განაცხადები:';
	}


	/*
	|--------------------------------------------------------------------------
	| Vacancy Create/Read/Update/Delete
	|--------------------------------------------------------------------------
	|
	*/

	/*
	|--------------------------------------------------------------------------
	| Serch Page
	|--------------------------------------------------------------------------
	|
	*/

	function searchPageTitle()
	{
		return 'ძიება';
	}

	function invoiceTableTitle()
	{
		return 'Invoice-ის ცხრილი';
	}


	/*
	|--------------------------------------------------------------------------
	| Table Thead Names
	|--------------------------------------------------------------------------
	|
	*/

	function categoryTableTheadName()
	{
		return [
			'ID',
			'სახელი',
			'რაოდენობა',
			'რედაქტირება',
			'წაშლა',
		];
	}

	function vacancyTableHeadName()
	{
		return [
			'ID',
			'ORDER ID',
			'სახელი',
			'ტიპი',
			'გამოქვეყნება',
			'გადახდის სტატუსი',
			'created_at',
			'მოქმედება',
		];
	}

	function paymentTableTheadName()
	{
		return [
			'ID',
			'ORDER ID',
			'ვაკანსიის სახელი',
			'კომპანია',
			'ელ-ფოსტა',
			'გადახდის სტატუსი',
			'მოქმედება',
		];
	}

	function invoiceTableTheadName()
	{
		return [
			'ID',
			'ORDER ID',
			'ვაკანსიის სახელი',
			'კომპანია',
			'ელ-ფოსტა',
			'Invoice-ის გაგზავნის დრო',
			'წაშლა',
		];
	}

	function companyVacancyTableThead()
	{
		return [
			'ID',
			'განაცხადის ID',
			'სახელი',
			'კატეგორია',
			'ტიპი',
			'გადახდის სტატუსი',
			'თარიღი',
			'ფასი',
		];
	}

	function companyReview()
	{
		return [
			5 => 'ძალიან კარგი',
			4 => 'კარგი',
			3 => 'საშუალო',
			2 => 'ცუდი',
			1 => 'ძალიან ცუდი',
		];
	}


?>