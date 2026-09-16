# 🚀 DC-X - Device Capture Tool

**DC-X** is an advanced OSINT and device capture tool built for Termux. It captures a victim's **photo**, **IP address**, **device type**, **OS**, and **battery percentage**.

⚠️ **For educational and ethical testing purposes only.**

---

## ✨ Features

| Feature | Description |
|---------|-------------|
| 📸 **Camera Capture** | Captures photo from the victim's live camera |
| 🌐 **IP Address** | Logs the victim's public IP address |
| 📱 **Device Type** | Detects Android / iPhone / PC |
| 💻 **OS Detection** | Identifies the operating system |
| 🔋 **Battery Info** | Captures battery percentage and charging status |
| 🖥️ **Browser Info** | Detects Chrome / Firefox / Safari |

---

## 📦 Installation

### Requirements

- Termux (F-Droid version)
- PHP
- Cloudflared (for public link)

### Setup

```bash
# Update Termux
pkg update && pkg upgrade -y

# Install dependencies
pkg install php cloudflared git -y

# Clone the repository
git clone https://github.com/rehanabbasilegend-lgtm/DC-X.git
cd DC-X
