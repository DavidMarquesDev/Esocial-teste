<template>
    <div class="container">
        <div class="text-center" style="margin: 20px 0px 20px 0px">
            <span class="text-secondary">Listagem de Contatos</span>
        </div>

        <nav class="navbar navbar-expand-lg navbar-light bg-light">
            <div class="collapse navbar-collapse">
                <div class="navbar-nav">
                    <router-link to="/" class="nav-item nav-link"
                        >Listagem</router-link
                    >
                    <router-link to="/create" class="nav-item nav-link"
                        >Nova Mensagem</router-link
                    >
                </div>
            </div>
        </nav>
        <br />
        <router-view></router-view>
    </div>
</template>

<script>
export default {};
</script>
