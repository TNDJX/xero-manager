import XeroManager from './pages/XeroManager'

Nova.booting((app, store) => {
  Nova.inertia('XeroManager', XeroManager)
})
