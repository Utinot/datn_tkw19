<template>
  <div class="_dashboard_content_body py-3 px-3">
    <VeeForm
      as="div"
      v-slot="{ handleSubmit }"
      @invalid-submit="onInvalidSubmit"
    >
      <form
        class="row"
        @submit="handleSubmit($event, onSubmit)"
        ref="formData"
        method="POST"
      >
        <Field type="hidden" :value="csrfToken" name="_token" />
        <div class="col-xl-3 col-lg-3 col-md-3 col-sm-12" id="img-preview2">
          <div class="col-sm-6">
            <div class="display-div_custom">
              <div
                class="img-display_author d-flex"
                id="img-preview"
                @click="chooseImage()"
                role="button"
              >
                <img
                  v-if="data.user === null"
                  src="https://i.pinimg.com/236x/15/46/2e/15462ed447e25356837b32a7e22e538f.jpg"
                  alt=""
                />
                <div style="display: none">
                  <input
                    type="file"
                    @change="onChange"
                    ref="fileInput"
                    accept="image/*"
                    name="images"
                  />
                </div>
                <img
                  v-if="!filePreview && data.user.images"
                  :src="data.user.images"
                  class="img"
                />
                <div
                  class="img-display_author d-flex"
                  id="img-preview"
                  @click="chooseImage()"
                  role="button"
                >
                  <div style="display: none">
                    <input
                      type="file"
                      @change="onChange"
                      ref="fileInput"
                      accept="image/*"
                      name="images"
                    />
                  </div>
                  <img v-if="filePreview" :src="filePreview" class="img" />
                </div>
              </div>
            </div>
          </div>
          <ErrorMessage class="error" name="images" />
        </div>

        <div class="col-xl-9 col-lg-9 col-md-9 col-sm-12">
          <div class="row">
            <div class="col-xl-6 col-lg-6">
              <div class="form-group">
                <label class="text-dark ft-medium">Name</label>
                <Field
                  type="text"
                  class="form-control rounded"
                  name="name"
                  rules="required|max:255"
                  v-model="model.name"
                />
                <ErrorMessage class="error" name="name" />
              </div>
            </div>
            <div class="col-xl-6 col-lg-6">
              <div class="form-group">
                <label class="text-dark ft-medium">Email</label>
                <Field
                  type="email"
                  class="form-control rounded"
                  v-model="model.email"
                  rules="required|email|max:255"
                  name="email"
                />
                <ErrorMessage class="error" name="email" />
              </div>
            </div>
            <div class="col-xl-6 col-lg-6">
              <div class="form-group">
                <label class="text-dark ft-medium">Số điện thoại</label>
                <Field
                  type="text"
                  class="form-control rounded"
                  v-model="model.phone"
                  name="phone"
                  rules="required|telephone"
                />
              </div>
              <ErrorMessage class="error" name="phone" />
            </div>
            <div class="col-xl-6 col-lg-6">
              <div class="form-group">
                <label class="text-dark ft-medium">Địa chỉ</label>
                <Field
                  type="text"
                  v-model="model.address"
                  class="form-control rounded"
                  name="address"
                  rules="required|max:255"
                />
              </div>
              <ErrorMessage class="error" name="address" />
            </div>
            <div class="col-xl-6 col-lg-6">
              <div class="form-group">
                <label class="text-dark ft-medium">Kinh Nghiệm</label>
                <Field
                  name="experience_id"
                  as="select"
                  v-model="model.experience_id"
                  rules="required"
                  class="form-control"
                >
                  <option value disabled selected>Chọn Kinh Nghiệm</option>
                  <option
                    v-for="item in data.experience"
                    :key="item.id"
                    :value="item.id"
                  >
                    {{ item.label }}
                  </option>
                </Field>
                <ErrorMessage class="error" name="experience_id" />
              </div>
            </div>
            <div class="col-xl-6 col-lg-6">
              <div class="form-group">
                <label class="text-dark ft-medium">Trình Độ</label>
                <Field
                  name="lever_id"
                  as="select"
                  v-model="model.lever_id"
                  rules="required"
                  class="form-control"
                >
                  <option value disabled selected>Chọn Trình Độ</option>
                  <option
                    v-for="item in data.lever"
                    :key="item.id"
                    :value="item.id"
                  >
                    {{ item.label }}
                  </option>
                </Field>
                <ErrorMessage class="error" name="lever_id" />
              </div>
            </div>
            <div class="col-xl-6 col-lg-6">
              <div class="form-group">
                <label class="text-dark ft-medium">Mức lương Mong Muốn</label>
                <Field
                  name="wage_id"
                  as="select"
                  v-model="model.wage_id"
                  rules="required"
                  class="form-control"
                >
                  <option value disabled selected>Chọn Mức Lương</option>
                  <option
                    v-for="item in data.wage"
                    :key="item.id"
                    :value="item.id"
                  >
                    {{ item.label }}
                  </option>
                </Field>
                <ErrorMessage class="error" name="wage_id" />
              </div>
            </div>
            <div class="col-xl-6 col-lg-6">
              <div class="form-group">
                <label class="text-dark ft-medium">Ngành Nghề</label>
                <Field
                  name="profession_id"
                  as="select"
                  v-model="model.profession_id"
                  rules="required"
                  class="form-control"
                >
                  <option value disabled selected>Chọn Ngành Nghề</option>
                  <option
                    v-for="item in data.profession"
                    :key="item.id"
                    :value="item.id"
                  >
                    {{ item.label }}
                  </option>
                </Field>
                <ErrorMessage class="error" name="profession_id" />
              </div>
            </div>
            <div class="col-xl-6 col-lg-6">
              <div class="form-group">
                <label class="text-dark ft-medium">Thời Gian Làm Việc</label>
                <Field
                  name="time_work_id"
                  as="select"
                  v-model="model.time_work_id"
                  rules="required"
                  class="form-control"
                >
                  <option value disabled selected>Chọn Thời Gian</option>
                  <option
                    v-for="item in data.timework"
                    :key="item.id"
                    :value="item.id"
                  >
                    {{ item.label }}
                  </option>
                </Field>
                <ErrorMessage class="error" name="time_work_id" />
              </div>
            </div>
            <div class="col-xl-6 col-lg-6">
              <div class="form-group">
                <label class="text-dark ft-medium">Kỹ năng</label>
                <Multiselect
                  v-model="value"
                  mode="tags"
                  :searchable="true"
                  :options="options"
                  label="label"
                  track-by="label"
                  :infinite="true"
                  :object="true"
                />
                <ErrorMessage class="error" name="skill_id" />
              </div>
            </div>

            <div class="col-xl-12 col-lg-12">
              <div class="form-group">
                <button
                  type="submit"
                  class="btn btn-md ft-medium text-light rounded theme-bg"
                >
                  Cập nhật
                </button>
              </div>
            </div>
          </div>
        </div>
      </form>
    </VeeForm>
  </div>
</template>
<script>
import {
  Form as VeeForm,
  Field,
  ErrorMessage,
  defineRule,
  configure
} from 'vee-validate'
import Multiselect from '@vueform/multiselect'
import { localize } from '@vee-validate/i18n'
import * as rules from '@vee-validate/rules'
import $ from 'jquery'
export default {
  setup() {
    Object.keys(rules).forEach((rule) => {
      if (rule != 'default') {
        defineRule(rule, rules[rule])
      }
    })
  },
  components: {
    VeeForm,
    Field,
    ErrorMessage,
    Multiselect
  },
  props: ['data'],
  data: function () {
    return {
      csrfToken: Laravel.csrfToken,
      model: this.data.user ?? '',
      filePreview: '',
      loading: false,
      value: [],
      options: []
    }
  },

  created() {
    console.log(this.data.getskill.getskill)
    this.data.getskill.getskill.map((e) => {
      this.value.push({
        value: e.id,
        label: e.name
      })
    })
    this.data.skill.map((e) => {
      this.options.push({
        value: e.id,
        label: e.label
      })
    })
    let messError = {
      en: {
        fields: {
          images: {
            required: 'Ảnh không được để trống'
          },
          name: {
            required: 'Tên không được để trống',
            max: 'Tên không được vượt quá 255 ký tự'
          },
          email: {
            required: 'Email không được để trống',
            max: 'Email không được vượt quá 255 ký tự',
            email: 'Email không đúng định dạng'
          },
          phone: {
            required: 'Số điện thoại không được để trống',
            telephone: 'Số điện thoại không đúng định dạng'
          },
          address: {
            required: 'Địa chỉ không được để trống',
            max: 'Địa chỉ không được vượt quá 255 ký tự'
          },
          experience_id: {
            required: 'Kinh nghiệm không được bỏ trống'
          },
          lever_id: {
            required: 'Trình độ không được bỏ trống'
          },
          wage_id: {
            required: 'Mức lương không được bỏ trống'
          },
          profession_id: {
            required: 'Ngành nghề không được bỏ trống'
          },
          time_work_id: {
            required: 'Thời gian không được bỏ trống'
          },
          skill_id: {
            required: 'Kỹ năng không được bỏ trống'
          }
        }
      }
    }
    configure({
      generateMessage: localize(messError)
    })
  },
  methods: {
    onInvalidSubmit({ values, errors, results }) {
      let firstInputError = Object.entries(errors)[0][0]
      this.$el.querySelector('input[name=' + firstInputError + ']').focus()
      $('html, body').animate(
        {
          scrollTop: $('input[name=' + firstInputError + ']').offset().top - 150
        },
        500
      )
    },
    onSubmit() {
      console.log(this.model)
    },
    chooseImage() {
      this.$refs['fileInput'].click()
    },
    onChange(e) {
      this.model.images = e.target.files[0]
      let fileInput = this.$refs.fileInput
      let imgFile = fileInput.files

      if (imgFile && imgFile[0]) {
        let reader = new FileReader()
        reader.onload = (e) => {
          this.filePreview = e.target.result
        }
        reader.readAsDataURL(imgFile[0])
      }
    }
  }
}
</script>
<style>
.error {
  color: rgb(255, 80, 80);
  margin-left: 5px;
  margin-top: 5px;
}
.display-div_custom {
  border: solid 1px;
  border-radius: 4px;
  height: 170px;
  width: 200px;
}
.img-display_author {
  height: 168px;
  max-width: 200px;
}
.img {
  max-width: 135px;
  margin-left: 30px;
  margin-top: 15px;
  margin-bottom: 15px;
}
</style>
<style src="@vueform/multiselect/themes/default.css"></style>