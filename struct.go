package arr

type (
	ApprovedRequest struct {
		Id         string `json:"id"`
		Status     string `json:"status"`
		Reason     string `json:"reason"`
		ServiceTel string `json:"serviceTel"`
		AdminId    string `json:"adminId"`
		Verify     string `json:"verify"`
	}
	ApprovedResponse struct {
	}
	GetUserInfoListRequest struct {
		Phone          string `json:"phone"`
		EnterpriseName string `json:"enterpriseName"`
		Source         string `json:"source"`
		Status         string `json:"status"`
		PageSize       string `json:"pageSize"`
		PageNum        string `json:"pageNum"`
		TaxCombinePlan string `json:"taxCombinePlan"`
		AdminId        string `json:"adminId"`
		Verify         string `json:"verify"`
	}
	GetUserInfoListResponse struct {
	}
	GetUserDetailRequest struct {
		Id      string `json:"id"`
		AdminId string `json:"adminId"`
		Verify  string `json:"verify"`
	}
	GetUserDetailResponse struct {
	}
	RegisterRequest struct {
		Id      string `json:"id"`
		AdminId string `json:"adminId"`
		Verify  string `json:"verify"`
	}
	RegisterResponse struct {
	}
	GetOCRInfoRequest struct {
		Url string `json:"url"`
	}
	GetOCRInfoResponse struct {
	}
	IncomingProcessRequest struct {
		UserId             string `json:"userId"`
		MaterialPics       string `json:"materialPics"`
		AppointTime        string `json:"appointTime"`
		ExpressNo          string `json:"expressNo"`
		ExpressCom         string `json:"expressCom"`
		Status             string `json:"status"`
		IsAgent            string `json:"isAgent"`
		AgentPrice         string `json:"agentPrice"`
		SpecialManagerTel  string `json:"specialManagerTel"`
		SpecialManagerName string `json:"specialManagerName"`
		AdminId            string `json:"adminId"`
		Verify             string `json:"verify"`
	}
	IncomingProcessResponse struct {
	}
	GetTaxServiceProcessRequest struct {
		TaxpayerNum string `json:"taxpayerNum"`
		AdminId     string `json:"adminId"`
		Verify      string `json:"verify"`
	}
	GetTaxServiceProcessResponse struct {
	}
	GetTaxServiceInfoRequest struct {
		TaxpayerNum string `json:"taxpayerNum"`
		AdminId     string `json:"adminId"`
		Verify      string `json:"verify"`
	}
	GetTaxServiceInfoResponse struct {
	}
	PurchaseServiceSheetsRequest struct {
		ShopId      string `json:"shopId"`
		ServiceType string `json:"serviceType"`
		AdminId     string `json:"adminId"`
		Verify      string `json:"verify"`
	}
	PurchaseServiceSheetsResponse struct {
	}
	GetSunmiIdRequest struct {
		ShopId  string `json:"shopId"`
		AdminId string `json:"adminId"`
		Verify  string `json:"verify"`
	}
	GetSunmiIdResponse struct {
	}
	GetUserInfoBySourceIdRequest struct {
		Phone    string `json:"phone"`
		SourceId string `json:"sourceId"`
		AdminId  string `json:"adminId"`
		Verify   string `json:"verify"`
	}
	GetUserInfoBySourceIdResponse struct {
	}
	SysnUserInfoRequest struct {
		ShopId string `json:"shopId"`
	}
	SysnUserInfoResponse struct {
	}
	CheckPhoneMatchRequest struct {
		SourceId string `json:"sourceId"`
		Phone    string `json:"phone"`
		AdminId  string `json:"adminId"`
		Verify   string `json:"verify"`
	}
	CheckPhoneMatchResponse struct {
	}
	GetAppiontTimeRequest struct {
		Time string `json:"time"`
	}
	GetAppiontTimeResponse struct {
	}
	UpdateGoodsCodeRequest struct {
	}
	UpdateGoodsCodeResponse struct {
	}
	CheckTaxPayerNumRequest struct {
		TaxpayerNum string `json:"taxpayerNum"`
		AdminId     string `json:"adminId"`
		Verify      string `json:"verify"`
	}
	CheckTaxPayerNumResponse struct {
	}
	GetTaxServiceConfigRequest struct {
	}
	GetTaxServiceConfigResponse struct {
	}
)
