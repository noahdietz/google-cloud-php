<?php
# Generated by the protocol buffer compiler.  DO NOT EDIT!
# source: google/cloud/talent/v4beta1/profile.proto

namespace Google\Cloud\Talent\V4beta1;

use Google\Protobuf\Internal\GPBType;
use Google\Protobuf\Internal\RepeatedField;
use Google\Protobuf\Internal\GPBUtil;

/**
 * Resource that represents an employment record of a candidate.
 *
 * Generated from protobuf message <code>google.cloud.talent.v4beta1.EmploymentRecord</code>
 */
class EmploymentRecord extends \Google\Protobuf\Internal\Message
{
    /**
     * Optional.
     * Start date of the employment.
     * It can be a partial date (only year, or only year and month), but must be
     * valid. Otherwise an error is thrown.
     * Examples:
     * {"year": 2017, "month": 2, "day": 28} is valid.
     * {"year": 2020, "month": 1, "date": 31} is valid.
     * {"year": 2018, "month": 12} is valid (partial date).
     * {"year": 2018} is valid (partial date).
     * {"year": 2015, "day": 21} is not valid (month is missing but day is
     * presented).
     * {"year": 2018, "month": 13} is not valid (invalid month).
     * {"year": 2017, "month": 1, "day": 32} is not valid (invalid day).
     *
     * Generated from protobuf field <code>.google.type.Date start_date = 1;</code>
     */
    private $start_date = null;
    /**
     * Optional.
     * End date of the employment.
     *
     * Generated from protobuf field <code>.google.type.Date end_date = 2;</code>
     */
    private $end_date = null;
    /**
     * Optional.
     * The name of the employer company/organization.
     * For example, "Google", "Alphabet", etc.
     * Number of characters allowed is 100.
     *
     * Generated from protobuf field <code>string employer_name = 3;</code>
     */
    private $employer_name = '';
    /**
     * Optional.
     * The division name of the employment.
     * For example, division, department, client, etc.
     * Number of characters allowed is 100.
     *
     * Generated from protobuf field <code>string division_name = 4;</code>
     */
    private $division_name = '';
    /**
     * Optional.
     * The physical address of the employer.
     *
     * Generated from protobuf field <code>.google.cloud.talent.v4beta1.Address address = 5;</code>
     */
    private $address = null;
    /**
     * Optional.
     * The job title of the employment.
     * For example, "Software Engineer", "Data Scientist", etc.
     * Number of characters allowed is 100.
     *
     * Generated from protobuf field <code>string job_title = 6;</code>
     */
    private $job_title = '';
    /**
     * Optional.
     * The description of job content.
     * Number of characters allowed is 100,000.
     *
     * Generated from protobuf field <code>string job_description = 7;</code>
     */
    private $job_description = '';
    /**
     * Optional.
     * If it's a supervised position.
     *
     * Generated from protobuf field <code>.google.protobuf.BoolValue is_supervised_position = 8;</code>
     */
    private $is_supervised_position = null;
    /**
     * Optional.
     * If this employment is self-employed.
     *
     * Generated from protobuf field <code>.google.protobuf.BoolValue is_self_employed = 9;</code>
     */
    private $is_self_employed = null;
    /**
     * Optional.
     * If this employment is current.
     *
     * Generated from protobuf field <code>.google.protobuf.BoolValue is_current = 10;</code>
     */
    private $is_current = null;
    /**
     * Output only. The job title snippet shows how the [job_title][google.cloud.talent.v4beta1.EmploymentRecord.job_title] is related
     * to a search query. It's empty if the [job_title][google.cloud.talent.v4beta1.EmploymentRecord.job_title] isn't related to the
     * search query.
     *
     * Generated from protobuf field <code>string job_title_snippet = 11;</code>
     */
    private $job_title_snippet = '';
    /**
     * Output only. The job description snippet shows how the [job_description][google.cloud.talent.v4beta1.EmploymentRecord.job_description]
     * is related to a search query. It's empty if the [job_description][google.cloud.talent.v4beta1.EmploymentRecord.job_description] isn't
     * related to the search query.
     *
     * Generated from protobuf field <code>string job_description_snippet = 12;</code>
     */
    private $job_description_snippet = '';
    /**
     * Output only. The employer name snippet shows how the [employer_name][google.cloud.talent.v4beta1.EmploymentRecord.employer_name] is
     * related to a search query. It's empty if the [employer_name][google.cloud.talent.v4beta1.EmploymentRecord.employer_name] isn't
     * related to the search query.
     *
     * Generated from protobuf field <code>string employer_name_snippet = 13;</code>
     */
    private $employer_name_snippet = '';

    /**
     * Constructor.
     *
     * @param array $data {
     *     Optional. Data for populating the Message object.
     *
     *     @type \Google\Type\Date $start_date
     *           Optional.
     *           Start date of the employment.
     *           It can be a partial date (only year, or only year and month), but must be
     *           valid. Otherwise an error is thrown.
     *           Examples:
     *           {"year": 2017, "month": 2, "day": 28} is valid.
     *           {"year": 2020, "month": 1, "date": 31} is valid.
     *           {"year": 2018, "month": 12} is valid (partial date).
     *           {"year": 2018} is valid (partial date).
     *           {"year": 2015, "day": 21} is not valid (month is missing but day is
     *           presented).
     *           {"year": 2018, "month": 13} is not valid (invalid month).
     *           {"year": 2017, "month": 1, "day": 32} is not valid (invalid day).
     *     @type \Google\Type\Date $end_date
     *           Optional.
     *           End date of the employment.
     *     @type string $employer_name
     *           Optional.
     *           The name of the employer company/organization.
     *           For example, "Google", "Alphabet", etc.
     *           Number of characters allowed is 100.
     *     @type string $division_name
     *           Optional.
     *           The division name of the employment.
     *           For example, division, department, client, etc.
     *           Number of characters allowed is 100.
     *     @type \Google\Cloud\Talent\V4beta1\Address $address
     *           Optional.
     *           The physical address of the employer.
     *     @type string $job_title
     *           Optional.
     *           The job title of the employment.
     *           For example, "Software Engineer", "Data Scientist", etc.
     *           Number of characters allowed is 100.
     *     @type string $job_description
     *           Optional.
     *           The description of job content.
     *           Number of characters allowed is 100,000.
     *     @type \Google\Protobuf\BoolValue $is_supervised_position
     *           Optional.
     *           If it's a supervised position.
     *     @type \Google\Protobuf\BoolValue $is_self_employed
     *           Optional.
     *           If this employment is self-employed.
     *     @type \Google\Protobuf\BoolValue $is_current
     *           Optional.
     *           If this employment is current.
     *     @type string $job_title_snippet
     *           Output only. The job title snippet shows how the [job_title][google.cloud.talent.v4beta1.EmploymentRecord.job_title] is related
     *           to a search query. It's empty if the [job_title][google.cloud.talent.v4beta1.EmploymentRecord.job_title] isn't related to the
     *           search query.
     *     @type string $job_description_snippet
     *           Output only. The job description snippet shows how the [job_description][google.cloud.talent.v4beta1.EmploymentRecord.job_description]
     *           is related to a search query. It's empty if the [job_description][google.cloud.talent.v4beta1.EmploymentRecord.job_description] isn't
     *           related to the search query.
     *     @type string $employer_name_snippet
     *           Output only. The employer name snippet shows how the [employer_name][google.cloud.talent.v4beta1.EmploymentRecord.employer_name] is
     *           related to a search query. It's empty if the [employer_name][google.cloud.talent.v4beta1.EmploymentRecord.employer_name] isn't
     *           related to the search query.
     * }
     */
    public function __construct($data = NULL) {
        \GPBMetadata\Google\Cloud\Talent\V4Beta1\Profile::initOnce();
        parent::__construct($data);
    }

    /**
     * Optional.
     * Start date of the employment.
     * It can be a partial date (only year, or only year and month), but must be
     * valid. Otherwise an error is thrown.
     * Examples:
     * {"year": 2017, "month": 2, "day": 28} is valid.
     * {"year": 2020, "month": 1, "date": 31} is valid.
     * {"year": 2018, "month": 12} is valid (partial date).
     * {"year": 2018} is valid (partial date).
     * {"year": 2015, "day": 21} is not valid (month is missing but day is
     * presented).
     * {"year": 2018, "month": 13} is not valid (invalid month).
     * {"year": 2017, "month": 1, "day": 32} is not valid (invalid day).
     *
     * Generated from protobuf field <code>.google.type.Date start_date = 1;</code>
     * @return \Google\Type\Date
     */
    public function getStartDate()
    {
        return $this->start_date;
    }

    /**
     * Optional.
     * Start date of the employment.
     * It can be a partial date (only year, or only year and month), but must be
     * valid. Otherwise an error is thrown.
     * Examples:
     * {"year": 2017, "month": 2, "day": 28} is valid.
     * {"year": 2020, "month": 1, "date": 31} is valid.
     * {"year": 2018, "month": 12} is valid (partial date).
     * {"year": 2018} is valid (partial date).
     * {"year": 2015, "day": 21} is not valid (month is missing but day is
     * presented).
     * {"year": 2018, "month": 13} is not valid (invalid month).
     * {"year": 2017, "month": 1, "day": 32} is not valid (invalid day).
     *
     * Generated from protobuf field <code>.google.type.Date start_date = 1;</code>
     * @param \Google\Type\Date $var
     * @return $this
     */
    public function setStartDate($var)
    {
        GPBUtil::checkMessage($var, \Google\Type\Date::class);
        $this->start_date = $var;

        return $this;
    }

    /**
     * Optional.
     * End date of the employment.
     *
     * Generated from protobuf field <code>.google.type.Date end_date = 2;</code>
     * @return \Google\Type\Date
     */
    public function getEndDate()
    {
        return $this->end_date;
    }

    /**
     * Optional.
     * End date of the employment.
     *
     * Generated from protobuf field <code>.google.type.Date end_date = 2;</code>
     * @param \Google\Type\Date $var
     * @return $this
     */
    public function setEndDate($var)
    {
        GPBUtil::checkMessage($var, \Google\Type\Date::class);
        $this->end_date = $var;

        return $this;
    }

    /**
     * Optional.
     * The name of the employer company/organization.
     * For example, "Google", "Alphabet", etc.
     * Number of characters allowed is 100.
     *
     * Generated from protobuf field <code>string employer_name = 3;</code>
     * @return string
     */
    public function getEmployerName()
    {
        return $this->employer_name;
    }

    /**
     * Optional.
     * The name of the employer company/organization.
     * For example, "Google", "Alphabet", etc.
     * Number of characters allowed is 100.
     *
     * Generated from protobuf field <code>string employer_name = 3;</code>
     * @param string $var
     * @return $this
     */
    public function setEmployerName($var)
    {
        GPBUtil::checkString($var, True);
        $this->employer_name = $var;

        return $this;
    }

    /**
     * Optional.
     * The division name of the employment.
     * For example, division, department, client, etc.
     * Number of characters allowed is 100.
     *
     * Generated from protobuf field <code>string division_name = 4;</code>
     * @return string
     */
    public function getDivisionName()
    {
        return $this->division_name;
    }

    /**
     * Optional.
     * The division name of the employment.
     * For example, division, department, client, etc.
     * Number of characters allowed is 100.
     *
     * Generated from protobuf field <code>string division_name = 4;</code>
     * @param string $var
     * @return $this
     */
    public function setDivisionName($var)
    {
        GPBUtil::checkString($var, True);
        $this->division_name = $var;

        return $this;
    }

    /**
     * Optional.
     * The physical address of the employer.
     *
     * Generated from protobuf field <code>.google.cloud.talent.v4beta1.Address address = 5;</code>
     * @return \Google\Cloud\Talent\V4beta1\Address
     */
    public function getAddress()
    {
        return $this->address;
    }

    /**
     * Optional.
     * The physical address of the employer.
     *
     * Generated from protobuf field <code>.google.cloud.talent.v4beta1.Address address = 5;</code>
     * @param \Google\Cloud\Talent\V4beta1\Address $var
     * @return $this
     */
    public function setAddress($var)
    {
        GPBUtil::checkMessage($var, \Google\Cloud\Talent\V4beta1\Address::class);
        $this->address = $var;

        return $this;
    }

    /**
     * Optional.
     * The job title of the employment.
     * For example, "Software Engineer", "Data Scientist", etc.
     * Number of characters allowed is 100.
     *
     * Generated from protobuf field <code>string job_title = 6;</code>
     * @return string
     */
    public function getJobTitle()
    {
        return $this->job_title;
    }

    /**
     * Optional.
     * The job title of the employment.
     * For example, "Software Engineer", "Data Scientist", etc.
     * Number of characters allowed is 100.
     *
     * Generated from protobuf field <code>string job_title = 6;</code>
     * @param string $var
     * @return $this
     */
    public function setJobTitle($var)
    {
        GPBUtil::checkString($var, True);
        $this->job_title = $var;

        return $this;
    }

    /**
     * Optional.
     * The description of job content.
     * Number of characters allowed is 100,000.
     *
     * Generated from protobuf field <code>string job_description = 7;</code>
     * @return string
     */
    public function getJobDescription()
    {
        return $this->job_description;
    }

    /**
     * Optional.
     * The description of job content.
     * Number of characters allowed is 100,000.
     *
     * Generated from protobuf field <code>string job_description = 7;</code>
     * @param string $var
     * @return $this
     */
    public function setJobDescription($var)
    {
        GPBUtil::checkString($var, True);
        $this->job_description = $var;

        return $this;
    }

    /**
     * Optional.
     * If it's a supervised position.
     *
     * Generated from protobuf field <code>.google.protobuf.BoolValue is_supervised_position = 8;</code>
     * @return \Google\Protobuf\BoolValue
     */
    public function getIsSupervisedPosition()
    {
        return $this->is_supervised_position;
    }

    /**
     * Optional.
     * If it's a supervised position.
     *
     * Generated from protobuf field <code>.google.protobuf.BoolValue is_supervised_position = 8;</code>
     * @param \Google\Protobuf\BoolValue $var
     * @return $this
     */
    public function setIsSupervisedPosition($var)
    {
        GPBUtil::checkMessage($var, \Google\Protobuf\BoolValue::class);
        $this->is_supervised_position = $var;

        return $this;
    }

    /**
     * Optional.
     * If this employment is self-employed.
     *
     * Generated from protobuf field <code>.google.protobuf.BoolValue is_self_employed = 9;</code>
     * @return \Google\Protobuf\BoolValue
     */
    public function getIsSelfEmployed()
    {
        return $this->is_self_employed;
    }

    /**
     * Optional.
     * If this employment is self-employed.
     *
     * Generated from protobuf field <code>.google.protobuf.BoolValue is_self_employed = 9;</code>
     * @param \Google\Protobuf\BoolValue $var
     * @return $this
     */
    public function setIsSelfEmployed($var)
    {
        GPBUtil::checkMessage($var, \Google\Protobuf\BoolValue::class);
        $this->is_self_employed = $var;

        return $this;
    }

    /**
     * Optional.
     * If this employment is current.
     *
     * Generated from protobuf field <code>.google.protobuf.BoolValue is_current = 10;</code>
     * @return \Google\Protobuf\BoolValue
     */
    public function getIsCurrent()
    {
        return $this->is_current;
    }

    /**
     * Optional.
     * If this employment is current.
     *
     * Generated from protobuf field <code>.google.protobuf.BoolValue is_current = 10;</code>
     * @param \Google\Protobuf\BoolValue $var
     * @return $this
     */
    public function setIsCurrent($var)
    {
        GPBUtil::checkMessage($var, \Google\Protobuf\BoolValue::class);
        $this->is_current = $var;

        return $this;
    }

    /**
     * Output only. The job title snippet shows how the [job_title][google.cloud.talent.v4beta1.EmploymentRecord.job_title] is related
     * to a search query. It's empty if the [job_title][google.cloud.talent.v4beta1.EmploymentRecord.job_title] isn't related to the
     * search query.
     *
     * Generated from protobuf field <code>string job_title_snippet = 11;</code>
     * @return string
     */
    public function getJobTitleSnippet()
    {
        return $this->job_title_snippet;
    }

    /**
     * Output only. The job title snippet shows how the [job_title][google.cloud.talent.v4beta1.EmploymentRecord.job_title] is related
     * to a search query. It's empty if the [job_title][google.cloud.talent.v4beta1.EmploymentRecord.job_title] isn't related to the
     * search query.
     *
     * Generated from protobuf field <code>string job_title_snippet = 11;</code>
     * @param string $var
     * @return $this
     */
    public function setJobTitleSnippet($var)
    {
        GPBUtil::checkString($var, True);
        $this->job_title_snippet = $var;

        return $this;
    }

    /**
     * Output only. The job description snippet shows how the [job_description][google.cloud.talent.v4beta1.EmploymentRecord.job_description]
     * is related to a search query. It's empty if the [job_description][google.cloud.talent.v4beta1.EmploymentRecord.job_description] isn't
     * related to the search query.
     *
     * Generated from protobuf field <code>string job_description_snippet = 12;</code>
     * @return string
     */
    public function getJobDescriptionSnippet()
    {
        return $this->job_description_snippet;
    }

    /**
     * Output only. The job description snippet shows how the [job_description][google.cloud.talent.v4beta1.EmploymentRecord.job_description]
     * is related to a search query. It's empty if the [job_description][google.cloud.talent.v4beta1.EmploymentRecord.job_description] isn't
     * related to the search query.
     *
     * Generated from protobuf field <code>string job_description_snippet = 12;</code>
     * @param string $var
     * @return $this
     */
    public function setJobDescriptionSnippet($var)
    {
        GPBUtil::checkString($var, True);
        $this->job_description_snippet = $var;

        return $this;
    }

    /**
     * Output only. The employer name snippet shows how the [employer_name][google.cloud.talent.v4beta1.EmploymentRecord.employer_name] is
     * related to a search query. It's empty if the [employer_name][google.cloud.talent.v4beta1.EmploymentRecord.employer_name] isn't
     * related to the search query.
     *
     * Generated from protobuf field <code>string employer_name_snippet = 13;</code>
     * @return string
     */
    public function getEmployerNameSnippet()
    {
        return $this->employer_name_snippet;
    }

    /**
     * Output only. The employer name snippet shows how the [employer_name][google.cloud.talent.v4beta1.EmploymentRecord.employer_name] is
     * related to a search query. It's empty if the [employer_name][google.cloud.talent.v4beta1.EmploymentRecord.employer_name] isn't
     * related to the search query.
     *
     * Generated from protobuf field <code>string employer_name_snippet = 13;</code>
     * @param string $var
     * @return $this
     */
    public function setEmployerNameSnippet($var)
    {
        GPBUtil::checkString($var, True);
        $this->employer_name_snippet = $var;

        return $this;
    }

}
