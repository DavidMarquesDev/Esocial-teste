<template>
    <div>
        <h3 class="text-center">Nova Mensagem</h3>
        <validation-errors
            :errors="validationErrors"
            v-if="validationErrors"
        ></validation-errors>
        <div class="form-row">
            <div class="form-group col-md-6">
                <label for="inputName">Nome</label>
                <input
                    type="text"
                    class="form-control"
                    id="inputText"
                    v-model="message.name"
                />
            </div>
            <div class="form-group col-md-6">
                <label for="inputEmail">Email</label>
                <input
                    type="email"
                    class="form-control"
                    id="inputEmail"
                    v-model="message.email"
                />
            </div>
        </div>
        <div class="form-row">
            <div class="form-group col-md-4">
                <label for="inputPhone">Telefone</label>
                <the-mask
                    :mask="['(##) ####-####', '(##) #####-####']"
                    class="form-control"
                    id="inputPhone"
                    v-model="message.phone"
                />
            </div>
            <div class="form-group col-md-4">
                <label for="inputAttachment">Anexo</label>
                <input
                    type="file"
                    class="form-control-file"
                    id="inputAttachment"
                    @change="selectFile"
                />
            </div>
        </div>
        <div class="form-row">
            <div class="form-group col-md-12">
                <label for="inputMessage">Mensagem</label>
                <textarea
                    class="form-control"
                    v-model="message.message"
                ></textarea>
            </div>
        </div>
        <button type="submit" class="btn btn-primary" @click="createMessage">
            Adicionar
        </button>
    </div>
</template>

<script>
import ValidationErrors from "../ValidationErrors";
import { TheMask } from "vue-the-mask";

export default {
    components: {
        ValidationErrors,
        TheMask,
    },
    data() {
        return {
            file: null,
            message: {},
            validationErrors: null,
        };
    },
    methods: {
        selectFile(event) {
            this.file = event.target.files[0];
        },
        async createMessage() {
            const data = new FormData();
            data.append("file", this.file);
            data.append("data", JSON.stringify(this.message));

            try {
                const res = await this.axios.post(
                    "http://127.0.0.1:8000/api/message/create",
                    data
                );
                this.$router.push({ name: "home" });
            } catch (error) {
                if (error.response.status === 422) {
                    this.validationErrors = error.response.data.errors;
                }
            }
        },
    },
};
</script>
