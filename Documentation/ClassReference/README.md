# Open T1 PHP SDK

## Table of Contents

* [AdamaCookieAuth](#adamacookieauth)
    * [__construct](#__construct)
    * [cookieValues](#cookievalues)
    * [authUniqueId](#authuniqueid)
* [AdServer](#adserver)
    * [delete](#delete)
    * [update](#update)
    * [create](#create)
    * [endpoint](#endpoint)
    * [uri](#uri)
    * [__construct](#__construct-1)
    * [options](#options)
    * [read](#read)
* [Advertiser](#advertiser)
    * [delete](#delete-1)
    * [endpoint](#endpoint-1)
    * [uri](#uri-1)
    * [__construct](#__construct-2)
    * [options](#options-1)
    * [create](#create-1)
    * [read](#read-1)
    * [update](#update-1)
* [Agency](#agency)
    * [delete](#delete-2)
    * [endpoint](#endpoint-2)
    * [uri](#uri-2)
    * [__construct](#__construct-3)
    * [options](#options-2)
    * [create](#create-2)
    * [read](#read-2)
    * [update](#update-2)
* [ApiClient](#apiclient)
    * [paginate](#paginate)
    * [__construct](#__construct-4)
    * [create](#create-3)
    * [read](#read-3)
    * [update](#update-3)
* [ApiHost](#apihost)
* [ApiResponse](#apiresponse)
    * [__construct](#__construct-5)
    * [data](#data)
    * [meta](#meta)
* [ApiResponseMeta](#apiresponsemeta)
    * [__construct](#__construct-6)
    * [nextPage](#nextpage)
    * [eTag](#etag)
    * [count](#count)
    * [calledOn](#calledon)
    * [status](#status)
    * [offset](#offset)
    * [totalCount](#totalcount)
    * [httpCode](#httpcode)
* [AppTransparency](#apptransparency)
    * [delete](#delete-3)
    * [update](#update-4)
    * [create](#create-4)
    * [endpoint](#endpoint-3)
    * [uri](#uri-3)
    * [__construct](#__construct-7)
    * [options](#options-3)
    * [read](#read-4)
* [AtomicCreative](#atomiccreative)
    * [delete](#delete-4)
    * [endpoint](#endpoint-4)
    * [uri](#uri-4)
    * [__construct](#__construct-8)
    * [options](#options-4)
    * [create](#create-5)
    * [read](#read-5)
    * [update](#update-5)
    * [resetEditedTag](#reseteditedtag)
* [AtomicCreativeApproval](#atomiccreativeapproval)
    * [delete](#delete-5)
    * [endpoint](#endpoint-5)
    * [uri](#uri-5)
    * [__construct](#__construct-9)
    * [options](#options-5)
    * [create](#create-6)
    * [read](#read-6)
    * [update](#update-6)
* [AudienceIndex](#audienceindex)
    * [delete](#delete-6)
    * [update](#update-7)
    * [create](#create-7)
    * [endpoint](#endpoint-6)
    * [uri](#uri-6)
    * [__construct](#__construct-10)
    * [options](#options-6)
    * [read](#read-7)
* [AudienceIndexPixel](#audienceindexpixel)
    * [delete](#delete-7)
    * [update](#update-8)
    * [create](#create-8)
    * [endpoint](#endpoint-7)
    * [uri](#uri-7)
    * [__construct](#__construct-11)
    * [options](#options-7)
    * [read](#read-8)
* [AudienceSegment](#audiencesegment)
    * [delete](#delete-8)
    * [create](#create-9)
    * [update](#update-9)
    * [endpoint](#endpoint-8)
    * [uri](#uri-8)
    * [__construct](#__construct-12)
    * [options](#options-8)
    * [read](#read-9)
* [CachingApiClient](#cachingapiclient)
    * [paginate](#paginate-1)
    * [__construct](#__construct-13)
    * [read](#read-10)
    * [create](#create-10)
    * [update](#update-10)
* [Campaign](#campaign)
    * [delete](#delete-9)
    * [endpoint](#endpoint-9)
    * [uri](#uri-9)
    * [__construct](#__construct-14)
    * [options](#options-9)
    * [create](#create-11)
    * [read](#read-11)
    * [update](#update-11)
* [CampaignBudgetFlight](#campaignbudgetflight)
    * [update](#update-12)
    * [endpoint](#endpoint-10)
    * [uri](#uri-10)
    * [__construct](#__construct-15)
    * [options](#options-10)
    * [create](#create-12)
    * [read](#read-12)
    * [delete](#delete-10)
* [CampaignRelevantBudgetFlight](#campaignrelevantbudgetflight)
    * [update](#update-13)
    * [create](#create-13)
    * [delete](#delete-11)
    * [endpoint](#endpoint-11)
    * [uri](#uri-11)
    * [__construct](#__construct-16)
    * [options](#options-11)
    * [read](#read-13)
* [CampaignSiteList](#campaignsitelist)
    * [delete](#delete-12)
    * [endpoint](#endpoint-12)
    * [uri](#uri-12)
    * [__construct](#__construct-17)
    * [options](#options-12)
    * [create](#create-14)
    * [read](#read-14)
    * [update](#update-14)
* [CannotCreateException](#cannotcreateexception)
    * [__construct](#__construct-18)
* [CannotDeleteException](#cannotdeleteexception)
    * [__construct](#__construct-19)
* [CannotReadException](#cannotreadexception)
    * [__construct](#__construct-20)
* [CannotUpdateException](#cannotupdateexception)
    * [__construct](#__construct-21)
* [Concept](#concept)
    * [delete](#delete-13)
    * [endpoint](#endpoint-13)
    * [uri](#uri-13)
    * [__construct](#__construct-22)
    * [options](#options-13)
    * [create](#create-15)
    * [read](#read-15)
    * [update](#update-15)
* [Creative](#creative)
    * [delete](#delete-14)
    * [endpoint](#endpoint-14)
    * [uri](#uri-14)
    * [__construct](#__construct-23)
    * [options](#options-14)
    * [create](#create-16)
    * [read](#read-16)
    * [update](#update-16)
* [Creative](#creative-1)
    * [delete](#delete-15)
    * [create](#create-17)
    * [endpoint](#endpoint-15)
    * [uri](#uri-15)
    * [__construct](#__construct-24)
    * [options](#options-15)
    * [read](#read-17)
    * [update](#update-17)
    * [upload](#upload)
* [CreativeAsset](#creativeasset)
    * [create](#create-18)
    * [read](#read-18)
    * [update](#update-18)
    * [delete](#delete-16)
    * [endpoint](#endpoint-16)
    * [uri](#uri-16)
    * [__construct](#__construct-25)
    * [options](#options-16)
    * [upload](#upload-1)
    * [approve](#approve)
* [CreativeCompanion](#creativecompanion)
    * [update](#update-19)
    * [endpoint](#endpoint-17)
    * [uri](#uri-17)
    * [__construct](#__construct-26)
    * [options](#options-17)
    * [create](#create-19)
    * [read](#read-19)
    * [delete](#delete-17)
* [CreativeDetailedVASTValidation](#creativedetailedvastvalidation)
    * [delete](#delete-18)
    * [create](#create-20)
    * [update](#update-20)
    * [endpoint](#endpoint-18)
    * [uri](#uri-18)
    * [__construct](#__construct-27)
    * [options](#options-18)
    * [read](#read-20)
* [CreativeStatus](#creativestatus)
    * [create](#create-21)
    * [update](#update-21)
    * [delete](#delete-19)
    * [endpoint](#endpoint-19)
    * [uri](#uri-19)
    * [__construct](#__construct-28)
    * [options](#options-19)
    * [read](#read-21)
* [CreativeUpload](#creativeupload)
    * [create](#create-22)
    * [update](#update-22)
    * [delete](#delete-20)
    * [endpoint](#endpoint-20)
    * [uri](#uri-20)
    * [__construct](#__construct-29)
    * [options](#options-20)
    * [read](#read-22)
* [CreativeVariant](#creativevariant)
    * [create](#create-23)
    * [update](#update-23)
    * [delete](#delete-21)
    * [endpoint](#endpoint-21)
    * [uri](#uri-21)
    * [__construct](#__construct-30)
    * [options](#options-21)
    * [read](#read-23)
* [CreativeVASTValidation](#creativevastvalidation)
    * [delete](#delete-22)
    * [create](#create-24)
    * [update](#update-24)
    * [endpoint](#endpoint-22)
    * [uri](#uri-22)
    * [__construct](#__construct-31)
    * [options](#options-22)
    * [read](#read-24)
* [CSVDecoder](#csvdecoder)
* [CSVResponseDecoder](#csvresponsedecoder)
    * [__construct](#__construct-32)
    * [decode](#decode)
* [DataPixelLoad](#datapixelload)
    * [create](#create-25)
    * [delete](#delete-23)
    * [update](#update-25)
    * [endpoint](#endpoint-23)
    * [uri](#uri-23)
    * [__construct](#__construct-33)
    * [options](#options-23)
    * [read](#read-25)
* [DayPart](#daypart)
    * [delete](#delete-24)
    * [update](#update-26)
    * [create](#create-26)
    * [endpoint](#endpoint-24)
    * [uri](#uri-24)
    * [__construct](#__construct-34)
    * [options](#options-24)
    * [read](#read-26)
* [Deal](#deal)
    * [delete](#delete-25)
    * [endpoint](#endpoint-25)
    * [uri](#uri-25)
    * [__construct](#__construct-35)
    * [options](#options-25)
    * [create](#create-27)
    * [read](#read-27)
    * [update](#update-27)
* [DefaultResponseDecoder](#defaultresponsedecoder)
    * [decode](#decode-1)
* [DeviceTechnology](#devicetechnology)
    * [delete](#delete-26)
    * [update](#update-28)
    * [create](#create-28)
    * [endpoint](#endpoint-26)
    * [uri](#uri-26)
    * [__construct](#__construct-36)
    * [options](#options-26)
    * [read](#read-28)
* [DoctrineAPCCache](#doctrineapccache)
    * [store](#store)
    * [retrieve](#retrieve)
    * [__construct](#__construct-37)
* [DoctrineFilesystemCache](#doctrinefilesystemcache)
    * [store](#store-1)
    * [retrieve](#retrieve-1)
    * [__construct](#__construct-38)
* [DoctrineMemcacheCache](#doctrinememcachecache)
    * [store](#store-2)
    * [retrieve](#retrieve-2)
    * [__construct](#__construct-39)
* [DoctrineMemcachedCache](#doctrinememcachedcache)
    * [store](#store-3)
    * [retrieve](#retrieve-3)
    * [__construct](#__construct-40)
* [DoctrineXCacheCache](#doctrinexcachecache)
    * [store](#store-4)
    * [retrieve](#retrieve-4)
    * [__construct](#__construct-41)
* [EventPixelLoad](#eventpixelload)
    * [create](#create-29)
    * [delete](#delete-27)
    * [update](#update-29)
    * [endpoint](#endpoint-27)
    * [uri](#uri-27)
    * [__construct](#__construct-42)
    * [options](#options-27)
    * [read](#read-29)
* [Geo](#geo)
    * [delete](#delete-28)
    * [update](#update-30)
    * [create](#create-30)
    * [endpoint](#endpoint-28)
    * [uri](#uri-28)
    * [__construct](#__construct-43)
    * [options](#options-28)
    * [read](#read-30)
* [GuzzleParameterHandler](#guzzleparameterhandler)
    * [__construct](#__construct-44)
    * [read](#read-31)
    * [post](#post)
* [GuzzleTransporter](#guzzletransporter)
    * [__construct](#__construct-45)
    * [read](#read-32)
    * [create](#create-31)
    * [update](#update-31)
    * [authUniqueId](#authuniqueid-1)
* [HttpErrorResponse](#httperrorresponse)
    * [__construct](#__construct-46)
    * [headers](#headers)
    * [body](#body)
    * [httpCode](#httpcode-1)
    * [errorCode](#errorcode)
* [HttpResponse](#httpresponse)
    * [__construct](#__construct-47)
    * [headers](#headers-1)
    * [body](#body-1)
    * [httpCode](#httpcode-2)
* [HttpResponseHeaders](#httpresponseheaders)
    * [__construct](#__construct-48)
    * [cacheControl](#cachecontrol)
    * [contentType](#contenttype)
    * [date](#date)
    * [expires](#expires)
    * [lastModified](#lastmodified)
    * [server](#server)
    * [vary](#vary)
    * [xCatalyst](#xcatalyst)
    * [xMasheryResponder](#xmasheryresponder)
    * [transferEncoding](#transferencoding)
    * [connection](#connection)
* [JSONResponseDecoder](#jsonresponsedecoder)
    * [decode](#decode-2)
* [LoginFailedException](#loginfailedexception)
    * [__construct](#__construct-49)
* [Meta](#meta-1)
    * [delete](#delete-29)
    * [update](#update-32)
    * [create](#create-32)
    * [endpoint](#endpoint-29)
    * [uri](#uri-29)
    * [__construct](#__construct-50)
    * [options](#options-29)
    * [read](#read-33)
* [OAuthAuth](#oauthauth)
    * [__construct](#__construct-51)
    * [headers](#headers-2)
    * [queryStringParams](#querystringparams)
    * [authUniqueId](#authuniqueid-2)
* [Organization](#organization)
    * [delete](#delete-30)
    * [create](#create-33)
    * [endpoint](#endpoint-30)
    * [uri](#uri-30)
    * [__construct](#__construct-52)
    * [options](#options-30)
    * [read](#read-34)
    * [update](#update-33)
* [Pagination](#pagination)
    * [__construct](#__construct-53)
    * [page](#page)
    * [previous](#previous)
    * [next](#next)
    * [first](#first)
    * [last](#last)
    * [numPages](#numpages)
    * [numResults](#numresults)
* [Performance](#performance)
    * [delete](#delete-31)
    * [update](#update-34)
    * [create](#create-34)
    * [endpoint](#endpoint-31)
    * [uri](#uri-31)
    * [__construct](#__construct-54)
    * [options](#options-31)
    * [read](#read-35)
* [PixelBundle](#pixelbundle)
    * [delete](#delete-32)
    * [endpoint](#endpoint-32)
    * [uri](#uri-32)
    * [__construct](#__construct-55)
    * [options](#options-32)
    * [create](#create-35)
    * [read](#read-36)
    * [update](#update-35)
* [PixelBundle](#pixelbundle-1)
    * [update](#update-36)
    * [delete](#delete-33)
    * [create](#create-36)
    * [endpoint](#endpoint-33)
    * [uri](#uri-33)
    * [__construct](#__construct-56)
    * [options](#options-33)
    * [read](#read-37)
* [PlacementSlot](#placementslot)
    * [delete](#delete-34)
    * [update](#update-37)
    * [endpoint](#endpoint-34)
    * [uri](#uri-34)
    * [__construct](#__construct-57)
    * [options](#options-34)
    * [create](#create-37)
    * [read](#read-38)
* [PostalCode](#postalcode)
    * [delete](#delete-35)
    * [update](#update-38)
    * [create](#create-38)
    * [endpoint](#endpoint-35)
    * [uri](#uri-35)
    * [__construct](#__construct-58)
    * [options](#options-35)
    * [read](#read-39)
* [Publisher](#publisher)
    * [delete](#delete-36)
    * [update](#update-39)
    * [endpoint](#endpoint-36)
    * [uri](#uri-36)
    * [__construct](#__construct-59)
    * [options](#options-36)
    * [create](#create-39)
    * [read](#read-40)
* [PublisherSite](#publishersite)
    * [delete](#delete-37)
    * [update](#update-40)
    * [endpoint](#endpoint-37)
    * [uri](#uri-37)
    * [__construct](#__construct-60)
    * [options](#options-37)
    * [create](#create-40)
    * [read](#read-41)
* [Pulse](#pulse)
    * [delete](#delete-38)
    * [update](#update-41)
    * [create](#create-41)
    * [endpoint](#endpoint-38)
    * [uri](#uri-38)
    * [__construct](#__construct-61)
    * [options](#options-38)
    * [read](#read-42)
* [ReachFrequency](#reachfrequency)
    * [delete](#delete-39)
    * [update](#update-42)
    * [create](#create-42)
    * [endpoint](#endpoint-39)
    * [uri](#uri-39)
    * [__construct](#__construct-62)
    * [options](#options-39)
    * [read](#read-43)
* [Session](#session)
    * [create](#create-43)
    * [delete](#delete-40)
    * [update](#update-43)
    * [endpoint](#endpoint-40)
    * [uri](#uri-40)
    * [__construct](#__construct-63)
    * [options](#options-40)
    * [read](#read-44)
* [SiteList](#sitelist)
    * [delete](#delete-41)
    * [create](#create-44)
    * [endpoint](#endpoint-41)
    * [uri](#uri-41)
    * [__construct](#__construct-64)
    * [options](#options-41)
    * [read](#read-45)
    * [update](#update-44)
    * [download](#download)
    * [upload](#upload-2)
* [SiteListAssignment](#sitelistassignment)
    * [create](#create-45)
    * [update](#update-45)
    * [delete](#delete-42)
    * [endpoint](#endpoint-42)
    * [uri](#uri-42)
    * [__construct](#__construct-65)
    * [options](#options-42)
    * [read](#read-46)
* [SitePlacement](#siteplacement)
    * [delete](#delete-43)
    * [update](#update-46)
    * [endpoint](#endpoint-43)
    * [uri](#uri-43)
    * [__construct](#__construct-66)
    * [options](#options-43)
    * [create](#create-46)
    * [read](#read-47)
* [SiteTransparency](#sitetransparency)
    * [delete](#delete-44)
    * [update](#update-47)
    * [create](#create-47)
    * [endpoint](#endpoint-44)
    * [uri](#uri-44)
    * [__construct](#__construct-67)
    * [options](#options-44)
    * [read](#read-48)
* [Strategy](#strategy)
    * [delete](#delete-45)
    * [endpoint](#endpoint-45)
    * [uri](#uri-45)
    * [__construct](#__construct-68)
    * [options](#options-45)
    * [create](#create-48)
    * [read](#read-49)
    * [update](#update-48)
* [StrategyAudienceSegment](#strategyaudiencesegment)
    * [delete](#delete-46)
    * [endpoint](#endpoint-46)
    * [uri](#uri-46)
    * [__construct](#__construct-69)
    * [options](#options-46)
    * [create](#create-49)
    * [read](#read-50)
    * [update](#update-49)
* [StrategyConcept](#strategyconcept)
    * [update](#update-50)
    * [endpoint](#endpoint-47)
    * [uri](#uri-47)
    * [__construct](#__construct-70)
    * [options](#options-47)
    * [create](#create-50)
    * [read](#read-51)
    * [delete](#delete-47)
* [StrategyDayPart](#strategydaypart)
    * [update](#update-51)
    * [endpoint](#endpoint-48)
    * [uri](#uri-48)
    * [__construct](#__construct-71)
    * [options](#options-48)
    * [create](#create-51)
    * [read](#read-52)
    * [delete](#delete-48)
* [StrategyDomainRestriction](#strategydomainrestriction)
    * [update](#update-52)
    * [delete](#delete-49)
    * [endpoint](#endpoint-49)
    * [uri](#uri-49)
    * [__construct](#__construct-72)
    * [options](#options-49)
    * [create](#create-52)
    * [read](#read-53)
* [StrategyRetiredAudienceSegment](#strategyretiredaudiencesegment)
    * [delete](#delete-50)
    * [create](#create-53)
    * [update](#update-53)
    * [endpoint](#endpoint-50)
    * [uri](#uri-50)
    * [__construct](#__construct-73)
    * [options](#options-50)
    * [read](#read-54)
* [StrategyRetiredTargetingSegment](#strategyretiredtargetingsegment)
    * [delete](#delete-51)
    * [create](#create-54)
    * [update](#update-54)
    * [endpoint](#endpoint-51)
    * [uri](#uri-51)
    * [__construct](#__construct-74)
    * [options](#options-51)
    * [read](#read-55)
* [StrategySiteList](#strategysitelist)
    * [delete](#delete-52)
    * [endpoint](#endpoint-52)
    * [uri](#uri-52)
    * [__construct](#__construct-75)
    * [options](#options-52)
    * [create](#create-55)
    * [read](#read-56)
    * [update](#update-55)
* [StrategySupply](#strategysupply)
    * [delete](#delete-53)
    * [endpoint](#endpoint-53)
    * [uri](#uri-53)
    * [__construct](#__construct-76)
    * [options](#options-53)
    * [create](#create-56)
    * [read](#read-57)
    * [update](#update-56)
* [StrategySupplySource](#strategysupplysource)
    * [delete](#delete-54)
    * [update](#update-57)
    * [read](#read-58)
    * [endpoint](#endpoint-54)
    * [uri](#uri-54)
    * [__construct](#__construct-77)
    * [options](#options-54)
    * [create](#create-57)
* [StrategyTargetDimension](#strategytargetdimension)
    * [update](#update-58)
    * [delete](#delete-55)
    * [endpoint](#endpoint-55)
    * [uri](#uri-55)
    * [__construct](#__construct-78)
    * [options](#options-55)
    * [create](#create-58)
    * [read](#read-59)
* [StrategyTargetingSegment](#strategytargetingsegment)
    * [delete](#delete-56)
    * [endpoint](#endpoint-56)
    * [uri](#uri-56)
    * [__construct](#__construct-79)
    * [options](#options-56)
    * [create](#create-59)
    * [read](#read-60)
    * [update](#update-59)
* [StrategyTargetingSegmentCPM](#strategytargetingsegmentcpm)
    * [delete](#delete-57)
    * [create](#create-60)
    * [update](#update-60)
    * [endpoint](#endpoint-57)
    * [uri](#uri-57)
    * [__construct](#__construct-80)
    * [options](#options-57)
    * [read](#read-61)
* [SupplySource](#supplysource)
    * [delete](#delete-58)
    * [update](#update-61)
    * [create](#create-61)
    * [endpoint](#endpoint-58)
    * [uri](#uri-58)
    * [__construct](#__construct-81)
    * [options](#options-58)
    * [read](#read-62)
* [TargetingSegment](#targetingsegment)
    * [delete](#delete-59)
    * [create](#create-62)
    * [update](#update-62)
    * [endpoint](#endpoint-59)
    * [uri](#uri-59)
    * [__construct](#__construct-82)
    * [options](#options-59)
    * [read](#read-63)
* [TargetingSegmentObjective](#targetingsegmentobjective)
    * [delete](#delete-60)
    * [create](#create-63)
    * [update](#update-63)
    * [endpoint](#endpoint-60)
    * [uri](#uri-60)
    * [__construct](#__construct-83)
    * [options](#options-60)
    * [read](#read-64)
* [TargetingVendor](#targetingvendor)
    * [delete](#delete-61)
    * [create](#create-64)
    * [update](#update-64)
    * [endpoint](#endpoint-61)
    * [uri](#uri-61)
    * [__construct](#__construct-84)
    * [options](#options-61)
    * [read](#read-65)
* [TargetValue](#targetvalue)
    * [update](#update-65)
    * [create](#create-65)
    * [delete](#delete-62)
    * [endpoint](#endpoint-62)
    * [uri](#uri-62)
    * [__construct](#__construct-85)
    * [options](#options-62)
    * [read](#read-66)
* [TimePeriod](#timeperiod)
    * [hours](#hours)
    * [minutes](#minutes)
    * [seconds](#seconds)
    * [inSeconds](#inseconds)
* [User](#user)
    * [delete](#delete-63)
    * [endpoint](#endpoint-63)
    * [uri](#uri-63)
    * [__construct](#__construct-86)
    * [options](#options-63)
    * [create](#create-66)
    * [read](#read-67)
    * [update](#update-66)
* [UserPasswordAuth](#userpasswordauth)
    * [__construct](#__construct-87)
    * [cookieValues](#cookievalues-1)
    * [authUniqueId](#authuniqueid-3)
* [UserPermission](#userpermission)
    * [delete](#delete-64)
    * [endpoint](#endpoint-64)
    * [uri](#uri-64)
    * [__construct](#__construct-88)
    * [options](#options-64)
    * [create](#create-67)
    * [read](#read-68)
    * [update](#update-67)
* [UserSetting](#usersetting)
    * [create](#create-68)
    * [delete](#delete-65)
    * [update](#update-68)
    * [endpoint](#endpoint-65)
    * [uri](#uri-65)
    * [__construct](#__construct-89)
    * [options](#options-65)
    * [read](#read-69)
* [Vertical](#vertical)
    * [delete](#delete-66)
    * [update](#update-69)
    * [create](#create-69)
    * [endpoint](#endpoint-66)
    * [uri](#uri-66)
    * [__construct](#__construct-90)
    * [options](#options-66)
    * [read](#read-70)
* [Video](#video)
    * [delete](#delete-67)
    * [update](#update-70)
    * [create](#create-70)
    * [endpoint](#endpoint-67)
    * [uri](#uri-67)
    * [__construct](#__construct-91)
    * [options](#options-67)
    * [read](#read-71)
* [VideoSiteTransparency](#videositetransparency)
    * [delete](#delete-68)
    * [update](#update-71)
    * [create](#create-71)
    * [endpoint](#endpoint-68)
    * [uri](#uri-68)
    * [__construct](#__construct-92)
    * [options](#options-68)
    * [read](#read-72)
* [Watermark](#watermark)
    * [delete](#delete-69)
    * [update](#update-72)
    * [create](#create-72)
    * [endpoint](#endpoint-69)
    * [uri](#uri-69)
    * [__construct](#__construct-93)
    * [options](#options-69)
    * [read](#read-73)
* [XMLResponseDecoder](#xmlresponsedecoder)
    * [decode](#decode-3)

## AdamaCookieAuth

Class AdamaCookieAuth



* Full name: \MediaMath\TerminalOneAPI\Auth\AdamaCookieAuth
* This class implements: \MediaMath\TerminalOneAPI\Infrastructure\CookieAuthenticable


### __construct

AdamaCookieAuth constructor.

```php
AdamaCookieAuth::__construct(  $session_id )
```




**Parameters:**

| Parameter | Type | Description |
|-----------|------|-------------|
| `$session_id` | **** |  |




---

### cookieValues



```php
AdamaCookieAuth::cookieValues(  ): array
```







---

### authUniqueId



```php
AdamaCookieAuth::authUniqueId(  ): mixed
```







---

## AdServer

Class AdServer



* Full name: \MediaMath\TerminalOneAPI\Management\AdServer
* Parent class: \MediaMath\TerminalOneAPI\Infrastructure\ManagementApiObject
* This class implements: \MediaMath\TerminalOneAPI\Infrastructure\Endpoint


### delete



```php
AdServer::delete(  )
```







---

### update



```php
AdServer::update(  ): string
```







---

### create



```php
AdServer::create(  ): mixed
```







---

### endpoint



```php
AdServer::endpoint(  ): string
```







---

### uri



```php
AdServer::uri(  ): mixed
```







---

### __construct

ApiObject constructor.

```php
AdServer::__construct( array $options = array() )
```




**Parameters:**

| Parameter | Type | Description |
|-----------|------|-------------|
| `$options` | **array** |  |




---

### options



```php
AdServer::options(  ): array
```







---

### read



```php
AdServer::read(  ): string
```







---

## Advertiser

Class Advertiser



* Full name: \MediaMath\TerminalOneAPI\Management\Advertiser
* Parent class: \MediaMath\TerminalOneAPI\Infrastructure\ManagementApiObject
* This class implements: \MediaMath\TerminalOneAPI\Infrastructure\Endpoint


### delete



```php
Advertiser::delete(  )
```







---

### endpoint



```php
Advertiser::endpoint(  ): string
```







---

### uri



```php
Advertiser::uri(  ): mixed
```







---

### __construct

ApiObject constructor.

```php
Advertiser::__construct( array $options = array() )
```




**Parameters:**

| Parameter | Type | Description |
|-----------|------|-------------|
| `$options` | **array** |  |




---

### options



```php
Advertiser::options(  ): array
```







---

### create



```php
Advertiser::create(  ): mixed
```







---

### read



```php
Advertiser::read(  ): string
```







---

### update



```php
Advertiser::update(  ): string
```







---

## Agency

Class Agency



* Full name: \MediaMath\TerminalOneAPI\Management\Agency
* Parent class: \MediaMath\TerminalOneAPI\Infrastructure\ManagementApiObject
* This class implements: \MediaMath\TerminalOneAPI\Infrastructure\Endpoint


### delete



```php
Agency::delete(  )
```







---

### endpoint



```php
Agency::endpoint(  ): string
```







---

### uri



```php
Agency::uri(  ): mixed
```







---

### __construct

ApiObject constructor.

```php
Agency::__construct( array $options = array() )
```




**Parameters:**

| Parameter | Type | Description |
|-----------|------|-------------|
| `$options` | **array** |  |




---

### options



```php
Agency::options(  ): array
```







---

### create



```php
Agency::create(  ): mixed
```







---

### read



```php
Agency::read(  ): string
```







---

### update



```php
Agency::update(  ): string
```







---

## ApiClient

Class ApiClient



* Full name: \MediaMath\TerminalOneAPI\ApiClient
* This class implements: \MediaMath\TerminalOneAPI\Infrastructure\Clientable


### paginate



```php
ApiClient::paginate( \MediaMath\TerminalOneAPI\Infrastructure\ApiObject $endpoint, \MediaMath\TerminalOneAPI\Infrastructure\Decodable|null $decoder = null ): \MediaMath\TerminalOneAPI\Pagination\Pagination
```




**Parameters:**

| Parameter | Type | Description |
|-----------|------|-------------|
| `$endpoint` | **\MediaMath\TerminalOneAPI\Infrastructure\ApiObject** |  |
| `$decoder` | **\MediaMath\TerminalOneAPI\Infrastructure\Decodable&#124;null** |  |




---

### __construct

ApiClient constructor.

```php
ApiClient::__construct( \MediaMath\TerminalOneAPI\Infrastructure\Transportable $transport, \MediaMath\TerminalOneAPI\Infrastructure\Decodable|null $decoder = null )
```




**Parameters:**

| Parameter | Type | Description |
|-----------|------|-------------|
| `$transport` | **\MediaMath\TerminalOneAPI\Infrastructure\Transportable** |  |
| `$decoder` | **\MediaMath\TerminalOneAPI\Infrastructure\Decodable&#124;null** |  |




---

### create



```php
ApiClient::create( \MediaMath\TerminalOneAPI\Infrastructure\ApiObject $endpoint, \MediaMath\TerminalOneAPI\Infrastructure\Decodable|null $decoder = null ): \MediaMath\TerminalOneAPI\Infrastructure\ApiResponse
```




**Parameters:**

| Parameter | Type | Description |
|-----------|------|-------------|
| `$endpoint` | **\MediaMath\TerminalOneAPI\Infrastructure\ApiObject** |  |
| `$decoder` | **\MediaMath\TerminalOneAPI\Infrastructure\Decodable&#124;null** |  |




---

### read



```php
ApiClient::read( \MediaMath\TerminalOneAPI\Infrastructure\ApiObject $endpoint, \MediaMath\TerminalOneAPI\Infrastructure\Decodable|null $decoder = null ): \MediaMath\TerminalOneAPI\Infrastructure\ApiResponse
```




**Parameters:**

| Parameter | Type | Description |
|-----------|------|-------------|
| `$endpoint` | **\MediaMath\TerminalOneAPI\Infrastructure\ApiObject** |  |
| `$decoder` | **\MediaMath\TerminalOneAPI\Infrastructure\Decodable&#124;null** |  |




---

### update



```php
ApiClient::update( \MediaMath\TerminalOneAPI\Infrastructure\ApiObject $endpoint, \MediaMath\TerminalOneAPI\Infrastructure\Decodable|null $decoder = null ): \MediaMath\TerminalOneAPI\Infrastructure\ApiResponse
```




**Parameters:**

| Parameter | Type | Description |
|-----------|------|-------------|
| `$endpoint` | **\MediaMath\TerminalOneAPI\Infrastructure\ApiObject** |  |
| `$decoder` | **\MediaMath\TerminalOneAPI\Infrastructure\Decodable&#124;null** |  |




---

## ApiHost

Class ApiHost



* Full name: \MediaMath\TerminalOneAPI\Infrastructure\ApiHost


## ApiResponse

Class ApiResponse



* Full name: \MediaMath\TerminalOneAPI\Infrastructure\ApiResponse


### __construct

ApiResponse constructor.

```php
ApiResponse::__construct( \MediaMath\TerminalOneAPI\Infrastructure\ApiResponseMeta $meta,  $data )
```




**Parameters:**

| Parameter | Type | Description |
|-----------|------|-------------|
| `$meta` | **\MediaMath\TerminalOneAPI\Infrastructure\ApiResponseMeta** |  |
| `$data` | **** |  |




---

### data



```php
ApiResponse::data(  ): mixed
```







---

### meta



```php
ApiResponse::meta(  ): \MediaMath\TerminalOneAPI\Infrastructure\ApiResponseMeta
```







---

## ApiResponseMeta

Class ApiResponseMeta



* Full name: \MediaMath\TerminalOneAPI\Infrastructure\ApiResponseMeta


### __construct

ApiResponseMeta constructor.

```php
ApiResponseMeta::__construct( array $meta = array() )
```




**Parameters:**

| Parameter | Type | Description |
|-----------|------|-------------|
| `$meta` | **array** |  |




---

### nextPage



```php
ApiResponseMeta::nextPage(  ): mixed
```







---

### eTag



```php
ApiResponseMeta::eTag(  ): mixed
```







---

### count



```php
ApiResponseMeta::count(  ): mixed
```







---

### calledOn



```php
ApiResponseMeta::calledOn(  ): mixed
```







---

### status



```php
ApiResponseMeta::status(  ): mixed
```







---

### offset



```php
ApiResponseMeta::offset(  ): mixed
```







---

### totalCount



```php
ApiResponseMeta::totalCount(  ): mixed
```







---

### httpCode



```php
ApiResponseMeta::httpCode(  ): mixed
```







---

## AppTransparency

Class AppTransparency



* Full name: \MediaMath\TerminalOneAPI\Reporting\AppTransparency
* Parent class: \MediaMath\TerminalOneAPI\Infrastructure\ReportingApiObject
* This class implements: \MediaMath\TerminalOneAPI\Infrastructure\Endpoint


### delete



```php
AppTransparency::delete(  )
```







---

### update



```php
AppTransparency::update(  ): string
```







---

### create



```php
AppTransparency::create(  ): mixed
```







---

### endpoint



```php
AppTransparency::endpoint(  ): string
```







---

### uri



```php
AppTransparency::uri(  ): mixed
```







---

### __construct

ApiObject constructor.

```php
AppTransparency::__construct( array $options = array() )
```




**Parameters:**

| Parameter | Type | Description |
|-----------|------|-------------|
| `$options` | **array** |  |




---

### options



```php
AppTransparency::options(  ): array
```







---

### read



```php
AppTransparency::read(  ): string
```







---

## AtomicCreative

Class AtomicCreative



* Full name: \MediaMath\TerminalOneAPI\Management\AtomicCreative
* Parent class: \MediaMath\TerminalOneAPI\Infrastructure\ManagementApiObject
* This class implements: \MediaMath\TerminalOneAPI\Infrastructure\Endpoint


### delete



```php
AtomicCreative::delete(  )
```







---

### endpoint



```php
AtomicCreative::endpoint(  ): string
```







---

### uri



```php
AtomicCreative::uri(  ): mixed
```







---

### __construct

ApiObject constructor.

```php
AtomicCreative::__construct( array $options = array() )
```




**Parameters:**

| Parameter | Type | Description |
|-----------|------|-------------|
| `$options` | **array** |  |




---

### options



```php
AtomicCreative::options(  ): array
```







---

### create



```php
AtomicCreative::create(  ): mixed
```







---

### read



```php
AtomicCreative::read(  ): string
```







---

### update



```php
AtomicCreative::update(  ): string
```







---

### resetEditedTag



```php
AtomicCreative::resetEditedTag(  ): string
```







---

## AtomicCreativeApproval

Class AtomicCreativeApproval



* Full name: \MediaMath\TerminalOneAPI\Management\AtomicCreativeApproval
* Parent class: \MediaMath\TerminalOneAPI\Infrastructure\ManagementApiObject
* This class implements: \MediaMath\TerminalOneAPI\Infrastructure\Endpoint


### delete



```php
AtomicCreativeApproval::delete(  )
```







---

### endpoint



```php
AtomicCreativeApproval::endpoint(  ): string
```







---

### uri



```php
AtomicCreativeApproval::uri(  ): mixed
```







---

### __construct

ApiObject constructor.

```php
AtomicCreativeApproval::__construct( array $options = array() )
```




**Parameters:**

| Parameter | Type | Description |
|-----------|------|-------------|
| `$options` | **array** |  |




---

### options



```php
AtomicCreativeApproval::options(  ): array
```







---

### create



```php
AtomicCreativeApproval::create(  ): mixed
```







---

### read



```php
AtomicCreativeApproval::read(  ): string
```







---

### update



```php
AtomicCreativeApproval::update(  ): string
```







---

## AudienceIndex

Class AudienceIndex



* Full name: \MediaMath\TerminalOneAPI\Reporting\AudienceIndex
* Parent class: \MediaMath\TerminalOneAPI\Infrastructure\ReportingApiObject
* This class implements: \MediaMath\TerminalOneAPI\Infrastructure\Endpoint


### delete



```php
AudienceIndex::delete(  )
```







---

### update



```php
AudienceIndex::update(  ): string
```







---

### create



```php
AudienceIndex::create(  ): mixed
```







---

### endpoint



```php
AudienceIndex::endpoint(  ): string
```







---

### uri



```php
AudienceIndex::uri(  ): mixed
```







---

### __construct

ApiObject constructor.

```php
AudienceIndex::__construct( array $options = array() )
```




**Parameters:**

| Parameter | Type | Description |
|-----------|------|-------------|
| `$options` | **array** |  |




---

### options



```php
AudienceIndex::options(  ): array
```







---

### read



```php
AudienceIndex::read(  ): string
```







---

## AudienceIndexPixel

Class AudienceIndexPixel



* Full name: \MediaMath\TerminalOneAPI\Reporting\AudienceIndexPixel
* Parent class: \MediaMath\TerminalOneAPI\Infrastructure\ReportingApiObject
* This class implements: \MediaMath\TerminalOneAPI\Infrastructure\Endpoint


### delete



```php
AudienceIndexPixel::delete(  )
```







---

### update



```php
AudienceIndexPixel::update(  ): string
```







---

### create



```php
AudienceIndexPixel::create(  ): mixed
```







---

### endpoint



```php
AudienceIndexPixel::endpoint(  ): string
```







---

### uri



```php
AudienceIndexPixel::uri(  ): mixed
```







---

### __construct

ApiObject constructor.

```php
AudienceIndexPixel::__construct( array $options = array() )
```




**Parameters:**

| Parameter | Type | Description |
|-----------|------|-------------|
| `$options` | **array** |  |




---

### options



```php
AudienceIndexPixel::options(  ): array
```







---

### read



```php
AudienceIndexPixel::read(  ): string
```







---

## AudienceSegment

Class AudienceSegment



* Full name: \MediaMath\TerminalOneAPI\Management\Targeting\AudienceSegment
* Parent class: \MediaMath\TerminalOneAPI\Infrastructure\ManagementApiObject
* This class implements: \MediaMath\TerminalOneAPI\Infrastructure\Endpoint


### delete



```php
AudienceSegment::delete(  )
```







---

### create



```php
AudienceSegment::create(  ): mixed
```







---

### update



```php
AudienceSegment::update(  ): string
```







---

### endpoint



```php
AudienceSegment::endpoint(  ): string
```







---

### uri



```php
AudienceSegment::uri(  ): mixed
```







---

### __construct

ApiObject constructor.

```php
AudienceSegment::__construct( array $options = array() )
```




**Parameters:**

| Parameter | Type | Description |
|-----------|------|-------------|
| `$options` | **array** |  |




---

### options



```php
AudienceSegment::options(  ): array
```







---

### read



```php
AudienceSegment::read(  ): string
```







---

## CachingApiClient

Class CachingApiClient



* Full name: \MediaMath\TerminalOneAPI\CachingApiClient
* This class implements: \MediaMath\TerminalOneAPI\Infrastructure\Clientable


### paginate



```php
CachingApiClient::paginate( \MediaMath\TerminalOneAPI\Infrastructure\ApiObject $endpoint, \MediaMath\TerminalOneAPI\Infrastructure\Decodable|null $decoder = null ): \MediaMath\TerminalOneAPI\Pagination\Pagination
```




**Parameters:**

| Parameter | Type | Description |
|-----------|------|-------------|
| `$endpoint` | **\MediaMath\TerminalOneAPI\Infrastructure\ApiObject** |  |
| `$decoder` | **\MediaMath\TerminalOneAPI\Infrastructure\Decodable&#124;null** |  |




---

### __construct

CachingApiClient constructor.

```php
CachingApiClient::__construct( \MediaMath\TerminalOneAPI\Infrastructure\Transportable $transport, \MediaMath\TerminalOneAPI\Infrastructure\Cacheable $cache, \MediaMath\TerminalOneAPI\Infrastructure\Decodable|null $decoder = null )
```




**Parameters:**

| Parameter | Type | Description |
|-----------|------|-------------|
| `$transport` | **\MediaMath\TerminalOneAPI\Infrastructure\Transportable** |  |
| `$cache` | **\MediaMath\TerminalOneAPI\Infrastructure\Cacheable** |  |
| `$decoder` | **\MediaMath\TerminalOneAPI\Infrastructure\Decodable&#124;null** |  |




---

### read



```php
CachingApiClient::read( \MediaMath\TerminalOneAPI\Infrastructure\ApiObject $endpoint, \MediaMath\TerminalOneAPI\Infrastructure\Decodable|null $decoder = null ): \MediaMath\TerminalOneAPI\Infrastructure\ApiResponse|mixed
```




**Parameters:**

| Parameter | Type | Description |
|-----------|------|-------------|
| `$endpoint` | **\MediaMath\TerminalOneAPI\Infrastructure\ApiObject** |  |
| `$decoder` | **\MediaMath\TerminalOneAPI\Infrastructure\Decodable&#124;null** |  |




---

### create



```php
CachingApiClient::create( \MediaMath\TerminalOneAPI\Infrastructure\ApiObject $endpoint, \MediaMath\TerminalOneAPI\Infrastructure\Decodable|null $decoder = null ): \MediaMath\TerminalOneAPI\Infrastructure\ApiResponse
```




**Parameters:**

| Parameter | Type | Description |
|-----------|------|-------------|
| `$endpoint` | **\MediaMath\TerminalOneAPI\Infrastructure\ApiObject** |  |
| `$decoder` | **\MediaMath\TerminalOneAPI\Infrastructure\Decodable&#124;null** |  |




---

### update



```php
CachingApiClient::update( \MediaMath\TerminalOneAPI\Infrastructure\ApiObject $endpoint, \MediaMath\TerminalOneAPI\Infrastructure\Decodable|null $decoder = null ): \MediaMath\TerminalOneAPI\Infrastructure\ApiResponse
```




**Parameters:**

| Parameter | Type | Description |
|-----------|------|-------------|
| `$endpoint` | **\MediaMath\TerminalOneAPI\Infrastructure\ApiObject** |  |
| `$decoder` | **\MediaMath\TerminalOneAPI\Infrastructure\Decodable&#124;null** |  |




---

## Campaign

Class Campaign



* Full name: \MediaMath\TerminalOneAPI\Management\Campaign
* Parent class: \MediaMath\TerminalOneAPI\Infrastructure\ManagementApiObject
* This class implements: \MediaMath\TerminalOneAPI\Infrastructure\Endpoint


### delete



```php
Campaign::delete(  )
```







---

### endpoint



```php
Campaign::endpoint(  ): string
```







---

### uri



```php
Campaign::uri(  ): mixed
```







---

### __construct

ApiObject constructor.

```php
Campaign::__construct( array $options = array() )
```




**Parameters:**

| Parameter | Type | Description |
|-----------|------|-------------|
| `$options` | **array** |  |




---

### options



```php
Campaign::options(  ): array
```







---

### create



```php
Campaign::create(  ): mixed
```







---

### read



```php
Campaign::read(  ): string
```







---

### update



```php
Campaign::update(  ): string
```







---

## CampaignBudgetFlight

Class CampaignBudgetFlight



* Full name: \MediaMath\TerminalOneAPI\Management\CampaignBudgetFlight
* Parent class: \MediaMath\TerminalOneAPI\Infrastructure\ManagementApiObject
* This class implements: \MediaMath\TerminalOneAPI\Infrastructure\Endpoint


### update



```php
CampaignBudgetFlight::update(  ): string
```







---

### endpoint



```php
CampaignBudgetFlight::endpoint(  ): string
```







---

### uri



```php
CampaignBudgetFlight::uri(  ): mixed
```







---

### __construct

ApiObject constructor.

```php
CampaignBudgetFlight::__construct( array $options = array() )
```




**Parameters:**

| Parameter | Type | Description |
|-----------|------|-------------|
| `$options` | **array** |  |




---

### options



```php
CampaignBudgetFlight::options(  ): array
```







---

### create



```php
CampaignBudgetFlight::create(  ): mixed
```







---

### read



```php
CampaignBudgetFlight::read(  ): string
```







---

### delete



```php
CampaignBudgetFlight::delete(  ): string
```







---

## CampaignRelevantBudgetFlight

Class CampaignRelevantBudgetFlight



* Full name: \MediaMath\TerminalOneAPI\Management\CampaignRelevantBudgetFlight
* Parent class: \MediaMath\TerminalOneAPI\Infrastructure\ManagementApiObject
* This class implements: \MediaMath\TerminalOneAPI\Infrastructure\Endpoint


### update



```php
CampaignRelevantBudgetFlight::update(  ): string
```







---

### create



```php
CampaignRelevantBudgetFlight::create(  ): mixed
```







---

### delete



```php
CampaignRelevantBudgetFlight::delete(  )
```







---

### endpoint



```php
CampaignRelevantBudgetFlight::endpoint(  ): string
```







---

### uri



```php
CampaignRelevantBudgetFlight::uri(  ): mixed
```







---

### __construct

ApiObject constructor.

```php
CampaignRelevantBudgetFlight::__construct( array $options = array() )
```




**Parameters:**

| Parameter | Type | Description |
|-----------|------|-------------|
| `$options` | **array** |  |




---

### options



```php
CampaignRelevantBudgetFlight::options(  ): array
```







---

### read



```php
CampaignRelevantBudgetFlight::read(  ): mixed
```







---

## CampaignSiteList

Class CampaignSiteList



* Full name: \MediaMath\TerminalOneAPI\Management\CampaignSiteList
* Parent class: \MediaMath\TerminalOneAPI\Infrastructure\ManagementApiObject
* This class implements: \MediaMath\TerminalOneAPI\Infrastructure\Endpoint


### delete



```php
CampaignSiteList::delete(  )
```







---

### endpoint



```php
CampaignSiteList::endpoint(  ): string
```







---

### uri



```php
CampaignSiteList::uri(  ): mixed
```







---

### __construct

ApiObject constructor.

```php
CampaignSiteList::__construct( array $options = array() )
```




**Parameters:**

| Parameter | Type | Description |
|-----------|------|-------------|
| `$options` | **array** |  |




---

### options



```php
CampaignSiteList::options(  ): array
```







---

### create



```php
CampaignSiteList::create(  ): mixed
```







---

### read



```php
CampaignSiteList::read(  ): string
```







---

### update



```php
CampaignSiteList::update(  ): string
```







---

## CannotCreateException

Class CannotCreateException



* Full name: \MediaMath\TerminalOneAPI\Exception\CannotCreateException
* Parent class: 


### __construct

CannotCreateException constructor.

```php
CannotCreateException::__construct( string $message, integer $code, \MediaMath\TerminalOneAPI\Exception\Exception|null $previous = null )
```




**Parameters:**

| Parameter | Type | Description |
|-----------|------|-------------|
| `$message` | **string** |  |
| `$code` | **integer** |  |
| `$previous` | **\MediaMath\TerminalOneAPI\Exception\Exception&#124;null** |  |




---

## CannotDeleteException

Class CannotDeleteException



* Full name: \MediaMath\TerminalOneAPI\Exception\CannotDeleteException
* Parent class: 


### __construct

CannotDeleteException constructor.

```php
CannotDeleteException::__construct( string $message, integer $code, \MediaMath\TerminalOneAPI\Exception\Exception|null $previous = null )
```




**Parameters:**

| Parameter | Type | Description |
|-----------|------|-------------|
| `$message` | **string** |  |
| `$code` | **integer** |  |
| `$previous` | **\MediaMath\TerminalOneAPI\Exception\Exception&#124;null** |  |




---

## CannotReadException

Class CannotReadException



* Full name: \MediaMath\TerminalOneAPI\Exception\CannotReadException
* Parent class: 


### __construct

CannotReadException constructor.

```php
CannotReadException::__construct( string $message, integer $code, \MediaMath\TerminalOneAPI\Exception\Exception|null $previous = null )
```




**Parameters:**

| Parameter | Type | Description |
|-----------|------|-------------|
| `$message` | **string** |  |
| `$code` | **integer** |  |
| `$previous` | **\MediaMath\TerminalOneAPI\Exception\Exception&#124;null** |  |




---

## CannotUpdateException

Class CannotUpdateException



* Full name: \MediaMath\TerminalOneAPI\Exception\CannotUpdateException
* Parent class: 


### __construct

CannotUpdateException constructor.

```php
CannotUpdateException::__construct( string $message, integer $code, \MediaMath\TerminalOneAPI\Exception\Exception|null $previous = null )
```




**Parameters:**

| Parameter | Type | Description |
|-----------|------|-------------|
| `$message` | **string** |  |
| `$code` | **integer** |  |
| `$previous` | **\MediaMath\TerminalOneAPI\Exception\Exception&#124;null** |  |




---

## Concept

Class Concept



* Full name: \MediaMath\TerminalOneAPI\Management\Concept
* Parent class: \MediaMath\TerminalOneAPI\Infrastructure\ManagementApiObject
* This class implements: \MediaMath\TerminalOneAPI\Infrastructure\Endpoint


### delete



```php
Concept::delete(  )
```







---

### endpoint



```php
Concept::endpoint(  ): string
```







---

### uri



```php
Concept::uri(  ): mixed
```







---

### __construct

ApiObject constructor.

```php
Concept::__construct( array $options = array() )
```




**Parameters:**

| Parameter | Type | Description |
|-----------|------|-------------|
| `$options` | **array** |  |




---

### options



```php
Concept::options(  ): array
```







---

### create



```php
Concept::create(  ): mixed
```







---

### read



```php
Concept::read(  ): string
```







---

### update



```php
Concept::update(  ): string
```







---

## Creative

Class Creative



* Full name: \MediaMath\TerminalOneAPI\Video\Creative
* Parent class: \MediaMath\TerminalOneAPI\Infrastructure\VideoApiObject
* This class implements: \MediaMath\TerminalOneAPI\Infrastructure\Endpoint


### delete



```php
Creative::delete(  )
```







---

### endpoint



```php
Creative::endpoint(  ): string
```







---

### uri



```php
Creative::uri(  ): mixed
```







---

### __construct

ApiObject constructor.

```php
Creative::__construct( array $options = array() )
```




**Parameters:**

| Parameter | Type | Description |
|-----------|------|-------------|
| `$options` | **array** |  |




---

### options



```php
Creative::options(  ): array
```







---

### create



```php
Creative::create(  ): mixed
```







---

### read



```php
Creative::read(  ): string
```







---

### update



```php
Creative::update(  ): string
```







---

## Creative

Class Creative



* Full name: \MediaMath\TerminalOneAPI\Management\Creative
* Parent class: \MediaMath\TerminalOneAPI\Infrastructure\ManagementApiObject
* This class implements: \MediaMath\TerminalOneAPI\Infrastructure\Endpoint


### delete



```php
Creative::delete(  )
```







---

### create



```php
Creative::create(  ): mixed
```







---

### endpoint



```php
Creative::endpoint(  ): string
```







---

### uri



```php
Creative::uri(  ): mixed
```







---

### __construct

ApiObject constructor.

```php
Creative::__construct( array $options = array() )
```




**Parameters:**

| Parameter | Type | Description |
|-----------|------|-------------|
| `$options` | **array** |  |




---

### options



```php
Creative::options(  ): array
```







---

### read



```php
Creative::read(  ): string
```







---

### update



```php
Creative::update(  ): string
```







---

### upload



```php
Creative::upload(  ): string
```







---

## CreativeAsset

Class CreativeAsset



* Full name: \MediaMath\TerminalOneAPI\Management\CreativeAsset
* Parent class: \MediaMath\TerminalOneAPI\Infrastructure\ManagementApiObject
* This class implements: \MediaMath\TerminalOneAPI\Infrastructure\Endpoint


### create



```php
CreativeAsset::create(  ): mixed
```







---

### read



```php
CreativeAsset::read(  ): string
```







---

### update



```php
CreativeAsset::update(  ): string
```







---

### delete



```php
CreativeAsset::delete(  )
```







---

### endpoint



```php
CreativeAsset::endpoint(  ): string
```







---

### uri



```php
CreativeAsset::uri(  ): mixed
```







---

### __construct

ApiObject constructor.

```php
CreativeAsset::__construct( array $options = array() )
```




**Parameters:**

| Parameter | Type | Description |
|-----------|------|-------------|
| `$options` | **array** |  |




---

### options



```php
CreativeAsset::options(  ): array
```







---

### upload



```php
CreativeAsset::upload(  ): string
```







---

### approve



```php
CreativeAsset::approve(  ): string
```







---

## CreativeCompanion

Class CreativeCompanion



* Full name: \MediaMath\TerminalOneAPI\Video\CreativeCompanion
* Parent class: \MediaMath\TerminalOneAPI\Infrastructure\ManagementApiObject
* This class implements: \MediaMath\TerminalOneAPI\Infrastructure\Endpoint


### update



```php
CreativeCompanion::update(  ): string
```







---

### endpoint



```php
CreativeCompanion::endpoint(  ): string
```







---

### uri



```php
CreativeCompanion::uri(  ): mixed
```







---

### __construct

ApiObject constructor.

```php
CreativeCompanion::__construct( array $options = array() )
```




**Parameters:**

| Parameter | Type | Description |
|-----------|------|-------------|
| `$options` | **array** |  |




---

### options



```php
CreativeCompanion::options(  ): array
```







---

### create



```php
CreativeCompanion::create(  ): mixed
```







---

### read



```php
CreativeCompanion::read(  ): string
```







---

### delete



```php
CreativeCompanion::delete(  ): string
```







---

## CreativeDetailedVASTValidation

Class CreativeDetailedVASTValidation



* Full name: \MediaMath\TerminalOneAPI\Video\CreativeDetailedVASTValidation
* Parent class: \MediaMath\TerminalOneAPI\Infrastructure\VideoApiObject
* This class implements: \MediaMath\TerminalOneAPI\Infrastructure\Endpoint


### delete



```php
CreativeDetailedVASTValidation::delete(  )
```







---

### create



```php
CreativeDetailedVASTValidation::create(  ): mixed
```







---

### update



```php
CreativeDetailedVASTValidation::update(  ): string
```







---

### endpoint



```php
CreativeDetailedVASTValidation::endpoint(  ): string
```







---

### uri



```php
CreativeDetailedVASTValidation::uri(  ): mixed
```







---

### __construct

ApiObject constructor.

```php
CreativeDetailedVASTValidation::__construct( array $options = array() )
```




**Parameters:**

| Parameter | Type | Description |
|-----------|------|-------------|
| `$options` | **array** |  |




---

### options



```php
CreativeDetailedVASTValidation::options(  ): array
```







---

### read



```php
CreativeDetailedVASTValidation::read(  ): string
```







---

## CreativeStatus

Class CreativeStatus



* Full name: \MediaMath\TerminalOneAPI\Video\CreativeStatus
* Parent class: \MediaMath\TerminalOneAPI\Infrastructure\ManagementApiObject
* This class implements: \MediaMath\TerminalOneAPI\Infrastructure\Endpoint


### create



```php
CreativeStatus::create(  ): mixed
```







---

### update



```php
CreativeStatus::update(  ): string
```







---

### delete



```php
CreativeStatus::delete(  )
```







---

### endpoint



```php
CreativeStatus::endpoint(  ): string
```







---

### uri



```php
CreativeStatus::uri(  ): mixed
```







---

### __construct

ApiObject constructor.

```php
CreativeStatus::__construct( array $options = array() )
```




**Parameters:**

| Parameter | Type | Description |
|-----------|------|-------------|
| `$options` | **array** |  |




---

### options



```php
CreativeStatus::options(  ): array
```







---

### read



```php
CreativeStatus::read(  ): mixed
```







---

## CreativeUpload

Class CreativeUpload



* Full name: \MediaMath\TerminalOneAPI\Video\CreativeUpload
* Parent class: \MediaMath\TerminalOneAPI\Infrastructure\ManagementApiObject
* This class implements: \MediaMath\TerminalOneAPI\Infrastructure\Endpoint


### create



```php
CreativeUpload::create(  ): mixed
```







---

### update



```php
CreativeUpload::update(  ): string
```







---

### delete



```php
CreativeUpload::delete(  )
```







---

### endpoint



```php
CreativeUpload::endpoint(  ): string
```







---

### uri



```php
CreativeUpload::uri(  ): mixed
```







---

### __construct

ApiObject constructor.

```php
CreativeUpload::__construct( array $options = array() )
```




**Parameters:**

| Parameter | Type | Description |
|-----------|------|-------------|
| `$options` | **array** |  |




---

### options



```php
CreativeUpload::options(  ): array
```







---

### read



```php
CreativeUpload::read(  ): string
```







---

## CreativeVariant

Class CreativeVariant



* Full name: \MediaMath\TerminalOneAPI\Video\CreativeVariant
* Parent class: \MediaMath\TerminalOneAPI\Infrastructure\ManagementApiObject
* This class implements: \MediaMath\TerminalOneAPI\Infrastructure\Endpoint


### create



```php
CreativeVariant::create(  ): mixed
```







---

### update



```php
CreativeVariant::update(  ): string
```







---

### delete



```php
CreativeVariant::delete(  )
```







---

### endpoint



```php
CreativeVariant::endpoint(  ): string
```







---

### uri



```php
CreativeVariant::uri(  ): mixed
```







---

### __construct

ApiObject constructor.

```php
CreativeVariant::__construct( array $options = array() )
```




**Parameters:**

| Parameter | Type | Description |
|-----------|------|-------------|
| `$options` | **array** |  |




---

### options



```php
CreativeVariant::options(  ): array
```







---

### read



```php
CreativeVariant::read(  ): string
```







---

## CreativeVASTValidation

Class CreativeVASTValidation



* Full name: \MediaMath\TerminalOneAPI\Video\CreativeVASTValidation
* Parent class: \MediaMath\TerminalOneAPI\Infrastructure\VideoApiObject
* This class implements: \MediaMath\TerminalOneAPI\Infrastructure\Endpoint


### delete



```php
CreativeVASTValidation::delete(  )
```







---

### create



```php
CreativeVASTValidation::create(  ): mixed
```







---

### update



```php
CreativeVASTValidation::update(  ): string
```







---

### endpoint



```php
CreativeVASTValidation::endpoint(  ): string
```







---

### uri



```php
CreativeVASTValidation::uri(  ): mixed
```







---

### __construct

ApiObject constructor.

```php
CreativeVASTValidation::__construct( array $options = array() )
```




**Parameters:**

| Parameter | Type | Description |
|-----------|------|-------------|
| `$options` | **array** |  |




---

### options



```php
CreativeVASTValidation::options(  ): array
```







---

### read



```php
CreativeVASTValidation::read(  ): string
```







---

## CSVDecoder

Class CSVDecoder



* Full name: \MediaMath\TerminalOneAPI\Decoder\CSVDecoder


## CSVResponseDecoder

Class CSVResponseDecoder



* Full name: \MediaMath\TerminalOneAPI\Decoder\CSVResponseDecoder
* This class implements: \MediaMath\TerminalOneAPI\Infrastructure\Decodable


### __construct

CSVResponseDecoder constructor.

```php
CSVResponseDecoder::__construct( integer $flag = \MediaMath\TerminalOneAPI\Decoder\CSVDecoder::NO_EXTRACT_HEADINGS )
```




**Parameters:**

| Parameter | Type | Description |
|-----------|------|-------------|
| `$flag` | **integer** |  |




---

### decode



```php
CSVResponseDecoder::decode( \MediaMath\TerminalOneAPI\Infrastructure\HttpResponse $api_response ): \MediaMath\TerminalOneAPI\Infrastructure\ApiResponse
```




**Parameters:**

| Parameter | Type | Description |
|-----------|------|-------------|
| `$api_response` | **\MediaMath\TerminalOneAPI\Infrastructure\HttpResponse** |  |




---

## DataPixelLoad

Class DataPixelLoad



* Full name: \MediaMath\TerminalOneAPI\Reporting\DataPixelLoad
* Parent class: \MediaMath\TerminalOneAPI\Infrastructure\ReportingApiObject
* This class implements: \MediaMath\TerminalOneAPI\Infrastructure\Endpoint


### create



```php
DataPixelLoad::create(  ): mixed
```







---

### delete



```php
DataPixelLoad::delete(  )
```







---

### update



```php
DataPixelLoad::update(  ): string
```







---

### endpoint



```php
DataPixelLoad::endpoint(  ): string
```







---

### uri



```php
DataPixelLoad::uri(  ): mixed
```







---

### __construct

ApiObject constructor.

```php
DataPixelLoad::__construct( array $options = array() )
```




**Parameters:**

| Parameter | Type | Description |
|-----------|------|-------------|
| `$options` | **array** |  |




---

### options



```php
DataPixelLoad::options(  ): array
```







---

### read



```php
DataPixelLoad::read(  ): string
```







---

## DayPart

Class DayPart



* Full name: \MediaMath\TerminalOneAPI\Reporting\DayPart
* Parent class: \MediaMath\TerminalOneAPI\Infrastructure\ReportingApiObject
* This class implements: \MediaMath\TerminalOneAPI\Infrastructure\Endpoint


### delete



```php
DayPart::delete(  )
```







---

### update



```php
DayPart::update(  ): string
```







---

### create



```php
DayPart::create(  ): mixed
```







---

### endpoint



```php
DayPart::endpoint(  ): string
```







---

### uri



```php
DayPart::uri(  ): mixed
```







---

### __construct

ApiObject constructor.

```php
DayPart::__construct( array $options = array() )
```




**Parameters:**

| Parameter | Type | Description |
|-----------|------|-------------|
| `$options` | **array** |  |




---

### options



```php
DayPart::options(  ): array
```







---

### read



```php
DayPart::read(  ): string
```







---

## Deal

Class Deal



* Full name: \MediaMath\TerminalOneAPI\Management\Deal
* Parent class: \MediaMath\TerminalOneAPI\Infrastructure\ManagementApiObject
* This class implements: \MediaMath\TerminalOneAPI\Infrastructure\Endpoint


### delete



```php
Deal::delete(  )
```







---

### endpoint



```php
Deal::endpoint(  ): string
```







---

### uri



```php
Deal::uri(  ): mixed
```







---

### __construct

ApiObject constructor.

```php
Deal::__construct( array $options = array() )
```




**Parameters:**

| Parameter | Type | Description |
|-----------|------|-------------|
| `$options` | **array** |  |




---

### options



```php
Deal::options(  ): array
```







---

### create



```php
Deal::create(  ): mixed
```







---

### read



```php
Deal::read(  ): string
```







---

### update



```php
Deal::update(  ): string
```







---

## DefaultResponseDecoder

Class DefaultResponseDecoder



* Full name: \MediaMath\TerminalOneAPI\Decoder\DefaultResponseDecoder
* This class implements: \MediaMath\TerminalOneAPI\Infrastructure\Decodable


### decode



```php
DefaultResponseDecoder::decode( \MediaMath\TerminalOneAPI\Infrastructure\HttpResponse $api_response ): \MediaMath\TerminalOneAPI\Infrastructure\ApiResponse
```




**Parameters:**

| Parameter | Type | Description |
|-----------|------|-------------|
| `$api_response` | **\MediaMath\TerminalOneAPI\Infrastructure\HttpResponse** |  |




---

## DeviceTechnology

Class DeviceTechnology



* Full name: \MediaMath\TerminalOneAPI\Reporting\DeviceTechnology
* Parent class: \MediaMath\TerminalOneAPI\Infrastructure\ReportingApiObject
* This class implements: \MediaMath\TerminalOneAPI\Infrastructure\Endpoint


### delete



```php
DeviceTechnology::delete(  )
```







---

### update



```php
DeviceTechnology::update(  ): string
```







---

### create



```php
DeviceTechnology::create(  ): mixed
```







---

### endpoint



```php
DeviceTechnology::endpoint(  ): string
```







---

### uri



```php
DeviceTechnology::uri(  ): mixed
```







---

### __construct

ApiObject constructor.

```php
DeviceTechnology::__construct( array $options = array() )
```




**Parameters:**

| Parameter | Type | Description |
|-----------|------|-------------|
| `$options` | **array** |  |




---

### options



```php
DeviceTechnology::options(  ): array
```







---

### read



```php
DeviceTechnology::read(  ): string
```







---

## DoctrineAPCCache

Class DoctrineAPCCache



* Full name: \MediaMath\TerminalOneAPI\Cache\DoctrineAPCCache
* This class implements: \MediaMath\TerminalOneAPI\Infrastructure\Cacheable


### store



```php
DoctrineAPCCache::store(  $key,  $data )
```




**Parameters:**

| Parameter | Type | Description |
|-----------|------|-------------|
| `$key` | **** |  |
| `$data` | **** |  |




---

### retrieve



```php
DoctrineAPCCache::retrieve(  $key ): null
```




**Parameters:**

| Parameter | Type | Description |
|-----------|------|-------------|
| `$key` | **** |  |




---

### __construct

DoctrineAPCCache constructor.

```php
DoctrineAPCCache::__construct( \MediaMath\TerminalOneAPI\Cache\TimePeriod $ttl )
```




**Parameters:**

| Parameter | Type | Description |
|-----------|------|-------------|
| `$ttl` | **\MediaMath\TerminalOneAPI\Cache\TimePeriod** |  |




---

## DoctrineFilesystemCache

Class DoctrineFilesystemCache



* Full name: \MediaMath\TerminalOneAPI\Cache\DoctrineFilesystemCache
* This class implements: \MediaMath\TerminalOneAPI\Infrastructure\Cacheable


### store



```php
DoctrineFilesystemCache::store(  $key,  $data )
```




**Parameters:**

| Parameter | Type | Description |
|-----------|------|-------------|
| `$key` | **** |  |
| `$data` | **** |  |




---

### retrieve



```php
DoctrineFilesystemCache::retrieve(  $key ): null
```




**Parameters:**

| Parameter | Type | Description |
|-----------|------|-------------|
| `$key` | **** |  |




---

### __construct

DoctrineFilesystemCache constructor.

```php
DoctrineFilesystemCache::__construct( \MediaMath\TerminalOneAPI\Cache\TimePeriod $ttl,  $cache_path )
```




**Parameters:**

| Parameter | Type | Description |
|-----------|------|-------------|
| `$ttl` | **\MediaMath\TerminalOneAPI\Cache\TimePeriod** |  |
| `$cache_path` | **** |  |




---

## DoctrineMemcacheCache

Class DoctrineMemcacheCache



* Full name: \MediaMath\TerminalOneAPI\Cache\DoctrineMemcacheCache
* This class implements: \MediaMath\TerminalOneAPI\Infrastructure\Cacheable


### store



```php
DoctrineMemcacheCache::store(  $key,  $data )
```




**Parameters:**

| Parameter | Type | Description |
|-----------|------|-------------|
| `$key` | **** |  |
| `$data` | **** |  |




---

### retrieve



```php
DoctrineMemcacheCache::retrieve(  $key ): null
```




**Parameters:**

| Parameter | Type | Description |
|-----------|------|-------------|
| `$key` | **** |  |




---

### __construct

DoctrineMemcacheCache constructor.

```php
DoctrineMemcacheCache::__construct( \MediaMath\TerminalOneAPI\Cache\TimePeriod $ttl, string $host = &#039;127.0.0.1&#039;, integer $port = 11211, integer $timeout = 1 )
```




**Parameters:**

| Parameter | Type | Description |
|-----------|------|-------------|
| `$ttl` | **\MediaMath\TerminalOneAPI\Cache\TimePeriod** |  |
| `$host` | **string** |  |
| `$port` | **integer** |  |
| `$timeout` | **integer** |  |




---

## DoctrineMemcachedCache

Class DoctrineMemcachedCache



* Full name: \MediaMath\TerminalOneAPI\Cache\DoctrineMemcachedCache
* This class implements: \MediaMath\TerminalOneAPI\Infrastructure\Cacheable


### store



```php
DoctrineMemcachedCache::store(  $key,  $data )
```




**Parameters:**

| Parameter | Type | Description |
|-----------|------|-------------|
| `$key` | **** |  |
| `$data` | **** |  |




---

### retrieve



```php
DoctrineMemcachedCache::retrieve(  $key ): null
```




**Parameters:**

| Parameter | Type | Description |
|-----------|------|-------------|
| `$key` | **** |  |




---

### __construct

DoctrineMemcachedCache constructor.

```php
DoctrineMemcachedCache::__construct( \MediaMath\TerminalOneAPI\Cache\TimePeriod $ttl, string $pool = &#039;t1_api&#039; )
```




**Parameters:**

| Parameter | Type | Description |
|-----------|------|-------------|
| `$ttl` | **\MediaMath\TerminalOneAPI\Cache\TimePeriod** |  |
| `$pool` | **string** |  |




---

## DoctrineXCacheCache

Class DoctrineXCacheCache



* Full name: \MediaMath\TerminalOneAPI\Cache\DoctrineXCacheCache
* This class implements: \MediaMath\TerminalOneAPI\Infrastructure\Cacheable


### store



```php
DoctrineXCacheCache::store(  $key,  $data )
```




**Parameters:**

| Parameter | Type | Description |
|-----------|------|-------------|
| `$key` | **** |  |
| `$data` | **** |  |




---

### retrieve



```php
DoctrineXCacheCache::retrieve(  $key ): null
```




**Parameters:**

| Parameter | Type | Description |
|-----------|------|-------------|
| `$key` | **** |  |




---

### __construct

DoctrineXCacheCache constructor.

```php
DoctrineXCacheCache::__construct( \MediaMath\TerminalOneAPI\Cache\TimePeriod $ttl )
```




**Parameters:**

| Parameter | Type | Description |
|-----------|------|-------------|
| `$ttl` | **\MediaMath\TerminalOneAPI\Cache\TimePeriod** |  |




---

## EventPixelLoad

Class EventPixelLoad



* Full name: \MediaMath\TerminalOneAPI\Reporting\EventPixelLoad
* Parent class: \MediaMath\TerminalOneAPI\Infrastructure\ReportingApiObject
* This class implements: \MediaMath\TerminalOneAPI\Infrastructure\Endpoint


### create



```php
EventPixelLoad::create(  ): mixed
```







---

### delete



```php
EventPixelLoad::delete(  )
```







---

### update



```php
EventPixelLoad::update(  ): string
```







---

### endpoint



```php
EventPixelLoad::endpoint(  ): string
```







---

### uri



```php
EventPixelLoad::uri(  ): mixed
```







---

### __construct

ApiObject constructor.

```php
EventPixelLoad::__construct( array $options = array() )
```




**Parameters:**

| Parameter | Type | Description |
|-----------|------|-------------|
| `$options` | **array** |  |




---

### options



```php
EventPixelLoad::options(  ): array
```







---

### read



```php
EventPixelLoad::read(  ): string
```







---

## Geo

Class Geo



* Full name: \MediaMath\TerminalOneAPI\Reporting\Geo
* Parent class: \MediaMath\TerminalOneAPI\Infrastructure\ReportingApiObject
* This class implements: \MediaMath\TerminalOneAPI\Infrastructure\Endpoint


### delete



```php
Geo::delete(  )
```







---

### update



```php
Geo::update(  ): string
```







---

### create



```php
Geo::create(  ): mixed
```







---

### endpoint



```php
Geo::endpoint(  ): string
```







---

### uri



```php
Geo::uri(  ): mixed
```







---

### __construct

ApiObject constructor.

```php
Geo::__construct( array $options = array() )
```




**Parameters:**

| Parameter | Type | Description |
|-----------|------|-------------|
| `$options` | **array** |  |




---

### options



```php
Geo::options(  ): array
```







---

### read



```php
Geo::read(  ): string
```







---

## GuzzleParameterHandler

Class GuzzleParameterHandler



* Full name: \MediaMath\TerminalOneAPI\Transport\GuzzleParameterHandler


### __construct

GuzzleParameterHandler constructor.

```php
GuzzleParameterHandler::__construct( \MediaMath\TerminalOneAPI\Infrastructure\Authenticable $authenticator )
```




**Parameters:**

| Parameter | Type | Description |
|-----------|------|-------------|
| `$authenticator` | **\MediaMath\TerminalOneAPI\Infrastructure\Authenticable** |  |




---

### read



```php
GuzzleParameterHandler::read(  $options,  $uri ): mixed
```




**Parameters:**

| Parameter | Type | Description |
|-----------|------|-------------|
| `$options` | **** |  |
| `$uri` | **** |  |




---

### post



```php
GuzzleParameterHandler::post(  $options ): mixed
```




**Parameters:**

| Parameter | Type | Description |
|-----------|------|-------------|
| `$options` | **** |  |




---

## GuzzleTransporter

Class GuzzleTransporter



* Full name: \MediaMath\TerminalOneAPI\Transport\GuzzleTransporter
* This class implements: \MediaMath\TerminalOneAPI\Infrastructure\Transportable


### __construct

GuzzleTransporter constructor.

```php
GuzzleTransporter::__construct( \MediaMath\TerminalOneAPI\Infrastructure\Authenticable $authenticator )
```




**Parameters:**

| Parameter | Type | Description |
|-----------|------|-------------|
| `$authenticator` | **\MediaMath\TerminalOneAPI\Infrastructure\Authenticable** |  |




---

### read



```php
GuzzleTransporter::read(  $url,  $options ): \MediaMath\TerminalOneAPI\Infrastructure\HttpErrorResponse|\MediaMath\TerminalOneAPI\Infrastructure\HttpResponse
```




**Parameters:**

| Parameter | Type | Description |
|-----------|------|-------------|
| `$url` | **** |  |
| `$options` | **** |  |




---

### create



```php
GuzzleTransporter::create(  $url,  $data ): \MediaMath\TerminalOneAPI\Infrastructure\HttpErrorResponse|\MediaMath\TerminalOneAPI\Infrastructure\HttpResponse
```




**Parameters:**

| Parameter | Type | Description |
|-----------|------|-------------|
| `$url` | **** |  |
| `$data` | **** |  |




---

### update



```php
GuzzleTransporter::update(  $url,  $data ): \MediaMath\TerminalOneAPI\Infrastructure\HttpErrorResponse|\MediaMath\TerminalOneAPI\Infrastructure\HttpResponse
```




**Parameters:**

| Parameter | Type | Description |
|-----------|------|-------------|
| `$url` | **** |  |
| `$data` | **** |  |




---

### authUniqueId



```php
GuzzleTransporter::authUniqueId(  ): mixed
```







---

## HttpErrorResponse

Class HttpErrorResponse



* Full name: \MediaMath\TerminalOneAPI\Infrastructure\HttpErrorResponse
* Parent class: \MediaMath\TerminalOneAPI\Infrastructure\HttpResponse


### __construct

HttpErrorResponse constructor.

```php
HttpErrorResponse::__construct( \MediaMath\TerminalOneAPI\Infrastructure\HttpResponseHeaders $headers,  $body,  $http_code )
```




**Parameters:**

| Parameter | Type | Description |
|-----------|------|-------------|
| `$headers` | **\MediaMath\TerminalOneAPI\Infrastructure\HttpResponseHeaders** |  |
| `$body` | **** |  |
| `$http_code` | **** |  |




---

### headers



```php
HttpErrorResponse::headers(  ): \MediaMath\TerminalOneAPI\Infrastructure\HttpResponseHeaders
```







---

### body



```php
HttpErrorResponse::body(  ): mixed
```







---

### httpCode



```php
HttpErrorResponse::httpCode(  ): mixed
```







---

### errorCode



```php
HttpErrorResponse::errorCode(  ): mixed
```







---

## HttpResponse

Class HttpResponse



* Full name: \MediaMath\TerminalOneAPI\Infrastructure\HttpResponse


### __construct

HttpResponse constructor.

```php
HttpResponse::__construct( \MediaMath\TerminalOneAPI\Infrastructure\HttpResponseHeaders $headers,  $body,  $http_code )
```




**Parameters:**

| Parameter | Type | Description |
|-----------|------|-------------|
| `$headers` | **\MediaMath\TerminalOneAPI\Infrastructure\HttpResponseHeaders** |  |
| `$body` | **** |  |
| `$http_code` | **** |  |




---

### headers



```php
HttpResponse::headers(  ): \MediaMath\TerminalOneAPI\Infrastructure\HttpResponseHeaders
```







---

### body



```php
HttpResponse::body(  ): mixed
```







---

### httpCode



```php
HttpResponse::httpCode(  ): mixed
```







---

## HttpResponseHeaders

Class HttpResponseHeaders



* Full name: \MediaMath\TerminalOneAPI\Infrastructure\HttpResponseHeaders


### __construct

HttpResponseHeaders constructor.

```php
HttpResponseHeaders::__construct( array $meta = array() )
```




**Parameters:**

| Parameter | Type | Description |
|-----------|------|-------------|
| `$meta` | **array** |  |




---

### cacheControl



```php
HttpResponseHeaders::cacheControl(  ): mixed
```







---

### contentType



```php
HttpResponseHeaders::contentType(  ): mixed
```







---

### date



```php
HttpResponseHeaders::date(  ): mixed
```







---

### expires



```php
HttpResponseHeaders::expires(  ): mixed
```







---

### lastModified



```php
HttpResponseHeaders::lastModified(  ): mixed
```







---

### server



```php
HttpResponseHeaders::server(  ): mixed
```







---

### vary



```php
HttpResponseHeaders::vary(  ): mixed
```







---

### xCatalyst



```php
HttpResponseHeaders::xCatalyst(  ): mixed
```







---

### xMasheryResponder



```php
HttpResponseHeaders::xMasheryResponder(  ): mixed
```







---

### transferEncoding



```php
HttpResponseHeaders::transferEncoding(  ): mixed
```







---

### connection



```php
HttpResponseHeaders::connection(  ): mixed
```







---

## JSONResponseDecoder

Class JSONResponseDecoder



* Full name: \MediaMath\TerminalOneAPI\Decoder\JSONResponseDecoder
* This class implements: \MediaMath\TerminalOneAPI\Infrastructure\Decodable


### decode



```php
JSONResponseDecoder::decode( \MediaMath\TerminalOneAPI\Infrastructure\HttpResponse $api_response ): \MediaMath\TerminalOneAPI\Infrastructure\ApiResponse
```




**Parameters:**

| Parameter | Type | Description |
|-----------|------|-------------|
| `$api_response` | **\MediaMath\TerminalOneAPI\Infrastructure\HttpResponse** |  |




---

## LoginFailedException

Class LoginFailedException



* Full name: \MediaMath\TerminalOneAPI\Exception\LoginFailedException
* Parent class: 


### __construct

LoginFailedException constructor.

```php
LoginFailedException::__construct( string $message, integer $code, \MediaMath\TerminalOneAPI\Exception\Exception|null $previous = null )
```




**Parameters:**

| Parameter | Type | Description |
|-----------|------|-------------|
| `$message` | **string** |  |
| `$code` | **integer** |  |
| `$previous` | **\MediaMath\TerminalOneAPI\Exception\Exception&#124;null** |  |




---

## Meta

Class Meta



* Full name: \MediaMath\TerminalOneAPI\Reporting\Meta
* Parent class: \MediaMath\TerminalOneAPI\Infrastructure\ReportingApiObject
* This class implements: \MediaMath\TerminalOneAPI\Infrastructure\Endpoint


### delete



```php
Meta::delete(  )
```







---

### update



```php
Meta::update(  ): string
```







---

### create



```php
Meta::create(  ): mixed
```







---

### endpoint



```php
Meta::endpoint(  ): string
```







---

### uri



```php
Meta::uri(  ): mixed
```







---

### __construct

ApiObject constructor.

```php
Meta::__construct( array $options = array() )
```




**Parameters:**

| Parameter | Type | Description |
|-----------|------|-------------|
| `$options` | **array** |  |




---

### options



```php
Meta::options(  ): array
```







---

### read



```php
Meta::read(  ): string
```







---

## OAuthAuth

Class OAuthAuth



* Full name: \MediaMath\TerminalOneAPI\Auth\OAuthAuth
* This class implements: \MediaMath\TerminalOneAPI\Infrastructure\OAuthAuthenticable


### __construct

OAuthAuth constructor.

```php
OAuthAuth::__construct(  $api_key,  $token )
```




**Parameters:**

| Parameter | Type | Description |
|-----------|------|-------------|
| `$api_key` | **** |  |
| `$token` | **** |  |




---

### headers



```php
OAuthAuth::headers(  ): array
```







---

### queryStringParams



```php
OAuthAuth::queryStringParams(  ): array
```







---

### authUniqueId



```php
OAuthAuth::authUniqueId(  ): string
```







---

## Organization

Class Organization



* Full name: \MediaMath\TerminalOneAPI\Management\Organization
* Parent class: \MediaMath\TerminalOneAPI\Infrastructure\ManagementApiObject
* This class implements: \MediaMath\TerminalOneAPI\Infrastructure\Endpoint


### delete



```php
Organization::delete(  )
```







---

### create



```php
Organization::create(  ): mixed
```







---

### endpoint



```php
Organization::endpoint(  ): string
```







---

### uri



```php
Organization::uri(  ): mixed
```







---

### __construct

ApiObject constructor.

```php
Organization::__construct( array $options = array() )
```




**Parameters:**

| Parameter | Type | Description |
|-----------|------|-------------|
| `$options` | **array** |  |




---

### options



```php
Organization::options(  ): array
```







---

### read



```php
Organization::read(  ): string
```







---

### update



```php
Organization::update(  ): string
```







---

## Pagination

Class Pagination



* Full name: \MediaMath\TerminalOneAPI\Pagination\Pagination
* This class implements: \MediaMath\TerminalOneAPI\Infrastructure\Paginatable


### __construct

Pagination constructor.

```php
Pagination::__construct( \MediaMath\TerminalOneAPI\Infrastructure\ApiObject $endpoint, \MediaMath\TerminalOneAPI\Infrastructure\Decodable $decoder, \MediaMath\TerminalOneAPI\Infrastructure\Clientable $api_client )
```




**Parameters:**

| Parameter | Type | Description |
|-----------|------|-------------|
| `$endpoint` | **\MediaMath\TerminalOneAPI\Infrastructure\ApiObject** |  |
| `$decoder` | **\MediaMath\TerminalOneAPI\Infrastructure\Decodable** |  |
| `$api_client` | **\MediaMath\TerminalOneAPI\Infrastructure\Clientable** |  |




---

### page



```php
Pagination::page(  $page_number ): mixed
```




**Parameters:**

| Parameter | Type | Description |
|-----------|------|-------------|
| `$page_number` | **** |  |




---

### previous



```php
Pagination::previous(  ): mixed
```







---

### next



```php
Pagination::next(  ): mixed
```







---

### first



```php
Pagination::first(  ): mixed
```







---

### last



```php
Pagination::last(  ): mixed
```







---

### numPages



```php
Pagination::numPages(  ): integer
```







---

### numResults



```php
Pagination::numResults(  ): null
```







---

## Performance

Class Performance



* Full name: \MediaMath\TerminalOneAPI\Reporting\Performance
* Parent class: \MediaMath\TerminalOneAPI\Infrastructure\ReportingApiObject
* This class implements: \MediaMath\TerminalOneAPI\Infrastructure\Endpoint


### delete



```php
Performance::delete(  )
```







---

### update



```php
Performance::update(  ): string
```







---

### create



```php
Performance::create(  ): mixed
```







---

### endpoint



```php
Performance::endpoint(  ): string
```







---

### uri



```php
Performance::uri(  ): mixed
```







---

### __construct

ApiObject constructor.

```php
Performance::__construct( array $options = array() )
```




**Parameters:**

| Parameter | Type | Description |
|-----------|------|-------------|
| `$options` | **array** |  |




---

### options



```php
Performance::options(  ): array
```







---

### read



```php
Performance::read(  ): string
```







---

## PixelBundle

Class PixelBundle



* Full name: \MediaMath\TerminalOneAPI\Management\PixelBundle
* Parent class: \MediaMath\TerminalOneAPI\Infrastructure\ManagementApiObject
* This class implements: \MediaMath\TerminalOneAPI\Infrastructure\Endpoint


### delete



```php
PixelBundle::delete(  )
```







---

### endpoint



```php
PixelBundle::endpoint(  ): string
```







---

### uri



```php
PixelBundle::uri(  ): mixed
```







---

### __construct

ApiObject constructor.

```php
PixelBundle::__construct( array $options = array() )
```




**Parameters:**

| Parameter | Type | Description |
|-----------|------|-------------|
| `$options` | **array** |  |




---

### options



```php
PixelBundle::options(  ): array
```







---

### create



```php
PixelBundle::create(  ): mixed
```







---

### read



```php
PixelBundle::read(  ): string
```







---

### update



```php
PixelBundle::update(  ): string
```







---

## PixelBundle

Class PixelBundle



* Full name: \MediaMath\TerminalOneAPI\Management\Targeting\PixelBundle
* Parent class: \MediaMath\TerminalOneAPI\Infrastructure\ManagementApiObject
* This class implements: \MediaMath\TerminalOneAPI\Infrastructure\Endpoint


### update



```php
PixelBundle::update(  ): string
```







---

### delete



```php
PixelBundle::delete(  )
```







---

### create



```php
PixelBundle::create(  ): mixed
```







---

### endpoint



```php
PixelBundle::endpoint(  ): string
```







---

### uri



```php
PixelBundle::uri(  ): mixed
```







---

### __construct

ApiObject constructor.

```php
PixelBundle::__construct( array $options = array() )
```




**Parameters:**

| Parameter | Type | Description |
|-----------|------|-------------|
| `$options` | **array** |  |




---

### options



```php
PixelBundle::options(  ): array
```







---

### read



```php
PixelBundle::read(  ): string
```







---

## PlacementSlot

Class PlacementSlot



* Full name: \MediaMath\TerminalOneAPI\Management\PlacementSlot
* Parent class: \MediaMath\TerminalOneAPI\Infrastructure\ManagementApiObject
* This class implements: \MediaMath\TerminalOneAPI\Infrastructure\Endpoint


### delete



```php
PlacementSlot::delete(  )
```







---

### update



```php
PlacementSlot::update(  ): string
```







---

### endpoint



```php
PlacementSlot::endpoint(  ): string
```







---

### uri



```php
PlacementSlot::uri(  ): mixed
```







---

### __construct

ApiObject constructor.

```php
PlacementSlot::__construct( array $options = array() )
```




**Parameters:**

| Parameter | Type | Description |
|-----------|------|-------------|
| `$options` | **array** |  |




---

### options



```php
PlacementSlot::options(  ): array
```







---

### create



```php
PlacementSlot::create(  ): mixed
```







---

### read



```php
PlacementSlot::read(  ): string
```







---

## PostalCode

Class PostalCode



* Full name: \MediaMath\TerminalOneAPI\Reporting\PostalCode
* Parent class: \MediaMath\TerminalOneAPI\Infrastructure\ReportingApiObject
* This class implements: \MediaMath\TerminalOneAPI\Infrastructure\Endpoint


### delete



```php
PostalCode::delete(  )
```







---

### update



```php
PostalCode::update(  ): string
```







---

### create



```php
PostalCode::create(  ): mixed
```







---

### endpoint



```php
PostalCode::endpoint(  ): string
```







---

### uri



```php
PostalCode::uri(  ): mixed
```







---

### __construct

ApiObject constructor.

```php
PostalCode::__construct( array $options = array() )
```




**Parameters:**

| Parameter | Type | Description |
|-----------|------|-------------|
| `$options` | **array** |  |




---

### options



```php
PostalCode::options(  ): array
```







---

### read



```php
PostalCode::read(  ): string
```







---

## Publisher

Class Publisher



* Full name: \MediaMath\TerminalOneAPI\Management\Publisher
* Parent class: \MediaMath\TerminalOneAPI\Infrastructure\ManagementApiObject
* This class implements: \MediaMath\TerminalOneAPI\Infrastructure\Endpoint


### delete



```php
Publisher::delete(  )
```







---

### update



```php
Publisher::update(  ): string
```







---

### endpoint



```php
Publisher::endpoint(  ): string
```







---

### uri



```php
Publisher::uri(  ): mixed
```







---

### __construct

ApiObject constructor.

```php
Publisher::__construct( array $options = array() )
```




**Parameters:**

| Parameter | Type | Description |
|-----------|------|-------------|
| `$options` | **array** |  |




---

### options



```php
Publisher::options(  ): array
```







---

### create



```php
Publisher::create(  ): mixed
```







---

### read



```php
Publisher::read(  ): string
```







---

## PublisherSite

Class PublisherSite



* Full name: \MediaMath\TerminalOneAPI\Management\PublisherSite
* Parent class: \MediaMath\TerminalOneAPI\Infrastructure\ManagementApiObject
* This class implements: \MediaMath\TerminalOneAPI\Infrastructure\Endpoint


### delete



```php
PublisherSite::delete(  )
```







---

### update



```php
PublisherSite::update(  ): string
```







---

### endpoint



```php
PublisherSite::endpoint(  ): string
```







---

### uri



```php
PublisherSite::uri(  ): mixed
```







---

### __construct

ApiObject constructor.

```php
PublisherSite::__construct( array $options = array() )
```




**Parameters:**

| Parameter | Type | Description |
|-----------|------|-------------|
| `$options` | **array** |  |




---

### options



```php
PublisherSite::options(  ): array
```







---

### create



```php
PublisherSite::create(  ): mixed
```







---

### read



```php
PublisherSite::read(  ): string
```







---

## Pulse

Class Pulse



* Full name: \MediaMath\TerminalOneAPI\Reporting\Pulse
* Parent class: \MediaMath\TerminalOneAPI\Infrastructure\ReportingApiObject
* This class implements: \MediaMath\TerminalOneAPI\Infrastructure\Endpoint


### delete



```php
Pulse::delete(  )
```







---

### update



```php
Pulse::update(  ): string
```







---

### create



```php
Pulse::create(  ): mixed
```







---

### endpoint



```php
Pulse::endpoint(  ): string
```







---

### uri



```php
Pulse::uri(  ): mixed
```







---

### __construct

ApiObject constructor.

```php
Pulse::__construct( array $options = array() )
```




**Parameters:**

| Parameter | Type | Description |
|-----------|------|-------------|
| `$options` | **array** |  |




---

### options



```php
Pulse::options(  ): array
```







---

### read



```php
Pulse::read(  ): string
```







---

## ReachFrequency

Class ReachFrequency



* Full name: \MediaMath\TerminalOneAPI\Reporting\ReachFrequency
* Parent class: \MediaMath\TerminalOneAPI\Infrastructure\ReportingApiObject
* This class implements: \MediaMath\TerminalOneAPI\Infrastructure\Endpoint


### delete



```php
ReachFrequency::delete(  )
```







---

### update



```php
ReachFrequency::update(  ): string
```







---

### create



```php
ReachFrequency::create(  ): mixed
```







---

### endpoint



```php
ReachFrequency::endpoint(  ): string
```







---

### uri



```php
ReachFrequency::uri(  ): mixed
```







---

### __construct

ApiObject constructor.

```php
ReachFrequency::__construct( array $options = array() )
```




**Parameters:**

| Parameter | Type | Description |
|-----------|------|-------------|
| `$options` | **array** |  |




---

### options



```php
ReachFrequency::options(  ): array
```







---

### read



```php
ReachFrequency::read(  ): string
```







---

## Session

Class Session



* Full name: \MediaMath\TerminalOneAPI\Management\Session
* Parent class: \MediaMath\TerminalOneAPI\Infrastructure\ManagementApiObject
* This class implements: \MediaMath\TerminalOneAPI\Infrastructure\Endpoint


### create



```php
Session::create(  ): mixed
```







---

### delete



```php
Session::delete(  )
```







---

### update



```php
Session::update(  ): string
```







---

### endpoint



```php
Session::endpoint(  ): string
```







---

### uri



```php
Session::uri(  ): mixed
```







---

### __construct

ApiObject constructor.

```php
Session::__construct( array $options = array() )
```




**Parameters:**

| Parameter | Type | Description |
|-----------|------|-------------|
| `$options` | **array** |  |




---

### options



```php
Session::options(  ): array
```







---

### read



```php
Session::read(  ): string
```







---

## SiteList

Class SiteList



* Full name: \MediaMath\TerminalOneAPI\Management\SiteList
* Parent class: \MediaMath\TerminalOneAPI\Infrastructure\ManagementApiObject
* This class implements: \MediaMath\TerminalOneAPI\Infrastructure\Endpoint


### delete



```php
SiteList::delete(  )
```







---

### create



```php
SiteList::create(  ): mixed
```







---

### endpoint



```php
SiteList::endpoint(  ): string
```







---

### uri



```php
SiteList::uri(  ): mixed
```







---

### __construct

ApiObject constructor.

```php
SiteList::__construct( array $options = array() )
```




**Parameters:**

| Parameter | Type | Description |
|-----------|------|-------------|
| `$options` | **array** |  |




---

### options



```php
SiteList::options(  ): array
```







---

### read



```php
SiteList::read(  ): string
```







---

### update



```php
SiteList::update(  ): string
```







---

### download



```php
SiteList::download(  ): string
```







---

### upload



```php
SiteList::upload(  ): string
```







---

## SiteListAssignment

Class SiteListAssignment



* Full name: \MediaMath\TerminalOneAPI\Management\SiteListAssignment
* Parent class: \MediaMath\TerminalOneAPI\Infrastructure\ManagementApiObject
* This class implements: \MediaMath\TerminalOneAPI\Infrastructure\Endpoint


### create



```php
SiteListAssignment::create(  ): mixed
```







---

### update



```php
SiteListAssignment::update(  ): string
```







---

### delete



```php
SiteListAssignment::delete(  )
```







---

### endpoint



```php
SiteListAssignment::endpoint(  ): string
```







---

### uri



```php
SiteListAssignment::uri(  ): mixed
```







---

### __construct

ApiObject constructor.

```php
SiteListAssignment::__construct( array $options = array() )
```




**Parameters:**

| Parameter | Type | Description |
|-----------|------|-------------|
| `$options` | **array** |  |




---

### options



```php
SiteListAssignment::options(  ): array
```







---

### read



```php
SiteListAssignment::read(  ): mixed
```







---

## SitePlacement

Class SitePlacement



* Full name: \MediaMath\TerminalOneAPI\Management\SitePlacement
* Parent class: \MediaMath\TerminalOneAPI\Infrastructure\ManagementApiObject
* This class implements: \MediaMath\TerminalOneAPI\Infrastructure\Endpoint


### delete



```php
SitePlacement::delete(  )
```







---

### update



```php
SitePlacement::update(  ): string
```







---

### endpoint



```php
SitePlacement::endpoint(  ): string
```







---

### uri



```php
SitePlacement::uri(  ): mixed
```







---

### __construct

ApiObject constructor.

```php
SitePlacement::__construct( array $options = array() )
```




**Parameters:**

| Parameter | Type | Description |
|-----------|------|-------------|
| `$options` | **array** |  |




---

### options



```php
SitePlacement::options(  ): array
```







---

### create



```php
SitePlacement::create(  ): mixed
```







---

### read



```php
SitePlacement::read(  ): string
```







---

## SiteTransparency

Class SiteTransparency



* Full name: \MediaMath\TerminalOneAPI\Reporting\SiteTransparency
* Parent class: \MediaMath\TerminalOneAPI\Infrastructure\ReportingApiObject
* This class implements: \MediaMath\TerminalOneAPI\Infrastructure\Endpoint


### delete



```php
SiteTransparency::delete(  )
```







---

### update



```php
SiteTransparency::update(  ): string
```







---

### create



```php
SiteTransparency::create(  ): mixed
```







---

### endpoint



```php
SiteTransparency::endpoint(  ): string
```







---

### uri



```php
SiteTransparency::uri(  ): mixed
```







---

### __construct

ApiObject constructor.

```php
SiteTransparency::__construct( array $options = array() )
```




**Parameters:**

| Parameter | Type | Description |
|-----------|------|-------------|
| `$options` | **array** |  |




---

### options



```php
SiteTransparency::options(  ): array
```







---

### read



```php
SiteTransparency::read(  ): string
```







---

## Strategy

Class Strategy



* Full name: \MediaMath\TerminalOneAPI\Management\Strategy
* Parent class: \MediaMath\TerminalOneAPI\Infrastructure\ManagementApiObject
* This class implements: \MediaMath\TerminalOneAPI\Infrastructure\Endpoint


### delete



```php
Strategy::delete(  )
```







---

### endpoint



```php
Strategy::endpoint(  ): string
```







---

### uri



```php
Strategy::uri(  ): mixed
```







---

### __construct

ApiObject constructor.

```php
Strategy::__construct( array $options = array() )
```




**Parameters:**

| Parameter | Type | Description |
|-----------|------|-------------|
| `$options` | **array** |  |




---

### options



```php
Strategy::options(  ): array
```







---

### create



```php
Strategy::create(  ): mixed
```







---

### read



```php
Strategy::read(  ): string
```







---

### update



```php
Strategy::update(  ): string
```







---

## StrategyAudienceSegment

Class StrategyAudienceSegment



* Full name: \MediaMath\TerminalOneAPI\Management\Targeting\StrategyAudienceSegment
* Parent class: \MediaMath\TerminalOneAPI\Infrastructure\ManagementApiObject
* This class implements: \MediaMath\TerminalOneAPI\Infrastructure\Endpoint


### delete



```php
StrategyAudienceSegment::delete(  )
```







---

### endpoint



```php
StrategyAudienceSegment::endpoint(  ): string
```







---

### uri



```php
StrategyAudienceSegment::uri(  ): mixed
```







---

### __construct

ApiObject constructor.

```php
StrategyAudienceSegment::__construct( array $options = array() )
```




**Parameters:**

| Parameter | Type | Description |
|-----------|------|-------------|
| `$options` | **array** |  |




---

### options



```php
StrategyAudienceSegment::options(  ): array
```







---

### create



```php
StrategyAudienceSegment::create(  ): mixed
```







---

### read



```php
StrategyAudienceSegment::read(  ): mixed
```







---

### update



```php
StrategyAudienceSegment::update(  ): mixed
```







---

## StrategyConcept

Class StrategyConcept



* Full name: \MediaMath\TerminalOneAPI\Management\StrategyConcept
* Parent class: \MediaMath\TerminalOneAPI\Infrastructure\ManagementApiObject
* This class implements: \MediaMath\TerminalOneAPI\Infrastructure\Endpoint


### update



```php
StrategyConcept::update(  ): string
```







---

### endpoint



```php
StrategyConcept::endpoint(  ): string
```







---

### uri



```php
StrategyConcept::uri(  ): mixed
```







---

### __construct

ApiObject constructor.

```php
StrategyConcept::__construct( array $options = array() )
```




**Parameters:**

| Parameter | Type | Description |
|-----------|------|-------------|
| `$options` | **array** |  |




---

### options



```php
StrategyConcept::options(  ): array
```







---

### create



```php
StrategyConcept::create(  ): mixed
```







---

### read



```php
StrategyConcept::read(  ): mixed
```







---

### delete



```php
StrategyConcept::delete(  ): string
```







---

## StrategyDayPart

Class StrategyDayPart



* Full name: \MediaMath\TerminalOneAPI\Management\Targeting\StrategyDayPart
* Parent class: \MediaMath\TerminalOneAPI\Infrastructure\ManagementApiObject
* This class implements: \MediaMath\TerminalOneAPI\Infrastructure\Endpoint


### update



```php
StrategyDayPart::update(  ): string
```







---

### endpoint



```php
StrategyDayPart::endpoint(  ): string
```







---

### uri



```php
StrategyDayPart::uri(  ): mixed
```







---

### __construct

ApiObject constructor.

```php
StrategyDayPart::__construct( array $options = array() )
```




**Parameters:**

| Parameter | Type | Description |
|-----------|------|-------------|
| `$options` | **array** |  |




---

### options



```php
StrategyDayPart::options(  ): array
```







---

### create



```php
StrategyDayPart::create(  ): mixed
```







---

### read



```php
StrategyDayPart::read(  ): mixed
```







---

### delete



```php
StrategyDayPart::delete(  ): string
```







---

## StrategyDomainRestriction

Class StrategyDomainRestriction



* Full name: \MediaMath\TerminalOneAPI\Management\StrategyDomainRestriction
* Parent class: \MediaMath\TerminalOneAPI\Infrastructure\ManagementApiObject
* This class implements: \MediaMath\TerminalOneAPI\Infrastructure\Endpoint


### update



```php
StrategyDomainRestriction::update(  ): string
```







---

### delete



```php
StrategyDomainRestriction::delete(  )
```







---

### endpoint



```php
StrategyDomainRestriction::endpoint(  ): string
```







---

### uri



```php
StrategyDomainRestriction::uri(  ): mixed
```







---

### __construct

ApiObject constructor.

```php
StrategyDomainRestriction::__construct( array $options = array() )
```




**Parameters:**

| Parameter | Type | Description |
|-----------|------|-------------|
| `$options` | **array** |  |




---

### options



```php
StrategyDomainRestriction::options(  ): array
```







---

### create



```php
StrategyDomainRestriction::create(  ): mixed
```







---

### read



```php
StrategyDomainRestriction::read(  ): string
```







---

## StrategyRetiredAudienceSegment

Class StrategyRetiredAudienceSegment



* Full name: \MediaMath\TerminalOneAPI\Management\Targeting\StrategyRetiredAudienceSegment
* Parent class: \MediaMath\TerminalOneAPI\Infrastructure\ManagementApiObject
* This class implements: \MediaMath\TerminalOneAPI\Infrastructure\Endpoint


### delete



```php
StrategyRetiredAudienceSegment::delete(  )
```







---

### create



```php
StrategyRetiredAudienceSegment::create(  ): mixed
```







---

### update



```php
StrategyRetiredAudienceSegment::update(  ): string
```







---

### endpoint



```php
StrategyRetiredAudienceSegment::endpoint(  ): string
```







---

### uri



```php
StrategyRetiredAudienceSegment::uri(  ): mixed
```







---

### __construct

ApiObject constructor.

```php
StrategyRetiredAudienceSegment::__construct( array $options = array() )
```




**Parameters:**

| Parameter | Type | Description |
|-----------|------|-------------|
| `$options` | **array** |  |




---

### options



```php
StrategyRetiredAudienceSegment::options(  ): array
```







---

### read



```php
StrategyRetiredAudienceSegment::read(  ): mixed
```







---

## StrategyRetiredTargetingSegment

Class StrategyRetiredTargetingSegment



* Full name: \MediaMath\TerminalOneAPI\Management\Targeting\StrategyRetiredTargetingSegment
* Parent class: \MediaMath\TerminalOneAPI\Infrastructure\ManagementApiObject
* This class implements: \MediaMath\TerminalOneAPI\Infrastructure\Endpoint


### delete



```php
StrategyRetiredTargetingSegment::delete(  )
```







---

### create



```php
StrategyRetiredTargetingSegment::create(  ): mixed
```







---

### update



```php
StrategyRetiredTargetingSegment::update(  ): string
```







---

### endpoint



```php
StrategyRetiredTargetingSegment::endpoint(  ): string
```







---

### uri



```php
StrategyRetiredTargetingSegment::uri(  ): mixed
```







---

### __construct

ApiObject constructor.

```php
StrategyRetiredTargetingSegment::__construct( array $options = array() )
```




**Parameters:**

| Parameter | Type | Description |
|-----------|------|-------------|
| `$options` | **array** |  |




---

### options



```php
StrategyRetiredTargetingSegment::options(  ): array
```







---

### read



```php
StrategyRetiredTargetingSegment::read(  ): mixed
```







---

## StrategySiteList

Class StrategySiteList



* Full name: \MediaMath\TerminalOneAPI\Management\StrategySiteList
* Parent class: \MediaMath\TerminalOneAPI\Infrastructure\ManagementApiObject
* This class implements: \MediaMath\TerminalOneAPI\Infrastructure\Endpoint


### delete



```php
StrategySiteList::delete(  )
```







---

### endpoint



```php
StrategySiteList::endpoint(  ): string
```







---

### uri



```php
StrategySiteList::uri(  ): mixed
```







---

### __construct

ApiObject constructor.

```php
StrategySiteList::__construct( array $options = array() )
```




**Parameters:**

| Parameter | Type | Description |
|-----------|------|-------------|
| `$options` | **array** |  |




---

### options



```php
StrategySiteList::options(  ): array
```







---

### create



```php
StrategySiteList::create(  ): mixed
```







---

### read



```php
StrategySiteList::read(  ): string
```







---

### update



```php
StrategySiteList::update(  ): string
```







---

## StrategySupply

Class StrategySupply



* Full name: \MediaMath\TerminalOneAPI\Management\StrategySupply
* Parent class: \MediaMath\TerminalOneAPI\Infrastructure\ManagementApiObject
* This class implements: \MediaMath\TerminalOneAPI\Infrastructure\Endpoint


### delete



```php
StrategySupply::delete(  )
```







---

### endpoint



```php
StrategySupply::endpoint(  ): string
```







---

### uri



```php
StrategySupply::uri(  ): mixed
```







---

### __construct

ApiObject constructor.

```php
StrategySupply::__construct( array $options = array() )
```




**Parameters:**

| Parameter | Type | Description |
|-----------|------|-------------|
| `$options` | **array** |  |




---

### options



```php
StrategySupply::options(  ): array
```







---

### create



```php
StrategySupply::create(  ): mixed
```







---

### read



```php
StrategySupply::read(  ): mixed
```







---

### update



```php
StrategySupply::update(  ): mixed
```







---

## StrategySupplySource

Class StrategySupplySource



* Full name: \MediaMath\TerminalOneAPI\Management\StrategySupplySource
* Parent class: \MediaMath\TerminalOneAPI\Infrastructure\ManagementApiObject
* This class implements: \MediaMath\TerminalOneAPI\Infrastructure\Endpoint


### delete



```php
StrategySupplySource::delete(  )
```







---

### update



```php
StrategySupplySource::update(  ): string
```







---

### read



```php
StrategySupplySource::read(  ): string
```







---

### endpoint



```php
StrategySupplySource::endpoint(  ): string
```







---

### uri



```php
StrategySupplySource::uri(  ): mixed
```







---

### __construct

ApiObject constructor.

```php
StrategySupplySource::__construct( array $options = array() )
```




**Parameters:**

| Parameter | Type | Description |
|-----------|------|-------------|
| `$options` | **array** |  |




---

### options



```php
StrategySupplySource::options(  ): array
```







---

### create



```php
StrategySupplySource::create(  ): mixed
```







---

## StrategyTargetDimension

Class StrategyTargetDimension



* Full name: \MediaMath\TerminalOneAPI\Management\Targeting\StrategyTargetDimension
* Parent class: \MediaMath\TerminalOneAPI\Infrastructure\ManagementApiObject
* This class implements: \MediaMath\TerminalOneAPI\Infrastructure\Endpoint


### update



```php
StrategyTargetDimension::update(  ): string
```







---

### delete



```php
StrategyTargetDimension::delete(  )
```







---

### endpoint



```php
StrategyTargetDimension::endpoint(  ): string
```







---

### uri



```php
StrategyTargetDimension::uri(  ): mixed
```







---

### __construct

ApiObject constructor.

```php
StrategyTargetDimension::__construct( array $options = array() )
```




**Parameters:**

| Parameter | Type | Description |
|-----------|------|-------------|
| `$options` | **array** |  |




---

### options



```php
StrategyTargetDimension::options(  ): array
```







---

### create



```php
StrategyTargetDimension::create(  ): mixed
```







---

### read



```php
StrategyTargetDimension::read(  ): string
```







---

## StrategyTargetingSegment

Class StrategyTargetingSegment



* Full name: \MediaMath\TerminalOneAPI\Management\Targeting\StrategyTargetingSegment
* Parent class: \MediaMath\TerminalOneAPI\Infrastructure\ManagementApiObject
* This class implements: \MediaMath\TerminalOneAPI\Infrastructure\Endpoint


### delete



```php
StrategyTargetingSegment::delete(  )
```







---

### endpoint



```php
StrategyTargetingSegment::endpoint(  ): string
```







---

### uri



```php
StrategyTargetingSegment::uri(  ): mixed
```







---

### __construct

ApiObject constructor.

```php
StrategyTargetingSegment::__construct( array $options = array() )
```




**Parameters:**

| Parameter | Type | Description |
|-----------|------|-------------|
| `$options` | **array** |  |




---

### options



```php
StrategyTargetingSegment::options(  ): array
```







---

### create



```php
StrategyTargetingSegment::create(  ): mixed
```







---

### read



```php
StrategyTargetingSegment::read(  ): mixed
```







---

### update



```php
StrategyTargetingSegment::update(  ): mixed
```







---

## StrategyTargetingSegmentCPM

Class StrategyTargetingSegmentCPM



* Full name: \MediaMath\TerminalOneAPI\Management\Targeting\StrategyTargetingSegmentCPM
* Parent class: \MediaMath\TerminalOneAPI\Infrastructure\ManagementApiObject
* This class implements: \MediaMath\TerminalOneAPI\Infrastructure\Endpoint


### delete



```php
StrategyTargetingSegmentCPM::delete(  )
```







---

### create



```php
StrategyTargetingSegmentCPM::create(  ): mixed
```







---

### update



```php
StrategyTargetingSegmentCPM::update(  ): string
```







---

### endpoint



```php
StrategyTargetingSegmentCPM::endpoint(  ): string
```







---

### uri



```php
StrategyTargetingSegmentCPM::uri(  ): mixed
```







---

### __construct

ApiObject constructor.

```php
StrategyTargetingSegmentCPM::__construct( array $options = array() )
```




**Parameters:**

| Parameter | Type | Description |
|-----------|------|-------------|
| `$options` | **array** |  |




---

### options



```php
StrategyTargetingSegmentCPM::options(  ): array
```







---

### read



```php
StrategyTargetingSegmentCPM::read(  ): mixed
```







---

## SupplySource

Class SupplySource



* Full name: \MediaMath\TerminalOneAPI\Management\SupplySource
* Parent class: \MediaMath\TerminalOneAPI\Infrastructure\ManagementApiObject
* This class implements: \MediaMath\TerminalOneAPI\Infrastructure\Endpoint


### delete



```php
SupplySource::delete(  )
```







---

### update



```php
SupplySource::update(  ): string
```







---

### create



```php
SupplySource::create(  ): mixed
```







---

### endpoint



```php
SupplySource::endpoint(  ): string
```







---

### uri



```php
SupplySource::uri(  ): mixed
```







---

### __construct

ApiObject constructor.

```php
SupplySource::__construct( array $options = array() )
```




**Parameters:**

| Parameter | Type | Description |
|-----------|------|-------------|
| `$options` | **array** |  |




---

### options



```php
SupplySource::options(  ): array
```







---

### read



```php
SupplySource::read(  ): string
```







---

## TargetingSegment

Class TargetingSegment



* Full name: \MediaMath\TerminalOneAPI\Management\Targeting\TargetingSegment
* Parent class: \MediaMath\TerminalOneAPI\Infrastructure\ManagementApiObject
* This class implements: \MediaMath\TerminalOneAPI\Infrastructure\Endpoint


### delete



```php
TargetingSegment::delete(  )
```







---

### create



```php
TargetingSegment::create(  ): mixed
```







---

### update



```php
TargetingSegment::update(  ): string
```







---

### endpoint



```php
TargetingSegment::endpoint(  ): string
```







---

### uri



```php
TargetingSegment::uri(  ): mixed
```







---

### __construct

ApiObject constructor.

```php
TargetingSegment::__construct( array $options = array() )
```




**Parameters:**

| Parameter | Type | Description |
|-----------|------|-------------|
| `$options` | **array** |  |




---

### options



```php
TargetingSegment::options(  ): array
```







---

### read



```php
TargetingSegment::read(  ): string
```







---

## TargetingSegmentObjective

Class TargetingSegmentObjective



* Full name: \MediaMath\TerminalOneAPI\Management\Targeting\TargetingSegmentObjective
* Parent class: \MediaMath\TerminalOneAPI\Infrastructure\ManagementApiObject
* This class implements: \MediaMath\TerminalOneAPI\Infrastructure\Endpoint


### delete



```php
TargetingSegmentObjective::delete(  )
```







---

### create



```php
TargetingSegmentObjective::create(  ): mixed
```







---

### update



```php
TargetingSegmentObjective::update(  ): string
```







---

### endpoint



```php
TargetingSegmentObjective::endpoint(  ): string
```







---

### uri



```php
TargetingSegmentObjective::uri(  ): mixed
```







---

### __construct

ApiObject constructor.

```php
TargetingSegmentObjective::__construct( array $options = array() )
```




**Parameters:**

| Parameter | Type | Description |
|-----------|------|-------------|
| `$options` | **array** |  |




---

### options



```php
TargetingSegmentObjective::options(  ): array
```







---

### read



```php
TargetingSegmentObjective::read(  ): string
```







---

## TargetingVendor

Class TargetingVendor



* Full name: \MediaMath\TerminalOneAPI\Management\Targeting\TargetingVendor
* Parent class: \MediaMath\TerminalOneAPI\Infrastructure\ManagementApiObject
* This class implements: \MediaMath\TerminalOneAPI\Infrastructure\Endpoint


### delete



```php
TargetingVendor::delete(  )
```







---

### create



```php
TargetingVendor::create(  ): mixed
```







---

### update



```php
TargetingVendor::update(  ): string
```







---

### endpoint



```php
TargetingVendor::endpoint(  ): string
```







---

### uri



```php
TargetingVendor::uri(  ): mixed
```







---

### __construct

ApiObject constructor.

```php
TargetingVendor::__construct( array $options = array() )
```




**Parameters:**

| Parameter | Type | Description |
|-----------|------|-------------|
| `$options` | **array** |  |




---

### options



```php
TargetingVendor::options(  ): array
```







---

### read



```php
TargetingVendor::read(  ): string
```







---

## TargetValue

Class TargetValue



* Full name: \MediaMath\TerminalOneAPI\Management\Targeting\TargetValue
* Parent class: \MediaMath\TerminalOneAPI\Infrastructure\ManagementApiObject
* This class implements: \MediaMath\TerminalOneAPI\Infrastructure\Endpoint


### update



```php
TargetValue::update(  ): string
```







---

### create



```php
TargetValue::create(  ): mixed
```







---

### delete



```php
TargetValue::delete(  )
```







---

### endpoint



```php
TargetValue::endpoint(  ): string
```







---

### uri



```php
TargetValue::uri(  ): mixed
```







---

### __construct

ApiObject constructor.

```php
TargetValue::__construct( array $options = array() )
```




**Parameters:**

| Parameter | Type | Description |
|-----------|------|-------------|
| `$options` | **array** |  |




---

### options



```php
TargetValue::options(  ): array
```







---

### read



```php
TargetValue::read(  ): string
```







---

## TimePeriod

Class TimePeriod



* Full name: \MediaMath\TerminalOneAPI\Cache\TimePeriod


### hours



```php
TimePeriod::hours(  $hours ): static
```



* This method is **static**.
**Parameters:**

| Parameter | Type | Description |
|-----------|------|-------------|
| `$hours` | **** |  |




---

### minutes



```php
TimePeriod::minutes(  $minutes ): static
```



* This method is **static**.
**Parameters:**

| Parameter | Type | Description |
|-----------|------|-------------|
| `$minutes` | **** |  |




---

### seconds



```php
TimePeriod::seconds(  $seconds ): static
```



* This method is **static**.
**Parameters:**

| Parameter | Type | Description |
|-----------|------|-------------|
| `$seconds` | **** |  |




---

### inSeconds



```php
TimePeriod::inSeconds(  ): mixed
```







---

## User

Class User



* Full name: \MediaMath\TerminalOneAPI\Management\User
* Parent class: \MediaMath\TerminalOneAPI\Infrastructure\ManagementApiObject
* This class implements: \MediaMath\TerminalOneAPI\Infrastructure\Endpoint


### delete



```php
User::delete(  )
```







---

### endpoint



```php
User::endpoint(  ): string
```







---

### uri



```php
User::uri(  ): mixed
```







---

### __construct

ApiObject constructor.

```php
User::__construct( array $options = array() )
```




**Parameters:**

| Parameter | Type | Description |
|-----------|------|-------------|
| `$options` | **array** |  |




---

### options



```php
User::options(  ): array
```







---

### create



```php
User::create(  ): mixed
```







---

### read



```php
User::read(  ): string
```







---

### update



```php
User::update(  ): string
```







---

## UserPasswordAuth

Class UserPasswordAuth



* Full name: \MediaMath\TerminalOneAPI\Auth\UserPasswordAuth
* This class implements: \MediaMath\TerminalOneAPI\Infrastructure\CookieAuthenticable


### __construct

UserPasswordAuth constructor.

```php
UserPasswordAuth::__construct(  $username,  $password,  $api_key )
```




**Parameters:**

| Parameter | Type | Description |
|-----------|------|-------------|
| `$username` | **** |  |
| `$password` | **** |  |
| `$api_key` | **** |  |




---

### cookieValues



```php
UserPasswordAuth::cookieValues(  ): array
```







---

### authUniqueId



```php
UserPasswordAuth::authUniqueId(  ): null|string
```







---

## UserPermission

Class UserPermission



* Full name: \MediaMath\TerminalOneAPI\Management\UserPermission
* Parent class: \MediaMath\TerminalOneAPI\Infrastructure\ManagementApiObject
* This class implements: \MediaMath\TerminalOneAPI\Infrastructure\Endpoint


### delete



```php
UserPermission::delete(  )
```







---

### endpoint



```php
UserPermission::endpoint(  ): string
```







---

### uri



```php
UserPermission::uri(  ): mixed
```







---

### __construct

ApiObject constructor.

```php
UserPermission::__construct( array $options = array() )
```




**Parameters:**

| Parameter | Type | Description |
|-----------|------|-------------|
| `$options` | **array** |  |




---

### options



```php
UserPermission::options(  ): array
```







---

### create



```php
UserPermission::create(  ): string
```







---

### read



```php
UserPermission::read(  ): string
```







---

### update



```php
UserPermission::update(  ): string
```







---

## UserSetting

Class UserSetting



* Full name: \MediaMath\TerminalOneAPI\Management\UserSetting
* Parent class: \MediaMath\TerminalOneAPI\Infrastructure\ManagementApiObject
* This class implements: \MediaMath\TerminalOneAPI\Infrastructure\Endpoint


### create



```php
UserSetting::create(  ): mixed
```







---

### delete



```php
UserSetting::delete(  )
```







---

### update



```php
UserSetting::update(  ): string
```







---

### endpoint



```php
UserSetting::endpoint(  ): string
```







---

### uri



```php
UserSetting::uri(  ): mixed
```







---

### __construct

ApiObject constructor.

```php
UserSetting::__construct( array $options = array() )
```




**Parameters:**

| Parameter | Type | Description |
|-----------|------|-------------|
| `$options` | **array** |  |




---

### options



```php
UserSetting::options(  ): array
```







---

### read



```php
UserSetting::read(  ): mixed
```







---

## Vertical

Class Vertical



* Full name: \MediaMath\TerminalOneAPI\Management\Vertical
* Parent class: \MediaMath\TerminalOneAPI\Infrastructure\ManagementApiObject
* This class implements: \MediaMath\TerminalOneAPI\Infrastructure\Endpoint


### delete



```php
Vertical::delete(  )
```







---

### update



```php
Vertical::update(  ): string
```







---

### create



```php
Vertical::create(  ): mixed
```







---

### endpoint



```php
Vertical::endpoint(  ): string
```







---

### uri



```php
Vertical::uri(  ): mixed
```







---

### __construct

ApiObject constructor.

```php
Vertical::__construct( array $options = array() )
```




**Parameters:**

| Parameter | Type | Description |
|-----------|------|-------------|
| `$options` | **array** |  |




---

### options



```php
Vertical::options(  ): array
```







---

### read



```php
Vertical::read(  ): string
```







---

## Video

Class Video



* Full name: \MediaMath\TerminalOneAPI\Reporting\Video
* Parent class: \MediaMath\TerminalOneAPI\Infrastructure\ReportingApiObject
* This class implements: \MediaMath\TerminalOneAPI\Infrastructure\Endpoint


### delete



```php
Video::delete(  )
```







---

### update



```php
Video::update(  ): string
```







---

### create



```php
Video::create(  ): mixed
```







---

### endpoint



```php
Video::endpoint(  ): string
```







---

### uri



```php
Video::uri(  ): mixed
```







---

### __construct

ApiObject constructor.

```php
Video::__construct( array $options = array() )
```




**Parameters:**

| Parameter | Type | Description |
|-----------|------|-------------|
| `$options` | **array** |  |




---

### options



```php
Video::options(  ): array
```







---

### read



```php
Video::read(  ): string
```







---

## VideoSiteTransparency

Class VideoSiteTransparency



* Full name: \MediaMath\TerminalOneAPI\Reporting\VideoSiteTransparency
* Parent class: \MediaMath\TerminalOneAPI\Infrastructure\ReportingApiObject
* This class implements: \MediaMath\TerminalOneAPI\Infrastructure\Endpoint


### delete



```php
VideoSiteTransparency::delete(  )
```







---

### update



```php
VideoSiteTransparency::update(  ): string
```







---

### create



```php
VideoSiteTransparency::create(  ): mixed
```







---

### endpoint



```php
VideoSiteTransparency::endpoint(  ): string
```







---

### uri



```php
VideoSiteTransparency::uri(  ): mixed
```







---

### __construct

ApiObject constructor.

```php
VideoSiteTransparency::__construct( array $options = array() )
```




**Parameters:**

| Parameter | Type | Description |
|-----------|------|-------------|
| `$options` | **array** |  |




---

### options



```php
VideoSiteTransparency::options(  ): array
```







---

### read



```php
VideoSiteTransparency::read(  ): string
```







---

## Watermark

Class Watermark



* Full name: \MediaMath\TerminalOneAPI\Reporting\Watermark
* Parent class: \MediaMath\TerminalOneAPI\Infrastructure\ReportingApiObject
* This class implements: \MediaMath\TerminalOneAPI\Infrastructure\Endpoint


### delete



```php
Watermark::delete(  )
```







---

### update



```php
Watermark::update(  ): string
```







---

### create



```php
Watermark::create(  ): mixed
```







---

### endpoint



```php
Watermark::endpoint(  ): string
```







---

### uri



```php
Watermark::uri(  ): mixed
```







---

### __construct

ApiObject constructor.

```php
Watermark::__construct( array $options = array() )
```




**Parameters:**

| Parameter | Type | Description |
|-----------|------|-------------|
| `$options` | **array** |  |




---

### options



```php
Watermark::options(  ): array
```







---

### read



```php
Watermark::read(  ): string
```







---

## XMLResponseDecoder

Class XMLResponseDecoder



* Full name: \MediaMath\TerminalOneAPI\Decoder\XMLResponseDecoder
* This class implements: \MediaMath\TerminalOneAPI\Infrastructure\Decodable


### decode



```php
XMLResponseDecoder::decode( \MediaMath\TerminalOneAPI\Infrastructure\HttpResponse $api_response ): \MediaMath\TerminalOneAPI\Infrastructure\ApiResponse
```




**Parameters:**

| Parameter | Type | Description |
|-----------|------|-------------|
| `$api_response` | **\MediaMath\TerminalOneAPI\Infrastructure\HttpResponse** |  |




---
