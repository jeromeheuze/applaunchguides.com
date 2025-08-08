<?php
$page_title = "Video Game Graphics Requirements";
$page_description = "Complete checklist of graphics needed for launching video games including store assets, achievements, marketing materials, and platform-specific requirements.";
include '../includes/header.php';
?>

<div class="page-header">
    <div class="container">
        <h1>Video Game Graphics Requirements</h1>
        <p>Complete graphics checklist for game launches across all platforms</p>
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
            <h3>🎮 Steam Store Requirements</h3>
            
            <div class="checklist-item">
                <input type="checkbox" id="steam-header-capsule">
                <div class="checklist-item-content">
                    <h4><label for="steam-header-capsule">Header Capsule</label></h4>
                    <p><strong>Size:</strong> 460x215 pixels<br>
                    <strong>Format:</strong> PNG or JPG<br>
                    <strong>Purpose:</strong> Main game image on Steam store page</p>
                </div>
            </div>

            <div class="checklist-item">
                <input type="checkbox" id="steam-small-capsule">
                <div class="checklist-item-content">
                    <h4><label for="steam-small-capsule">Small Capsule</label></h4>
                    <p><strong>Size:</strong> 231x87 pixels<br>
                    <strong>Format:</strong> PNG or JPG<br>
                    <strong>Purpose:</strong> Search results and lists</p>
                </div>
            </div>

            <div class="checklist-item">
                <input type="checkbox" id="steam-main-capsule">
                <div class="checklist-item-content">
                    <h4><label for="steam-main-capsule">Main Capsule</label></h4>
                    <p><strong>Size:</strong> 616x353 pixels<br>
                    <strong>Format:</strong> PNG or JPG<br>
                    <strong>Purpose:</strong> Featured game displays</p>
                </div>
            </div>

            <div class="checklist-item">
                <input type="checkbox" id="steam-screenshots">
                <div class="checklist-item-content">
                    <h4><label for="steam-screenshots">Steam Screenshots</label></h4>
                    <p><strong>Size:</strong> 1920x1080 pixels (16:9 recommended)<br>
                    <strong>Format:</strong> PNG or JPG<br>
                    <strong>Quantity:</strong> 5-10 screenshots minimum<br>
                    <strong>Purpose:</strong> Showcase gameplay and features</p>
                </div>
            </div>

            <div class="checklist-item">
                <input type="checkbox" id="steam-library-assets">
                <div class="checklist-item-content">
                    <h4><label for="steam-library-assets">Steam Library Assets</label></h4>
                    <p><strong>Library Hero:</strong> 3840x1240 pixels<br>
                    <strong>Library Logo:</strong> 1280x720 pixels<br>
                    <strong>Purpose:</strong> Enhanced Steam library appearance</p>
                </div>
            </div>
        </section>

        <section class="checklist">
            <h3>🏆 Achievement Graphics</h3>
            
            <div class="checklist-item">
                <input type="checkbox" id="steam-achievements">
                <div class="checklist-item-content">
                    <h4><label for="steam-achievements">Steam Achievement Icons</label></h4>
                    <p><strong>Size:</strong> 64x64 pixels<br>
                    <strong>Format:</strong> PNG with transparency<br>
                    <strong>Variants:</strong> Locked and unlocked states<br>
                    <strong>Style:</strong> Consistent design across all achievements</p>
                </div>
            </div>

            <div class="checklist-item">
                <input type="checkbox" id="console-achievements">
                <div class="checklist-item-content">
                    <h4><label for="console-achievements">Console Achievement/Trophy Icons</label></h4>
                    <p><strong>PlayStation:</strong> 320x320 pixels<br>
                    <strong>Xbox:</strong> 512x512 pixels<br>
                    <strong>Format:</strong> PNG<br>
                    <strong>Requirements:</strong> Platform-specific guidelines</p>
                </div>
            </div>
        </section>

        <section class="checklist">
            <h3>🎯 Console Platform Assets</h3>
            
            <div class="checklist-item">
                <input type="checkbox" id="playstation-assets">
                <div class="checklist-item-content">
                    <h4><label for="playstation-assets">PlayStation Store Assets</label></h4>
                    <p><strong>Game Icon:</strong> 512x512 pixels<br>
                    <strong>Screenshots:</strong> 1920x1080 pixels<br>
                    <strong>Key Art:</strong> 1920x1080 pixels<br>
                    <strong>Background:</strong> 1920x1080 pixels for PS5</p>
                </div>
            </div>

            <div class="checklist-item">
                <input type="checkbox" id="xbox-assets">
                <div class="checklist-item-content">
                    <h4><label for="xbox-assets">Xbox Store Assets</label></h4>
                    <p><strong>Store Logo:</strong> 2400x1080 pixels<br>
                    <strong>Icon:</strong> 1080x1080 pixels<br>
                    <strong>Screenshots:</strong> 1920x1080 pixels<br>
                    <strong>Hero Art:</strong> 1920x1080 pixels</p>
                </div>
            </div>

            <div class="checklist-item">
                <input type="checkbox" id="nintendo-assets">
                <div class="checklist-item-content">
                    <h4><label for="nintendo-assets">Nintendo eShop Assets</label></h4>
                    <p><strong>Icon:</strong> 512x512 pixels<br>
                    <strong>Screenshots:</strong> 1280x720 pixels<br>
                    <strong>Logo:</strong> Various sizes required<br>
                    <strong>Banner:</strong> 1280x720 pixels</p>
                </div>
            </div>
        </section>

        <section class="checklist">
            <h3>📱 Mobile Gaming Platforms</h3>
            
            <div class="checklist-item">
                <input type="checkbox" id="mobile-game-icon">
                <div class="checklist-item-content">
                    <h4><label for="mobile-game-icon">Mobile Game Icons</label></h4>
                    <p><strong>iOS:</strong> 1024x1024 pixels<br>
                    <strong>Android:</strong> 512x512 pixels<br>
                    <strong>Design:</strong> Eye-catching, readable at small sizes</p>
                </div>
            </div>

            <div class="checklist-item">
                <input type="checkbox" id="mobile-screenshots">
                <div class="checklist-item-content">
                    <h4><label for="mobile-screenshots">Mobile Game Screenshots</label></h4>
                    <p><strong>iOS:</strong> Device-specific dimensions<br>
                    <strong>Android:</strong> Various aspect ratios<br>
                    <strong>Content:</strong> Show core gameplay mechanics</p>
                </div>
            </div>
        </section>

        <section class="checklist">
            <h3>🌐 Web/Browser Games</h3>
            
            <div class="checklist-item">
                <input type="checkbox" id="web-game-icon">
                <div class="checklist-item-content">
                    <h4><label for="web-game-icon">Web Game Icon</label></h4>
                    <p><strong>Size:</strong> 512x512 pixels<br>
                    <strong>Format:</strong> PNG with transparency<br>
                    <strong>Purpose:</strong> Itch.io, Kongregate, and other web platforms</p>
                </div>
            </div>

            <div class="checklist-item">
                <input type="checkbox" id="web-banner">
                <div class="checklist-item-content">
                    <h4><label for="web-banner">Web Game Banner</label></h4>
                    <p><strong>Size:</strong> 630x500 pixels (Itch.io standard)<br>
                    <strong>Content:</strong> Game title, key visuals, genre indication</p>
                </div>
            </div>
        </section>

        <section class="checklist">
            <h3>🎨 In-Game Interface Graphics</h3>
            
            <div class="checklist-item">
                <input type="checkbox" id="ui-elements">
                <div class="checklist-item-content">
                    <h4><label for="ui-elements">UI Elements Package</label></h4>
                    <p><strong>Include:</strong> Buttons, menus, health bars, inventory slots<br>
                    <strong>Style:</strong> Consistent with game art direction<br>
                    <strong>Format:</strong> High-res source files for scaling</p>
                </div>
            </div>

            <div class="checklist-item">
                <input type="checkbox" id="loading-screens">
                <div class="checklist-item-content">
                    <h4><label for="loading-screens">Loading Screen Graphics</label></h4>
                    <p><strong>Content:</strong> Tips, lore, artwork showcase<br>
                    <strong>Design:</strong> Matches game aesthetic<br>
                    <strong>Interactive:</strong> Progress bars, animated elements</p>
                </div>
            </div>

            <div class="checklist-item">
                <input type="checkbox" id="menu-backgrounds">
                <div class="checklist-item-content">
                    <h4><label for="menu-backgrounds">Menu Backgrounds</label></h4>
                    <p><strong>Resolution:</strong> Support 4K displays (3840x2160)<br>
                    <strong>Variants:</strong> Main menu, settings, pause screens<br>
                    <strong>Animation:</strong> Subtle motion for engagement</p>
                </div>
            </div>
        </section>

        <section class="checklist">
            <h3>📢 Marketing & Press Materials</h3>
            
            <div class="checklist-item">
                <input type="checkbox" id="press-kit-game">
                <div class="checklist-item-content">
                    <h4><label for="press-kit-game">Game Press Kit</label></h4>
                    <p><strong>Include:</strong> Logo variations, character art, environment shots<br>
                    <strong>Formats:</strong> High-res PNG, vector logos<br>
                    <strong>Purpose:</strong> Media coverage, reviews, partnerships</p>
                </div>
            </div>

            <div class="checklist-item">
                <input type="checkbox" id="key-art">
                <div class="checklist-item-content">
                    <h4><label for="key-art">Key Art / Cover Art</label></h4>
                    <p><strong>Variants:</strong> Horizontal, vertical, square formats<br>
                    <strong>Use:</strong> Box art, promotional materials, social media<br>
                    <strong>Quality:</strong> Print-ready resolution</p>
                </div>
            </div>

            <div class="checklist-item">
                <input type="checkbox" id="social-assets-game">
                <div class="checklist-item-content">
                    <h4><label for="social-assets-game">Social Media Assets</label></h4>
                    <p><strong>Twitter:</strong> 1200x675 pixels<br>
                    <strong>Instagram:</strong> 1080x1080 pixels<br>
                    <strong>TikTok:</strong> 1080x1920 pixels<br>
                    <strong>Content:</strong> GIFs, screenshots, character art</p>
                </div>
            </div>

            <div class="checklist-item">
                <input type="checkbox" id="trailer-thumbnails">
                <div class="checklist-item-content">
                    <h4><label for="trailer-thumbnails">Video Thumbnails</label></h4>
                    <p><strong>YouTube:</strong> 1280x720 pixels<br>
                    <strong>Steam:</strong> 1920x1080 pixels<br>
                    <strong>Design:</strong> Eye-catching, represents game content</p>
                </div>
            </div>
        </section>

        <section class="checklist">
            <h3>🏮 Platform-Specific Guidelines</h3>
            
            <div class="warning-box">
                <h4>Steam Guidelines</h4>
                <p>Avoid text overlays on capsule images. Steam auto-generates text for different languages. Focus on visual impact over text information.</p>
            </div>

            <div class="warning-box">
                <h4>Console Certification</h4>
                <p>Each console manufacturer has strict asset requirements for certification. Missing or incorrect assets can delay your launch significantly.</p>
            </div>

            <div class="warning-box">
                <h4>Mobile App Stores</h4>
                <p>Mobile game icons must be instantly recognizable and compelling at very small sizes. Test visibility in crowded app store environments.</p>
            </div>
        </section>

        <section class="checklist">
            <h3>💡 Game-Specific Pro Tips</h3>
            
            <div class="tip-box">
                <h4>Screenshot Strategy</h4>
                <p>Show progression: start with simple early gameplay, then showcase advanced features and endgame content. Tell a visual story of player growth.</p>
            </div>

            <div class="tip-box">
                <h4>Achievement Design</h4>
                <p>Create achievements that encourage exploration of all game features. Icons should be immediately recognizable and relate to the achievement goal.</p>
            </div>

            <div class="tip-box">
                <h4>Localization Ready</h4>
                <p>Design graphics that work across cultures. Avoid text in images and be mindful of cultural symbols and color meanings in global markets.</p>
            </div>
        </section>

        <h2>Platform Requirements Comparison</h2>
        <table class="specs-table">
            <thead>
                <tr>
                    <th>Platform</th>
                    <th>Main Icon Size</th>
                    <th>Screenshot Resolution</th>
                    <th>Special Requirements</th>
                </tr>
            </thead>
            <tbody>
                <tr>
                    <td>Steam</td>
                    <td>460x215 (Header)</td>
                    <td>1920x1080</td>
                    <td>Multiple capsule sizes</td>
                </tr>
                <tr>
                    <td>PlayStation</td>
                    <td>512x512</td>
                    <td>1920x1080</td>
                    <td>Trophy icons required</td>
                </tr>
                <tr>
                    <td>Xbox</td>
                    <td>1080x1080</td>
                    <td>1920x1080</td>
                    <td>Store logo format</td>
                </tr>
                <tr>
                    <td>Nintendo Switch</td>
                    <td>512x512</td>
                    <td>1280x720</td>
                    <td>Banner artwork</td>
                </tr>
                <tr>
                    <td>iOS/Android</td>
                    <td>1024x1024 / 512x512</td>
                    <td>Device specific</td>
                    <td>App store optimization</td>
                </tr>
            </tbody>
        </table>

        <div style="margin: 3rem 0; text-align: center;">
            <a href="../" class="cta-button">← Back to All Guides</a>
        </div>

    </div>
</main>

<?php include '../includes/footer.php'; ?>