
window.projectVersion = '1.1.5';

(function(root) {

    var bhIndex = null;
    var rootPath = '';
    var treeHtml = '        <ul>                <li data-name="namespace:Edujugon" class="opened">                    <div style="padding-left:0px" class="hd">                        <span class="glyphicon glyphicon-play"></span><a href="Edujugon.html">Edujugon</a>                    </div>                    <div class="bd">                                <ul>                <li data-name="namespace:Edujugon_GoogleAds" class="opened">                    <div style="padding-left:18px" class="hd">                        <span class="glyphicon glyphicon-play"></span><a href="Edujugon/GoogleAds.html">GoogleAds</a>                    </div>                    <div class="bd">                                <ul>                <li data-name="namespace:Edujugon_GoogleAds_Auth" >                    <div style="padding-left:36px" class="hd">                        <span class="glyphicon glyphicon-play"></span><a href="Edujugon/GoogleAds/Auth.html">Auth</a>                    </div>                    <div class="bd">                                <ul>                <li data-name="class:Edujugon_GoogleAds_Auth_OAuth2" >                    <div style="padding-left:62px" class="hd leaf">                        <a href="Edujugon/GoogleAds/Auth/OAuth2.html">OAuth2</a>                    </div>                </li>                            <li data-name="class:Edujugon_GoogleAds_Auth_RefreshToken" >                    <div style="padding-left:62px" class="hd leaf">                        <a href="Edujugon/GoogleAds/Auth/RefreshToken.html">RefreshToken</a>                    </div>                </li>                </ul></div>                </li>                            <li data-name="namespace:Edujugon_GoogleAds_Console" >                    <div style="padding-left:36px" class="hd">                        <span class="glyphicon glyphicon-play"></span><a href="Edujugon/GoogleAds/Console.html">Console</a>                    </div>                    <div class="bd">                                <ul>                <li data-name="class:Edujugon_GoogleAds_Console_RefreshTokenCommand" >                    <div style="padding-left:62px" class="hd leaf">                        <a href="Edujugon/GoogleAds/Console/RefreshTokenCommand.html">RefreshTokenCommand</a>                    </div>                </li>                </ul></div>                </li>                            <li data-name="namespace:Edujugon_GoogleAds_Facades" >                    <div style="padding-left:36px" class="hd">                        <span class="glyphicon glyphicon-play"></span><a href="Edujugon/GoogleAds/Facades.html">Facades</a>                    </div>                    <div class="bd">                                <ul>                <li data-name="class:Edujugon_GoogleAds_Facades_GoogleAds" >                    <div style="padding-left:62px" class="hd leaf">                        <a href="Edujugon/GoogleAds/Facades/GoogleAds.html">GoogleAds</a>                    </div>                </li>                </ul></div>                </li>                            <li data-name="namespace:Edujugon_GoogleAds_Providers" >                    <div style="padding-left:36px" class="hd">                        <span class="glyphicon glyphicon-play"></span><a href="Edujugon/GoogleAds/Providers.html">Providers</a>                    </div>                    <div class="bd">                                <ul>                <li data-name="class:Edujugon_GoogleAds_Providers_GoogleAdsServiceProvider" >                    <div style="padding-left:62px" class="hd leaf">                        <a href="Edujugon/GoogleAds/Providers/GoogleAdsServiceProvider.html">GoogleAdsServiceProvider</a>                    </div>                </li>                </ul></div>                </li>                            <li data-name="namespace:Edujugon_GoogleAds_Reports" >                    <div style="padding-left:36px" class="hd">                        <span class="glyphicon glyphicon-play"></span><a href="Edujugon/GoogleAds/Reports.html">Reports</a>                    </div>                    <div class="bd">                                <ul>                <li data-name="class:Edujugon_GoogleAds_Reports_Fields" >                    <div style="padding-left:62px" class="hd leaf">                        <a href="Edujugon/GoogleAds/Reports/Fields.html">Fields</a>                    </div>                </li>                            <li data-name="class:Edujugon_GoogleAds_Reports_Format" >                    <div style="padding-left:62px" class="hd leaf">                        <a href="Edujugon/GoogleAds/Reports/Format.html">Format</a>                    </div>                </li>                            <li data-name="class:Edujugon_GoogleAds_Reports_MyReport" >                    <div style="padding-left:62px" class="hd leaf">                        <a href="Edujugon/GoogleAds/Reports/MyReport.html">MyReport</a>                    </div>                </li>                            <li data-name="class:Edujugon_GoogleAds_Reports_Report" >                    <div style="padding-left:62px" class="hd leaf">                        <a href="Edujugon/GoogleAds/Reports/Report.html">Report</a>                    </div>                </li>                            <li data-name="class:Edujugon_GoogleAds_Reports_ReportTypes" >                    <div style="padding-left:62px" class="hd leaf">                        <a href="Edujugon/GoogleAds/Reports/ReportTypes.html">ReportTypes</a>                    </div>                </li>                </ul></div>                </li>                            <li data-name="namespace:Edujugon_GoogleAds_Services" >                    <div style="padding-left:36px" class="hd">                        <span class="glyphicon glyphicon-play"></span><a href="Edujugon/GoogleAds/Services.html">Services</a>                    </div>                    <div class="bd">                                <ul>                <li data-name="class:Edujugon_GoogleAds_Services_AdGroup" >                    <div style="padding-left:62px" class="hd leaf">                        <a href="Edujugon/GoogleAds/Services/AdGroup.html">AdGroup</a>                    </div>                </li>                            <li data-name="class:Edujugon_GoogleAds_Services_AdGroupAd" >                    <div style="padding-left:62px" class="hd leaf">                        <a href="Edujugon/GoogleAds/Services/AdGroupAd.html">AdGroupAd</a>                    </div>                </li>                            <li data-name="class:Edujugon_GoogleAds_Services_Campaign" >                    <div style="padding-left:62px" class="hd leaf">                        <a href="Edujugon/GoogleAds/Services/Campaign.html">Campaign</a>                    </div>                </li>                            <li data-name="class:Edujugon_GoogleAds_Services_Service" >                    <div style="padding-left:62px" class="hd leaf">                        <a href="Edujugon/GoogleAds/Services/Service.html">Service</a>                    </div>                </li>                            <li data-name="class:Edujugon_GoogleAds_Services_ServiceCollection" >                    <div style="padding-left:62px" class="hd leaf">                        <a href="Edujugon/GoogleAds/Services/ServiceCollection.html">ServiceCollection</a>                    </div>                </li>                </ul></div>                </li>                            <li data-name="namespace:Edujugon_GoogleAds_Session" >                    <div style="padding-left:36px" class="hd">                        <span class="glyphicon glyphicon-play"></span><a href="Edujugon/GoogleAds/Session.html">Session</a>                    </div>                    <div class="bd">                                <ul>                <li data-name="class:Edujugon_GoogleAds_Session_AdwordsSession" >                    <div style="padding-left:62px" class="hd leaf">                        <a href="Edujugon/GoogleAds/Session/AdwordsSession.html">AdwordsSession</a>                    </div>                </li>                </ul></div>                </li>                            <li data-name="class:Edujugon_GoogleAds_GoogleAds" >                    <div style="padding-left:44px" class="hd leaf">                        <a href="Edujugon/GoogleAds/GoogleAds.html">GoogleAds</a>                    </div>                </li>                </ul></div>                </li>                </ul></div>                </li>                </ul>';

    var searchTypeClasses = {
        'Namespace': 'label-default',
        'Class': 'label-info',
        'Interface': 'label-primary',
        'Trait': 'label-success',
        'Method': 'label-danger',
        '_': 'label-warning'
    };

    var searchIndex = [
                    
            {"type": "Namespace", "link": "Edujugon.html", "name": "Edujugon", "doc": "Namespace Edujugon"},{"type": "Namespace", "link": "Edujugon/GoogleAds.html", "name": "Edujugon\\GoogleAds", "doc": "Namespace Edujugon\\GoogleAds"},{"type": "Namespace", "link": "Edujugon/GoogleAds/Auth.html", "name": "Edujugon\\GoogleAds\\Auth", "doc": "Namespace Edujugon\\GoogleAds\\Auth"},{"type": "Namespace", "link": "Edujugon/GoogleAds/Console.html", "name": "Edujugon\\GoogleAds\\Console", "doc": "Namespace Edujugon\\GoogleAds\\Console"},{"type": "Namespace", "link": "Edujugon/GoogleAds/Facades.html", "name": "Edujugon\\GoogleAds\\Facades", "doc": "Namespace Edujugon\\GoogleAds\\Facades"},{"type": "Namespace", "link": "Edujugon/GoogleAds/Providers.html", "name": "Edujugon\\GoogleAds\\Providers", "doc": "Namespace Edujugon\\GoogleAds\\Providers"},{"type": "Namespace", "link": "Edujugon/GoogleAds/Reports.html", "name": "Edujugon\\GoogleAds\\Reports", "doc": "Namespace Edujugon\\GoogleAds\\Reports"},{"type": "Namespace", "link": "Edujugon/GoogleAds/Services.html", "name": "Edujugon\\GoogleAds\\Services", "doc": "Namespace Edujugon\\GoogleAds\\Services"},{"type": "Namespace", "link": "Edujugon/GoogleAds/Session.html", "name": "Edujugon\\GoogleAds\\Session", "doc": "Namespace Edujugon\\GoogleAds\\Session"},
            
            {"type": "Class", "fromName": "Edujugon\\GoogleAds\\Auth", "fromLink": "Edujugon/GoogleAds/Auth.html", "link": "Edujugon/GoogleAds/Auth/OAuth2.html", "name": "Edujugon\\GoogleAds\\Auth\\OAuth2", "doc": "&quot;&quot;"},
                                                        {"type": "Method", "fromName": "Edujugon\\GoogleAds\\Auth\\OAuth2", "fromLink": "Edujugon/GoogleAds/Auth/OAuth2.html", "link": "Edujugon/GoogleAds/Auth/OAuth2.html#method___construct", "name": "Edujugon\\GoogleAds\\Auth\\OAuth2::__construct", "doc": "&quot;OAuth2 constructor.&quot;"},
                    {"type": "Method", "fromName": "Edujugon\\GoogleAds\\Auth\\OAuth2", "fromLink": "Edujugon/GoogleAds/Auth/OAuth2.html", "link": "Edujugon/GoogleAds/Auth/OAuth2.html#method_userCredentials", "name": "Edujugon\\GoogleAds\\Auth\\OAuth2::userCredentials", "doc": "&quot;UserRefreshCredentials\nGenerate a refreshable OAuth2 credential for authentication.&quot;"},
                    {"type": "Method", "fromName": "Edujugon\\GoogleAds\\Auth\\OAuth2", "fromLink": "Edujugon/GoogleAds/Auth/OAuth2.html", "link": "Edujugon/GoogleAds/Auth/OAuth2.html#method_build", "name": "Edujugon\\GoogleAds\\Auth\\OAuth2::build", "doc": "&quot;&quot;"},
            
            {"type": "Class", "fromName": "Edujugon\\GoogleAds\\Auth", "fromLink": "Edujugon/GoogleAds/Auth.html", "link": "Edujugon/GoogleAds/Auth/RefreshToken.html", "name": "Edujugon\\GoogleAds\\Auth\\RefreshToken", "doc": "&quot;Command line example that prompts you for the required OAuth2 credentials\nto generate an offline refresh token for installed application flows.&quot;"},
                                                        {"type": "Method", "fromName": "Edujugon\\GoogleAds\\Auth\\RefreshToken", "fromLink": "Edujugon/GoogleAds/Auth/RefreshToken.html", "link": "Edujugon/GoogleAds/Auth/RefreshToken.html#method_byConsole", "name": "Edujugon\\GoogleAds\\Auth\\RefreshToken::byConsole", "doc": "&quot;&quot;"},
            
            {"type": "Class", "fromName": "Edujugon\\GoogleAds\\Console", "fromLink": "Edujugon/GoogleAds/Console.html", "link": "Edujugon/GoogleAds/Console/RefreshTokenCommand.html", "name": "Edujugon\\GoogleAds\\Console\\RefreshTokenCommand", "doc": "&quot;&quot;"},
                                                        {"type": "Method", "fromName": "Edujugon\\GoogleAds\\Console\\RefreshTokenCommand", "fromLink": "Edujugon/GoogleAds/Console/RefreshTokenCommand.html", "link": "Edujugon/GoogleAds/Console/RefreshTokenCommand.html#method_handle", "name": "Edujugon\\GoogleAds\\Console\\RefreshTokenCommand::handle", "doc": "&quot;Generate refresh token&quot;"},
            
            {"type": "Class", "fromName": "Edujugon\\GoogleAds\\Facades", "fromLink": "Edujugon/GoogleAds/Facades.html", "link": "Edujugon/GoogleAds/Facades/GoogleAds.html", "name": "Edujugon\\GoogleAds\\Facades\\GoogleAds", "doc": "&quot;&quot;"},
                                                        {"type": "Method", "fromName": "Edujugon\\GoogleAds\\Facades\\GoogleAds", "fromLink": "Edujugon/GoogleAds/Facades/GoogleAds.html", "link": "Edujugon/GoogleAds/Facades/GoogleAds.html#method_getFacadeAccessor", "name": "Edujugon\\GoogleAds\\Facades\\GoogleAds::getFacadeAccessor", "doc": "&quot;Get the registered name of the component.&quot;"},
            
            {"type": "Class", "fromName": "Edujugon\\GoogleAds", "fromLink": "Edujugon/GoogleAds.html", "link": "Edujugon/GoogleAds/GoogleAds.html", "name": "Edujugon\\GoogleAds\\GoogleAds", "doc": "&quot;&quot;"},
                                                        {"type": "Method", "fromName": "Edujugon\\GoogleAds\\GoogleAds", "fromLink": "Edujugon/GoogleAds/GoogleAds.html", "link": "Edujugon/GoogleAds/GoogleAds.html#method___construct", "name": "Edujugon\\GoogleAds\\GoogleAds::__construct", "doc": "&quot;GoogleAds constructor.&quot;"},
                    {"type": "Method", "fromName": "Edujugon\\GoogleAds\\GoogleAds", "fromLink": "Edujugon/GoogleAds/GoogleAds.html", "link": "Edujugon/GoogleAds/GoogleAds.html#method_oAuth", "name": "Edujugon\\GoogleAds\\GoogleAds::oAuth", "doc": "&quot;Generate User Credentials.&quot;"},
                    {"type": "Method", "fromName": "Edujugon\\GoogleAds\\GoogleAds", "fromLink": "Edujugon/GoogleAds/GoogleAds.html", "link": "Edujugon/GoogleAds/GoogleAds.html#method_session", "name": "Edujugon\\GoogleAds\\GoogleAds::session", "doc": "&quot;&quot;"},
                    {"type": "Method", "fromName": "Edujugon\\GoogleAds\\GoogleAds", "fromLink": "Edujugon/GoogleAds/GoogleAds.html", "link": "Edujugon/GoogleAds/GoogleAds.html#method_fields", "name": "Edujugon\\GoogleAds\\GoogleAds::fields", "doc": "&quot;Get an instance of Fields&quot;"},
                    {"type": "Method", "fromName": "Edujugon\\GoogleAds\\GoogleAds", "fromLink": "Edujugon/GoogleAds/GoogleAds.html", "link": "Edujugon/GoogleAds/GoogleAds.html#method_service", "name": "Edujugon\\GoogleAds\\GoogleAds::service", "doc": "&quot;Set the google adwords service.&quot;"},
                    {"type": "Method", "fromName": "Edujugon\\GoogleAds\\GoogleAds", "fromLink": "Edujugon/GoogleAds/GoogleAds.html", "link": "Edujugon/GoogleAds/GoogleAds.html#method_adGroupService", "name": "Edujugon\\GoogleAds\\GoogleAds::adGroupService", "doc": "&quot;AdGroupService&quot;"},
                    {"type": "Method", "fromName": "Edujugon\\GoogleAds\\GoogleAds", "fromLink": "Edujugon/GoogleAds/GoogleAds.html", "link": "Edujugon/GoogleAds/GoogleAds.html#method_adGroupAdService", "name": "Edujugon\\GoogleAds\\GoogleAds::adGroupAdService", "doc": "&quot;AdGroupAdService&quot;"},
                    {"type": "Method", "fromName": "Edujugon\\GoogleAds\\GoogleAds", "fromLink": "Edujugon/GoogleAds/GoogleAds.html", "link": "Edujugon/GoogleAds/GoogleAds.html#method_campaignService", "name": "Edujugon\\GoogleAds\\GoogleAds::campaignService", "doc": "&quot;CampaignService&quot;"},
                    {"type": "Method", "fromName": "Edujugon\\GoogleAds\\GoogleAds", "fromLink": "Edujugon/GoogleAds/GoogleAds.html", "link": "Edujugon/GoogleAds/GoogleAds.html#method_report", "name": "Edujugon\\GoogleAds\\GoogleAds::report", "doc": "&quot;Get an instance of Report&quot;"},
                    {"type": "Method", "fromName": "Edujugon\\GoogleAds\\GoogleAds", "fromLink": "Edujugon/GoogleAds/GoogleAds.html", "link": "Edujugon/GoogleAds/GoogleAds.html#method_showReportTypes", "name": "Edujugon\\GoogleAds\\GoogleAds::showReportTypes", "doc": "&quot;Show a list of report types&quot;"},
                    {"type": "Method", "fromName": "Edujugon\\GoogleAds\\GoogleAds", "fromLink": "Edujugon/GoogleAds/GoogleAds.html", "link": "Edujugon/GoogleAds/GoogleAds.html#method_showReportFormats", "name": "Edujugon\\GoogleAds\\GoogleAds::showReportFormats", "doc": "&quot;Show a list of report formats.&quot;"},
                    {"type": "Method", "fromName": "Edujugon\\GoogleAds\\GoogleAds", "fromLink": "Edujugon/GoogleAds/GoogleAds.html", "link": "Edujugon/GoogleAds/GoogleAds.html#method_getService", "name": "Edujugon\\GoogleAds\\GoogleAds::getService", "doc": "&quot;Get the service.&quot;"},
                    {"type": "Method", "fromName": "Edujugon\\GoogleAds\\GoogleAds", "fromLink": "Edujugon/GoogleAds/GoogleAds.html", "link": "Edujugon/GoogleAds/GoogleAds.html#method_getSession", "name": "Edujugon\\GoogleAds\\GoogleAds::getSession", "doc": "&quot;Get the session.&quot;"},
                    {"type": "Method", "fromName": "Edujugon\\GoogleAds\\GoogleAds", "fromLink": "Edujugon/GoogleAds/GoogleAds.html", "link": "Edujugon/GoogleAds/GoogleAds.html#method_getUserCredentials", "name": "Edujugon\\GoogleAds\\GoogleAds::getUserCredentials", "doc": "&quot;Get UserRefreshCredentials&quot;"},
                    {"type": "Method", "fromName": "Edujugon\\GoogleAds\\GoogleAds", "fromLink": "Edujugon/GoogleAds/GoogleAds.html", "link": "Edujugon/GoogleAds/GoogleAds.html#method_env", "name": "Edujugon\\GoogleAds\\GoogleAds::env", "doc": "&quot;Set the environment to work with.&quot;"},
                    {"type": "Method", "fromName": "Edujugon\\GoogleAds\\GoogleAds", "fromLink": "Edujugon/GoogleAds/GoogleAds.html", "link": "Edujugon/GoogleAds/GoogleAds.html#method_getEnv", "name": "Edujugon\\GoogleAds\\GoogleAds::getEnv", "doc": "&quot;Get the environment.&quot;"},
            
            {"type": "Class", "fromName": "Edujugon\\GoogleAds\\Providers", "fromLink": "Edujugon/GoogleAds/Providers.html", "link": "Edujugon/GoogleAds/Providers/GoogleAdsServiceProvider.html", "name": "Edujugon\\GoogleAds\\Providers\\GoogleAdsServiceProvider", "doc": "&quot;&quot;"},
                                                        {"type": "Method", "fromName": "Edujugon\\GoogleAds\\Providers\\GoogleAdsServiceProvider", "fromLink": "Edujugon/GoogleAds/Providers/GoogleAdsServiceProvider.html", "link": "Edujugon/GoogleAds/Providers/GoogleAdsServiceProvider.html#method_boot", "name": "Edujugon\\GoogleAds\\Providers\\GoogleAdsServiceProvider::boot", "doc": "&quot;Bootstrap the application services.&quot;"},
                    {"type": "Method", "fromName": "Edujugon\\GoogleAds\\Providers\\GoogleAdsServiceProvider", "fromLink": "Edujugon/GoogleAds/Providers/GoogleAdsServiceProvider.html", "link": "Edujugon/GoogleAds/Providers/GoogleAdsServiceProvider.html#method_register", "name": "Edujugon\\GoogleAds\\Providers\\GoogleAdsServiceProvider::register", "doc": "&quot;Register the application services.&quot;"},
            
            {"type": "Class", "fromName": "Edujugon\\GoogleAds\\Reports", "fromLink": "Edujugon/GoogleAds/Reports.html", "link": "Edujugon/GoogleAds/Reports/Fields.html", "name": "Edujugon\\GoogleAds\\Reports\\Fields", "doc": "&quot;&quot;"},
                                                        {"type": "Method", "fromName": "Edujugon\\GoogleAds\\Reports\\Fields", "fromLink": "Edujugon/GoogleAds/Reports/Fields.html", "link": "Edujugon/GoogleAds/Reports/Fields.html#method___construct", "name": "Edujugon\\GoogleAds\\Reports\\Fields::__construct", "doc": "&quot;Fields constructor.&quot;"},
                    {"type": "Method", "fromName": "Edujugon\\GoogleAds\\Reports\\Fields", "fromLink": "Edujugon/GoogleAds/Reports/Fields.html", "link": "Edujugon/GoogleAds/Reports/Fields.html#method_of", "name": "Edujugon\\GoogleAds\\Reports\\Fields::of", "doc": "&quot;Load the fields of the passed reportType&quot;"},
                    {"type": "Method", "fromName": "Edujugon\\GoogleAds\\Reports\\Fields", "fromLink": "Edujugon/GoogleAds/Reports/Fields.html", "link": "Edujugon/GoogleAds/Reports/Fields.html#method_asObj", "name": "Edujugon\\GoogleAds\\Reports\\Fields::asObj", "doc": "&quot;Get fields as object&quot;"},
                    {"type": "Method", "fromName": "Edujugon\\GoogleAds\\Reports\\Fields", "fromLink": "Edujugon/GoogleAds/Reports/Fields.html", "link": "Edujugon/GoogleAds/Reports/Fields.html#method_asList", "name": "Edujugon\\GoogleAds\\Reports\\Fields::asList", "doc": "&quot;Get array of fields names.&quot;"},
                    {"type": "Method", "fromName": "Edujugon\\GoogleAds\\Reports\\Fields", "fromLink": "Edujugon/GoogleAds/Reports/Fields.html", "link": "Edujugon/GoogleAds/Reports/Fields.html#method_asQuerySelector", "name": "Edujugon\\GoogleAds\\Reports\\Fields::asQuerySelector", "doc": "&quot;Get a query selector of all filters.&quot;"},
                    {"type": "Method", "fromName": "Edujugon\\GoogleAds\\Reports\\Fields", "fromLink": "Edujugon/GoogleAds/Reports/Fields.html", "link": "Edujugon/GoogleAds/Reports/Fields.html#method_reportTypes", "name": "Edujugon\\GoogleAds\\Reports\\Fields::reportTypes", "doc": "&quot;Get all report types&quot;"},
                    {"type": "Method", "fromName": "Edujugon\\GoogleAds\\Reports\\Fields", "fromLink": "Edujugon/GoogleAds/Reports/Fields.html", "link": "Edujugon/GoogleAds/Reports/Fields.html#method_except", "name": "Edujugon\\GoogleAds\\Reports\\Fields::except", "doc": "&quot;Pull fields from the list.&quot;"},
            
            {"type": "Class", "fromName": "Edujugon\\GoogleAds\\Reports", "fromLink": "Edujugon/GoogleAds/Reports.html", "link": "Edujugon/GoogleAds/Reports/Format.html", "name": "Edujugon\\GoogleAds\\Reports\\Format", "doc": "&quot;&quot;"},
                                                        {"type": "Method", "fromName": "Edujugon\\GoogleAds\\Reports\\Format", "fromLink": "Edujugon/GoogleAds/Reports/Format.html", "link": "Edujugon/GoogleAds/Reports/Format.html#method_asObj", "name": "Edujugon\\GoogleAds\\Reports\\Format::asObj", "doc": "&quot;Get the list of the report formats.&quot;"},
                    {"type": "Method", "fromName": "Edujugon\\GoogleAds\\Reports\\Format", "fromLink": "Edujugon/GoogleAds/Reports/Format.html", "link": "Edujugon/GoogleAds/Reports/Format.html#method_getList", "name": "Edujugon\\GoogleAds\\Reports\\Format::getList", "doc": "&quot;Get a list of the report formats.&quot;"},
                    {"type": "Method", "fromName": "Edujugon\\GoogleAds\\Reports\\Format", "fromLink": "Edujugon/GoogleAds/Reports/Format.html", "link": "Edujugon/GoogleAds/Reports/Format.html#method_get", "name": "Edujugon\\GoogleAds\\Reports\\Format::get", "doc": "&quot;Get the constant value from a passed report type.&quot;"},
                    {"type": "Method", "fromName": "Edujugon\\GoogleAds\\Reports\\Format", "fromLink": "Edujugon/GoogleAds/Reports/Format.html", "link": "Edujugon/GoogleAds/Reports/Format.html#method_exist", "name": "Edujugon\\GoogleAds\\Reports\\Format::exist", "doc": "&quot;Check if a passed value is available as report type.&quot;"},
                    {"type": "Method", "fromName": "Edujugon\\GoogleAds\\Reports\\Format", "fromLink": "Edujugon/GoogleAds/Reports/Format.html", "link": "Edujugon/GoogleAds/Reports/Format.html#method_invalidType", "name": "Edujugon\\GoogleAds\\Reports\\Format::invalidType", "doc": "&quot;&quot;"},
            
            {"type": "Class", "fromName": "Edujugon\\GoogleAds\\Reports", "fromLink": "Edujugon/GoogleAds/Reports.html", "link": "Edujugon/GoogleAds/Reports/MyReport.html", "name": "Edujugon\\GoogleAds\\Reports\\MyReport", "doc": "&quot;&quot;"},
                                                        {"type": "Method", "fromName": "Edujugon\\GoogleAds\\Reports\\MyReport", "fromLink": "Edujugon/GoogleAds/Reports/MyReport.html", "link": "Edujugon/GoogleAds/Reports/MyReport.html#method___construct", "name": "Edujugon\\GoogleAds\\Reports\\MyReport::__construct", "doc": "&quot;MyReport constructor.&quot;"},
                    {"type": "Method", "fromName": "Edujugon\\GoogleAds\\Reports\\MyReport", "fromLink": "Edujugon/GoogleAds/Reports/MyReport.html", "link": "Edujugon/GoogleAds/Reports/MyReport.html#method_count", "name": "Edujugon\\GoogleAds\\Reports\\MyReport::count", "doc": "&quot;Count result items.&quot;"},
            
            {"type": "Class", "fromName": "Edujugon\\GoogleAds\\Reports", "fromLink": "Edujugon/GoogleAds/Reports.html", "link": "Edujugon/GoogleAds/Reports/Report.html", "name": "Edujugon\\GoogleAds\\Reports\\Report", "doc": "&quot;&quot;"},
                                                        {"type": "Method", "fromName": "Edujugon\\GoogleAds\\Reports\\Report", "fromLink": "Edujugon/GoogleAds/Reports/Report.html", "link": "Edujugon/GoogleAds/Reports/Report.html#method___construct", "name": "Edujugon\\GoogleAds\\Reports\\Report::__construct", "doc": "&quot;Reports constructor.&quot;"},
                    {"type": "Method", "fromName": "Edujugon\\GoogleAds\\Reports\\Report", "fromLink": "Edujugon/GoogleAds/Reports/Report.html", "link": "Edujugon/GoogleAds/Reports/Report.html#method_format", "name": "Edujugon\\GoogleAds\\Reports\\Report::format", "doc": "&quot;Set the format for the report.&quot;"},
                    {"type": "Method", "fromName": "Edujugon\\GoogleAds\\Reports\\Report", "fromLink": "Edujugon/GoogleAds/Reports/Report.html", "link": "Edujugon/GoogleAds/Reports/Report.html#method_select", "name": "Edujugon\\GoogleAds\\Reports\\Report::select", "doc": "&quot;Set the fields to retrieve&quot;"},
                    {"type": "Method", "fromName": "Edujugon\\GoogleAds\\Reports\\Report", "fromLink": "Edujugon/GoogleAds/Reports/Report.html", "link": "Edujugon/GoogleAds/Reports/Report.html#method_from", "name": "Edujugon\\GoogleAds\\Reports\\Report::from", "doc": "&quot;Set the report type&quot;"},
                    {"type": "Method", "fromName": "Edujugon\\GoogleAds\\Reports\\Report", "fromLink": "Edujugon/GoogleAds/Reports/Report.html", "link": "Edujugon/GoogleAds/Reports/Report.html#method_during", "name": "Edujugon\\GoogleAds\\Reports\\Report::during", "doc": "&quot;Set the starting and ending dates for the report.&quot;"},
                    {"type": "Method", "fromName": "Edujugon\\GoogleAds\\Reports\\Report", "fromLink": "Edujugon/GoogleAds/Reports/Report.html", "link": "Edujugon/GoogleAds/Reports/Report.html#method_where", "name": "Edujugon\\GoogleAds\\Reports\\Report::where", "doc": "&quot;Set where condition&quot;"},
                    {"type": "Method", "fromName": "Edujugon\\GoogleAds\\Reports\\Report", "fromLink": "Edujugon/GoogleAds/Reports/Report.html", "link": "Edujugon/GoogleAds/Reports/Report.html#method_magicSelect", "name": "Edujugon\\GoogleAds\\Reports\\Report::magicSelect", "doc": "&quot;Mark magicSelect as true.&quot;"},
                    {"type": "Method", "fromName": "Edujugon\\GoogleAds\\Reports\\Report", "fromLink": "Edujugon/GoogleAds/Reports/Report.html", "link": "Edujugon/GoogleAds/Reports/Report.html#method_getAsSimpleXMLObj", "name": "Edujugon\\GoogleAds\\Reports\\Report::getAsSimpleXMLObj", "doc": "&quot;Get the report as a SimpleXMLObj&quot;"},
                    {"type": "Method", "fromName": "Edujugon\\GoogleAds\\Reports\\Report", "fromLink": "Edujugon/GoogleAds/Reports/Report.html", "link": "Edujugon/GoogleAds/Reports/Report.html#method_getAsObj", "name": "Edujugon\\GoogleAds\\Reports\\Report::getAsObj", "doc": "&quot;Get the report as an object&quot;"},
                    {"type": "Method", "fromName": "Edujugon\\GoogleAds\\Reports\\Report", "fromLink": "Edujugon/GoogleAds/Reports/Report.html", "link": "Edujugon/GoogleAds/Reports/Report.html#method_getAsString", "name": "Edujugon\\GoogleAds\\Reports\\Report::getAsString", "doc": "&quot;Get report as string&quot;"},
                    {"type": "Method", "fromName": "Edujugon\\GoogleAds\\Reports\\Report", "fromLink": "Edujugon/GoogleAds/Reports/Report.html", "link": "Edujugon/GoogleAds/Reports/Report.html#method_getStream", "name": "Edujugon\\GoogleAds\\Reports\\Report::getStream", "doc": "&quot;Get report as stream&quot;"},
                    {"type": "Method", "fromName": "Edujugon\\GoogleAds\\Reports\\Report", "fromLink": "Edujugon/GoogleAds/Reports/Report.html", "link": "Edujugon/GoogleAds/Reports/Report.html#method_saveToFile", "name": "Edujugon\\GoogleAds\\Reports\\Report::saveToFile", "doc": "&quot;Save the report in a file.&quot;"},
                    {"type": "Method", "fromName": "Edujugon\\GoogleAds\\Reports\\Report", "fromLink": "Edujugon/GoogleAds/Reports/Report.html", "link": "Edujugon/GoogleAds/Reports/Report.html#method_except", "name": "Edujugon\\GoogleAds\\Reports\\Report::except", "doc": "&quot;Pull fields out of fields list.&quot;"},
                    {"type": "Method", "fromName": "Edujugon\\GoogleAds\\Reports\\Report", "fromLink": "Edujugon/GoogleAds/Reports/Report.html", "link": "Edujugon/GoogleAds/Reports/Report.html#method_getTypes", "name": "Edujugon\\GoogleAds\\Reports\\Report::getTypes", "doc": "&quot;&quot;"},
                    {"type": "Method", "fromName": "Edujugon\\GoogleAds\\Reports\\Report", "fromLink": "Edujugon/GoogleAds/Reports/Report.html", "link": "Edujugon/GoogleAds/Reports/Report.html#method_getFields", "name": "Edujugon\\GoogleAds\\Reports\\Report::getFields", "doc": "&quot;&quot;"},
                    {"type": "Method", "fromName": "Edujugon\\GoogleAds\\Reports\\Report", "fromLink": "Edujugon/GoogleAds/Reports/Report.html", "link": "Edujugon/GoogleAds/Reports/Report.html#method_getFormats", "name": "Edujugon\\GoogleAds\\Reports\\Report::getFormats", "doc": "&quot;Get a list of the report formats.&quot;"},
                    {"type": "Method", "fromName": "Edujugon\\GoogleAds\\Reports\\Report", "fromLink": "Edujugon/GoogleAds/Reports/Report.html", "link": "Edujugon/GoogleAds/Reports/Report.html#method___get", "name": "Edujugon\\GoogleAds\\Reports\\Report::__get", "doc": "&quot;&quot;"},
            
            {"type": "Class", "fromName": "Edujugon\\GoogleAds\\Reports", "fromLink": "Edujugon/GoogleAds/Reports.html", "link": "Edujugon/GoogleAds/Reports/ReportTypes.html", "name": "Edujugon\\GoogleAds\\Reports\\ReportTypes", "doc": "&quot;&quot;"},
                                                        {"type": "Method", "fromName": "Edujugon\\GoogleAds\\Reports\\ReportTypes", "fromLink": "Edujugon/GoogleAds/Reports/ReportTypes.html", "link": "Edujugon/GoogleAds/Reports/ReportTypes.html#method_asObj", "name": "Edujugon\\GoogleAds\\Reports\\ReportTypes::asObj", "doc": "&quot;Get the list of the report types.&quot;"},
                    {"type": "Method", "fromName": "Edujugon\\GoogleAds\\Reports\\ReportTypes", "fromLink": "Edujugon/GoogleAds/Reports/ReportTypes.html", "link": "Edujugon/GoogleAds/Reports/ReportTypes.html#method_getList", "name": "Edujugon\\GoogleAds\\Reports\\ReportTypes::getList", "doc": "&quot;Get the list of the report types.&quot;"},
                    {"type": "Method", "fromName": "Edujugon\\GoogleAds\\Reports\\ReportTypes", "fromLink": "Edujugon/GoogleAds/Reports/ReportTypes.html", "link": "Edujugon/GoogleAds/Reports/ReportTypes.html#method_get", "name": "Edujugon\\GoogleAds\\Reports\\ReportTypes::get", "doc": "&quot;Get the constant value from a passed report type.&quot;"},
                    {"type": "Method", "fromName": "Edujugon\\GoogleAds\\Reports\\ReportTypes", "fromLink": "Edujugon/GoogleAds/Reports/ReportTypes.html", "link": "Edujugon/GoogleAds/Reports/ReportTypes.html#method_exist", "name": "Edujugon\\GoogleAds\\Reports\\ReportTypes::exist", "doc": "&quot;Check if a passed value is available as report type.&quot;"},
                    {"type": "Method", "fromName": "Edujugon\\GoogleAds\\Reports\\ReportTypes", "fromLink": "Edujugon/GoogleAds/Reports/ReportTypes.html", "link": "Edujugon/GoogleAds/Reports/ReportTypes.html#method_invalidType", "name": "Edujugon\\GoogleAds\\Reports\\ReportTypes::invalidType", "doc": "&quot;&quot;"},
            
            {"type": "Class", "fromName": "Edujugon\\GoogleAds\\Services", "fromLink": "Edujugon/GoogleAds/Services.html", "link": "Edujugon/GoogleAds/Services/AdGroup.html", "name": "Edujugon\\GoogleAds\\Services\\AdGroup", "doc": "&quot;&quot;"},
                                                        {"type": "Method", "fromName": "Edujugon\\GoogleAds\\Services\\AdGroup", "fromLink": "Edujugon/GoogleAds/Services/AdGroup.html", "link": "Edujugon/GoogleAds/Services/AdGroup.html#method___construct", "name": "Edujugon\\GoogleAds\\Services\\AdGroup::__construct", "doc": "&quot;AdGroup constructor.&quot;"},
            
            {"type": "Class", "fromName": "Edujugon\\GoogleAds\\Services", "fromLink": "Edujugon/GoogleAds/Services.html", "link": "Edujugon/GoogleAds/Services/AdGroupAd.html", "name": "Edujugon\\GoogleAds\\Services\\AdGroupAd", "doc": "&quot;&quot;"},
                                                        {"type": "Method", "fromName": "Edujugon\\GoogleAds\\Services\\AdGroupAd", "fromLink": "Edujugon/GoogleAds/Services/AdGroupAd.html", "link": "Edujugon/GoogleAds/Services/AdGroupAd.html#method___construct", "name": "Edujugon\\GoogleAds\\Services\\AdGroupAd::__construct", "doc": "&quot;Service constructor.&quot;"},
            
            {"type": "Class", "fromName": "Edujugon\\GoogleAds\\Services", "fromLink": "Edujugon/GoogleAds/Services.html", "link": "Edujugon/GoogleAds/Services/Campaign.html", "name": "Edujugon\\GoogleAds\\Services\\Campaign", "doc": "&quot;&quot;"},
                                                        {"type": "Method", "fromName": "Edujugon\\GoogleAds\\Services\\Campaign", "fromLink": "Edujugon/GoogleAds/Services/Campaign.html", "link": "Edujugon/GoogleAds/Services/Campaign.html#method___construct", "name": "Edujugon\\GoogleAds\\Services\\Campaign::__construct", "doc": "&quot;Service constructor.&quot;"},
            
            {"type": "Class", "fromName": "Edujugon\\GoogleAds\\Services", "fromLink": "Edujugon/GoogleAds/Services.html", "link": "Edujugon/GoogleAds/Services/Service.html", "name": "Edujugon\\GoogleAds\\Services\\Service", "doc": "&quot;&quot;"},
                                                        {"type": "Method", "fromName": "Edujugon\\GoogleAds\\Services\\Service", "fromLink": "Edujugon/GoogleAds/Services/Service.html", "link": "Edujugon/GoogleAds/Services/Service.html#method___construct", "name": "Edujugon\\GoogleAds\\Services\\Service::__construct", "doc": "&quot;Service constructor.&quot;"},
                    {"type": "Method", "fromName": "Edujugon\\GoogleAds\\Services\\Service", "fromLink": "Edujugon/GoogleAds/Services/Service.html", "link": "Edujugon/GoogleAds/Services/Service.html#method_orderBy", "name": "Edujugon\\GoogleAds\\Services\\Service::orderBy", "doc": "&quot;&quot;"},
                    {"type": "Method", "fromName": "Edujugon\\GoogleAds\\Services\\Service", "fromLink": "Edujugon/GoogleAds/Services/Service.html", "link": "Edujugon/GoogleAds/Services/Service.html#method_limit", "name": "Edujugon\\GoogleAds\\Services\\Service::limit", "doc": "&quot;&quot;"},
                    {"type": "Method", "fromName": "Edujugon\\GoogleAds\\Services\\Service", "fromLink": "Edujugon/GoogleAds/Services/Service.html", "link": "Edujugon/GoogleAds/Services/Service.html#method_select", "name": "Edujugon\\GoogleAds\\Services\\Service::select", "doc": "&quot;Set the fields to retrieve&quot;"},
                    {"type": "Method", "fromName": "Edujugon\\GoogleAds\\Services\\Service", "fromLink": "Edujugon/GoogleAds/Services/Service.html", "link": "Edujugon/GoogleAds/Services/Service.html#method_where", "name": "Edujugon\\GoogleAds\\Services\\Service::where", "doc": "&quot;Set where condition&quot;"},
                    {"type": "Method", "fromName": "Edujugon\\GoogleAds\\Services\\Service", "fromLink": "Edujugon/GoogleAds/Services/Service.html", "link": "Edujugon/GoogleAds/Services/Service.html#method_get", "name": "Edujugon\\GoogleAds\\Services\\Service::get", "doc": "&quot;Get all items.&quot;"},
                    {"type": "Method", "fromName": "Edujugon\\GoogleAds\\Services\\Service", "fromLink": "Edujugon/GoogleAds/Services/Service.html", "link": "Edujugon/GoogleAds/Services/Service.html#method_getService", "name": "Edujugon\\GoogleAds\\Services\\Service::getService", "doc": "&quot;Get the Google service.&quot;"},
            
            {"type": "Class", "fromName": "Edujugon\\GoogleAds\\Services", "fromLink": "Edujugon/GoogleAds/Services.html", "link": "Edujugon/GoogleAds/Services/ServiceCollection.html", "name": "Edujugon\\GoogleAds\\Services\\ServiceCollection", "doc": "&quot;&quot;"},
                                                        {"type": "Method", "fromName": "Edujugon\\GoogleAds\\Services\\ServiceCollection", "fromLink": "Edujugon/GoogleAds/Services/ServiceCollection.html", "link": "Edujugon/GoogleAds/Services/ServiceCollection.html#method___construct", "name": "Edujugon\\GoogleAds\\Services\\ServiceCollection::__construct", "doc": "&quot;ServiceCollection constructor.&quot;"},
                    {"type": "Method", "fromName": "Edujugon\\GoogleAds\\Services\\ServiceCollection", "fromLink": "Edujugon/GoogleAds/Services/ServiceCollection.html", "link": "Edujugon/GoogleAds/Services/ServiceCollection.html#method_where", "name": "Edujugon\\GoogleAds\\Services\\ServiceCollection::where", "doc": "&quot;search the value in the collection in a specific field.&quot;"},
                    {"type": "Method", "fromName": "Edujugon\\GoogleAds\\Services\\ServiceCollection", "fromLink": "Edujugon/GoogleAds/Services/ServiceCollection.html", "link": "Edujugon/GoogleAds/Services/ServiceCollection.html#method_set", "name": "Edujugon\\GoogleAds\\Services\\ServiceCollection::set", "doc": "&quot;Set the value in the specific field.&quot;"},
                    {"type": "Method", "fromName": "Edujugon\\GoogleAds\\Services\\ServiceCollection", "fromLink": "Edujugon/GoogleAds/Services/ServiceCollection.html", "link": "Edujugon/GoogleAds/Services/ServiceCollection.html#method_map", "name": "Edujugon\\GoogleAds\\Services\\ServiceCollection::map", "doc": "&quot;&quot;"},
                    {"type": "Method", "fromName": "Edujugon\\GoogleAds\\Services\\ServiceCollection", "fromLink": "Edujugon/GoogleAds/Services/ServiceCollection.html", "link": "Edujugon/GoogleAds/Services/ServiceCollection.html#method_filter", "name": "Edujugon\\GoogleAds\\Services\\ServiceCollection::filter", "doc": "&quot;&quot;"},
                    {"type": "Method", "fromName": "Edujugon\\GoogleAds\\Services\\ServiceCollection", "fromLink": "Edujugon/GoogleAds/Services/ServiceCollection.html", "link": "Edujugon/GoogleAds/Services/ServiceCollection.html#method_save", "name": "Edujugon\\GoogleAds\\Services\\ServiceCollection::save", "doc": "&quot;Persist values in google.&quot;"},
                    {"type": "Method", "fromName": "Edujugon\\GoogleAds\\Services\\ServiceCollection", "fromLink": "Edujugon/GoogleAds/Services/ServiceCollection.html", "link": "Edujugon/GoogleAds/Services/ServiceCollection.html#method_items", "name": "Edujugon\\GoogleAds\\Services\\ServiceCollection::items", "doc": "&quot;Get item list.&quot;"},
                    {"type": "Method", "fromName": "Edujugon\\GoogleAds\\Services\\ServiceCollection", "fromLink": "Edujugon/GoogleAds/Services/ServiceCollection.html", "link": "Edujugon/GoogleAds/Services/ServiceCollection.html#method___call", "name": "Edujugon\\GoogleAds\\Services\\ServiceCollection::__call", "doc": "&quot;If any method call is available in Collection class it will be fired for the items since it&#039;s a Collection instance.&quot;"},
            
            {"type": "Class", "fromName": "Edujugon\\GoogleAds\\Session", "fromLink": "Edujugon/GoogleAds/Session.html", "link": "Edujugon/GoogleAds/Session/AdwordsSession.html", "name": "Edujugon\\GoogleAds\\Session\\AdwordsSession", "doc": "&quot;&quot;"},
                                                        {"type": "Method", "fromName": "Edujugon\\GoogleAds\\Session\\AdwordsSession", "fromLink": "Edujugon/GoogleAds/Session/AdwordsSession.html", "link": "Edujugon/GoogleAds/Session/AdwordsSession.html#method___construct", "name": "Edujugon\\GoogleAds\\Session\\AdwordsSession::__construct", "doc": "&quot;AdwordsSession constructor.&quot;"},
                    {"type": "Method", "fromName": "Edujugon\\GoogleAds\\Session\\AdwordsSession", "fromLink": "Edujugon/GoogleAds/Session/AdwordsSession.html", "link": "Edujugon/GoogleAds/Session/AdwordsSession.html#method_oAuth", "name": "Edujugon\\GoogleAds\\Session\\AdwordsSession::oAuth", "doc": "&quot;Create OAuth2 credential&quot;"},
                    {"type": "Method", "fromName": "Edujugon\\GoogleAds\\Session\\AdwordsSession", "fromLink": "Edujugon/GoogleAds/Session/AdwordsSession.html", "link": "Edujugon/GoogleAds/Session/AdwordsSession.html#method_build", "name": "Edujugon\\GoogleAds\\Session\\AdwordsSession::build", "doc": "&quot;Construct an API session configured from global config data file or passed data&quot;"},
            
            
                                        // Fix trailing commas in the index
        {}
    ];

    /** Tokenizes strings by namespaces and functions */
    function tokenizer(term) {
        if (!term) {
            return [];
        }

        var tokens = [term];
        var meth = term.indexOf('::');

        // Split tokens into methods if "::" is found.
        if (meth > -1) {
            tokens.push(term.substr(meth + 2));
            term = term.substr(0, meth - 2);
        }

        // Split by namespace or fake namespace.
        if (term.indexOf('\\') > -1) {
            tokens = tokens.concat(term.split('\\'));
        } else if (term.indexOf('_') > 0) {
            tokens = tokens.concat(term.split('_'));
        }

        // Merge in splitting the string by case and return
        tokens = tokens.concat(term.match(/(([A-Z]?[^A-Z]*)|([a-z]?[^a-z]*))/g).slice(0,-1));

        return tokens;
    };

    root.Sami = {
        /**
         * Cleans the provided term. If no term is provided, then one is
         * grabbed from the query string "search" parameter.
         */
        cleanSearchTerm: function(term) {
            // Grab from the query string
            if (typeof term === 'undefined') {
                var name = 'search';
                var regex = new RegExp("[\\?&]" + name + "=([^&#]*)");
                var results = regex.exec(location.search);
                if (results === null) {
                    return null;
                }
                term = decodeURIComponent(results[1].replace(/\+/g, " "));
            }

            return term.replace(/<(?:.|\n)*?>/gm, '');
        },

        /** Searches through the index for a given term */
        search: function(term) {
            // Create a new search index if needed
            if (!bhIndex) {
                bhIndex = new Bloodhound({
                    limit: 500,
                    local: searchIndex,
                    datumTokenizer: function (d) {
                        return tokenizer(d.name);
                    },
                    queryTokenizer: Bloodhound.tokenizers.whitespace
                });
                bhIndex.initialize();
            }

            results = [];
            bhIndex.get(term, function(matches) {
                results = matches;
            });

            if (!rootPath) {
                return results;
            }

            // Fix the element links based on the current page depth.
            return $.map(results, function(ele) {
                if (ele.link.indexOf('..') > -1) {
                    return ele;
                }
                ele.link = rootPath + ele.link;
                if (ele.fromLink) {
                    ele.fromLink = rootPath + ele.fromLink;
                }
                return ele;
            });
        },

        /** Get a search class for a specific type */
        getSearchClass: function(type) {
            return searchTypeClasses[type] || searchTypeClasses['_'];
        },

        /** Add the left-nav tree to the site */
        injectApiTree: function(ele) {
            ele.html(treeHtml);
        }
    };

    $(function() {
        // Modify the HTML to work correctly based on the current depth
        rootPath = $('body').attr('data-root-path');
        treeHtml = treeHtml.replace(/href="/g, 'href="' + rootPath);
        Sami.injectApiTree($('#api-tree'));
    });

    return root.Sami;
})(window);

$(function() {

    // Enable the version switcher
    $('#version-switcher').change(function() {
        window.location = $(this).val()
    });

    
        // Toggle left-nav divs on click
        $('#api-tree .hd span').click(function() {
            $(this).parent().parent().toggleClass('opened');
        });

        // Expand the parent namespaces of the current page.
        var expected = $('body').attr('data-name');

        if (expected) {
            // Open the currently selected node and its parents.
            var container = $('#api-tree');
            var node = $('#api-tree li[data-name="' + expected + '"]');
            // Node might not be found when simulating namespaces
            if (node.length > 0) {
                node.addClass('active').addClass('opened');
                node.parents('li').addClass('opened');
                var scrollPos = node.offset().top - container.offset().top + container.scrollTop();
                // Position the item nearer to the top of the screen.
                scrollPos -= 200;
                container.scrollTop(scrollPos);
            }
        }

    
    
        var form = $('#search-form .typeahead');
        form.typeahead({
            hint: true,
            highlight: true,
            minLength: 1
        }, {
            name: 'search',
            displayKey: 'name',
            source: function (q, cb) {
                cb(Sami.search(q));
            }
        });

        // The selection is direct-linked when the user selects a suggestion.
        form.on('typeahead:selected', function(e, suggestion) {
            window.location = suggestion.link;
        });

        // The form is submitted when the user hits enter.
        form.keypress(function (e) {
            if (e.which == 13) {
                $('#search-form').submit();
                return true;
            }
        });

    
});


