<?php
$page_title = "Desktop Application Graphics Requirements";
$page_description = "Complete checklist of graphics needed for launching desktop applications on Windows, macOS, and Linux.";
include '../includes/header.php';
?>

<div class="page-header">
    <div class="container">
        <h1>Desktop Application Graphics</h1>
        <p>Windows, macOS, and Linux graphics requirements</p>
    </div>
</div>

<main class="page-content">
    <div class="container">
        <div class="progress-container" style="background: #f7fafc; border-radius: 8px; padding: 1rem; margin-bottom: 2rem;">
            <div class="progress-text" style="text-align: center; margin-bottom: 0.5rem; font-weight: 600;">0 of 0 items completed (0%)</div>
            <div style="background: #e2e8f0; height: 8px; border-radius: 4px; overflow: hidden;">
                <div class="progress-bar" style="background: linear-gradient(135deg, #667eea 0%, #764ba2 100%); height: 100%; width: 0%; transition: width 0.3s ease;"></div>
            </div>
        </div>

        <section class="checklist">
            <h3>🖥️ Windows Application Graphics</h3>
            
            <div class="checklist-item">
                <input type="checkbox" id="windows-icon">
                <div class="checklist-item-content">
                    <h4><label for="windows-icon">Windows Application Icon</label></h4>
                    <p><strong>Sizes:</strong> 16x16, 32x32, 48x48, 256x256 pixels<br>
                    <strong>Format:</strong> ICO file with multiple sizes<br>
                    <strong>Purpose:</strong> Taskbar, desktop shortcuts, file explorer</p>
                </div>
            </div>

            <div class="checklist-item">
                <input type="checkbox" id="windows-installer">
                <div class="checklist-item-content">
                    <h4><label for="windows-installer">Installer Graphics</label></h4>
                    <p><strong>Include:</strong> Setup wizard banners, welcome screens<br>
                    <strong>Size:</strong> 493x312 pixels for wizard banners<br>
                    <strong>Purpose:</strong> Professional installation experience</p>
                </div>
            </div>
        </section>

        <section class="checklist">
            <h3>🍎 macOS Application Graphics</h3>
            
            <div class="checklist-item">
                <input type="checkbox" id="macos-icon">
                <div class="checklist-item-content">
                    <h4><label for="macos-icon">macOS Application Icon</label></h4>
                    <p><strong>Sizes:</strong> 1024x1024 pixels master, multiple generated sizes<br>
                    <strong>Format:</strong> ICNS file<br>
                    <strong>Purpose:</strong> Dock, Launchpad, Applications folder</p>
                </div>
            </div>

            <div class="checklist-item">
                <input type="checkbox" id="dmg-background">
                <div class="checklist-item-content">
                    <h4><label for="dmg-background">DMG Background Image</label></h4>
                    <p><strong>Size:</strong> 540x380 pixels<br>
                    <strong>Purpose:</strong> Disk image installer background<br>
                    <strong>Content:</strong> Installation instructions, branding</p>
                </div>
            </div>
        </section>

        <div style="margin: 3rem 0; text-align: center;">
            <p style="background: #e6fffa; padding: 2rem; border-radius: 8px; color: #285e61;">
                <strong>📝 Content Coming Soon!</strong><br>
                This guide is being developed with comprehensive desktop app graphics requirements. 
                Check back soon for the complete checklist covering Windows, macOS, and Linux platforms.
            </p>
            <a href="../" class="cta-button">← Back to All Guides</a>
        </div>
    </div>
</main>

<?php include '../includes/footer.php'; ?>