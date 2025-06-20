<template>
  <layouts-header></layouts-header>
  <layouts-sidebar></layouts-sidebar>
  <div class="page-wrapper">
    <div class="content">
      <div class="row">
        <div class="col-md-12">
          <!-- Page Header -->
          <page-header :title="title" />
          <!-- /Page Header -->

          <!-- Settings Menu -->
          <settings-tabs></settings-tabs>
          <!-- /Settings Menu -->

          <div class="row">
            <website-sidebar></website-sidebar>
            <div class="col-xl-9 col-lg-12">
              <!-- Prefixes -->
              <div class="card">
                <div class="card-body">
                  <h4 class="fw-semibold mb-3">Localization</h4>
                  <form @submit.prevent="submitForm">
                    <div class="border-bottom mb-3 pb-3">
                      <h5 class="fw-semibold mb-1">Basic Information</h5>
                      <p>Provide the basic information below</p>
                    </div>
                    <div class="border-bottom mb-3">
                      <div class="row">
                        <div class="col-md-8">
                          <div class="mb-3">
                            <h6>Language</h6>
                            <p>Select Language of the website</p>
                          </div>
                        </div>
                        <div class="col-md-4">
                          <div class="mb-3">
                            <vue-select
                              :options="Engliseti"
                              id="engliseti"
                              placeholder="English"
                            />
                          </div>
                        </div>
                      </div>
                      <div class="row">
                        <div class="col-md-8">
                          <div class="mb-3">
                            <h6>Language Switcher</h6>
                            <p>To display in all the pages</p>
                          </div>
                        </div>
                        <div class="col-md-4">
                          <div class="mb-3">
                            <div class="status-toggle">
                              <input
                                type="checkbox"
                                id="prefer3"
                                class="check"
                                checked=""
                              />
                              <label for="prefer3" class="checktoggle"> </label>
                            </div>
                          </div>
                        </div>
                      </div>
                      <div class="row">
                        <div class="col-md-8">
                          <div class="mb-3">
                            <h6>Timezone</h6>
                            <p>Select date format to display in website</p>
                          </div>
                        </div>
                        <div class="col-md-4">
                          <div class="mb-3">
                            <vue-select
                              :options="TimeSel"
                              id="timesel"
                              placeholder="UTC 4:30"
                            />
                          </div>
                        </div>
                      </div>
                      <div class="row">
                        <div class="col-md-8">
                          <div class="mb-3">
                            <h6>Date Format</h6>
                            <p>Select Language of the website</p>
                          </div>
                        </div>
                        <div class="col-md-4">
                          <div class="mb-3">
                            <vue-select
                              :options="FormatSel"
                              id="formatsel"
                              placeholder="01 Jan 2023"
                            />
                          </div>
                        </div>
                      </div>
                      <div class="row">
                        <div class="col-md-8">
                          <div class="mb-3">
                            <h6>Time Format</h6>
                            <p>Select time format to display in website</p>
                          </div>
                        </div>
                        <div class="col-md-4">
                          <div class="mb-3">
                            <vue-select
                              :options="HourSel"
                              id="hoursel"
                              placeholder="English"
                            />
                          </div>
                        </div>
                      </div>
                      <div class="row">
                        <div class="col-md-8">
                          <div class="mb-3">
                            <h6>Financial Year</h6>
                            <p>Select year for finance</p>
                          </div>
                        </div>
                        <div class="col-md-4">
                          <div class="mb-3">
                            <vue-select
                              :options="YearSel"
                              id="yearsel"
                              placeholder="2023"
                            />
                          </div>
                        </div>
                      </div>
                      <div class="row">
                        <div class="col-md-8">
                          <div class="mb-3">
                            <h6>Starting Month</h6>
                            <p>Select starting month to display</p>
                          </div>
                        </div>
                        <div class="col-md-4">
                          <div class="mb-3">
                            <vue-select
                              :options="MothSel"
                              id="monthsel"
                              placeholder="January"
                            />
                          </div>
                        </div>
                      </div>
                    </div>
                    <div class="border-bottom mb-3 pb-3">
                      <h5 class="fw-semibold mb-1">Currency Settings</h5>
                      <p>Provide the currency information below</p>
                    </div>
                    <div class="border-bottom mb-3">
                      <div class="row">
                        <div class="col-md-8">
                          <div class="mb-3">
                            <h6>Currency</h6>
                            <p>Select currency</p>
                          </div>
                        </div>
                        <div class="col-md-4">
                          <div class="mb-3">
                            <vue-select
                              :options="CountrySel"
                              id="countrysel"
                              placeholder="United States Of America"
                            />
                          </div>
                        </div>
                      </div>
                      <div class="row">
                        <div class="col-md-8">
                          <div class="mb-3">
                            <h6>Currency Symbol</h6>
                            <p>Select currency symbol</p>
                          </div>
                        </div>
                        <div class="col-md-4">
                          <div class="mb-3">
                            <vue-select
                              :options="SymbolSel"
                              id="symnbolsel"
                              placholder="$"
                            />
                          </div>
                        </div>
                      </div>
                      <div class="row">
                        <div class="col-md-8">
                          <div class="mb-3">
                            <h6>Currency Position</h6>
                            <p>Select currency position</p>
                          </div>
                        </div>
                        <div class="col-md-4">
                          <div class="mb-3">
                            <vue-select
                              :options="AmountSel"
                              id="amountsel"
                              placeholder="$100"
                            />
                          </div>
                        </div>
                      </div>
                      <div class="row">
                        <div class="col-md-8">
                          <div class="mb-3">
                            <h6>Decimal Seperator</h6>
                            <p>Select decimal seperator</p>
                          </div>
                        </div>
                        <div class="col-md-4">
                          <div class="mb-3">
                            <vue-select :options="Sele" id="sele" placeholder="," />
                          </div>
                        </div>
                      </div>
                      <div class="row">
                        <div class="col-md-8">
                          <div class="mb-3">
                            <h6>Thousand Seperator</h6>
                            <p>Select thousand seperator</p>
                          </div>
                        </div>
                        <div class="col-md-4">
                          <div class="mb-3">
                            <vue-select :options="OpSel" id="opsel" placeholder="," />
                          </div>
                        </div>
                      </div>
                    </div>
                    <div class="border-bottom mb-3 pb-3">
                      <h5 class="fw-semibold mb-1">Country Settings</h5>
                      <p>Provide the country information below</p>
                    </div>
                    <div class="border-bottom mb-3">
                      <div class="row">
                        <div class="col-md-8">
                          <div class="mb-3">
                            <h6>Countries Restriction</h6>
                            <p>Select restricted countries</p>
                          </div>
                        </div>
                        <div class="col-md-4">
                          <div class="mb-3">
                            <vue-select
                              :options="AllCounSel"
                              id="allcounsel"
                              placeholder="Allow All Countries"
                            />
                          </div>
                        </div>
                      </div>
                    </div>
                    <div class="border-bottom mb-3 pb-3">
                      <h5 class="fw-semibold mb-1">File Settings</h5>
                      <p>Provide the files information below</p>
                    </div>
                    <div class="border-bottom mb-3 border-0 mb-0">
                      <div class="row">
                        <div class="col-md-8">
                          <div class="mb-3">
                            <h6>Allowed Files</h6>
                            <p>Select allowed files</p>
                          </div>
                        </div>
                        <div class="col-md-4">
                          <div class="mb-3">
                            <vue3-tags-input
                              class="input-tags form-control"
                              type="text"
                              data-role="tagsinput"
                              name="Label"
                              value="JPG, PNG, GIF"
                              :tags="tags"
                            />
                          </div>
                        </div>
                      </div>
                      <div class="row">
                        <div class="col-md-8">
                          <div class="mb-3">
                            <h6>Max File Size</h6>
                            <p>Select size of the files</p>
                          </div>
                        </div>
                        <div class="col-md-4">
                          <div class="mb-3">
                            <input type="text" class="form-control" value="5000MB" />
                          </div>
                        </div>
                      </div>
                    </div>
                    <div>
                      <a href="#" class="btn btn-light me-2">Cancel</a>
                      <button type="submit" class="btn btn-primary">Save Changes</button>
                    </div>
                  </form>
                </div>
              </div>
              <!-- /Prefixes -->
            </div>
          </div>
        </div>
      </div>
    </div>
  </div>
</template>
<script>
import Vue3TagsInput from "vue3-tags-input";
export default {
  components: {
    Vue3TagsInput,
  },
  data() {
    return {
      title: "Settings",
      AllCountSel: ["Allow All Countries", "Deny All COuntries"],
      OpSel: [",", "."],
      Sele: [",", ","],
      AmountSel: ["$100", "$400"],
      SymbolSel: ["$", "€"],
      Country: ["United States Of America", "India"],
      MothSel: ["January", "February", "March"],
      Engliseti: ["English", "Chinese", "Hindi"],
      TimeSel: ["UTC 4:30", "(UTC+11:00) INR"],
      FormatSel: ["01 Jan 2023", "01-Jan-2023"],
      HourSel: ["English", "12 Hours", "24 Hours"],
      YearSel: ["2023", "2024", "2022"],
      CountrySel: ["United States Of America", "India"],
      tags: ["JPG", "PNG", "GIF"],
      AllCounSel: ["Allow All Countries", "Deny All Countries"],
    };
  },
  methods: {
    submitForm() {
      this.$router.push("/website-settings/localization");
    },
  },
};
</script>
