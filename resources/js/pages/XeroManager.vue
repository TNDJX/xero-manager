<template>
  <div>
    <Head title="Xero Manager" />

    <Heading class="mb-6">Xero Manager</Heading>

    <Card
      class="p-8"
    >
      <div v-if="error">
        <Heading>Your connection to Xero failed <Badge label="failed" extraClasses="bg-red-500 text-white" /></Heading>

        <LoadingButton class="mt-2" @click="reconnect">Reconnect to Xero</LoadingButton>
      </div>

      <div v-else-if="connected">
        <Heading>{{ organisationName }} via {{ username }} <Badge label="Connected" extraClasses="bg-green-500 text-white" /></Heading>

        <LoadingButton class="mt-2" @click="reconnect">Reconnect to Xero</LoadingButton>
      </div>

      <div v-else>
        <Heading>You are not connected to Xero </Heading>

        <LoadingButton class="mt-2" @click="reconnect">Connect to Xero</LoadingButton>
      </div>
    </Card>
  </div>
</template>

<script>
export default {
  props: [
    'connected',
    'error',
    'organisationName',
    'username',
    'xeroAuthUrl'
  ],
  methods: {
    reconnect() {
      window.location.href = this.xeroAuthUrl
    }
  }
}
</script>
