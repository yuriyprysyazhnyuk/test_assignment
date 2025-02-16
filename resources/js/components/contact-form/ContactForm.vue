<template>
    <div class="row justify-content-center align-items-center h-100">
        <div class="col-md-6 w-25">
            <div class="card">
                <div class="card-header text-center my-2">
                    <h4>Contact Form</h4>
                </div>
                <div v-if="!isSubmitted" class="card-body">
                    <form @submit.prevent="submitForm">
                        <div class="mb-3">
                            <FormTextInput
                                v-model="formData.firstName"
                                placeholder="First Name"
                                :id="formData.firstName"
                                :error="errors.firstName"
                            />
                        </div>
                        <div class="mb-3">
                            <FormTextInput
                                v-model="formData.lastName"
                                placeholder="Last Name"
                                :id="formData.lastName"
                                :error="errors.lastName"
                            />
                        </div>
                        <div class="mb-3">
                            <FormTextInput
                                v-model="formData.phone"
                                placeholder="Phone"
                                :id="formData.phone"
                                :error="errors.phone"
                            />
                        </div>
                        <div class="mb-3">
                            <FormTextInput
                                v-model="formData.email"
                                placeholder="Email"
                                :id="formData.email"
                                :error="errors.email"
                            />
                        </div>
                        <div class="mb-3">
                            <FormTextInput
                                v-model="formData.company"
                                placeholder="Company"
                                :id="formData.company"
                                :error="errors.company"
                            />
                        </div>
                        <div class="mb-3">
                            <FormSelect
                                v-model="formData.selectedRole"
                                :error="errors.selectedRole"
                                :options="roles"
                            />
                        </div>
                        <div class="mb-3">
                            <FormTextarea
                                v-model="formData.message"
                                :error="errors.message"
                                placeholder="Message..."
                            />
                        </div>
                        <div class="mb-3">
                            <FormCheckbox
                                :id="formData.consent"
                                v-model="formData.consent"
                                :error="errors.consent"
                                label="By submitting this form, I consent contacting me via phone to arrange a platform walkthrough and agree to receive marketing communications via email and SMS. I understand I can unsubscribe from these communications at any time. For more information on how my data is used and stored, I can refer to the Privacy Policy. I confirm that I am over the age of 18, as required."
                                label-class="text-center"
                            />
                        </div>
                        <div class="justify-content-center d-flex">
                            <button type="submit" class="btn-submit rounded-5 py-2 px-4 border-0"
                                    v-if="!isLoading"
                                    :disabled='!submitIsEnabled'>SUBMIT
                            </button>
                            <Spinner v-if="isLoading"></Spinner>
                        </div>

                    </form>

                </div>
                <div v-else class="card-body text-center">
                    <h5>Thank you for sending a message!</h5>
                </div>
            </div>
        </div>
    </div>
</template>

<script setup>
import FormTextInput from '/resources/js/components/inputs/FormTextInput.vue'
import FormSelect from '/resources/js/components/inputs/FormSelect.vue'
import FormCheckbox from '/resources/js/components/inputs/FormCheckbox.vue'
import FormTextarea from '/resources/js/components/inputs/FormTextarea.vue'
import Spinner from '/resources/js/components/spinners/Spinner.vue'
import {getContactFormRoles, sendContactForm} from '/resources/js/services/api.js';
import {onMounted, ref, watch} from 'vue'

const formData = ref({
    firstName: '',
    lastName: '',
    phone: '',
    email: '',
    company: '',
    selectedRole: '',
    consent: false,
    message: '',
})
const roles = ref([]);
const errors = ref({});
const submitIsEnabled = ref(false)
const isLoading = ref(false)
const isSubmitted = ref(false)

onMounted(() => {
    getContactFormRoles().then(
        response => roles.value = response.data.data
    )
})

watch(
    formData,
    (newFormData) => {
        submitIsEnabled.value = newFormData.consent && newFormData.message.length >= 10
        errors.value = {}
    },
    {deep: true}
)

function submitForm() {
    errors.value = {}

    if (!formData.value.consent) {
        errors.value.consent = 'Please, give your consent'
        return;
    }

    if (formData.value.message.length < 10) {
        errors.value.message = 'Message should be more than 10 characters'
        return;
    }
    console.log(formData.value);

    submitIsEnabled.value = false
    isLoading.value = true

    sendContactForm(formData.value).then(response => {
            console.log(response);
            isSubmitted.value = true;
        }
    )

}
</script>

<style scoped>
.btn-submit {
    background: #820012;
    color: white
}

.btn-submit:disabled {
    background: gray;
    color: black
}
</style>
