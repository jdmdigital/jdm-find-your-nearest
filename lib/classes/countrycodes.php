<?php

class CountryCodes{

    public $countryCodes = array();



    public function __construct()

    {

        $countries = array(

            "AD"=>__('Andorra', 'jdm-find-your-nearest'),

            "AE"=>__('United Arab Emirates', 'jdm-find-your-nearest'),

            "AF"=>__('Afghanistan', 'jdm-find-your-nearest'),

            "AG"=>__('Antigua and Barbuda', 'jdm-find-your-nearest'),

            "AI"=>__('Anguilla', 'jdm-find-your-nearest'),

            "AL"=>__('Albania', 'jdm-find-your-nearest'),

            "AM"=>__('Armenia', 'jdm-find-your-nearest'),

            "AN"=>__('Netherlands Antilles', 'jdm-find-your-nearest'),

            "AO"=>__('Angola', 'jdm-find-your-nearest'),

            "AQ"=>__('Antarctica', 'jdm-find-your-nearest'),

            "AR"=>__('Argentina', 'jdm-find-your-nearest'),

            "AS"=>__('American Samoa', 'jdm-find-your-nearest'),

            "AT"=>__('Austria', 'jdm-find-your-nearest'),

            "AU"=>__('Australia', 'jdm-find-your-nearest'),

            "AW"=>__('Aruba', 'jdm-find-your-nearest'),

            "AX"=>__('Aland Islands', 'jdm-find-your-nearest'),

            "AZ"=>__('Azerbaijan', 'jdm-find-your-nearest'),

            "BA"=>__('Bosnia and Herzegovina', 'jdm-find-your-nearest'),

            "BB"=>__('Barbados', 'jdm-find-your-nearest'),

            "BD"=>__('Bangladesh', 'jdm-find-your-nearest'),

            "BE"=>__('Belgium', 'jdm-find-your-nearest'),

            "BF"=>__('Burkina Faso', 'jdm-find-your-nearest'),

            "BG"=>__('Bulgaria', 'jdm-find-your-nearest'),

            "BH"=>__('Bahrain', 'jdm-find-your-nearest'),

            "BI"=>__('Burundi', 'jdm-find-your-nearest'),

            "BJ"=>__('Benin', 'jdm-find-your-nearest'),

            "BM"=>__('Bermuda', 'jdm-find-your-nearest'),

            "BN"=>__('Brunei Darussalam', 'jdm-find-your-nearest'),

            "BO"=>__('Bolivia', 'jdm-find-your-nearest'),

            "BR"=>__('Brazil', 'jdm-find-your-nearest'),

            "BS"=>__('Bahamas', 'jdm-find-your-nearest'),

            "BT"=>__('Bhutan', 'jdm-find-your-nearest'),

            "BV"=>__('Bouvet Island', 'jdm-find-your-nearest'),

            "BW"=>__('Botswana', 'jdm-find-your-nearest'),

            "BY"=>__('Belarus', 'jdm-find-your-nearest'),

            "BZ"=>__('Belize', 'jdm-find-your-nearest'),

            "CA"=>__('Canada', 'jdm-find-your-nearest'),

            "CC"=>__('Cocos (Keeling) Islands', 'jdm-find-your-nearest'),

            "CD"=>__('Democratic Republic of the Congo', 'jdm-find-your-nearest'),

            "CF"=>__('Central African Republic', 'jdm-find-your-nearest'),

            "CG"=>__('Congo', 'jdm-find-your-nearest'),

            "CH"=>__('Switzerland', 'jdm-find-your-nearest'),

            "CI"=>__('Cote D\'Ivoire (Ivory Coast)', 'jdm-find-your-nearest'),

            "CK"=>__('Cook Islands', 'jdm-find-your-nearest'),

            "CL"=>__('Chile', 'jdm-find-your-nearest'),

            "CM"=>__('Cameroon', 'jdm-find-your-nearest'),

            "CN"=>__('China', 'jdm-find-your-nearest'),

            "CO"=>__('Colombia', 'jdm-find-your-nearest'),

            "CR"=>__('Costa Rica', 'jdm-find-your-nearest'),

            "CS"=>__('Serbia and Montenegro', 'jdm-find-your-nearest'),

            "CU"=>__('Cuba', 'jdm-find-your-nearest'),

            "CV"=>__('Cape Verde', 'jdm-find-your-nearest'),

            "CX"=>__('Christmas Island', 'jdm-find-your-nearest'),

            "CY"=>__('Cyprus', 'jdm-find-your-nearest'),

            "CZ"=>__('Czech Republic', 'jdm-find-your-nearest'),

            "DE"=>__('Germany', 'jdm-find-your-nearest'),

            "DJ"=>__('Djibouti', 'jdm-find-your-nearest'),

            "DK"=>__('Denmark', 'jdm-find-your-nearest'),

            "DM"=>__('Dominica', 'jdm-find-your-nearest'),

            "DO"=>__('Dominican Republic', 'jdm-find-your-nearest'),

            "DZ"=>__('Algeria', 'jdm-find-your-nearest'),

            "EC"=>__('Ecuador', 'jdm-find-your-nearest'),

            "EE"=>__('Estonia', 'jdm-find-your-nearest'),

            "EG"=>__('Egypt', 'jdm-find-your-nearest'),

            "EH"=>__('Western Sahara', 'jdm-find-your-nearest'),

            "ER"=>__('Eritrea', 'jdm-find-your-nearest'),

            "ES"=>__('Spain', 'jdm-find-your-nearest'),

            "ET"=>__('Ethiopia', 'jdm-find-your-nearest'),

            "FI"=>__('Finland', 'jdm-find-your-nearest'),

            "FJ"=>__('Fiji', 'jdm-find-your-nearest'),

            "FK"=>__('Falkland Islands (Malvinas)', 'jdm-find-your-nearest'),

            "FM"=>__('Federated States of Micronesia', 'jdm-find-your-nearest'),

            "FO"=>__('Faroe Islands', 'jdm-find-your-nearest'),

            "FR"=>__('France', 'jdm-find-your-nearest'),

            "FX"=>__('France, Metropolitan', 'jdm-find-your-nearest'),

            "GA"=>__('Gabon', 'jdm-find-your-nearest'),

            "GB"=>__('Great Britain (UK)', 'jdm-find-your-nearest'),

            "GD"=>__('Grenada', 'jdm-find-your-nearest'),

            "GE"=>__('Georgia', 'jdm-find-your-nearest'),

            "GF"=>__('French Guiana', 'jdm-find-your-nearest'),

            "GH"=>__('Ghana', 'jdm-find-your-nearest'),

            "GI"=>__('Gibraltar', 'jdm-find-your-nearest'),

            "GL"=>__('Greenland', 'jdm-find-your-nearest'),

            "GM"=>__('Gambia', 'jdm-find-your-nearest'),

            "GN"=>__('Guinea', 'jdm-find-your-nearest'),

            "GP"=>__('Guadeloupe', 'jdm-find-your-nearest'),

            "GQ"=>__('Equatorial Guinea', 'jdm-find-your-nearest'),

            "GR"=>__('Greece', 'jdm-find-your-nearest'),

            "GS"=>__('S. Georgia and S. Sandwich Islands', 'jdm-find-your-nearest'),

            "GT"=>__('Guatemala', 'jdm-find-your-nearest'),

            "GU"=>__('Guam', 'jdm-find-your-nearest'),

            "GW"=>__('Guinea-Bissau', 'jdm-find-your-nearest'),

            "GY"=>__('Guyana', 'jdm-find-your-nearest'),

            "HK"=>__('Hong Kong', 'jdm-find-your-nearest'),

            "HM"=>__('Heard Island and McDonald Islands', 'jdm-find-your-nearest'),

            "HN"=>__('Honduras', 'jdm-find-your-nearest'),

            "HR"=>__('Croatia (Hrvatska)', 'jdm-find-your-nearest'),

            "HT"=>__('Haiti', 'jdm-find-your-nearest'),

            "HU"=>__('Hungary', 'jdm-find-your-nearest'),

            "ID"=>__('Indonesia', 'jdm-find-your-nearest'),

            "IE"=>__('Ireland', 'jdm-find-your-nearest'),

            "IL"=>__('Israel', 'jdm-find-your-nearest'),

            "IN"=>__('India', 'jdm-find-your-nearest'),

            "IO"=>__('British Indian Ocean Territory', 'jdm-find-your-nearest'),

            "IQ"=>__('Iraq', 'jdm-find-your-nearest'),

            "IR"=>__('Iran', 'jdm-find-your-nearest'),

            "IS"=>__('Iceland', 'jdm-find-your-nearest'),

            "IT"=>__('Italy', 'jdm-find-your-nearest'),

            "JM"=>__('Jamaica', 'jdm-find-your-nearest'),

            "JO"=>__('Jordan', 'jdm-find-your-nearest'),

            "JP"=>__('Japan', 'jdm-find-your-nearest'),

            "KE"=>__('Kenya', 'jdm-find-your-nearest'),

            "KG"=>__('Kyrgyzstan', 'jdm-find-your-nearest'),

            "KH"=>__('Cambodia', 'jdm-find-your-nearest'),

            "KI"=>__('Kiribati', 'jdm-find-your-nearest'),

            "KM"=>__('Comoros', 'jdm-find-your-nearest'),

            "KN"=>__('Saint Kitts and Nevis', 'jdm-find-your-nearest'),

            "KP"=>__('Korea (North)', 'jdm-find-your-nearest'),

            "KR"=>__('Korea (South)', 'jdm-find-your-nearest'),

            "KW"=>__('Kuwait', 'jdm-find-your-nearest'),

            "KY"=>__('Cayman Islands', 'jdm-find-your-nearest'),

            "KZ"=>__('Kazakhstan', 'jdm-find-your-nearest'),

            "LA"=>__('Laos', 'jdm-find-your-nearest'),

            "LB"=>__('Lebanon', 'jdm-find-your-nearest'),

            "LC"=>__('Saint Lucia', 'jdm-find-your-nearest'),

            "LI"=>__('Liechtenstein', 'jdm-find-your-nearest'),

            "LK"=>__('Sri Lanka', 'jdm-find-your-nearest'),

            "LR"=>__('Liberia', 'jdm-find-your-nearest'),

            "LS"=>__('Lesotho', 'jdm-find-your-nearest'),

            "LT"=>__('Lithuania', 'jdm-find-your-nearest'),

            "LU"=>__('Luxembourg', 'jdm-find-your-nearest'),

            "LV"=>__('Latvia', 'jdm-find-your-nearest'),

            "LY"=>__('Libya', 'jdm-find-your-nearest'),

            "MA"=>__('Morocco', 'jdm-find-your-nearest'),

            "MC"=>__('Monaco', 'jdm-find-your-nearest'),

            "MD"=>__('Moldova', 'jdm-find-your-nearest'),

            "MG"=>__('Madagascar', 'jdm-find-your-nearest'),

            "MH"=>__('Marshall Islands', 'jdm-find-your-nearest'),

            "MK"=>__('Macedonia', 'jdm-find-your-nearest'),

            "ML"=>__('Mali', 'jdm-find-your-nearest'),

            "MM"=>__('Myanmar', 'jdm-find-your-nearest'),

            "MN"=>__('Mongolia', 'jdm-find-your-nearest'),

            "MO"=>__('Macao', 'jdm-find-your-nearest'),

            "MP"=>__('Northern Mariana Islands', 'jdm-find-your-nearest'),

            "MQ"=>__('Martinique', 'jdm-find-your-nearest'),

            "MR"=>__('Mauritania', 'jdm-find-your-nearest'),

            "MS"=>__('Montserrat', 'jdm-find-your-nearest'),

            "MT"=>__('Malta', 'jdm-find-your-nearest'),

            "MU"=>__('Mauritius', 'jdm-find-your-nearest'),

            "MV"=>__('Maldives', 'jdm-find-your-nearest'),

            "MW"=>__('Malawi', 'jdm-find-your-nearest'),

            "MX"=>__('Mexico', 'jdm-find-your-nearest'),

            "MY"=>__('Malaysia', 'jdm-find-your-nearest'),

            "MZ"=>__('Mozambique', 'jdm-find-your-nearest'),

            "NA"=>__('Namibia', 'jdm-find-your-nearest'),

            "NC"=>__('New Caledonia', 'jdm-find-your-nearest'),

            "NE"=>__('Niger', 'jdm-find-your-nearest'),

            "NF"=>__('Norfolk Island', 'jdm-find-your-nearest'),

            "NG"=>__('Nigeria', 'jdm-find-your-nearest'),

            "NI"=>__('Nicaragua', 'jdm-find-your-nearest'),

            "NL"=>__('Netherlands', 'jdm-find-your-nearest'),

            "NO"=>__('Norway', 'jdm-find-your-nearest'),

            "NP"=>__('Nepal', 'jdm-find-your-nearest'),

            "NR"=>__('Nauru', 'jdm-find-your-nearest'),

            "NU"=>__('Niue', 'jdm-find-your-nearest'),

            "NZ"=>__('New Zealand (Aotearoa)', 'jdm-find-your-nearest'),

            "OM"=>__('Oman', 'jdm-find-your-nearest'),

            "PA"=>__('Panama', 'jdm-find-your-nearest'),

            "PE"=>__('Peru', 'jdm-find-your-nearest'),

            "PF"=>__('French Polynesia', 'jdm-find-your-nearest'),

            "PG"=>__('Papua New Guinea', 'jdm-find-your-nearest'),

            "PH"=>__('Philippines', 'jdm-find-your-nearest'),

            "PK"=>__('Pakistan', 'jdm-find-your-nearest'),

            "PL"=>__('Poland', 'jdm-find-your-nearest'),

            "PM"=>__('Saint Pierre and Miquelon', 'jdm-find-your-nearest'),

            "PN"=>__('Pitcairn', 'jdm-find-your-nearest'),

            "PR"=>__('Puerto Rico', 'jdm-find-your-nearest'),

            "PS"=>__('Palestinian Territory', 'jdm-find-your-nearest'),

            "PT"=>__('Portugal', 'jdm-find-your-nearest'),

            "PW"=>__('Palau', 'jdm-find-your-nearest'),

            "PY"=>__('Paraguay', 'jdm-find-your-nearest'),

            "QA"=>__('Qatar', 'jdm-find-your-nearest'),

            "RE"=>__('Reunion', 'jdm-find-your-nearest'),

            "RO"=>__('Romania', 'jdm-find-your-nearest'),

            "RU"=>__('Russian Federation', 'jdm-find-your-nearest'),

            "RW"=>__('Rwanda', 'jdm-find-your-nearest'),

            "SA"=>__('Saudi Arabia', 'jdm-find-your-nearest'),

            "SB"=>__('Solomon Islands', 'jdm-find-your-nearest'),

            "SC"=>__('Seychelles', 'jdm-find-your-nearest'),

            "SD"=>__('Sudan', 'jdm-find-your-nearest'),

            "SE"=>__('Sweden', 'jdm-find-your-nearest'),

            "SG"=>__('Singapore', 'jdm-find-your-nearest'),

            "SH"=>__('Saint Helena', 'jdm-find-your-nearest'),

            "SI"=>__('Slovenia', 'jdm-find-your-nearest'),

            "SJ"=>__('Svalbard and Jan Mayen', 'jdm-find-your-nearest'),

            "SK"=>__('Slovakia', 'jdm-find-your-nearest'),

            "SL"=>__('Sierra Leone', 'jdm-find-your-nearest'),

            "SM"=>__('San Marino', 'jdm-find-your-nearest'),

            "SN"=>__('Senegal', 'jdm-find-your-nearest'),

            "SO"=>__('Somalia', 'jdm-find-your-nearest'),

            "SR"=>__('Suriname', 'jdm-find-your-nearest'),

            "ST"=>__('Sao Tome and Principe', 'jdm-find-your-nearest'),

            "SU"=>__('USSR (former)', 'jdm-find-your-nearest'),

            "SV"=>__('El Salvador', 'jdm-find-your-nearest'),

            "SY"=>__('Syria', 'jdm-find-your-nearest'),

            "SZ"=>__('Swaziland', 'jdm-find-your-nearest'),

            "TC"=>__('Turks and Caicos Islands', 'jdm-find-your-nearest'),

            "TD"=>__('Chad', 'jdm-find-your-nearest'),

            "TF"=>__('French Southern Territories', 'jdm-find-your-nearest'),

            "TG"=>__('Togo', 'jdm-find-your-nearest'),

            "TH"=>__('Thailand', 'jdm-find-your-nearest'),

            "TJ"=>__('Tajikistan', 'jdm-find-your-nearest'),

            "TK"=>__('Tokelau', 'jdm-find-your-nearest'),

            "TL"=>__('Timor-Leste', 'jdm-find-your-nearest'),

            "TM"=>__('Turkmenistan', 'jdm-find-your-nearest'),

            "TN"=>__('Tunisia', 'jdm-find-your-nearest'),

            "TO"=>__('Tonga', 'jdm-find-your-nearest'),

            "TP"=>__('East Timor', 'jdm-find-your-nearest'),

            "TR"=>__('Turkey', 'jdm-find-your-nearest'),

            "TT"=>__('Trinidad and Tobago', 'jdm-find-your-nearest'),

            "TV"=>__('Tuvalu', 'jdm-find-your-nearest'),

            "TW"=>__('Taiwan', 'jdm-find-your-nearest'),

            "TZ"=>__('Tanzania', 'jdm-find-your-nearest'),

            "UA"=>__('Ukraine', 'jdm-find-your-nearest'),

            "UG"=>__('Uganda', 'jdm-find-your-nearest'),

            "UK"=>__('United Kingdom', 'jdm-find-your-nearest'),

            "UM"=>__('United States Minor Outlying Islands', 'jdm-find-your-nearest'),

            "US"=>__('United States', 'jdm-find-your-nearest'),

            "UY"=>__('Uruguay', 'jdm-find-your-nearest'),

            "UZ"=>__('Uzbekistan', 'jdm-find-your-nearest'),

            "VA"=>__('Vatican City State (Holy See)', 'jdm-find-your-nearest'),

            "VC"=>__('Saint Vincent and the Grenadines', 'jdm-find-your-nearest'),

            "VE"=>__('Venezuela', 'jdm-find-your-nearest'),

            "VG"=>__('Virgin Islands (British)', 'jdm-find-your-nearest'),

            "VI"=>__('Virgin Islands (U.S.)', 'jdm-find-your-nearest'),

            "VN"=>__('Viet Nam', 'jdm-find-your-nearest'),

            "VU"=>__('Vanuatu', 'jdm-find-your-nearest'),

            "WF"=>__('Wallis and Futuna', 'jdm-find-your-nearest'),

            "WS"=>__('Samoa', 'jdm-find-your-nearest'),

            "YE"=>__('Yemen', 'jdm-find-your-nearest'),

            "YT"=>__('Mayotte', 'jdm-find-your-nearest'),

            "YU"=>__('Yugoslavia (former)', 'jdm-find-your-nearest'),

            "ZA"=>__('South Africa', 'jdm-find-your-nearest'),

            "ZM"=>__('Zambia', 'jdm-find-your-nearest'),

            "ZR"=>__('Zaire (former)', 'jdm-find-your-nearest'),

            "ZW"=>__('Zimbabwe', 'jdm-find-your-nearest'),

            "BIZ"=>__('Business', 'jdm-find-your-nearest'),

            "COM"=>__('Commercial', 'jdm-find-your-nearest'),

            "EDU"=>__('US Educational', 'jdm-find-your-nearest'),

            "GOV"=>__('US Government', 'jdm-find-your-nearest'),

            "INT"=>__('International', 'jdm-find-your-nearest'),

            "MIL"=>__('US Military', 'jdm-find-your-nearest'),

            "NET"=>__('Network', 'jdm-find-your-nearest'),

            "ORG"=>__('Nonprofit Organization', 'jdm-find-your-nearest'),

            "PRO"=>__('Professional Services', 'jdm-find-your-nearest'),

            "AERO"=>__('Aeronautic', 'jdm-find-your-nearest'),

            "ARPA"=>__('Arpanet Technical Infrastructure', 'jdm-find-your-nearest'),

            "COOP"=>__('Cooperative', 'jdm-find-your-nearest'),

            "INFO"=>__('Info Domain', 'jdm-find-your-nearest'),

            "NAME"=>__('Personal Name', 'jdm-find-your-nearest'),

            "NATO"=>__('North Atlantic Treaty Organization', 'jdm-find-your-nearest')

            );

            asort($countries);

            $this->countryCodes = $countries;

    }

}

