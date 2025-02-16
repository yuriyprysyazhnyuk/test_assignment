<template>
    <select :value="modelValue" @change="$emit('update:modelValue', $event.target.value)" :class="selectClass">
        <option value="" disabled selected>Select your role</option>
        <option v-for="option in options" :key="option.id" :value="option.id">{{ option.name }}</option>
    </select>
    <span class="text-danger" v-if="error">{{ error }}</span>
</template>

<script setup>
defineProps({
    modelValue: String,
    error: String,
    selectClass: {
        type: String,
        default: "form-select",
    },
    options: Object,
})

</script>
